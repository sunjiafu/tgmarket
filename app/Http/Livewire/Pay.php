<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Filament\Forms;
use App\Models\Payway;
use App\Service\Usdtpay;
use App\Service\Btcpay;
use App\Models\Paylist;
use Illuminate\Support\Str;
use BTCPayServer\Util\PreciseNumber;


class Pay extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;
    //初始化充值金额
    public $money = 20;
    //获取用户选择支付方式
    public $payway = 1;
    //引入比特币支付方式
    private Btcpay $Btcpay;
    //引入Usdt支付方式
    private Usdtpay $Usdtpay;

    protected function getFormSchema(): array
    {
        return [

            Forms\Components\Card::make()
                ->schema(
                    [

                        Forms\Components\Select::make('money')

                            ->label('请选择要充值的金额')
                            ->options([

                                10 => '10$',
                                20 => '20$',
                                50 => '50$',
                                100 => '100$',

                            ])
                            ->required(),

                        Forms\Components\Radio::make('payway')
                            ->label('选择支付方式')
                            ->options(Payway::all()->pluck(value: 'name', key: 'id')->toArray())
                            ->inline()
                            ->reactive()
                            ->required(),

                    ]
                )

        ];
    }

    /* 
   加载支付方式 */
    public function hydrate()
    {

        $this->Btcpay = app('App\Service\Btcpay');
        $this->Usdtpay = app('App\Service\Usdtpay');
    }


    public function pay()
    {

        //构造订单信息

        $orderId = Str::random(16);
        $buyerEail = auth()->user()->email;
        $amount  = PreciseNumber::parseString($this->money);

           //临时保存充值信息
       Paylist::create([
        'orderid'=>$orderId,
        'userid'=>auth()->user()->id,
        'amount'=>$amount,
        'payway' =>$this->payway,

       ]);

        //进入支付流程

        if ($this->payway == 1) {


            $bitcoinpay = $this->Btcpay->CreateInvoice($amount, $orderId, $buyerEail);

            return redirect()->to($bitcoinpay['checkoutLink']);
        } elseif ($this->payway == 2) {

            $amount = (float)$this->money;

            $usdt = $this->Usdtpay->CreateInvoice($amount, $orderId);


            return redirect()->to($usdt['data']['payment_url']);
        }

     

    }
    public function render()
    {
        return view('livewire.pay');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Filament\Forms;
use App\Models\Category;
use App\Models\Payway;
use App\Service\Btcpay;
use Illuminate\Support\Str;
use BTCPayServer\Util\PreciseNumber;


class Pay extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;
    //初始化充值金额
    public $money = 20;
    //获取用户选择支付方式
    public $payway;
    //引入比特币支付方式
    private Btcpay $Btcpay;

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
                            ->hintIcon('heroicon-s-cog')
                            ->required(),

                        Forms\Components\Radio::make('payway')
                            ->label('选择支付方式')
                            ->options(Payway::all()->pluck(value: 'name', key: 'id')->toArray())
                            ->inline()
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
        // $this->Usdtpay = app('App\PaymentGetway\Usdtpay');
    }


    public function pay()
    {

        //构造订单信息

        $orderId = Str::random(16);
        $buyerEail = auth()->user()->email;
        $amount  = PreciseNumber::parseString($this->money);

       //进入支付流程

        if ($this->payway == 1) {


            $bitcoinpay = $this->Btcpay->CreateInvoice($amount, $orderId, $buyerEail);

            return redirect()->to($bitcoinpay['checkoutLink']);
        }
    }
    public function render()
    {
        return view('livewire.pay');
    }
}

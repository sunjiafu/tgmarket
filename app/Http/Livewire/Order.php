<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Filament\Forms;
use Illuminate\Contracts\View\View;
use App\Models\Service;
use Filament\Forms\Components\Card;
use Illuminate\Support\HtmlString;
use App\Service\Api;
use Filament\Notifications\Notification;

class Order extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    /**接入Smm Api*/
    private Api $Api;
    /**获取分类名称*/
    public $categoryId = 3;
    /**获取服务名称*/
    public $serviceId;
    /**获取提交数量*/
    public $shuliang;
    /**获取订单价格*/
    public $price;
    /**获取服务链接*/
    public $tglink;





    protected function getFormSchema(): array
    {
        return [

            Card::make()

                ->schema([

                    Forms\Components\Select::make('categoryId')
                        ->label("请选择类别")
                        ->options(Category::all()->pluck(value: 'name', key: 'id')->toArray())
                        // ->extraAttributes(['class' => 'bg-gray-50 '])
                        ->required()
                        ->reactive()
                        ->afterStateUpdated(fn (callable $set) => $set('serviceId', null)),

                    Forms\Components\Select::make('serviceId')
                        ->label("选择服务")
                        ->placeholder('请选择类别')
                        ->options(function (callable $get) {

                            $service = Category::find($get('categoryId'));

                            if (!$service) {

                                return Service::all()->pluck('name', 'id');
                            }

                            return $service->service->pluck(value: 'name', key: 'id');
                        })
                        ->required()
                        ->reactive(),


                    Forms\Components\Placeholder::make('详细描述')
                        ->content(function (callable $get) {

                            $delaite = Service::find($get('serviceId'));

                            if (!$delaite) {

                                return null;
                            }


                            return new HtmlString($delaite->details);
                        }),

                    Forms\Components\TextInput::make('tglink')
                        ->label('群组/频道链接')
                        ->helperText('请输入群组或频道链接如https:://t.me/telegram')
                        ->required(),

                    Forms\Components\TextInput::make('shuliang')
                        ->label('数量')
                        ->helperText('这里可以放限制数量')
                        ->numeric()
                        ->minValue(500)
                        ->maxValue(1000)
                        ->required()

                        ->reactive()
                        ->afterStateUpdated(function ($set, $get, $state) {
                            $rate = Service::find($get('serviceId'));
                            $set('price', $state * $rate->rate / 1000);
                        }),

                    Forms\Components\TextInput::make('price')
                        ->label('价格')
                        ->disabled()
                        ->placeholder($this->shuliang),



                ])

        ];
    }
    public function hydrate()
    {
        $this->Api = app('App\Service\Api');
    }

    public function Getorder()
    {

        //检测用户余额

        $user = request()->user();

        if ($user->balanceFloat < $this->price) {

            return Notification::make()->title('您的余额不足')->warning()->send();
        }

        //发送订单内容

        $order = $this->Api;

        $service_id = Service::find($this->serviceId)->only('serviceid', 'name');

        //正式环境启用

        //$addorder = json_decode($order->order(array('service' => $service_id['serviceid'], 'link' => $this->tglink, 'quantity' => $this->shuliang)));



        //减款

        $user->withdrawfloat($this->price);

        //订单存入数据库

        $user->order()->create([

            'service' => $service_id['name'],
             'serviceid'=>363749,    //测试环境
            //'serviceid' => $addorder->order,   //正式环境启用
            'price' => $this->price,
            'quantity' => $this->shuliang,
            'url' => $this->tglink,
            'status' => 'Processing'


        ]);

        //跳转至订单界面
        Notification::make()->title('提交成功')->success()->send();

        return redirect()->to('orderlist');
    }


    public function render(): View
    {
        return view('livewire.order');
    }
}

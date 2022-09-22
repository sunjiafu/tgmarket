<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Orderlist;
use Illuminate\Database\Eloquent\Builder;
use App\Jobs\OrderListPush;

class OrderTable extends DataTableComponent
{
    

    public function builder(): Builder
{

    $userid = auth()->user()->id;
    return Orderlist::query()
        ->where('user_id',$userid); // Eager load anything
   
}

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("订单号", "serviceid")
                ->sortable(),
            Column::make("创建日期", "created_at")
                ->sortable(),
            Column::make("服务名称", "service")
                ->sortable(),
                Column::make("费用", "price")
                ->sortable(),
                Column::make("数量", "quantity")
                ->sortable(),
                Column::make("关联链接", "url")
                ->sortable(),
                Column::make("订单状态", "status")
                ->sortable(),
        ];
    }

    public function hydrate(): void
    {
        $order = auth()->user()->Order;
      
        OrderListPush::dispatch($order );
    }
}

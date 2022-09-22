<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Orderlist;
use Illuminate\Database\Eloquent\Builder;
use App\Jobs\OrderListPush;
use Rappasoft\LaravelLivewireTables\Views\Filters\TextFilter;

class OrderTable extends DataTableComponent
{


    public function builder(): Builder
    {
        
        $userid = auth()->user()->id;    
        return Orderlist::query()
            ->where('user_id', $userid)
            ->orderByraw('created_at DESC');
             // Eager load anything

    }

    public function configure(): void
    {
        $this->setFiltersStatus(false); //禁用过滤器
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


    public function filters(): array
    {
        return[

            TextFilter::make('serviceid')
            ->config([
                'placeholder' => 'Search orderid',
                'maxlength' => '25',
            ])
            ->filter(function(Builder $builder, string $value) {
                $builder->where('serviceid', 'like', '%'.$value.'%');
            }),
        ];
    }

    public function hydrate(): void
    {


        OrderListPush::dispatch(auth()->user()->Order);
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Orderlist;
use App\Service\Api;
use App\Jobs\OrderListPush;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;





class Myorder extends Component implements Tables\Contracts\HasTable
{

    use Tables\Concerns\InteractsWithTable;


 


    protected function getTableQuery(): Builder
    {


        $userid = auth()->user()->id;
        return Orderlist::query()->where('user_id', $userid);
    }


 


    protected function getTableColumns(): array
    {



        return [
            Tables\Columns\TextColumn::make('serviceid')
            ->searchable()
            ->sortable()
        
                ->label('订单id'),
            Tables\Columns\TextColumn::make('created_at')
                ->label('创建日期'),
            Tables\Columns\TextColumn::make('service')
            ->searchable()
                ->label('服务名称'),
            Tables\Columns\TextColumn::make('price')
               ->sortable('price')
                ->label('费用'),
            Tables\Columns\TextColumn::make('quantity')
                ->label('数量'),
            Tables\Columns\TextColumn::make('url')
                ->label('关联链接'),

            Tables\Columns\TextColumn::make('status')
            ->label('订单状态'),
      
        


        ];
    }

    // protected function isTablePaginationEnabled(): bool  //禁用分页功能
    // {
    //     return false;
    // } 


    protected function getTableEmptyStateHeading(): ?string
    {
        return '您还有订单';
    }

    public function render()
    {
       
        OrderListPush::dispatch(auth()->user()->Order);
   
    
        return view('livewire.orderlist');
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use App\Models\Service;
use Rappasoft\LaravelLivewireTables\Views\Filters\TextFilter;
use Filament\Tables\Columns\ViewColumn;

class Servicelist extends Component implements Tables\Contracts\HasTable
{


    use Tables\Concerns\InteractsWithTable;

    protected function getTableQuery(): Builder
    {



        return Service::query();
    }


    protected function getTableColumns(): array
    {



        return [
            Tables\Columns\TextColumn::make('serviceid')
            ->searchable()
                ->label('服务编号'),
            Tables\Columns\TextColumn::make('name')
            ->searchable()
                ->label('服务名称'),
            Tables\Columns\TextColumn::make('rate')
            ->sortable()
            ->sortable()
                ->label('每千人价格'),
            Tables\Columns\TextColumn::make('min')
            ->sortable()
            ->sortable()
                ->label('最小订购量'),
            Tables\Columns\TextColumn::make('max')
            ->sortable()
            ->sortable()
                ->label('最大订购量'),
                Tables\Columns\TextColumn::make('category.name')

                ->label('所属分类'),
             ViewColumn::make('详细说明')->view('components.buttonart')


        ];
    }

    protected function getTableFilters(): array
{
    return [
        SelectFilter::make('category')->relationship('category', 'name')->label('按类别筛选')
    ];
}


    public function render(){


        return view('livewire.servicelist', ['meta_keywords' => 'Tg增加会员,Telegram营销,telegram购买会员']);
    }
}

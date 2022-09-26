<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Service;
use Illuminate\Database\Eloquent\Builder;

class ServiceTable extends DataTableComponent
{
    protected $model = Service::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');

        $this->setQueryStringStatus(true);
        $this->setEagerLoadAllRelationsEnabled();
    }

    public function columns(): array
    {
        return [
            Column::make("服务编号", "serviceid")
            
                ->searchable(),

            Column::make("服务名称", "name")
                ->sortable()
                ->searchable(),

            Column::make("每千人价格", "rate")
                ->sortable(fn(Builder $query)=>$query->orderBy('rate'))
                ->searchable(),
            Column::make("最小订购数量", "min")
                ->sortable()
                ->searchable(),
            Column::make("最大订购数量", "max")
                ->sortable()
                ->searchable(),
            Column::make('details', 'details')
         
                ->view('components.buttonart'),


            // ->buttons([
            //     LinkColumn::make('View') // make() has no effect in this case but needs to be set anyway
            //         ->title(fn($row) => 'View ' . $row->name)



            //     ]),


        ];
    }
}

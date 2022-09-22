<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Service;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class ServiceTable extends DataTableComponent
{
    protected $model = Service::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');

        $this->setSearchLazy();
        $this->setSearchEnabled();
    }

    public function columns(): array
    {
        return [
            Column::make("服务编号", "serviceid")
            ->sortable(),
            Column::make("服务名称", "name")
            ->sortable(),
        
          
            Column::make("每千人价格", "rate")
                ->sortable(),
            Column::make("最小订购数量", "min")
                ->sortable(),
            Column::make("最大订购数量", "max")
                ->sortable(),
            Column::make('details','details')
                ->sortable()
                ->view('components.buttonart'),

              
            // ->buttons([
            //     LinkColumn::make('View') // make() has no effect in this case but needs to be set anyway
            //         ->title(fn($row) => 'View ' . $row->name)



            //     ]),


        ];
    }


}

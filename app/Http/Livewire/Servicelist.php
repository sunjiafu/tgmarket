<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;

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
            Tables\Columns\TextColumn::make('name')
                ->label('服务名称'),
                Tables\Columns\TextColumn::make('rate')
                ->label('每千人价格'),
                Tables\Columns\TextColumn::make('min')
                ->label('最低订购量'),
                Tables\Columns\TextColumn::make('category.name')
                ->label('服务名称'),
         


        ];
    }

    public function isTableSearchable(): bool
{
    return true;
}

    
    public function render()
    {
        return view('livewire.servicelist');
    }
}

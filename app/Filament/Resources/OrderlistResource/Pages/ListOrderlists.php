<?php

namespace App\Filament\Resources\OrderlistResource\Pages;

use App\Filament\Resources\OrderlistResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrderlists extends ListRecords
{
    protected static string $resource = OrderlistResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

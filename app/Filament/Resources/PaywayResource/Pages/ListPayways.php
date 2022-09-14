<?php

namespace App\Filament\Resources\PaywayResource\Pages;

use App\Filament\Resources\PaywayResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPayways extends ListRecords
{
    protected static string $resource = PaywayResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

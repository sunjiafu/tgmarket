<?php

namespace App\Filament\Resources\PaywayResource\Pages;

use App\Filament\Resources\PaywayResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPayway extends EditRecord
{
    protected static string $resource = PaywayResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

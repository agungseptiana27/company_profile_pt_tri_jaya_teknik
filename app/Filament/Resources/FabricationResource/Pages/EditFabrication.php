<?php

namespace App\Filament\Resources\FabricationResource\Pages;

use App\Filament\Resources\FabricationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFabrication extends EditRecord
{
    protected static string $resource = FabricationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

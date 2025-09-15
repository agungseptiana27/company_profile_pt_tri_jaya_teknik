<?php

namespace App\Filament\Resources\IsoResource\Pages;

use App\Filament\Resources\IsoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIso extends EditRecord
{
    protected static string $resource = IsoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\KontruksiResource\Pages;

use App\Filament\Resources\KontruksiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKontruksi extends EditRecord
{
    protected static string $resource = KontruksiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

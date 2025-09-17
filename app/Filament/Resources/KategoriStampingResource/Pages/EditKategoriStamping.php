<?php

namespace App\Filament\Resources\KategoriStampingResource\Pages;

use App\Filament\Resources\KategoriStampingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriStamping extends EditRecord
{
    protected static string $resource = KategoriStampingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

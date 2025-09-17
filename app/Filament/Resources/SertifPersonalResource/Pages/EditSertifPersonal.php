<?php

namespace App\Filament\Resources\SertifPersonalResource\Pages;

use App\Filament\Resources\SertifPersonalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSertifPersonal extends EditRecord
{
    protected static string $resource = SertifPersonalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\SPMResource\Pages;

use App\Filament\Resources\SPMResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSPM extends EditRecord
{
    protected static string $resource = SPMResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\MachiningResource\Pages;

use App\Filament\Resources\MachiningResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMachining extends EditRecord
{
    protected static string $resource = MachiningResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

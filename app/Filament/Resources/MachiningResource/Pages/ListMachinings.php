<?php

namespace App\Filament\Resources\MachiningResource\Pages;

use App\Filament\Resources\MachiningResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMachinings extends ListRecords
{
    protected static string $resource = MachiningResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

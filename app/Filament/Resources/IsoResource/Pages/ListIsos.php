<?php

namespace App\Filament\Resources\IsoResource\Pages;

use App\Filament\Resources\IsoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIsos extends ListRecords
{
    protected static string $resource = IsoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

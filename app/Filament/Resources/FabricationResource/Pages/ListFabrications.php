<?php

namespace App\Filament\Resources\FabricationResource\Pages;

use App\Filament\Resources\FabricationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFabrications extends ListRecords
{
    protected static string $resource = FabricationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

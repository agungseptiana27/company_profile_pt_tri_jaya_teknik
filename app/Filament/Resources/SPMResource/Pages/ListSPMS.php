<?php

namespace App\Filament\Resources\SPMResource\Pages;

use App\Filament\Resources\SPMResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSPMS extends ListRecords
{
    protected static string $resource = SPMResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\StampingResource\Pages;

use App\Filament\Resources\StampingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStampings extends ListRecords
{
    protected static string $resource = StampingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

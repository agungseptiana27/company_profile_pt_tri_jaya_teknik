<?php

namespace App\Filament\Resources\KontruksiResource\Pages;

use App\Filament\Resources\KontruksiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKontruksis extends ListRecords
{
    protected static string $resource = KontruksiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

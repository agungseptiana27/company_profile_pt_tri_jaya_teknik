<?php

namespace App\Filament\Resources\KategoriStampingResource\Pages;

use App\Filament\Resources\KategoriStampingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriStampings extends ListRecords
{
    protected static string $resource = KategoriStampingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

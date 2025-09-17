<?php

namespace App\Filament\Resources\SertifPersonalResource\Pages;

use App\Filament\Resources\SertifPersonalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSertifPersonals extends ListRecords
{
    protected static string $resource = SertifPersonalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

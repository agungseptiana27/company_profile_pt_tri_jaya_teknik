<?php

namespace App\Filament\Resources\JigResource\Pages;

use App\Filament\Resources\JigResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJigs extends ListRecords
{
    protected static string $resource = JigResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

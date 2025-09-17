<?php

namespace App\Filament\Resources\StampingResource\Pages;

use App\Filament\Resources\StampingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStamping extends EditRecord
{
    protected static string $resource = StampingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

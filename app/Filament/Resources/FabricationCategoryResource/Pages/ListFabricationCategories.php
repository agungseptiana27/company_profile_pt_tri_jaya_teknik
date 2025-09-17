<?php

namespace App\Filament\Resources\FabricationCategoryResource\Pages;

use App\Filament\Resources\FabricationCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFabricationCategories extends ListRecords
{
    protected static string $resource = FabricationCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

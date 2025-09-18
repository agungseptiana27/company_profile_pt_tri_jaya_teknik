<?php

namespace App\Filament\Widgets;

use App\Models\SertifPersonal;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class SertifPersonalListWidget extends BaseWidget
{
    protected static ?int $sort = 2;
    protected static ?string $heading = 'Sertifikasi Personal';

    protected int|string|array $columnSpan = '1/2'; // biar bisa diset sejajar dengan chart

    protected function getTableQuery(): Builder
    {
        return SertifPersonal::query()->latest()->limit(5);
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\ImageColumn::make('image')
                ->label('Licence')
                ->size(40),

            Tables\Columns\TextColumn::make('nama_pekerja')
                ->label('Nama')
                ->weight('bold')
                ->searchable(),

            Tables\Columns\TextColumn::make('jabatan')
                ->label('Jabatan')
                ->color('gray'),
        ];
    }
}
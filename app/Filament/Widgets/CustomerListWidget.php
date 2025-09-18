<?php

namespace App\Filament\Widgets;

use App\Models\Customer;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class CustomerListWidget extends BaseWidget
{
    protected static ?int $sort = 3;
    protected static ?string $heading = '🏢 Daftar Perusahaan';
    protected int|string|array $columnSpan = 'full'; // biar tabel lebar penuh

    // Query ambil data
    protected function getTableQuery(): Builder
    {
        return Customer::query()->latest();
    }

    // Kolom tabel
    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\ImageColumn::make('logo')
                ->label('Logo')
                ->circular()
                ->height(40)
                ->extraAttributes(['class' => 'shadow-md bg-white p-1 rounded-full']),

            Tables\Columns\TextColumn::make('company_name')
                ->label('Nama Perusahaan')
                ->searchable()
                ->sortable()
                ->weight('bold')
                ->color('primary')
                ->icon('heroicon-o-building-office') // ikon gedung
                ->iconPosition('before'),

            Tables\Columns\TextColumn::make('created_at')
                ->label('Bergabung')
                ->date('d M Y')
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true) // bisa di-hide kalau nggak perlu
                ->color('success'),
        ];
    }
}
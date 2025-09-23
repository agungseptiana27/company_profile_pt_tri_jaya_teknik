<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KategoriStampingResource\Pages;
use App\Filament\Resources\KategoriStampingResource\RelationManagers;
use App\Models\KategoriStamping;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KategoriStampingResource extends Resource
{
    protected static ?string $model = KategoriStamping::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';
    
    protected static ?string $navigationBadgeTooltip = 'Kategori Stamping';

    protected static ?string $navigationGroup = 'Produk';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('kategori Stamping')
                    ->maxLength(255)
                    ->unique(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKategoriStampings::route('/'),
            'create' => Pages\CreateKategoriStamping::route('/create'),
            'edit' => Pages\EditKategoriStamping::route('/{record}/edit'),
        ];
    }
}
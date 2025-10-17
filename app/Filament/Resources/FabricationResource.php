<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FabricationResource\Pages;
use App\Filament\Resources\FabricationResource\RelationManagers;
use App\Models\Fabrication;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FabricationResource extends Resource
{
    protected static ?string $model = Fabrication::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';

    protected static ?string $navigationLabel = 'Fabrication';

    protected static ?string $navigationGroup = 'Produk';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('fabrication_category_id')
                    ->relationship('category', 'name'),

                Forms\Components\TextInput::make('title')
                    ->maxLength(255),
                Forms\Components\TextInput::make('material')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('type')
                    ->label('Tipe')
                    ->default(null),
                Forms\Components\TextInput::make('process')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('capacity')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\FileUpload::make('image')
                    ->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('fabrication_category_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('material')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('process')
                    ->searchable(),
                Tables\Columns\TextColumn::make('capacity')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListFabrications::route('/'),
            'create' => Pages\CreateFabrication::route('/create'),
            'edit' => Pages\EditFabrication::route('/{record}/edit'),
        ];
    }
}
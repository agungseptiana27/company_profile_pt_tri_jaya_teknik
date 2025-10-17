<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CivilResource\Pages;
use App\Filament\Resources\CivilResource\RelationManagers;
use App\Models\Civil;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CivilResource extends Resource
{
    protected static ?string $model = Civil::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';

    protected static ?string $navigationLabel = 'Civil';

    protected static ?string $navigationGroup = 'Produk';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->image(),
                Forms\Components\TextInput::make('project')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('project')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d M Y H:i')
                    ->timezone('Asia/Jakarta')
                    ->sortable()
                    ->label('Dibuat pada')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime('d M Y H:i')
                    ->timezone('Asia/Jakarta')
                    ->sortable()
                    ->label('Diperbarui pada')
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
            'index' => Pages\ListCivils::route('/'),
            'create' => Pages\CreateCivil::route('/create'),
            'edit' => Pages\EditCivil::route('/{record}/edit'),
        ];
    }
}
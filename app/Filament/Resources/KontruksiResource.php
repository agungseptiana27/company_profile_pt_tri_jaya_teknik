<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KontruksiResource\Pages;
use App\Filament\Resources\KontruksiResource\RelationManagers;
use App\Models\Kontruksi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KontruksiResource extends Resource
{
    protected static ?string $model = Kontruksi::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Sertifikat';
    protected static ?string $pluralLabel = 'Sertifikat';
    protected static ?string $modelLabel = 'Sertifikat';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->maxLength(255)
                    ->label('Judul Sertifikasi'),
                Forms\Components\FileUpload::make('image')
                    ->label('Gambar Sertifikat')
                    ->image()
                    ->directory('certificates')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Sertifikat')
                    ->square(),

                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->limit(30),
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
            'index' => Pages\ListKontruksis::route('/'),
            'create' => Pages\CreateKontruksi::route('/create'),
            'edit' => Pages\EditKontruksi::route('/{record}/edit'),
        ];
    }
}

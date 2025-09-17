<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SertifPersonalResource\Pages;
use App\Filament\Resources\SertifPersonalResource\RelationManagers;
use App\Models\SertifPersonal;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SertifPersonalResource extends Resource
{
    protected static ?string $model = SertifPersonal::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $pluralLabel = 'Sertifikat';
    protected static ?string $modelLabel = 'Sertifikat';
    
    protected static ?string $navigationLabel = 'Sertifikat Keahlian';
    protected static ?string $navigationGroup = 'Profil';
    protected static ?int $navigationSort = 2;
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_pekerja')
                ->required()
                ->label('Nama Pekerja'),
                TextInput::make('jabatan')
                    ->required()
                    ->label('Jabatan'),
                FileUpload::make('image')
                    ->image()
                    ->label('Licence')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                ImageColumn::make('image')->label('Foto'),
                TextColumn::make('nama_pekerja')->sortable()->searchable(),
                TextColumn::make('jabatan')->sortable()->searchable(),
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
            'index' => Pages\ListSertifPersonals::route('/'),
            'create' => Pages\CreateSertifPersonal::route('/create'),
            'edit' => Pages\EditSertifPersonal::route('/{record}/edit'),
        ];
    }
}
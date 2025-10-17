<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KarirResource\Pages;
use App\Filament\Resources\KarirResource\RelationManagers;
use App\Models\Karir;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KarirResource extends Resource
{
    protected static ?string $model = Karir::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationLabel = 'karir';
    protected static ?string $navigationGroup = 'Karir';
    protected static ?int $navigationSort = 6;
    

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\TextInput::make('education')->required(),

                Forms\Components\Repeater::make('requirements')
                    ->schema([
                        Forms\Components\TextInput::make('item')
                            ->label('Syarat')
                            ->required(),
                    ])
                    ->label('Persyaratan')
                    ->columns(1)
                    ->collapsible()
                    ->addActionLabel('Tambah Syarat'),

                Forms\Components\Repeater::make('descriptions')
                    ->schema([
                        Forms\Components\TextInput::make('item')
                            ->label('Deskripsi')
                            ->required(),
                    ])
                    ->label('Deskripsi Pekerjaan')
                    ->columns(1)
                    ->collapsible()
                    ->addActionLabel('Tambah Deskripsi'),

                Forms\Components\TextInput::make('email')->default('pt.tjtk@yahoo.com'),
                Forms\Components\TextInput::make('subject'),
                Forms\Components\DatePicker::make('start_date'),
                Forms\Components\DatePicker::make('end_date'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('education')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('subject')
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('start_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('requirements')
                    ->label('Persyaratan')
                    ->formatStateUsing(fn ($state) => is_array($state) ? implode(', ', array_column($state, 'item')) : '-')
                    ->toggleable()
                    ->limit(50),
                Tables\Columns\TextColumn::make('descriptions')
                    ->label('Deskripsi')
                    ->formatStateUsing(fn ($state) => is_array($state) ? implode(', ', array_column($state, 'item')) : '-')
                    ->toggleable()
                    ->limit(50),

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
            'index' => Pages\ListKarirs::route('/'),
            'create' => Pages\CreateKarir::route('/create'),
            'edit' => Pages\EditKarir::route('/{record}/edit'),
        ];
    }
}
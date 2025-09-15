<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyProfileResource\Pages;
use App\Filament\Resources\CompanyProfileResource\RelationManagers;
use App\Models\CompanyProfile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompanyProfileResource extends Resource
{
    protected static ?string $model = CompanyProfile::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    protected static ?string $navigationLabel = 'Profil Perusahaan';
    protected static ?string $pluralLabel = 'Profil Perusahaan';
    protected static ?string $modelLabel = 'Profil Perusahaan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('history')
            ->label('Sejarah')
            ->rows(8)
            ->required(),

        Forms\Components\TextInput::make('director_name')
            ->label('Nama Direktur'),

        Forms\Components\TextInput::make('director_position')
            ->label('Jabatan Direktur'),

        Forms\Components\FileUpload::make('director_photo')
            ->label('Foto Direktur')
            ->image()
            ->directory('directors'),

        Forms\Components\Repeater::make('vision')
            ->label('Visi')
            ->schema([
                Forms\Components\TextInput::make('text')->label('Poin Visi'),
            ])
            ->collapsible()
            ->default([]),

        Forms\Components\Repeater::make('mission')
            ->label('Misi')
            ->schema([
                Forms\Components\TextInput::make('text')->label('Poin Misi'),
            ])
            ->collapsible()
            ->default([]),

        Forms\Components\Repeater::make('policy')
            ->label('Kebijakan Mutu')
            ->schema([
                Forms\Components\TextInput::make('text')->label('Poin Kebijakan'),
            ])
            ->collapsible()
            ->default([]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('director_name')
                    ->label('Direktur'),

                Tables\Columns\TextColumn::make('vision')
                    ->label('Visi (Pertama)')
                    ->getStateUsing(fn ($record) => $record->vision[0]['text'] ?? '-')
                    ->limit(30),

                Tables\Columns\TextColumn::make('mission')
                    ->label('Jumlah Misi')
                    ->getStateUsing(fn ($record) => $record->mission[0]['text'] ?? '-')
                    ->limit(30),

                Tables\Columns\TextColumn::make('policy')
                    ->label('Jumlah Kebijakan')
                    ->getStateUsing(fn ($record) => $record->policy[0]['text'] ?? '-')
                    ->limit(30),
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
            'index' => Pages\ListCompanyProfiles::route('/'),
            'create' => Pages\CreateCompanyProfile::route('/create'),
            'edit' => Pages\EditCompanyProfile::route('/{record}/edit'),
        ];
    }
}

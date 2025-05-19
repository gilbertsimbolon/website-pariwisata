<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Kebudayaan;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Tables\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KebudayaanResource\Pages;
use App\Filament\Resources\KebudayaanResource\RelationManagers;

class KebudayaanResource extends Resource
{
    protected static ?string $model = Kebudayaan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Kebudayaan';
    protected static ?string $title = 'Kebudayaan Bujang';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
                TextInput::make('nama_budaya')->label('Nama Budaya'),
                TextInput::make('keterangan')->label('Keterangan')
                    ->maxValue(255),
                FileUpload::make('gambar')
                    ->label('Gambar')
                    ->directory('kebudayaan')
                    ->image()
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_budaya')->label('Nama Budaya'),
                TextColumn::make('keterangan')->label('Keterangan'),
                TextColumn::make('gambar')->label('Gambar')->url(fn($record) => asset('storage/kebudayaan' . $record->gambar))
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListKebudayaans::route('/'),
            'create' => Pages\CreateKebudayaan::route('/create'),
            'edit' => Pages\EditKebudayaan::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\DestinasiPopuler;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DestinasiPopulerResource\Pages;
use App\Filament\Resources\DestinasiPopulerResource\RelationManagers;
use Filament\Forms\Components\FileUpload;

class DestinasiPopulerResource extends Resource
{
    protected static ?string $model = DestinasiPopuler::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';
    protected static string $view = 'filament.pages.destinasi-populer';
    protected static ?string $navigationLabel = 'Destinasi Populer';
    protected static ?string $title = 'Destinasi Populer';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_tempat')->label('Nama Tempat'),
                TextInput::make('lokasi')->label('Lokasi'),
                FileUpload::make('gambar')
                    ->label('Gambar')
                    ->directory('destinasi_populers')
                    ->image()
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_tempat')->label('Nama Tempat'),
                TextColumn::make('lokasi')->label('Lokasi'),
                TextColumn::make('gambar')->label('Gambar')->url(fn($record) => asset('storage/destinasi_populers' . $record->gambar))
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
            'index' => Pages\ListDestinasiPopulers::route('/'),
            'create' => Pages\CreateDestinasiPopuler::route('/create'),
            'edit' => Pages\EditDestinasiPopuler::route('/{record}/edit'),
        ];
    }
}

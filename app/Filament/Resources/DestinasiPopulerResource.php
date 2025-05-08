<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DestinasiPopulerResource\Pages;
use App\Filament\Resources\DestinasiPopulerResource\RelationManagers;
use App\Models\DestinasiPopuler;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DestinasiPopulerResource extends Resource
{
    protected static ?string $model = DestinasiPopuler::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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

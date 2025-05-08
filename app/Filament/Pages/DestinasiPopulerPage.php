<?php

namespace App\Filament\Pages;

use Filament\Tables;
use Filament\Pages\Page;
use App\Models\DestinasiPopuler;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;

class DestinasiPopulerPage extends Page implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected static ?string $navigationIcon = 'heroicon-o-map';
    protected static string $view = 'filament.pages.destinasi-populer';
    protected static ?string $title = 'Destinasi Populer';

    protected function getTableQuery(): Builder
    {
        return DestinasiPopuler::query();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('nama')->label('Nama Destinasi'),
            TextColumn::make('lokasi'),
            TextColumn::make('kategori'),
        ];
    }
}

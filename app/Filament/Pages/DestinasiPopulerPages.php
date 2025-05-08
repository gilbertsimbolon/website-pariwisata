<?php

namespace App\Filament\Pages;

use Closure;
use Filament\Tables;
use Filament\Pages\Page;
use App\Models\DestinasiPopuler;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\ButtonAction;
use Illuminate\Database\Eloquent\Builder;

class DestinasiPopulerPages extends Page implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected static ?string $navigationIcon = 'heroicon-o-map';
    protected static string $view = 'filament.pages.destinasi-populer';
    protected static ?string $title = 'Destinasi Populer';

    protected function getTableQuery(): Builder
    {
        return DestinasiPopuler::query();
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('nama_tempat')->label('Nama Tempat'),
            TextInput::make('lokasi')->label('Lokasi'),
            TextInput::make('gambar')->label('Gambar'),
        ];
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('nama_tempat')->label('Nama Tempat'),
            TextColumn::make('lokasi')->label('Lokasi'),
            TextColumn::make('gambar')->label('Gambar'),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Action::make('create')
                ->label('Tambah Destinasi')
                ->icon('heroicon-o-plus')
                // ->url(route('filament.pages.destinasi-populer.create')), // Arahkan ke halaman create
        ];
    }
}

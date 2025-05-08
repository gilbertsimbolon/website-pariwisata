<?php

namespace App\Filament\Resources\DestinasiPopulerResource\Pages;

use App\Filament\Resources\DestinasiPopulerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDestinasiPopuler extends EditRecord
{
    protected static string $resource = DestinasiPopulerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

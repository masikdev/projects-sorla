<?php

namespace App\Filament\Resources\GambarResource\Pages;

use App\Filament\Resources\GambarResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGambar extends EditRecord
{
    protected static string $resource = GambarResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

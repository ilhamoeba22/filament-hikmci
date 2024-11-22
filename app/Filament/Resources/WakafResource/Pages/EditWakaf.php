<?php

namespace App\Filament\Resources\WakafResource\Pages;

use App\Filament\Resources\WakafResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWakaf extends EditRecord
{
    protected static string $resource = WakafResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

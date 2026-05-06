<?php

namespace App\Filament\Resources\LaporanTahunanResource\Pages;

use App\Filament\Resources\LaporanTahunanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporanTahunan extends EditRecord
{
    protected static string $resource = LaporanTahunanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

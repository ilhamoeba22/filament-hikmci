<?php

namespace App\Filament\Resources\LaporanKeuanganBerkelanjutanResource\Pages;

use App\Filament\Resources\LaporanKeuanganBerkelanjutanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporanKeuanganBerkelanjutan extends EditRecord
{
    protected static string $resource = LaporanKeuanganBerkelanjutanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\LaporanPublikasiResource\Pages;

use App\Filament\Resources\LaporanPublikasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporanPublikasi extends EditRecord
{
    protected static string $resource = LaporanPublikasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

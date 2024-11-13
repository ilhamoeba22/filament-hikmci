<?php

namespace App\Filament\Resources\LaporanTataKelolaResource\Pages;

use App\Filament\Resources\LaporanTataKelolaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporanTataKelola extends EditRecord
{
    protected static string $resource = LaporanTataKelolaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

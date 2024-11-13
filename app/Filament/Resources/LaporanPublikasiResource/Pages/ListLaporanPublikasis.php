<?php

namespace App\Filament\Resources\LaporanPublikasiResource\Pages;

use App\Filament\Resources\LaporanPublikasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaporanPublikasis extends ListRecords
{
    protected static string $resource = LaporanPublikasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

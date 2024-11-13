<?php

namespace App\Filament\Resources\LaporanKeuanganBerkelanjutanResource\Pages;

use App\Filament\Resources\LaporanKeuanganBerkelanjutanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaporanKeuanganBerkelanjutans extends ListRecords
{
    protected static string $resource = LaporanKeuanganBerkelanjutanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

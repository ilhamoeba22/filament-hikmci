<?php

namespace App\Filament\Resources\LaporanTahunanResource\Pages;

use App\Filament\Resources\LaporanTahunanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaporanTahunans extends ListRecords
{
    protected static string $resource = LaporanTahunanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

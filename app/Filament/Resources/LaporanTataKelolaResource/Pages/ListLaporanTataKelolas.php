<?php

namespace App\Filament\Resources\LaporanTataKelolaResource\Pages;

use App\Filament\Resources\LaporanTataKelolaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaporanTataKelolas extends ListRecords
{
    protected static string $resource = LaporanTataKelolaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

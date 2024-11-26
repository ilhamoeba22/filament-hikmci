<?php

namespace App\Filament\Resources\RateDepositoResource\Pages;

use App\Filament\Resources\RateDepositoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRateDeposito extends EditRecord
{
    protected static string $resource = RateDepositoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

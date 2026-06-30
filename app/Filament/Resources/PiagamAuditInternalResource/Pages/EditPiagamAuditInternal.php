<?php

namespace App\Filament\Resources\PiagamAuditInternalResource\Pages;

use App\Filament\Resources\PiagamAuditInternalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPiagamAuditInternal extends EditRecord
{
    protected static string $resource = PiagamAuditInternalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

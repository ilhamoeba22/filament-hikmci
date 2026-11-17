<?php

namespace App\Filament\Resources\AiChatLogResource\Pages;

use App\Filament\Resources\AiChatLogResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAiChatLog extends ViewRecord
{
    protected static string $resource = AiChatLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

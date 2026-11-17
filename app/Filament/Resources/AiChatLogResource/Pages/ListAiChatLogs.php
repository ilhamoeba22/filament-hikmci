<?php

namespace App\Filament\Resources\AiChatLogResource\Pages;

use App\Filament\Resources\AiChatLogResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAiChatLogs extends ListRecords
{
    protected static string $resource = AiChatLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

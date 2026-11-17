<?php

namespace App\Filament\Resources\AiChatLogResource\Pages;

use App\Filament\Resources\AiChatLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAiChatLog extends EditRecord
{
    protected static string $resource = AiChatLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KarirResource\Pages;
use App\Models\Karir;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;

class KarirResource extends Resource
{
    protected static ?string $model = Karir::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->required()
                    ->maxLength(255),
                Textarea::make('deskripsi')
                    ->required(),
                FileUpload::make('gambar')
                    ->image()
                    ->disk('public')
                    ->directory('karir/images')
                    ->preserveFilenames()
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')->sortable()->searchable(),
                TextColumn::make('deskripsi')->sortable()->searchable(),
                ImageColumn::make('gambar')->label('Gambar')->sortable()->searchable(),
                TextColumn::make('created_at')->label('Tanggal Dibuat')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKarirs::route('/'),
            'create' => Pages\CreateKarir::route('/create'),
            'edit' => Pages\EditKarir::route('/{record}/edit'),
        ];
    }
}

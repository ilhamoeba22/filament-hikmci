<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaporanKeuanganBerkelanjutanResource\Pages;
use App\Models\LaporanKeuanganBerkelanjutan;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;

class LaporanKeuanganBerkelanjutanResource extends Resource
{
    protected static ?string $model = LaporanKeuanganBerkelanjutan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('file')
                    ->label('Unggah Dokumen (PDF)')
                    ->acceptedFileTypes(['application/pdf'])
                    ->required(),
                TextInput::make('tahun')
                    ->required()
                    ->maxLength(4),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')->sortable()->searchable(),
                TextColumn::make('file')->label('File Path')->sortable()->searchable(),
                TextColumn::make('tahun')->sortable()->searchable(),
                TextColumn::make('created_at')->label('Tanggal Unggah')->sortable()->searchable(),
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
            'index' => Pages\ListLaporanKeuanganBerkelanjutans::route('/'),
            'create' => Pages\CreateLaporanKeuanganBerkelanjutan::route('/create'),
            'edit' => Pages\EditLaporanKeuanganBerkelanjutan::route('/{record}/edit'),
        ];
    }
}

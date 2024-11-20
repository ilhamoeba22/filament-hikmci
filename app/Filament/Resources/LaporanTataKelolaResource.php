<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Models\LaporanTataKelola;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\LaporanTataKelolaResource\Pages;
use App\Filament\Resources\LaporanTataKelolaResource\Pages\EditLaporanTataKelola;
use App\Filament\Resources\LaporanTataKelolaResource\Pages\ListLaporanTataKelolas;
use App\Filament\Resources\LaporanTataKelolaResource\Pages\CreateLaporanTataKelola;

class LaporanTataKelolaResource extends Resource
{
    protected static ?string $model = LaporanTataKelola::class;

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
                    ->disk('public')
                    ->directory('laporan/tata_kelola')
                    ->acceptedFileTypes(['application/pdf'])
                    ->preserveFilenames()
                    ->required(),
                Select::make('tahun')
                    ->label('Tahun')
                    ->options(array_combine(range(date('Y'), 2014), range(date('Y'), 2014)))
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')->sortable()->searchable(),
                TextColumn::make('file')
                    ->label('Nama File')
                    ->sortable()
                    ->searchable()
                    ->getStateUsing(fn($record) => basename($record->file))
                    ->url(fn($record) => asset('storage/' . $record->file))
                    ->openUrlInNewTab(),
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
            'index' => Pages\ListLaporanTataKelolas::route('/'),
            'create' => Pages\CreateLaporanTataKelola::route('/create'),
            'edit' => Pages\EditLaporanTataKelola::route('/{record}/edit'),
        ];
    }
}

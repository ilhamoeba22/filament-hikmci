<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\LaporanTahunan;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\LaporanTahunanResource\Pages;

class LaporanTahunanResource extends Resource
{
    protected static ?string $model = LaporanTahunan::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-chart-bar';
    protected static ?string $navigationGroup = 'Laporan & Keuangan';

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
                    ->directory('laporan/tahunan')
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
            'index' => Pages\ListLaporanTahunans::route('/'),
            'create' => Pages\CreateLaporanTahunan::route('/create'),
            'edit' => Pages\EditLaporanTahunan::route('/{record}/edit'),
        ];
    }
}

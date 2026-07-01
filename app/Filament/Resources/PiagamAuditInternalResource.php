<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PiagamAuditInternalResource\Pages;
use App\Models\PiagamAuditInternal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;

class PiagamAuditInternalResource extends Resource
{
    protected static ?string $model = PiagamAuditInternal::class;

    protected static ?string $navigationIcon = 'heroicon-o-shield-check';

    protected static ?string $navigationGroup = 'Laporan & Keuangan';

    protected static ?string $navigationLabel = 'Piagam Audit Internal';

    protected static ?string $pluralModelLabel = 'Piagam Audit Internal';

    protected static ?string $modelLabel = 'Piagam Audit Internal';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->label('Judul Piagam')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('file')
                    ->label('Unggah Dokumen (PDF)')
                    ->disk('public')
                    ->directory('laporan/piagam_audit_internal')
                    ->acceptedFileTypes(['application/pdf'])
                    ->preserveFilenames()
                    ->maxSize(10240) // Maksimal 10 MB
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                    ->label('Judul')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('file')
                    ->label('Nama File')
                    ->sortable()
                    ->searchable()
                    ->getStateUsing(fn($record) => basename($record->file))
                    ->url(fn($record) => asset('storage/' . $record->file))
                    ->openUrlInNewTab(),
                TextColumn::make('created_at')
                    ->label('Tanggal Unggah')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListPiagamAuditInternals::route('/'),
            'create' => Pages\CreatePiagamAuditInternal::route('/create'),
            'edit' => Pages\EditPiagamAuditInternal::route('/{record}/edit'),
        ];
    }
}

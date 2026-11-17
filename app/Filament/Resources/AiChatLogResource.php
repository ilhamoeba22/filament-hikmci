<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AiChatLogResource\Pages;
use App\Models\AiChatLog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\EditAction;
use Illuminate\Database\Eloquent\Collection;

class AiChatLogResource extends Resource
{
    protected static ?string $model = AiChatLog::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected static ?string $navigationGroup = 'AI & Analitik Nasabah';
    protected static ?string $navigationLabel = 'Log Percakapan AI';
    protected static ?string $modelLabel = 'Percakapan AI';
    protected static ?string $pluralModelLabel = 'Log Percakapan AI';
    protected static ?int $navigationSort = 1;

    public static function getNavigationBadge(): ?string
    {
        $unreviewed = static::getModel()::where('is_reviewed', false)->count();
        return $unreviewed > 0 ? (string) $unreviewed : null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'warning';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Detail Interaksi Percakapan Nasabah')
                    ->description('Pertanyaan pengunjung dan jawaban yang dihasilkan Asisten AI MCI.')
                    ->schema([
                        Forms\Components\Textarea::make('user_message')
                            ->label('Pertanyaan / Input Nasabah')
                            ->disabled()
                            ->rows(3)
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('ai_response')
                            ->label('Jawaban Asisten AI')
                            ->disabled()
                            ->rows(6)
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('category')
                            ->label('Kategori Topik')
                            ->disabled(),
                        Forms\Components\TextInput::make('model_used')
                            ->label('Model AI yang Digunakan')
                            ->disabled(),
                        Forms\Components\TextInput::make('user_ip')
                            ->label('Alamat IP Pengunjung')
                            ->disabled(),
                        Forms\Components\DateTimePicker::make('created_at')
                            ->label('Waktu Percakapan')
                            ->disabled(),
                    ])->columns(2),

                Forms\Components\Section::make('Evaluasi Tim Bank & Bahan Pembelajaran AI')
                    ->description('Gunakan bagian ini untuk memverifikasi akurasi jawaban dan memberikan bahan pembelajaran mandiri bagi AI.')
                    ->schema([
                        Forms\Components\Toggle::make('is_reviewed')
                            ->label('Tandai Sudah Ditinjau oleh Tim Bank')
                            ->inline(false),
                        Forms\Components\Select::make('admin_evaluation')
                            ->label('Hasil Evaluasi Bank')
                            ->options([
                                'Akurat & Sesuai' => '✅ Akurat & Sesuai SOP Bank',
                                'Perlu Penyesuaian' => '⚠️ Perlu Penyesuaian / Koreksi Jawaban',
                                'Pertanyaan Baru' => '❓ Pertanyaan Baru (Belum ada di Knowledge Base)',
                                'Prospek Lead Menarik' => '🌟 Prospek Lead Nasabah Menarik (Potensi Deal)',
                                'Spam / Tidak Relevan' => '❌ Spam / Pertanyaan Tidak Relevan',
                            ])
                            ->placeholder('Pilih Status Evaluasi'),
                        Forms\Components\Textarea::make('admin_notes')
                            ->label('Catatan Evaluasi / Koreksi Pengetahuan AI')
                            ->placeholder('Contoh: Untuk pertanyaan seputar properti X, tambahkan info bahwa sedang ada promo diskon biaya notaris... (Catatan ini otomatis diserap oleh AI sebagai bahan pengetahuan baru).')
                            ->rows(4)
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('created_at')
                    ->label('Waktu')
                    ->dateTime('d M Y H:i')
                    ->sortable(),

                TextColumn::make('category')
                    ->label('Kategori')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Aset Properti' => 'success',
                        'Deposito Mudharabah' => 'info',
                        'Pembiayaan Syariah' => 'primary',
                        'Tabungan' => 'warning',
                        'Keuangan & GCG' => 'gray',
                        'Privasi & Rahasia Bank' => 'danger',
                        default => 'secondary',
                    })
                    ->sortable()
                    ->searchable(),

                TextColumn::make('user_message')
                    ->label('Pertanyaan Pengunjung')
                    ->limit(65)
                    ->searchable()
                    ->wrap(),

                TextColumn::make('ai_response')
                    ->label('Jawaban AI')
                    ->limit(70)
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->wrap(),

                TextColumn::make('admin_evaluation')
                    ->label('Evaluasi Bank')
                    ->badge()
                    ->color(fn (?string $state): string => match ($state) {
                        'Akurat & Sesuai' => 'success',
                        'Perlu Penyesuaian' => 'danger',
                        'Pertanyaan Baru' => 'warning',
                        'Prospek Lead Menarik' => 'info',
                        default => 'gray',
                    })
                    ->placeholder('Belum Dievaluasi')
                    ->sortable(),

                IconColumn::make('is_reviewed')
                    ->label('Ditinjau')
                    ->boolean()
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->label('Kategori Topik')
                    ->options([
                        'Aset Properti' => 'Aset Properti',
                        'Deposito Mudharabah' => 'Deposito Mudharabah',
                        'Pembiayaan Syariah' => 'Pembiayaan Syariah',
                        'Tabungan' => 'Tabungan',
                        'Keuangan & GCG' => 'Keuangan & GCG',
                        'Privasi & Rahasia Bank' => 'Privasi & Rahasia Bank',
                        'Karir & Lowongan' => 'Karir & Lowongan',
                        'Pertanyaan Umum' => 'Pertanyaan Umum',
                    ]),

                SelectFilter::make('is_reviewed')
                    ->label('Status Review')
                    ->options([
                        '0' => 'Belum Ditinjau',
                        '1' => 'Sudah Ditinjau',
                    ]),

                SelectFilter::make('admin_evaluation')
                    ->label('Hasil Evaluasi')
                    ->options([
                        'Akurat & Sesuai' => 'Akurat & Sesuai',
                        'Perlu Penyesuaian' => 'Perlu Penyesuaian',
                        'Pertanyaan Baru' => 'Pertanyaan Baru',
                        'Prospek Lead Menarik' => 'Prospek Lead Menarik',
                        'Spam / Tidak Relevan' => 'Spam / Tidak Relevan',
                    ]),
            ])
            ->headerActions([
                Action::make('export_excel')
                    ->label('Export Seluruh Data ke Excel (.csv)')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->color('success')
                    ->action(function () {
                        return static::exportToExcel(AiChatLog::orderBy('created_at', 'desc')->get());
                    }),
            ])
            ->actions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    BulkAction::make('export_selected')
                        ->label('Export Terpilih ke Excel (.csv)')
                        ->icon('heroicon-o-document-arrow-down')
                        ->color('success')
                        ->action(function (Collection $records) {
                            return static::exportToExcel($records);
                        }),
                    BulkAction::make('mark_as_reviewed')
                        ->label('Tandai Sudah Ditinjau')
                        ->icon('heroicon-o-check-circle')
                        ->action(fn (Collection $records) => $records->each->update(['is_reviewed' => true])),
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    /**
     * Generate standard Excel-compatible CSV with UTF-8 BOM for Microsoft Excel.
     */
    public static function exportToExcel($records)
    {
        $fileName = 'Laporan_Percakapan_AI_MCI_' . now()->format('Y-m-d_His') . '.csv';

        return response()->streamDownload(function () use ($records) {
            $handle = fopen('php://output', 'w');
            // Write UTF-8 BOM for Microsoft Excel compatibility
            fputs($handle, "\xEF\xBB\xBF");

            // Header row
            fputcsv($handle, [
                'ID',
                'Waktu Percakapan',
                'Kategori',
                'Pertanyaan Nasabah / User',
                'Jawaban Asisten AI MCI',
                'Status Review',
                'Hasil Evaluasi Tim Bank',
                'Catatan Tim Bank / Bahan Pengetahuan AI',
                'Model AI',
                'IP Pengunjung',
            ], ';');

            foreach ($records as $record) {
                fputcsv($handle, [
                    $record->id,
                    $record->created_at ? $record->created_at->format('d/m/Y H:i:s') : '-',
                    $record->category,
                    $record->user_message,
                    $record->ai_response,
                    $record->is_reviewed ? 'Sudah Ditinjau' : 'Belum Ditinjau',
                    $record->admin_evaluation ?? 'Belum Dievaluasi',
                    $record->admin_notes ?? '',
                    $record->model_used ?? '',
                    $record->user_ip ?? '',
                ], ';');
            }

            fclose($handle);
        }, $fileName, [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => "attachment; filename=\"{$fileName}\"",
        ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAiChatLogs::route('/'),
            'create' => Pages\CreateAiChatLog::route('/create'),
            'view' => Pages\ViewAiChatLog::route('/{record}'),
            'edit' => Pages\EditAiChatLog::route('/{record}/edit'),
        ];
    }
}

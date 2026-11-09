<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Edukasi;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Support\Str;
use App\Filament\Resources\EdukasiResource\Pages;

class EdukasiResource extends Resource
{
    protected static ?string $model = Edukasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationGroup = 'Manajemen Konten';
    protected static ?string $modelLabel = 'Artikel Edukasi';
    protected static ?string $pluralModelLabel = 'Daftar Edukasi Syariah';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->label('Judul Edukasi')
                    ->placeholder('Masukkan judul artikel edukasi atau literasi syariah')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                DatePicker::make('created_at')
                    ->label('Tanggal Publikasi')
                    ->default(now())
                    ->required(),

                FileUpload::make('gambar')
                    ->label('Gambar Utama / Cover Edukasi')
                    ->image()
                    ->disk('edukasi')
                    ->directory('images')
                    ->preserveFilenames()
                    ->maxSize(5120)
                    ->helperText('Format: JPG, PNG, atau WebP (Maksimal 5MB). Rekomendasi aspek rasio lanskap 16:10 atau 16:9.')
                    ->required()
                    ->columnSpanFull(),

                RichEditor::make('isi')
                    ->label('Isi Materi Edukasi')
                    ->placeholder('Tuliskan naskah materi literasi edukasi keuangan syariah di sini...')
                    ->fileAttachmentsDisk('edukasi')
                    ->fileAttachmentsDirectory('images')
                    ->toolbarButtons([
                        'attachFiles',
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'h2',
                        'h3',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'underline',
                        'undo',
                    ])
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar')
                    ->disk('edukasi')
                    ->label('Sampul')
                    ->height(60)
                    ->extraImgAttributes([
                        'style' => 'aspect-ratio: 16/10; object-fit: cover; border-radius: 6px;'
                    ]),
                TextColumn::make('judul')
                    ->label('Judul Edukasi')
                    ->sortable()
                    ->searchable()
                    ->wrap(),
                TextColumn::make('isi')
                    ->label('Ringkasan Isi')
                    ->formatStateUsing(fn ($state) => Str::limit(strip_tags((string) $state), 70))
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->label('Tanggal')
                    ->dateTime('d M Y')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListEdukasis::route('/'),
            'create' => Pages\CreateEdukasi::route('/create'),
            'edit' => Pages\EditEdukasi::route('/{record}/edit'),
        ];
    }
}

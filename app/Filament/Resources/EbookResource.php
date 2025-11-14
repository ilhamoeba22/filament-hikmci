<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EbookResource\Pages;
use App\Models\Ebook;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class EbookResource extends Resource
{
    protected static ?string $model = Ebook::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationLabel = 'E-Book';
    protected static ?string $pluralLabel = 'E-Book';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(), // Judul Penuh

                FileUpload::make('gambar')
                    ->label('Gambar Sampul (Cover)')
                    ->image() // Hanya gambar
                    ->disk('edukasi') // WAJIB: Sesuaikan dengan disk Anda
                    ->directory('ebooks/covers') // Simpan di folder rapi
                    ->preserveFilenames()
                    ->required(),

                FileUpload::make('file_pdf')
                    ->label('File E-Book (PDF)')
                    ->disk('edukasi') // WAJIB: Sesuaikan dengan disk Anda
                    ->directory('ebooks/files') // Simpan di folder rapi
                    ->preserveFilenames()
                    ->acceptedFileTypes(['application/pdf']) // Hanya terima PDF
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar')
                    ->disk('edukasi') // Sesuaikan disk
                    ->label('Sampul'),
                TextColumn::make('judul')->sortable()->searchable(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEbooks::route('/'),
            'create' => Pages\CreateEbook::route('/create'),
            'edit' => Pages\EditEbook::route('/{record}/edit'),
        ];
    }
}

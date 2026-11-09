<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Berita;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BeritaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BeritaResource\RelationManagers;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = 'Manajemen Konten';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->label('Judul Berita')
                    ->placeholder('Masukkan judul berita yang menarik')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                TextInput::make('lokasi')
                    ->label('Lokasi Kegiatan / Liputan')
                    ->placeholder('Contoh: Sleman, Yogyakarta')
                    ->required()
                    ->maxLength(255),
                DatePicker::make('created_at')
                    ->label('Tanggal Publikasi')
                    ->default(now())
                    ->required(),
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->label('Penulis / Author')
                    ->required(),
                FileUpload::make('gambar')
                    ->label('Gambar Utama Berita')
                    ->image()
                    ->disk('berita')
                    ->directory('images')
                    ->preserveFilenames()
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('isi')
                    ->label('Isi Berita')
                    ->placeholder('Tuliskan naskah berita lengkap di sini...')
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
                Tables\Columns\TextColumn::make('judul')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('isi')->limit(50)->sortable()->searchable(),
                Tables\Columns\TextColumn::make('lokasi')->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('gambar')
                    ->disk('berita')
                    ->label('Gambar'),
                Tables\Columns\TextColumn::make('user.name')->label('User')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal')
                    ->sortable()
                    ->searchable()
                    ->date('d/m/Y'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}

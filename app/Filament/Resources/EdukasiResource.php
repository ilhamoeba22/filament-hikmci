<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Edukasi;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Pages\Actions\EditAction;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\EdukasiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EdukasiResource\RelationManagers;
use App\Filament\Resources\EdukasiResource\Pages\EditEdukasi;
use App\Filament\Resources\EdukasiResource\Pages\ListEdukasis;
use App\Filament\Resources\EdukasiResource\Pages\CreateEdukasi;

class EdukasiResource extends Resource
{
    protected static ?string $model = Edukasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationGroup = 'Manajemen Konten';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->label('Judul Edukasi')
                    ->placeholder('Masukkan judul artikel edukasi / literasi syariah')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                FileUpload::make('gambar')
                    ->label('Gambar Utama Edukasi')
                    ->image()
                    ->disk('edukasi')
                    ->directory('images')
                    ->preserveFilenames()
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('isi')
                    ->label('Isi Artikel Edukasi')
                    ->placeholder('Tuliskan naskah edukasi literasi syariah di sini...')
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
                Tables\Columns\ImageColumn::make('gambar')
                    ->disk('edukasi')
                    ->label('Gambar'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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

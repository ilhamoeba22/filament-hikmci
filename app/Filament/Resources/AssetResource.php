<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Asset;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\AssetResource\Pages;
use App\Filament\Resources\AssetResource\Pages\EditAsset;
use App\Filament\Resources\AssetResource\Pages\ListAssets;
use App\Filament\Resources\AssetResource\Pages\CreateAsset;

class AssetResource extends Resource
{
    protected static ?string $model = Asset::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';
    protected static ?string $navigationGroup = 'Manajemen Halaman';
    protected static ?string $navigationLabel = 'E-Asset';
    protected static ?string $modelLabel = 'E-Asset';
    protected static ?string $pluralModelLabel = 'E-Asset';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->label('Judul E-Asset')
                    ->placeholder('Masukkan judul aset / flyer')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                FileUpload::make('gambar')
                    ->label('Flyer E-Asset (Potrait 3:4)')
                    ->image()
                    ->disk('public')
                    ->directory('asset/images')
                    ->preserveFilenames()
                    ->required()
                    ->helperText('Unggah gambar flyer dengan format portrait rasio 3:4.')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar')
                    ->label('Flyer')
                    ->disk('public')
                    ->height(90)
                    ->extraImgAttributes([
                        'style' => 'aspect-ratio: 3/4; object-fit: cover; border-radius: 6px; box-shadow: 0 2px 5px rgba(0,0,0,0.15);'
                    ]),
                TextColumn::make('judul')
                    ->label('Judul E-Asset')
                    ->sortable()
                    ->searchable()
                    ->wrap(),
                TextColumn::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
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
            'index' => Pages\ListAssets::route('/'),
            'create' => Pages\CreateAsset::route('/create'),
            'edit' => Pages\EditAsset::route('/{record}/edit'),
        ];
    }
}

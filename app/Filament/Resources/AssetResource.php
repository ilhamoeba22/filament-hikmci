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

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('gambar')
                    ->image()
                    ->disk('public')
                    ->directory('asset/images')
                    ->preserveFilenames()
                    ->required(),
                TextInput::make('pemilik')
                    ->required()
                    ->maxLength(255),
                TextInput::make('lokasi')
                    ->required()
                    ->maxLength(255),
                TextInput::make('harga')
                    ->numeric()
                    ->required(),
                FileUpload::make('pdf')
                    ->disk('public')
                    ->directory('asset/pdfs')
                    ->acceptedFileTypes(['application/pdf'])
                    ->preserveFilenames()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')->sortable()->searchable(),
                ImageColumn::make('gambar')->label('Gambar')->sortable()->searchable(),
                TextColumn::make('pemilik')->sortable()->searchable(),
                TextColumn::make('lokasi')->sortable()->searchable(),
                TextColumn::make('harga')->sortable()->searchable(),
                TextColumn::make('pdf')->label('File PDF')->sortable()->searchable(),
                TextColumn::make('created_at')->label('Tanggal Dibuat')->sortable()->searchable(),
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

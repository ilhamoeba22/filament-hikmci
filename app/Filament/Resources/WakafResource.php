<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Wakaf;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\WakafResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\WakafResource\Pages\EditWakaf;
use App\Filament\Resources\WakafResource\Pages\ListWakafs;
use App\Filament\Resources\WakafResource\RelationManagers;
use App\Filament\Resources\WakafResource\Pages\CreateWakaf;

class WakafResource extends Resource
{
    protected static ?string $model = Wakaf::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('gambar_cover')
                    ->label('Gambar Cover')
                    ->image()
                    ->disk('public')
                    ->directory('wakaf/images')
                    ->preserveFilenames()
                    ->required(),
                FileUpload::make('gambar_detail')
                    ->label('Gambar Detail')
                    ->image()
                    ->disk('public')
                    ->directory('wakaf/images')
                    ->preserveFilenames()
                    ->required(),
                Textarea::make('deskripsi')
                    ->required(),
                TextInput::make('target')
                    ->numeric()
                    ->required(),
                TextInput::make('lokasi')
                    ->required()
                    ->maxLength(255),
                TextInput::make('nahzir')
                    ->required()
                    ->maxLength(255),
                Select::make('status')
                    ->options([
                        'Terpenuhi' => 'Terpenuhi',
                        'Belum Terpenuhi' => 'Belum Terpenuhi',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')->sortable()->searchable(),
                ImageColumn::make('gambar_cover')->label('Gambar Cover')->sortable()->searchable(),
                ImageColumn::make('gambar_detail')->label('Gambar Detail')->sortable()->searchable(),
                TextColumn::make('deskripsi')->sortable()->searchable(),
                TextColumn::make('target')->sortable()->searchable(),
                TextColumn::make('lokasi')->sortable()->searchable(),
                TextColumn::make('nahzir')->sortable()->searchable(),
                TextColumn::make('status')->sortable()->searchable(),
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
            'index' => Pages\ListWakafs::route('/'),
            'create' => Pages\CreateWakaf::route('/create'),
            'edit' => Pages\EditWakaf::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\RateDeposito;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RateDepositoResource\Pages;
use App\Filament\Resources\RateDepositoResource\RelationManagers;
use App\Filament\Resources\RateDepositoResource\Pages\EditRateDeposito;
use App\Filament\Resources\RateDepositoResource\Pages\ListRateDepositos;
use App\Filament\Resources\RateDepositoResource\Pages\CreateRateDeposito;

class RateDepositoResource extends Resource
{
    protected static ?string $model = RateDeposito::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('bulan')
                    ->label('Bulan')
                    ->options([
                        'Januari' => 'Januari',
                        'Februari' => 'Februari',
                        'Maret' => 'Maret',
                        'April' => 'April',
                        'Mei' => 'Mei',
                        'Juni' => 'Juni',
                        'Juli' => 'Juli',
                        'Agustus' => 'Agustus',
                        'September' => 'September',
                        'Oktober' => 'Oktober',
                        'November' => 'November',
                        'Desember' => 'Desember',
                    ])
                    ->required(),
                TextInput::make('rate_1_bulan')
                    ->label('Rate 1 Bulan')
                    ->numeric()
                    ->nullable(),
                TextInput::make('rate_3_bulan')
                    ->label('Rate 3 Bulan')
                    ->numeric()
                    ->nullable(),
                TextInput::make('rate_6_bulan')
                    ->label('Rate 6 Bulan')
                    ->numeric()
                    ->nullable(),
                TextInput::make('rate_12_bulan')
                    ->label('Rate 12 Bulan')
                    ->numeric()
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('bulan')->label('Bulan')->sortable()->searchable(),
                TextColumn::make('rate_1_bulan')->label('Rate 1 Bulan')->sortable()->searchable(),
                TextColumn::make('rate_3_bulan')->label('Rate 3 Bulan')->sortable()->searchable(),
                TextColumn::make('rate_6_bulan')->label('Rate 6 Bulan')->sortable()->searchable(),
                TextColumn::make('rate_12_bulan')->label('Rate 12 Bulan')->sortable()->searchable(),
                TextColumn::make('created_at')->label('Created At')->sortable()->searchable(),
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
            'index' => Pages\ListRateDepositos::route('/'),
            'create' => Pages\CreateRateDeposito::route('/create'),
            'edit' => Pages\EditRateDeposito::route('/{record}/edit'),
        ];
    }
}

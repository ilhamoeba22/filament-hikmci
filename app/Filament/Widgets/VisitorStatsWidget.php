<?php

namespace App\Filament\Widgets;

use App\Models\Visit;
use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class VisitorStatsWidget extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $today = Carbon::today()->toDateString();
        $thisMonth = Carbon::now()->format('Y-m');

        return [
            Stat::make('Total Kunjungan Hari Ini', Visit::where('date', $today)->sum('hits') ?? 0)
                ->description('Total page views hari ini')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
                
            Stat::make('Total Kunjungan Bulan Ini', Visit::where('date', 'like', $thisMonth . '-%')->sum('hits') ?? 0)
                ->description('Total page views bulan ini')
                ->descriptionIcon('heroicon-m-calendar')
                ->color('primary'),
                
            Stat::make('Total Semua Kunjungan', Visit::sum('hits') ?? 0)
                ->description('Total page views keseluruhan')
                ->descriptionIcon('heroicon-m-globe-alt')
                ->color('warning'),
        ];
    }
}

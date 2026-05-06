<?php

namespace App\Filament\Widgets;

use App\Models\Visit;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class VisitorChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Grafik Kunjungan Harian (Bulan Ini)';
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $thisMonth = Carbon::now()->format('Y-m');
        $visits = Visit::where('date', 'like', $thisMonth . '-%')
            ->orderBy('date')
            ->get()
            ->groupBy('date')
            ->map(function ($day) {
                return $day->sum('hits');
            });

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Kunjungan',
                    'data' => $visits->values()->toArray(),
                    'fill' => 'start',
                ],
            ],
            'labels' => $visits->keys()->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}

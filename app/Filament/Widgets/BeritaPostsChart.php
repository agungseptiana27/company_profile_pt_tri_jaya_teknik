<?php

namespace App\Filament\Widgets;

use App\Models\Berita;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;

class BeritaPostsChart extends ChartWidget
{

    protected static ?int $sort = 2;
    protected static ?string $heading = 'Berita Terbit per Bulan';

    protected function getData(): array
    {
        // Ambil 12 bulan terakhir
        $labels = [];
        $data = [];
        for ($i = 11; $i >= 0; $i--) {
            $month = Carbon::now()->subMonths($i);
            $labels[] = $month->format('M Y');

            $count = Berita::whereYear('published_at', $month->year)
                           ->whereMonth('published_at', $month->month)
                           ->count();

            $data[] = $count;
        }

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Jumlah Berita',
                    'data' => $data,
                    'borderColor' => '#16a34a', // hijau
                    'backgroundColor' => 'rgba(22,163,74,0.2)',
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
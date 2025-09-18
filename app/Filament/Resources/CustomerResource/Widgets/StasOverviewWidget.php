<?php

namespace App\Filament\Resources\CustomerResource\Widgets;

use App\Models\Customer;
use App\Models\Iso;
use App\Models\Kontruksi;
use App\Models\SertifPersonal;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StasOverviewWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Kontruksi', value: Kontruksi::count())
                ->description('Jumlah Sertifikasi Kontruksi')
                ->color('success'),

            Stat::make('ISO', value: Iso::count())
                ->description('Jumlah Sertifikasi ISO')
                ->color('primary'),

            Stat::make('Personal', value: SertifPersonal::count())
                ->description('Jumlah Sertifikasi Personal')
                ->color('warning'),

            Stat::make('Customer', value: Customer::count())
                ->description('Jumlah Customer')
                ->color('danger'),
        ];
    }
}
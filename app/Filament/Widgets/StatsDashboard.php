<?php

namespace App\Filament\Widgets;

use App\Models\Civil;
use App\Models\Customer;
use App\Models\Fabrication;
use App\Models\Iso;
use App\Models\Jig;
use App\Models\Karir;
use App\Models\Kontruksi;
use App\Models\Machining;
use App\Models\SPM;
use App\Models\Stamping;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsDashboard extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $countCustomer = Customer::count();
        $countSertifKontruksi = Kontruksi::count();
        $countSertifIso = Iso::count();
        $countKarir = Karir::count();

        return [
            Stat::make('Pelanggan', value: $countCustomer)
                ->description('Jumlah pelanggan terdaftar')
                ->color('success'),

            Stat::make('Sertifikasi Kontruksi', value: $countSertifKontruksi)
                ->description('Jumlah sertifikasi kontruksi')
                ->color('primary'),

            Stat::make('Sertifikasi ISO', value: $countSertifIso)
                ->description('Jumlah sertifikasi ISO')
                ->color('warning'),

            Stat::make('Lowongan Kerja', value: $countKarir)
                ->description('Jumlah lowongan yang tersedia')
                ->color('danger'),

            Stat::make('Fabrication', Fabrication::count())
                ->description('Jumlah item fabrication')
                ->color('primary'),

            Stat::make('Stamping', Stamping::count())
                ->description('Jumlah item stamping')
                ->color('success'),

            Stat::make('Machining', Machining::count())
                ->description('Jumlah item machining')
                ->color('warning'),

            Stat::make('Jig', Jig::count())
                ->description('Jumlah jig')
                ->color('info'),

            Stat::make('SPM', SPM::count())
                ->description('Jumlah SPM')
                ->color('danger'),

            Stat::make('Civil', Civil::count())
                ->description('Jumlah civil work')
                ->color('secondary'),
        ];
    }
}
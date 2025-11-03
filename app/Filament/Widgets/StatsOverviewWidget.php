<?php

namespace App\Filament\Widgets;

use App\Models\Member;
use App\Models\Agency;
use App\Models\Developer;
use App\Models\Project;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverviewWidget extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Pengguna', Member::count())
                ->description('Total member terdaftar')
                ->descriptionIcon('heroicon-o-users')
                ->color('success'),

            Stat::make('Total Agen', Agency::count())
                ->description('Total agen terdaftar')
                ->descriptionIcon('heroicon-o-building-office')
                ->color('info'),

            Stat::make('Total Developer', Developer::count())
                ->description('Total developer terdaftar')
                ->descriptionIcon('heroicon-o-building-office-2')
                ->color('warning'),

            Stat::make('Total Proyek', Project::count())
                ->description('Total proyek terdaftar')
                ->descriptionIcon('heroicon-o-building-storefront')
                ->color('primary'),
        ];
    }

    protected function getColumns(): int
    {
        return 4;
    }
}

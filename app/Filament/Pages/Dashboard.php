<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\ListProjectsWidget;
use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\StatsOverviewWidget;
use App\Filament\Widgets\ProductStatsWidget;


class Dashboard extends BaseDashboard
{
    public function getWidgets(): array
    {
        return [
            StatsOverviewWidget::class,
            ProductStatsWidget::class,
            ListProjectsWidget::class,
        ];
    }

    public function getColumns(): int | string | array
    {
        return [
            'default' => 1,
            'sm' => 2,
            'md' => 4,
            'lg' => 4,
            'xl' => 4,
            '2xl' => 4,
        ];
    }
}

<?php

namespace App\Filament\Developer\Pages;

use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    public function getWidgets(): array
    {
        return [
            \App\Filament\Developer\Widgets\DeveloperStatsOverview::class,
            \App\Filament\Developer\Widgets\SalesPerProjectChart::class,
        ];
    }

    public function getColumns(): int | string | array
    {
        return [
            'default' => 1,
            'sm' => 2,
            'md' => 3,
            'lg' => 3,
            'xl' => 3,
            '2xl' => 3,
        ];
    }
}

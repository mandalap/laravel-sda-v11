<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ProductStatsWidget extends BaseWidget
{
    protected static ?int $sort = 2;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Produk Terjual', Product::where('status', 'Terjual')->count())
                ->description('Produk yang sudah terjual')
                ->descriptionIcon('heroicon-o-check-circle')
                ->color('success'),

            Stat::make('Total Produk Booking', Product::where('status', 'Booking')->count())
                ->description('Produk dalam booking')
                ->descriptionIcon('heroicon-o-clock')
                ->color('warning'),

            Stat::make('Total Produk Pending', Product::where('status', 'Pending')->count())
                ->description('Produk pending')
                ->descriptionIcon('heroicon-o-exclamation-circle')
                ->color('danger'),

            Stat::make('Total Produk Tersedia', Product::where('status', 'Tersedia')->count())
                ->description('Produk yang tersedia')
                ->descriptionIcon('heroicon-o-cube')
                ->color('info'),
        ];
    }

    protected function getColumns(): int
    {
        return 4;
    }
}

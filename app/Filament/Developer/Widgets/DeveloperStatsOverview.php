<?php
// app/Filament/Developer/Widgets/DeveloperStatsOverview.php

namespace App\Filament\Developer\Widgets;

use App\Models\Project;
use App\Models\Product;
use App\Models\BookingTransaction;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Database\Eloquent\Builder;

class DeveloperStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $developer = auth('member')->user()?->developer;

        if (!$developer) {
            return [];
        }

        // Stats Project
        $totalProjects = Project::where('developer_id', $developer->id)->count();
        $approvedProjects = Project::where('developer_id', $developer->id)
            ->where('is_approved', 'Diterima')
            ->count();

        // Stats Product
        $totalProducts = Product::whereHas('project', function (Builder $query) use ($developer) {
            $query->where('developer_id', $developer->id);
        })->count();

        $tersedia = Product::whereHas('project', function (Builder $query) use ($developer) {
            $query->where('developer_id', $developer->id);
        })->where('status', 'Tersedia')->count();

        $booking = Product::whereHas('project', function (Builder $query) use ($developer) {
            $query->where('developer_id', $developer->id);
        })->where('status', 'Booking')->count();

        $pending = Product::whereHas('project', function (Builder $query) use ($developer) {
            $query->where('developer_id', $developer->id);
        })->where('status', 'Pending')->count();

        $terjual = Product::whereHas('project', function (Builder $query) use ($developer) {
            $query->where('developer_id', $developer->id);
        })->where('status', 'Terjual')->count();

        return [
            // Project Stats
            Stat::make('Total Project', $totalProjects)
                ->description("{$approvedProjects} project aktif")
                ->descriptionIcon('heroicon-m-building-office')
                ->color('primary'),

            Stat::make('Total Product', $totalProducts)
                ->description('Semua unit property')
                ->descriptionIcon('heroicon-m-squares-2x2')
                ->color('info'),

            // Product Terjual
            Stat::make('Product Terjual', $terjual)
                ->description("Total product yang terjual")
                ->descriptionIcon('heroicon-m-check-badge')
                ->color('success'),

            // Product Booking
            Stat::make('Product Booking', $booking)
                ->description('Product dalam proses booking')
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning'),

            // Product Pending
            Stat::make('Product Pending', $pending)
                ->description('Product dalam proses pembayaran')
                ->descriptionIcon('heroicon-m-exclamation-circle')
                ->color('gray'),

            // Product Tersedia
            Stat::make('Product Tersedia', $tersedia)
                ->description('Product yang tersedia')
                ->descriptionIcon('heroicon-m-home-modern')
                ->color('success'),
        ];
    }

    protected function getColumns(): int
    {
        return 3;
    }
}

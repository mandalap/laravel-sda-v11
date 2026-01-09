<?php

namespace App\Filament\Developer\Widgets;

use App\Models\BookingTransaction;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\Widget;
use Illuminate\Database\Eloquent\Builder;

class BookingStatsWidget extends Widget
{
    protected function getStats(): array
    {
        $developer = auth('member')->user()?->developer;

        if (!$developer) {
            return [];
        }

        $baseQuery = function () use ($developer) {
            return BookingTransaction::whereHas('product.project', function (Builder $query) use ($developer) {
                $query->where('developer_id', $developer->id);
            });
        };

        $total = $baseQuery()->count();
        $pending = $baseQuery()->where('status', 'pending')->count();
        $success = $baseQuery()->where('status', 'success')->count();
        $totalRevenue = $baseQuery()->where('status', 'success')->sum('total_harga');

        return [
            Stat::make('Total Booking', $total)
                ->description('Semua transaksi booking')
                ->descriptionIcon('heroicon-m-shopping-cart')
                ->color('primary'),

            Stat::make('Pending', $pending)
                ->description('Menunggu pembayaran')
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning'),

            Stat::make('Success', $success)
                ->description('Transaksi berhasil')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success'),

            Stat::make('Total Revenue', 'Rp ' . number_format($totalRevenue, 0, ',', '.'))
                ->description('Total pendapatan')
                ->descriptionIcon('heroicon-m-banknotes')
                ->color('success'),
        ];
    }
}

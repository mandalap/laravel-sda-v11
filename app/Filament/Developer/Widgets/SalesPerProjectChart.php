<?php
// app/Filament/Developer/Widgets/SalesPerProjectChart.php

namespace App\Filament\Developer\Widgets;

use App\Models\BookingTransaction;
use App\Models\Project;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Illuminate\Database\Eloquent\Builder;

class SalesPerProjectChart extends ChartWidget
{
    protected static ?string $heading = 'Statistik Penjualan Per Project';

    protected static ?int $sort = 2;

    protected int | string | array $columnSpan = 'full';

    public ?string $filter = 'all'; // Default filter

    protected function getData(): array
    {
        $developer = auth('member')->user()?->developer;

        if (!$developer) {
            return [
                'datasets' => [],
                'labels' => [],
            ];
        }

        $projectId = $this->filter === 'all' ? null : $this->filter;

        // Query base untuk booking transactions
        $query = BookingTransaction::query()
            ->where('status', 'booking')
            ->whereHas('product', function (Builder $q) use ($developer, $projectId) {
                $q->where('status', 'Terjual')
                    ->whereHas('project', function (Builder $subQ) use ($developer, $projectId) {
                        $subQ->where('developer_id', $developer->id);

                        if ($projectId) {
                            $subQ->where('id', $projectId);
                        }
                    });
            });

        // Trend data untuk 30 hari terakhir
        $data = Trend::query($query)
            ->between(
                start: now()->subDays(30),
                end: now(),
            )
            ->perDay()
            ->count();

        // Trend revenue untuk 30 hari terakhir
        $revenueData = Trend::query($query)
            ->between(
                start: now()->subDays(30),
                end: now(),
            )
            ->perDay()
            ->sum('total_harga');

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Transaksi',
                    'data' => $data->map(fn(TrendValue $value) => $value->aggregate),
                    'borderColor' => 'rgb(59, 130, 246)',
                    'backgroundColor' => 'rgba(59, 130, 246, 0.1)',
                    'fill' => true,
                    'tension' => 0.3,
                ],
                [
                    'label' => 'Total Pendapatan (Juta Rp)',
                    'data' => $revenueData->map(fn(TrendValue $value) => $value->aggregate / 1000000), // Convert ke juta
                    'borderColor' => 'rgb(34, 197, 94)',
                    'backgroundColor' => 'rgba(34, 197, 94, 0.1)',
                    'fill' => true,
                    'tension' => 0.3,
                    'yAxisID' => 'y1',
                ],
            ],
            'labels' => $data->map(fn(TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'display' => true,
                    'position' => 'top',
                ],
                'tooltip' => [
                    'enabled' => true,
                    'callbacks' => [
                        'label' => "function(context) {
                            let label = context.dataset.label || '';
                            if (label) {
                                label += ': ';
                            }
                            if (context.parsed.y !== null) {
                                if (context.datasetIndex === 1) {
                                    label += 'Rp ' + context.parsed.y.toFixed(2) + ' Juta';
                                } else {
                                    label += context.parsed.y + ' Transaksi';
                                }
                            }
                            return label;
                        }",
                    ],
                ],
            ],
            'scales' => [
                'y' => [
                    'type' => 'linear',
                    'display' => true,
                    'position' => 'left',
                    'title' => [
                        'display' => true,
                        'text' => 'Jumlah Transaksi',
                    ],
                ],
                'y1' => [
                    'type' => 'linear',
                    'display' => true,
                    'position' => 'right',
                    'title' => [
                        'display' => true,
                        'text' => 'Pendapatan (Juta Rp)',
                    ],
                    'grid' => [
                        'drawOnChartArea' => false,
                    ],
                ],
            ],
        ];
    }

    protected function getFilters(): ?array
    {
        $developer = auth('member')->user()?->developer;

        if (!$developer) {
            return null;
        }

        $projects = Project::where('developer_id', $developer->id)
            ->where('is_approved', 'Diterima')
            ->pluck('nama_project', 'id')
            ->toArray();

        return ['all' => 'Semua Project'] + $projects;
    }
}

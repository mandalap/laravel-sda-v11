<?php

namespace App\Filament\Widgets;

use App\Models\Project;
use App\Models\Product;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class ListProjectsWidget extends BaseWidget
{
    protected static ?int $sort = 4;

    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Project::query()
                    ->withCount([
                        'products as total_products',
                        'products as sold_products' => function (Builder $query) {
                            $query->where('status', 'Terjual');
                        }
                    ])
                    ->having('total_products', '>', 0)
                    ->orderBy('created_at', 'desc')
            )
            ->columns([
                Tables\Columns\TextColumn::make('nama_project')
                    ->label('Nama Proyek')
                    ->searchable()
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('total_products')
                    ->label('Total Produk')
                    ->alignCenter()
                    ->badge()
                    ->color('info'),

                Tables\Columns\TextColumn::make('sold_products')
                    ->label('Terjual')
                    ->alignCenter()
                    ->badge()
                    ->color('success'),

                Tables\Columns\TextColumn::make('remaining')
                    ->label('Sisa')
                    ->getStateUsing(function (Project $record) {
                        return $record->total_products - $record->sold_products;
                    })
                    ->alignCenter()
                    ->badge()
                    ->color('warning')
                    ->sortable(query: function (Builder $query, string $direction): Builder {
                        $query->getQuery()->orders = null;

                        return $query->orderByRaw("(total_products - sold_products) {$direction}");
                    }),

                Tables\Columns\TextColumn::make('percentage')
                    ->label('Persentase Terjual')
                    ->getStateUsing(function (Project $record) {
                        if ($record->total_products == 0) return '0%';
                        $percentage = ($record->sold_products / $record->total_products) * 100;
                        return number_format($percentage, 2) . '%';
                    })
                    ->alignCenter()
                    ->badge()
                    ->color(function (Project $record) {
                        if ($record->total_products == 0) return 'gray';
                        $percentage = ($record->sold_products / $record->total_products) * 100;

                        if ($percentage >= 80) return 'success';
                        if ($percentage >= 50) return 'warning';
                        return 'danger';
                    })
                    ->sortable(query: function (Builder $query, string $direction): Builder {
                        // Reset order yang ada
                        $query->getQuery()->orders = null;

                        return $query
                            ->orderByRaw("(sold_products / NULLIF(total_products, 0)) {$direction}")
                            ->orderBy('sold_products', $direction);
                    }),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Ditambahkan')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->paginated(true);
    }

    protected function getTableHeading(): string
    {
        return 'Daftar Penjualan Produk Per Proyek';
    }
}

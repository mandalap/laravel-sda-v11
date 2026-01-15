<?php

namespace App\Filament\Developer\Resources;

use App\Filament\Developer\Resources\BookingTransactionResource\Pages;
use App\Filament\Developer\Resources\BookingTransactionResource\RelationManagers;
use App\Models\Agency;
use App\Models\BookingTransaction;
use App\Models\Member;
use App\Models\Product;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookingTransactionResource extends Resource
{
    protected static ?string $model = BookingTransaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    protected static ?string $navigationLabel = 'Transaksi Booking';

    protected static ?string $modelLabel = 'Transaksi Booking';

    protected static ?string $recordTitleAttribute = 'invoice';

    public static function getEloquentQuery(): Builder
    {
        $developer = auth('member')->user()?->developer;

        if (!$developer) {
            // Jika tidak ada developer, return empty query
            return parent::getEloquentQuery()->whereRaw('1 = 0');
        }

        return parent::getEloquentQuery()
            ->whereHas('product.project', function (Builder $query) use ($developer) {
                $query->where('developer_id', $developer->id);
            })
            ->with(['member', 'product.project', 'agency'])
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function form(Form $form): Form
    {
        $developer = auth('member')->user()?->developer;

        return $form
            ->schema([
                TextInput::make('invoice')
                    ->label('Invoice')
                    ->disabled()
                    ->dehydrated(true)
                    ->default(fn() => BookingTransaction::generateUniqueTrxId())
                    ->helperText('Invoice akan dibuat secara otomatis'),

                Select::make('product_id')
                    ->label('Product')
                    ->options(function () use ($developer) {
                        if (!$developer) {
                            return [];
                        }

                        return Product::with('project')
                            ->whereIn('status', ['Tersedia'])
                            ->whereHas('project', function (Builder $query) use ($developer) {
                                $query->where('developer_id', $developer->id);
                            })
                            ->get()
                            ->mapWithKeys(function ($product) {
                                $productName = $product->nama_product ?? 'No Product';
                                $projectName = $product->project->nama_project ?? 'No Project';
                                return [$product->id => "{$productName} - {$projectName}"];
                            });
                    })
                    ->searchable()
                    ->required()
                    ->preload()
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set) {
                        if ($state) {
                            $product = Product::find($state);
                            if ($product) {
                                $hargaTanah = $product->harga ?? 0;
                                $diskon = $product->discount ?? 0;
                                $totalHarga = $hargaTanah - $diskon;

                                $set('harga_tanah', $hargaTanah);
                                $set('diskon', $diskon);
                                $set('total_harga', $totalHarga);
                            }
                        }
                    }),

                Select::make('member_id')
                    ->label('Member')
                    ->options(function () {
                        return Member::all()->mapWithKeys(function ($member) {
                            $nama = $member->nama ?? 'No Name';
                            $telepon = $member->telepon ?? 'No Phone';
                            return [$member->id => "{$nama} - {$telepon}"];
                        });
                    })
                    ->searchable()
                    ->required()
                    ->preload(),

                Select::make('agency_id')
                    ->label('Agency (Marketing)')
                    ->options(function () {
                        return Agency::all()->mapWithKeys(function ($agency) {
                            $nama = $agency->nama ?? 'No Name';
                            $telepon = $agency->telepon ?? 'No Phone';
                            return [$agency->id => "{$nama} - {$telepon}"];
                        });
                    })
                    ->searchable()
                    ->preload(),

                TextInput::make('harga_tanah')
                    ->prefix('Rp')
                    ->label('Harga Tanah')
                    ->numeric()
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set, callable $get) {
                        $diskon = $get('diskon') ?? 0;
                        $set('total_harga', $state - $diskon);
                    }),

                TextInput::make('diskon')
                    ->prefix('Rp')
                    ->label('Diskon')
                    ->numeric()
                    ->default(0)
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set, callable $get) {
                        $hargaTanah = $get('harga_tanah') ?? 0;
                        $set('total_harga', $hargaTanah - $state);
                    }),

                TextInput::make('total_harga')
                    ->prefix('Rp')
                    ->label('Total Harga')
                    ->numeric()
                    ->required()
                    ->disabled()
                    ->dehydrated(true),

                TextInput::make('jumlah_uang_booking')
                    ->prefix('Rp')
                    ->label('Harga Booking')
                    ->numeric()
                    ->required()
                    ->default(100000),

                Select::make('status')
                    ->label('Status')
                    ->options([
                        'pending' => 'Pending',
                        'cancel' => 'Cancel',
                        'booking' => 'Booking',
                    ])
                    ->visible(fn($record) => $record !== null)
                    ->default('pending')
                    ->reactive(),

                DateTimePicker::make('tanggal_bayar')
                    ->label('Tanggal Bayar')
                    ->timezone('Asia/Jakarta')
                    ->displayFormat('d M Y H:i')
                    ->visible(fn(callable $get) => $get('status') === 'booking')
                    ->required(fn(callable $get) => $get('status') === 'booking')
                    ->default(now()->setTimezone('Asia/Jakarta')),

                Select::make('payment_method')
                    ->label('Metode Pembayaran')
                    ->options([
                        'qris' => 'QRIS',
                        'bank_transfer' => 'Transfer Bank',
                        'cash' => 'Cash',
                    ])
                    ->visible(fn($record) => $record !== null),

                Hidden::make('is_paid')
                    ->default(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        $developer = auth('member')->user()?->developer;

        return $table
            ->poll('20s')
            ->striped()
            ->columns([
                TextColumn::make('invoice')
                    ->label('Invoice')
                    ->searchable(),

                TextColumn::make('product.nama_product')
                    ->label('Produk')
                    ->formatStateUsing(function ($state, $record) {
                        $productName = $record->product->nama_product ?? 'No Product';
                        $projectName = $record->product->project->nama_project ?? 'No Project';

                        return "{$productName}-{$projectName}";
                    })
                    ->searchable(),

                TextColumn::make('member.nama')
                    ->label('Member')
                    ->formatStateUsing(fn($state, $record) => $record->member->nama ?? 'No Member')
                    ->searchable(),

                TextColumn::make('agency.nama')
                    ->label('Marketing')
                    ->formatStateUsing(fn($state, $record) => $record->agency->nama ?? '')
                    ->searchable(),

                TextColumn::make('jumlah_uang_booking')
                    ->label('Harga Booking')
                    ->formatStateUsing(fn($state) => 'Rp ' . number_format($state, 0, ',', '.')),

                TextColumn::make('status')
                    ->label('Status')
                    ->formatStateUsing(fn($state) => match ($state) {
                        'pending' => 'Pending',
                        'cancel' => 'Cancel',
                        'booking' => 'Booking',
                        default => ucfirst($state),
                    })
                    ->badge()
                    ->color(fn($state) => match ($state) {
                        'pending' => 'warning',
                        'cancel' => 'danger',
                        'booking' => 'success',
                        default => 'gray',
                    }),

                TextColumn::make('tanggal_bayar')
                    ->label('Tanggal Bayar')
                    ->sortable()
                    ->formatStateUsing(function ($state, $record) {
                        if ($record->status === 'booking') {
                            return \Carbon\Carbon::parse($state)
                                ->timezone('Asia/Jakarta')
                                ->locale('id')
                                ->isoFormat('dddd, D MMMM YYYY, HH:mm');
                        }
                        return '';
                    }),

                TextColumn::make('payment_method')
                    ->label('Metode Pembayaran')
                    ->sortable()
                    ->formatStateUsing(fn($state) => match ($state) {
                        'qris' => 'QRIS',
                        'bank_transfer' => 'Transfer Bank',
                        'cash' => 'Cash',
                        default => ucfirst($state),
                    }),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'pending' => 'Pending',
                        'cancel' => 'Cancel',
                        'booking' => 'Booking',
                    ]),
                SelectFilter::make('payment_method')
                    ->label('Metode Pembayaran')
                    ->options([
                        'qris' => 'QRIS',
                        'bank_transfer' => 'Transfer Bank',
                        'cash' => 'Cash',
                    ]),
                SelectFilter::make('project')
                    ->label('Project')
                    ->options(function () use ($developer) {
                        if (!$developer) {
                            return [];
                        }

                        return Project::where('developer_id', $developer->id)
                            ->pluck('nama_project', 'id');
                    })
                    ->query(function (Builder $query, array $data): Builder {
                        return $query->when(
                            $data['value'],
                            fn(Builder $query, $projectId): Builder => $query->whereHas('product', function (Builder $query) use ($projectId) {
                                $query->where('project_id', $projectId);
                            })
                        );
                    }),

                Tables\Filters\TrashedFilter::make(),

            ])
            ->actions([])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBookingTransactions::route('/'),
        ];
    }
}

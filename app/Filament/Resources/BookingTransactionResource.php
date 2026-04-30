<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingTransactionResource\Pages;
use App\Models\BookingTransaction;
use App\Models\Product;
use App\Models\Member;
use App\Models\Agency;
use App\Models\FeeTransaction;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Jobs\WhatsAppBookingMemberTransaction;
use App\Jobs\WhatsAppBookingAgencyTransaction;
use App\Jobs\WhatsAppClosingMemberTransaction;
use App\Jobs\WhatsAppClosingAgencyTransaction;
use App\Services\PurchaseTransactionService;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Textarea;
use Filament\Support\RawJs;

class BookingTransactionResource extends Resource
{
    protected static ?string $model = BookingTransaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    protected static ?string $navigationLabel = 'Transaksi Booking';

    protected static ?string $navigationGroup = 'Transaksi';

    protected static ?string $pluralModelLabel = 'Transaksi Booking';
    protected static ?string $modelLabel = 'Transaksi Booking';

    public static function getNavigationBadge(): ?string
    {
        $count = static::getModel()::where('status', 'pending')->count();

        return $count > 0 ? (string) $count : null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'warning';
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->whereIn('status', ['pending', 'booking', 'cancel'])
            ->whereHas('product', function ($query) {
                $query->where('status', 'Tersedia')
                    ->orWhere('status', 'Booking')
                    ->orWhere('status', 'Pending');
            })
            ;
    }

    public static function form(Form $form): Form
    {
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
                    ->options(function () {
                        return Product::with('project')
                            ->whereIn('status', ['Tersedia'])
                            ->get()
                            ->mapWithKeys(function ($product) {
                                $productName = $product->nama_product ?? 'No Product';
                                $projectName = $product->project->nama_project ?? 'No Project';
                                return [$product->id => "{$productName} - {$projectName}"];
                            });
                    })
                    ->searchable()
                    ->required()
                    ->preload(),

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
                    ->label('Agency')
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
                    ->required(),

                TextInput::make('diskon')
                    ->prefix('Rp')
                    ->label('Diskon')
                    ->numeric()
                    ->default(0),

                TextInput::make('total_harga')
                    ->prefix('Rp')
                    ->label('Total Harga')
                    ->numeric()
                    ->required(),

                TextInput::make('jumlah_uang_booking')
                    ->prefix('Rp')
                    ->label('Harga Booking')
                    ->numeric()
                    ->required(),

                Select::make('status')
                    ->label('Status')
                    ->options([
                        'pending' => 'Pending',
                        'cancel' => 'Cancel',
                        'booking' => 'Booking',
                    ])
                    ->visible(fn($record) => $record !== null)
                    ->default('pending'),

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
                    ->default(false)

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->poll('20s')
            ->striped()
            ->columns([
                TextColumn::make('invoice')
                    ->label('Invoice')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('product.nama_product')
                    ->label('Product')
                    ->formatStateUsing(function ($state, $record) {
                        $productName = $record->product->nama_product ?? 'No Product';
                        $projectName = $record->product->project->nama_project ?? 'No Project';

                        return "{$productName}-{$projectName}";
                    })
                    ->sortable()
                    ->searchable(),

                TextColumn::make('member.nama')
                    ->label('Member')
                    ->formatStateUsing(fn($state, $record) => $record->member->nama ?? 'No Member')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('agency.nama')
                    ->label('Marketing')
                    ->formatStateUsing(fn($state, $record) => $record->agency->nama ?? '')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('jumlah_uang_booking')
                    ->label('Harga Booking')
                    ->sortable()
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
                        default => ucfirst($state),  // For other status values, capitalize the first letter
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
                Tables\Filters\TrashedFilter::make(),

            ])
            ->actions([
                Tables\Actions\Action::make('konfirmasi')
                    ->label('Konfirmasi')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->visible(fn($record) => in_array($record->status, ['pending', 'booking']))
                    ->requiresConfirmation()
                    ->modalHeading('Konfirmasi Transaksi')
                    ->modalDescription(fn($record) => match ($record->status) {
                        'pending' => 'Isi detail pembayaran sebelum mengubah status menjadi "booking".',
                        'booking' => $record->agency_id
                            ? 'Produk akan ditandai sebagai "TERJUAL". Silakan masukkan fee marketing.'
                            : 'Produk akan ditandai sebagai "TERJUAL".',
                    })
                    ->modalButton('Ya, Konfirmasi')
                    ->form(fn($record) => match ($record->status) {
                        'pending' => [
                            DateTimePicker::make('tanggal_bayar')
                                ->label('Tanggal Bayar')
                                ->required()
                                ->default(now())
                                ->timezone('Asia/Jakarta'),
                            Select::make('payment_method')
                                ->label('Metode Pembayaran')
                                ->required()
                                ->options([
                                    'qris' => 'QRIS',
                                    'bank_transfer' => 'Transfer Bank',
                                    'cash' => 'Cash',
                                ]),
                        ],
                        'booking' => [
                            Placeholder::make('info_produk')
                                ->label('Produk')
                                ->content(fn() => "{$record->product->project->nama_project} — {$record->product->nama_product}"),

                            Grid::make(2)
                                ->schema([
                                    Placeholder::make('info_harga_tanah')
                                        ->label('Harga Tanah')
                                        ->content(fn() => 'Rp ' . number_format($record->harga_tanah, 0, ',', '.')),

                                    Placeholder::make('info_diskon')
                                        ->label('Diskon')
                                        ->content(fn() => 'Rp ' . number_format($record->diskon, 0, ',', '.')),

                                    Placeholder::make('info_total_harga')
                                        ->label('Total Harga ')
                                        ->content(fn() => 'Rp ' . number_format($record->total_harga, 0, ',', '.')),

                                    Placeholder::make('info_harga_booking')
                                        ->label('Uang Booking')
                                        ->content(fn() => 'Rp ' . number_format($record->jumlah_uang_booking, 0, ',', '.')),
                                ]),
                            ...($record->agency_id ? [
                                TextInput::make('jumlah_fee')
                                    ->label('Fee Marketing')
                                    ->prefix('Rp')
                                    ->numeric()
                                    ->required()
                                    ->mask(RawJs::make('$money($input)'))
                                    ->stripCharacters(',')
                                    ->placeholder('0'),
                            ] : []),

                            Select::make('metode_pembayaran')
                                ->label('Metode Pembayaran Pembelian')
                                ->options([
                                    'cash'       => 'Cash',
                                    'kredit'     => 'Kredit',
                                    'cash_tempo' => 'Cash Tempo',
                                ])
                                ->required()
                                ->live(),

                            TextInput::make('jumlah_dp')
                                ->label('Jumlah DP')
                                ->prefix('Rp')
                                ->numeric()
                                ->default(0)
                                ->mask(RawJs::make('$money($input)'))
                                ->stripCharacters(',')
                                ->live(debounce: 500)
                                ->visible(fn(Forms\Get $get) => in_array($get('metode_pembayaran'), ['kredit', 'cash_tempo'])),

                            Grid::make(2)
                                ->schema([
                                    Select::make('bulan_mulai_cicilan')
                                        ->label('Mulai Cicilan Bulan')
                                        ->options(collect(range(1, 12))->mapWithKeys(fn($m) => [
                                            $m => \Carbon\Carbon::create()->month($m)->translatedFormat('F'),
                                        ]))
                                        ->required()
                                        ->default(now()->addMonth()->month),

                                    Select::make('tahun_mulai_cicilan')
                                        ->label('Tahun')
                                        ->options(collect(range(now()->year, now()->year + 5))->mapWithKeys(fn($y) => [$y => $y]))
                                        ->required()
                                        ->default(now()->year),
                                ])
                                ->visible(fn(Forms\Get $get) => in_array($get('metode_pembayaran'), ['kredit', 'cash_tempo'])),

                            TextInput::make('jumlah_bulan_cicilan')
                                ->label('Jumlah Bulan Cicilan')
                                ->numeric()
                                ->minValue(1)
                                ->maxValue(360)
                                ->suffix('bulan')
                                ->live(debounce: 500)
                                ->required(fn(Forms\Get $get) => in_array($get('metode_pembayaran'), ['kredit', 'cash_tempo']))
                                ->visible(fn(Forms\Get $get) => in_array($get('metode_pembayaran'), ['kredit', 'cash_tempo'])),

                            Placeholder::make('preview_kalkulasi')
                                ->label('Estimasi Cicilan')
                                ->visible(fn(Forms\Get $get) => in_array($get('metode_pembayaran'), ['kredit', 'cash_tempo']))
                                ->content(function (Forms\Get $get) use ($record) {
                                    $rawDp   = str_replace([',', '.'], '', $get('jumlah_dp') ?? '0');
                                    $dp      = (float) $rawDp;

                                    $bulan   = (int) ($get('jumlah_bulan_cicilan') ?? 0);
                                    $sisa    = $record->total_harga - $record->jumlah_uang_booking - $dp;
                                    $nominal = ($bulan > 0) ? (int) round($sisa / $bulan) : 0;

                                    if ($sisa <= 0) {
                                        return new \Illuminate\Support\HtmlString(
                                            '<span style="color: red;">DP melebihi sisa tagihan. Periksa kembali.</span>'
                                        );
                                    }

                                    if ($bulan <= 0) {
                                        return '— Masukkan jumlah bulan cicilan';
                                    }

                                    return new \Illuminate\Support\HtmlString(
                                        '<div style="line-height: 1.8;">' .
                                            '<strong>Sisa tagihan</strong> : Rp ' . number_format($sisa, 0, ',', '.') . '<br>' .
                                            '<strong>Cicilan/bulan</strong> : Rp ' . number_format($nominal, 0, ',', '.') . '<br>' .
                                            '<strong>Total ' . $bulan . ' bulan</strong> : Rp ' . number_format($nominal * $bulan, 0, ',', '.') .
                                            '</div>'
                                    );
                                }),

                            FileUpload::make('pjb')
                                ->label('Upload PJB (PDF)')
                                ->disk('public')
                                ->directory('pjb')
                                ->acceptedFileTypes(['application/pdf'])
                                ->maxSize(5120),

                            Textarea::make('catatan')
                                ->label('Catatan')
                                ->rows(2),
                        ],
                    })
                    ->action(function ($record, array $data) {
                        if ($record->status === 'pending') {
                            $record->update([
                                'status' => 'booking',
                                'tanggal_bayar' => $data['tanggal_bayar'],
                                'payment_method' => $data['payment_method'],
                                'is_paid' => true,
                            ]);
                            // Update status produk jadi "Booking"
                            $record->product->update([
                                'status' => 'Booking'
                            ]);
                            // Validasi berdasarkan agency_id
                            if ($record->agency_id) {
                                WhatsAppBookingMemberTransaction::dispatch($record);
                                WhatsAppBookingAgencyTransaction::dispatch($record);
                            } else {
                                WhatsAppBookingMemberTransaction::dispatch($record);
                            }
                        } elseif ($record->status === 'booking') {
                            $service = app(PurchaseTransactionService::class);
                            $purchase = $service->createFromBooking($record, $data);

                            WhatsAppClosingMemberTransaction::dispatch($record);

                            if ($record->agency_id && ! empty($data['jumlah_fee'])) {
                                WhatsAppClosingAgencyTransaction::dispatch($record);
                            }

                            Notification::make()
                                ->title('Pembelian berhasil dibuat.')
                                ->success()
                                ->send();
                        }
                    }),

                Tables\Actions\Action::make('batal')
                    ->label('Batalkan')
                    ->icon('heroicon-o-x-circle')
                    ->color('danger')
                    ->visible(fn($record) => in_array($record->status, ['pending', 'booking']))
                    ->requiresConfirmation()
                    ->modalHeading('Yakin ingin membatalkan transaksi ini?')
                    ->modalDescription('Tindakan ini akan mengubah status transaksi menjadi "Cancel" dan produk akan tersedia kembali.')
                    ->modalButton('Ya, batalkan')
                    ->action(function ($record) {
                        $record->update(['status' => 'cancel']);
                        $record->product->update(['status' => 'Tersedia']);

                        Notification::make()
                            ->title('Transaksi berhasil dibatalkan.')
                            ->warning()
                            ->send();
                    }),
                Tables\Actions\EditAction::make(),

            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBookingTransactions::route('/'),
            'create' => Pages\CreateBookingTransaction::route('/create'),
            'edit' => Pages\EditBookingTransaction::route('/{record}/edit'),
        ];
    }
}

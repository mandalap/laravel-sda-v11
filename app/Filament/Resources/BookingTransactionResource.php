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
            });
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
                            ? 'Produk akan ditandai sebagai "TERJUAL" dan akan masuk ke riwayat transaksi. Silakan masukkan fee marketing.'
                            : 'Produk akan ditandai sebagai "TERJUAL" dan akan masuk ke riwayat transaksi.',
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
                        'booking' => $record->agency_id ? [
                            TextInput::make('jumlah_fee')
                                ->label('Fee Marketing')
                                ->prefix('Rp')
                                ->numeric()
                                ->required()
                                ->helperText('Masukkan fee untuk marketing yang menangani transaksi ini')
                                ->placeholder('0'),
                        ] : [],
                        default => []
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
                            $record->product->update(['status' => 'Terjual']);
                            // Simpan fee marketing ke tabel fee_transactions hanya jika ada agency_id
                            if ($record->agency_id && isset($data['jumlah_fee']) && $data['jumlah_fee'] > 0) {
                                FeeTransaction::create([
                                    'booking_transaction_id' => $record->id,
                                    'jumlah_fee' => $data['jumlah_fee'],
                                    'status' => 'tersedia',
                                    'created_at' => now(),
                                    'updated_at' => now(),
                                ]);
                                WhatsAppClosingAgencyTransaction::dispatch($record);
                            }
                            WhatsAppClosingMemberTransaction::dispatch($record);
                        }

                        Notification::make()
                            ->title('Transaksi berhasil dikonfirmasi.')
                            ->success()
                            ->send();
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

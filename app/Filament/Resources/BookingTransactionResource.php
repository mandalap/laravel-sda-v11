<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingTransactionResource\Pages;
use App\Models\BookingTransaction;
use App\Models\Product;
use App\Models\Member;
use App\Models\Agency;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;

class BookingTransactionResource extends Resource
{
    protected static ?string $model = BookingTransaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->whereIn('status', ['pending', 'booking', 'cancel'])
            ->whereHas('product', function ($query) {
                $query->where('status', 'Tersedia')
                      ->orWhere('status', 'Booking');
            });
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('invoice')
                    ->label('Invoice')
                    ->required(),

                Select::make('product_id')
                    ->label('Product')
                    ->options(Product::all()->pluck('nama_product', 'id'))
                    ->searchable()
                    ->required(),

                Select::make('member_id')
                    ->label('Member')
                    ->options(Member::all()->pluck('nama', 'id'))
                    ->searchable()
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
                    ->required()
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
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
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
                    ->sortable()
                    ->formatStateUsing(fn($state) => match ($state) {
                        'pending' => 'Pending',
                        'cancel' => 'Cancel',
                        'booking' => 'Booking',
                        default => ucfirst($state),  // For other status values, capitalize the first letter
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
                        'booking' => 'Produk akan ditandai sebagai "TERJUAL" dan akan masuk ke riwayat transaksi.',
                    })
                    ->modalButton('Ya, Konfirmasi')
                    ->form(fn($record) => $record->status === 'pending' ? [
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
                    ] : []) // kalau booking → tidak perlu input lagi
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
                        } elseif ($record->status === 'booking') {
                            $record->product->update(['status' => 'Terjual']);
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
                    }),
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

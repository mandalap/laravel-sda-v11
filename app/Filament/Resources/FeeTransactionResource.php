<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeeTransactionResource\Pages;
use App\Filament\Resources\FeeTransactionResource\RelationManagers;
use App\Models\FeeTransaction;
use App\Models\BookingTransaction;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeeTransactionResource extends Resource
{
    protected static ?string $model = FeeTransaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Fee Transaksi';

    protected static ?string $navigationGroup = 'Transaksi';

    protected static ?string $pluralModelLabel = 'Fee Transaksi';
    protected static ?string $modelLabel = 'Fee Transaksi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('booking_transaction_id')
                    ->label('Booking Transaction')
                    ->options(function () {
                        return BookingTransaction::with(['member', 'product.project', 'agency'])
                            ->whereHas('agency') // Hanya tampilkan booking yang memiliki agency
                            ->where('status', 'booking')
                            ->get()
                            ->mapWithKeys(function ($booking) {
                                $invoice = $booking->invoice ?? 'No Invoice';
                                $memberName = $booking->member->nama ?? 'No Member';
                                $productName = $booking->product->nama_product ?? 'No Product';
                                $projectName = $booking->product->project->nama_project ?? 'No Project';
                                $agencyName = $booking->agency->nama ?? 'No Agency';

                                $label = "{$invoice} - {$memberName} - {$projectName}-{$productName} - {$agencyName}";

                                return [$booking->id => $label];
                            });
                    })
                    ->searchable()
                    ->required()
                    ->preload()
                    ->helperText('Pilih transaksi booking yang sudah dikonfirmasi dan memiliki agency'),

                TextInput::make('jumlah_fee')
                    ->label('Jumlah Fee')
                    ->prefix('Rp')
                    ->numeric()
                    ->required()
                    ->minValue(0)
                    ->placeholder('0')
                    ->helperText('Masukkan jumlah fee marketing'),

                Select::make('status')
                    ->label('Status Pengambilan')
                    ->options([
                        'tersedia' => 'Tersedia',
                        'diambil' => 'Diambil',
                    ])
                    ->required()
                    ->default('tersedia')
                    ->live() // Untuk reactive form
                    ->helperText('Status pengambilan fee oleh marketing'),

                DateTimePicker::make('tanggal_pengambilan')
                    ->label('Tanggal Pengambilan')
                    ->timezone('Asia/Jakarta')
                    ->displayFormat('d M Y H:i')
                    ->visible(fn(callable $get) => $get('status') === 'diambil')
                    ->required(fn(callable $get) => $get('status') === 'diambil')
                    ->default(now()->setTimezone('Asia/Jakarta'))
                    ->helperText('Tanggal dan waktu fee diambil oleh marketing'),
            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('bookingTransaction.invoice')
                    ->label('Invoice')
                    ->formatStateUsing(fn($state, $record) => $record->bookingTransaction->invoice ?? '-')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('bookingTransaction.member.nama')
                    ->label('Member')
                    ->formatStateUsing(fn($state, $record) => $record->bookingTransaction->member->nama ?? '-')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('BookingTransaction.product.nama_product')
                    ->label('Product')
                    ->formatStateUsing(function ($state, $record) {
                        $productName = $record->bookingTransaction->product->nama_product ?? 'No Product';
                        $projectName = $record->bookingTransaction->product->project->nama_project ?? 'No Project';

                        return "{$projectName}-{$productName}";
                    })
                    ->sortable()
                    ->searchable(),
                TextColumn::make('bookingTransaction.product.status')
                    ->label('Status Product')
                    ->formatStateUsing(fn($state, $record) => $record->bookingTransaction->product->status ?? '-')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('bookingTransaction.agency.nama')
                    ->label('Agency')
                    ->formatStateUsing(fn($state, $record) => $record->bookingTransaction->agency->nama ?? '-')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('jumlah_fee')
                    ->label('Jumlah Fee')
                    ->sortable()
                    ->formatStateUsing(fn($state) => 'Rp ' . number_format($state, 0, ',', '.'))
                    ->searchable(),
                TextColumn::make('status')
                    ->label('Status Pengambilan')
                    ->sortable()
                    ->formatStateUsing(fn($state) => match ($state) {
                        'tersedia' => 'Tersedia',
                        'diambil' => 'Diambil',
                        default => ucfirst($state),
                    })
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'tersedia' => 'warning',
                        'diambil' => 'success',
                        default => 'gray',
                    })
                    ->searchable(),

                TextColumn::make('tanggal_pengambilan')
                    ->label('Tanggal Pengambilan')
                    ->sortable()
                    ->formatStateUsing(function ($state, $record) {
                        if ($record->status === 'diambil') {
                            return \Carbon\Carbon::parse($state)
                                ->timezone('Asia/Jakarta')
                                ->locale('id')
                                ->isoFormat('dddd, D MMMM YYYY, HH:mm');
                        }
                        return '';
                    }),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->label('Status Pengambilan')
                    ->options([
                        'tersedia' => 'Tersedia',
                        'diambil' => 'Diambil',
                    ]),
            ])
            ->actions([
                Tables\Actions\Action::make('tandai_diambil')
                    ->label('Tandai Diambil')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->visible(fn($record) => $record->status === 'tersedia')
                    ->requiresConfirmation()
                    ->modalHeading('Konfirmasi Pengambilan Fee')
                    ->modalDescription('Tandai fee ini sebagai sudah diambil oleh marketing?')
                    ->modalButton('Ya, Sudah Diambil')
                    ->form([
                        DateTimePicker::make('tanggal_pengambilan')
                            ->label('Tanggal Pengambilan')
                            ->required()
                            ->default(now())
                            ->timezone('Asia/Jakarta'),
                    ])
                    ->action(function ($record, array $data) {
                        $record->update([
                            'status' => 'diambil',
                            'tanggal_pengambilan' => $data['tanggal_pengambilan'],
                        ]);

                        \Filament\Notifications\Notification::make()
                            ->title('Fee berhasil ditandai sebagai diambil.')
                            ->success()
                            ->send();
                    }),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListFeeTransactions::route('/'),
            'edit' => Pages\EditFeeTransaction::route('/{record}/edit'),
        ];
    }
}

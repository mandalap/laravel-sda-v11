<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RiwayatTransactionResource\Pages;
use App\Filament\Resources\RiwayatTransactionResource\RelationManagers;
use App\Models\BookingTransaction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RiwayatTransactionResource extends Resource
{
    protected static ?string $model = BookingTransaction::class;

    protected static ?string $navigationLabel = 'Riwayat Transaksi';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Transaksi';

    protected static ?string $pluralModelLabel = 'Riwayat Transaksi';
    protected static ?string $modelLabel = 'Riwayat Transaksi';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
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

                TextColumn::make('product.status')
                    ->label('Status Product')
                    ->formatStateUsing(fn($state, $record) => $record->product->status ?? '')
                    ->sortable()
                    ->searchable(),

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
                //
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
            'index' => Pages\ListRiwayatTransactions::route('/'),
        ];
    }
}

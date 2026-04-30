<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PurchaseTransactionResource\Pages;
use App\Filament\Resources\PurchaseTransactionResource\RelationManagers;
use App\Filament\Resources\PurchaseTransactionResource\RelationManagers\InstallmentsRelationManager;
use App\Models\PurchaseInstallment;
use App\Models\PurchaseTransaction;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section as FormSection;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists\Components\Actions;
use Filament\Infolists\Components\Actions\Action;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\Section as InfolistSection;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Hugomyb\FilamentMediaAction\Infolists\Components\Actions\MediaAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PurchaseTransactionResource extends Resource
{
    protected static ?string $model = PurchaseTransaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Transaksi Pembelian';

    protected static ?string $navigationGroup = 'Transaksi';

    protected static ?string $pluralModelLabel = 'Transaksi Pembelian';

    protected static ?string $modelLabel = 'Transaksi Pembelian';

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FormSection::make('Informasi Pembelian')
                    ->columns(2)
                    ->schema([
                        TextInput::make('invoice')
                            ->label('Invoice')
                            ->disabled(),

                        DatePicker::make('tanggal_pembelian')
                            ->label('Tanggal Pembelian')
                            ->disabled(),

                        TextInput::make('nama_konsumen')
                            ->label('Konsumen')
                            ->disabled()
                            ->dehydrated(false)
                            ->afterStateHydrated(
                                fn($component, $record) =>
                                $component->state($record?->member?->nama ?? '-')
                            ),

                        TextInput::make('nama_produk')
                            ->label('Produk')
                            ->disabled()
                            ->dehydrated(false)
                            ->afterStateHydrated(function ($component, $record) {
                                $product = $record?->product?->nama_product ?? '-';
                                $project = $record?->product?->project?->nama_project ?? '-';
                                $component->state("{$product} — {$project}");
                            }),

                        Select::make('metode_pembayaran')
                            ->label('Metode Pembayaran')
                            ->options([
                                'cash'       => 'Cash',
                                'kredit'     => 'Kredit',
                                'cash_tempo' => 'Cash Tempo',
                            ])
                            ->disabled(),

                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'active'    => 'Aktif',
                                'paid'      => 'Lunas',
                                'cancelled' => 'Batal',
                            ]),
                    ]),

                FormSection::make('Rincian Harga')
                    ->columns(2)
                    ->schema([
                        TextInput::make('harga_tanah')
                            ->label('Harga Tanah')
                            ->prefix('Rp')
                            ->numeric(),

                        TextInput::make('diskon')
                            ->label('Diskon')
                            ->prefix('Rp')
                            ->numeric(),

                        TextInput::make('total_harga')
                            ->label('Total Harga')
                            ->prefix('Rp')
                            ->numeric(),

                        TextInput::make('harga_booking')
                            ->label('Harga Booking')
                            ->prefix('Rp')
                            ->numeric()
                            ->disabled(),

                        TextInput::make('jumlah_dp')
                            ->label('Jumlah DP')
                            ->prefix('Rp')
                            ->numeric(),
                    ]),

                FormSection::make('Cicilan')
                    ->columns(2)
                    ->visible(fn($record) => $record?->hasCicilan())
                    ->schema([
                        TextInput::make('jumlah_bulan_cicilan')
                            ->label('Jumlah Bulan Cicilan')
                            ->numeric()
                            ->suffix('bulan')
                            ->minValue(1)
                            ->live(debounce: 500),

                        TextInput::make('harga_cicilan_perbulan')
                            ->label('Cicilan Per Bulan')
                            ->prefix('Rp')
                            ->disabled()
                            ->dehydrated(false)
                            ->afterStateHydrated(function ($component, $record) {
                                $component->state($record?->harga_cicilan_perbulan ?? 0);
                            }),

                        Placeholder::make('preview_cicilan')
                            ->label('Preview Perubahan Cicilan')
                            ->columnSpanFull()
                            ->content(function (Forms\Get $get, $record) {
                                if (! $record) return '-';

                                $jumlahBulanBaru = (int) $get('jumlah_bulan_cicilan');
                                $jumlahDp        = (float) $get('jumlah_dp') ?? $record->jumlah_dp;

                                if ($jumlahBulanBaru <= 0) return '-';

                                $jumlahLunas = $record->installments()
                                    ->where('status', PurchaseInstallment::STATUS_PAID)
                                    ->count();

                                $totalSudahLunas = $record->installments()
                                    ->where('status', PurchaseInstallment::STATUS_PAID)
                                    ->sum('harga_cicilan');

                                $sisaBelumBayar  = $record->total_harga - $record->harga_booking - $jumlahDp - $totalSudahLunas;
                                $jumlahBulanBaru = max(0, $jumlahBulanBaru - $jumlahLunas);
                                $nominalBaru     = $jumlahBulanBaru > 0
                                    ? (int) round($sisaBelumBayar / $jumlahBulanBaru)
                                    : 0;

                                return new \Illuminate\Support\HtmlString(
                                    '<div style="line-height:1.8">' .
                                        '<strong>Sudah lunas</strong>  : ' . $jumlahLunas . ' cicilan<br>' .
                                        '<strong>Sisa cicilan baru</strong> : ' . $jumlahBulanBaru . ' cicilan<br>' .
                                        '<strong>Nominal baru/bulan</strong> : Rp ' . number_format($nominalBaru, 0, ',', '.') .
                                        '</div>'
                                );
                            }),
                    ]),

                FormSection::make('Dokumen PJB')
                    ->schema([
                        FileUpload::make('pjb')
                            ->label('File PJB (PDF)')
                            ->disk('public')
                            ->directory('pjb')
                            ->acceptedFileTypes(['application/pdf'])
                            ->maxSize(5120)
                            ->downloadable()
                            ->openable(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->striped()
            ->columns([
                TextColumn::make('invoice')
                    ->label('Invoice')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('member.nama')
                    ->label('Konsumen')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('product.nama_product')
                    ->label('Produk')
                    ->formatStateUsing(function ($state, $record) {
                        $product = $record->product->nama_product ?? '-';
                        $project = $record->product->project->nama_project ?? '-';
                        return "{$product} - {$project}";
                    })
                    ->searchable(),

                TextColumn::make('total_harga')
                    ->label('Harga Tanah')
                    ->formatStateUsing(fn($state) => 'Rp ' . number_format($state, 0, ',', '.')),

                TextColumn::make('metode_pembayaran')
                    ->label('Metode')
                    ->badge()
                    ->color(fn($state) => match ($state) {
                        'cash'       => 'success',
                        'kredit'     => 'info',
                        'cash_tempo' => 'warning',
                        default      => 'gray',
                    })
                    ->formatStateUsing(fn($state) => match ($state) {
                        'cash'       => 'Cash',
                        'kredit'     => 'Kredit',
                        'cash_tempo' => 'Cash Tempo',
                        default      => '-',
                    }),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn($state) => match ($state) {
                        'active'    => 'warning',
                        'paid'      => 'success',
                        'cancelled' => 'danger',
                        default     => 'gray',
                    })
                    ->formatStateUsing(fn($state) => match ($state) {
                        'active'    => 'Aktif',
                        'paid'      => 'Lunas',
                        'cancelled' => 'Batal',
                        default     => '-',
                    }),

                TextColumn::make('tanggal_pembelian')
                    ->label('Tanggal Beli')
                    ->date('d M Y')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('metode_pembayaran')
                    ->label('Metode')
                    ->options([
                        'cash'       => 'Cash',
                        'kredit'     => 'Kredit',
                        'cash_tempo' => 'Cash Tempo',
                    ]),

                Tables\Filters\SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'active'    => 'Aktif',
                        'paid'      => 'Lunas',
                        'cancelled' => 'Batal',
                    ]),
            ])
            ->actions([
                Tables\Actions\Action::make('detail')
                    ->label('Detail')
                    ->icon('heroicon-o-eye')
                    ->color('info')
                    ->url(fn($record) => static::getUrl('view', ['record' => $record])),

                Tables\Actions\EditAction::make()
                    ->label('Edit'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                InfolistSection::make('Detail Pembelian')
                    ->columns(3)
                    ->schema([
                        TextEntry::make('invoice')
                            ->label('No Invoice'),

                        TextEntry::make('tanggal_pembelian')
                            ->label('Tanggal Pembelian')
                            ->date('d M Y'),

                        TextEntry::make('status')
                            ->label('Status')
                            ->badge()
                            ->color(fn($state) => match ($state) {
                                'active'    => 'warning',
                                'paid'      => 'success',
                                'cancelled' => 'danger',
                                default     => 'gray',
                            })
                            ->formatStateUsing(fn($state) => match ($state) {
                                'active'    => 'Aktif',
                                'paid'      => 'Lunas',
                                'cancelled' => 'Batal',
                                default     => '-',
                            }),

                        TextEntry::make('member.nama')
                            ->label('Konsumen'),

                        TextEntry::make('product.nama_product')
                            ->label('Product')
                            ->formatStateUsing(function ($state, $record) {
                                $product = $record->product->nama_product ?? '-';
                                $project = $record->product->project->nama_project ?? '-';
                                return "{$product} - {$project}";
                            }),

                        TextEntry::make('metode_pembayaran')
                            ->label('Metode Pembayaran')
                            ->badge()
                            ->color(fn($state) => match ($state) {
                                'cash'       => 'success',
                                'kredit'     => 'info',
                                'cash_tempo' => 'warning',
                                default      => 'gray',
                            })
                            ->formatStateUsing(fn($state) => match ($state) {
                                'cash'       => 'Cash',
                                'kredit'     => 'Kredit',
                                'cash_tempo' => 'Cash Tempo',
                                default      => '-',
                            }),

                        Actions::make([
                            MediaAction::make('lihat_pjb')
                                ->label('Lihat PJB')
                                ->icon(null)
                                ->link()
                                ->media(fn($record) => $record->pjb
                                    ? asset('storage/' . $record->pjb)
                                    : null)
                                ->visible(fn($record) => (bool) $record->pjb),
                        ]),
                    ]),

                InfolistSection::make('Rincian Harga')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('harga_tanah')
                            ->label('Harga Tanah')
                            ->formatStateUsing(fn($state) => 'Rp ' . number_format($state, 0, ',', '.')),

                        TextEntry::make('diskon')
                            ->label('Diskon')
                            ->formatStateUsing(fn($state) => 'Rp ' . number_format($state, 0, ',', '.')),

                        TextEntry::make('total_harga')
                            ->label('Total Harga')
                            ->formatStateUsing(fn($state) => 'Rp ' . number_format($state, 0, ',', '.')),

                        TextEntry::make('harga_booking')
                            ->label('Harga Booking')
                            ->formatStateUsing(fn($state) => 'Rp ' . number_format($state, 0, ',', '.')),

                        TextEntry::make('jumlah_dp')
                            ->label('Jumlah DP')
                            ->formatStateUsing(fn($state) => 'Rp ' . number_format($state, 0, ',', '.')),
                    ]),

                InfolistSection::make('Rincian Cicilan')
                    ->visible(fn($record) => $record->hasCicilan())
                    ->columns(2)
                    ->schema([
                        TextEntry::make('jumlah_bulan_cicilan')
                            ->label('Jumlah Bulan Cicilan')
                            ->formatStateUsing(fn($state) => $state ? "{$state} bulan" : '-'),

                        TextEntry::make('harga_cicilan_perbulan')
                            ->label('Cicilan Per Bulan')
                            ->formatStateUsing(fn($state) => $state
                                ? 'Rp ' . number_format($state, 0, ',', '.')
                                : '-'),

                        TextEntry::make('cicilan_terbayar')
                            ->label('Cicilan Terbayar')
                            ->formatStateUsing(function ($state, $record) {
                                if (! $record->hasCicilan()) {
                                    return '-';
                                }
                                $jumlahLunas = $record->installments()
                                    ->where('status', PurchaseInstallment::STATUS_PAID)
                                    ->count();
                                return "{$jumlahLunas} cicilan";
                            }),

                        TextEntry::make('sisa_pembayaran')
                            ->label('Sisa Tagihan')
                            ->formatStateUsing(function ($state, $record) {
                                if ($record->isCash() || $record->isLunas()) {
                                    return 'Rp 0 (Lunas)';
                                }
                                $sudahDibayar = $record->installments()
                                    ->where('status', 'paid')
                                    ->sum('harga_cicilan');

                                $sisa = $record->harga_tanah - $record->harga_booking - $record->jumlah_dp - $sudahDibayar;

                                return 'Rp ' . number_format(max(0, $sisa), 0, ',', '.');
                            }),
                    ]),

                InfolistSection::make('Agency')
                    ->visible(fn($record) => $record->agency !== null)
                    ->columns(2)
                    ->schema([
                        TextEntry::make('agency.nama')
                            ->label('Nama'),
                        TextEntry::make('agency.telepon')
                            ->label('Nomor Telepon'),
                    ]),

                InfolistSection::make('Catatan Admin')
                    ->visible(fn($record) => $record->catatan !== null)
                    ->schema([
                        TextEntry::make('catatan')
                            ->formatStateUsing(fn($state) => $state ? $state : '-')
                    ]),
            ]);
    }


    public static function getRelations(): array
    {
        return [
            RelationManagers\InstallmentsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPurchaseTransactions::route('/'),
            'view' => Pages\ViewPurchaseTransaction::route('/{record}'),
            'edit' => Pages\EditPurchaseTransaction::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources\PurchaseTransactionResource\RelationManagers;

use App\Models\PurchaseInstallment;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Notifications\Notification;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Hugomyb\FilamentMediaAction\Tables\Actions\MediaAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\DB;

class InstallmentsRelationManager extends RelationManager
{
    protected static string $relationship = 'installments';

    protected static ?string $title = 'Data Cicilan';

    public function isReadOnly(): bool
    {
        return false;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('harga_cicilan')
                    ->label('Nominal Cicilan')
                    ->prefix('Rp')
                    ->numeric()
                    ->required(),

                DatePicker::make('tanggal_cicilan')
                    ->label('Bulan Cicilan')
                    ->displayFormat('F Y')
                    ->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('no_cicilan')
            ->defaultSort('no_cicilan')
            ->columns([
                TextColumn::make('no_cicilan')
                    ->label('Cicilan ke')
                    ->sortable(),

                TextColumn::make('tanggal_cicilan')
                    ->label('Bulan')
                    ->formatStateUsing(fn($state) => $state
                        ? \Carbon\Carbon::parse($state)->translatedFormat('F Y')
                        : '-'),

                TextColumn::make('harga_cicilan')
                    ->label('Nominal')
                    ->formatStateUsing(fn($state) => 'Rp ' . number_format($state, 0, ',', '.')),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn($state) => match ($state) {
                        'unpaid'        => 'gray',
                        'pending'       => 'warning',
                        'paid'          => 'success',
                        'rejected'      => 'danger',
                        'cancelled'     => 'danger',
                        default         => 'gray',
                    })
                    ->formatStateUsing(fn($state) => match ($state) {
                        'unpaid'        => 'Belum Dibayar',
                        'pending'       => 'Menunggu Verifikasi',
                        'paid'          => 'Lunas',
                        'rejected'      => 'Ditolak',
                        'cancelled'     => 'Batal',
                        default         => '-',
                    }),

                TextColumn::make('metode_pembayaran')
                    ->label('Metode Pembayaran')
                    ->badge()
                    ->color(fn($state) => match ($state) {
                        'cash'         => 'success',
                        'transfer'     => 'warning',
                        default        => 'gray',
                    })
                    ->formatStateUsing(fn($state) => match ($state) {
                        'cash'         => 'Cash',
                        'transfer'     => 'Transfer',
                        default        => '-',
                    }),

                IconColumn::make('bukti_pembayaran')
                    ->label('Bukti Pembayaran')
                    ->icon(fn($state) => $state ? 'heroicon-o-photo' : 'heroicon-o-x-mark')
                    ->color(fn($state) => $state ? 'info' : 'gray')
                    ->action(
                        MediaAction::make('lihat_bukti')
                            ->label('Bukti Pembayaran')
                            ->icon('heroicon-o-document-text')
                            ->media(fn($record) => $record->bukti_pembayaran
                                ? asset('storage/' . $record->bukti_pembayaran)
                                : null)
                            ->visible(fn($record) => (bool) $record->bukti_pembayaran)
                    ),

                IconColumn::make('kwitansi')
                    ->label('Kwitansi')
                    ->icon(fn($state) => $state ? 'heroicon-o-document-text' : 'heroicon-o-x-mark')
                    ->color(fn($state) => $state ? 'success' : 'gray')
                    ->action(
                        MediaAction::make('lihat_kwitansi')
                            ->label('Kwitansi')
                            ->icon('heroicon-o-document-text')
                            ->media(fn($record) => $record->kwitansi
                                ? asset('storage/' . $record->kwitansi)
                                : null)
                            ->visible(fn($record) => (bool) $record->kwitansi)
                    ),

                TextColumn::make('catatan_admin')
                    ->label('Catatan'),

            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'unpaid'        => 'Belum Dibayar',
                        'pending'       => 'Menunggu Verifikasi',
                        'paid'          => 'Lunas',
                        'rejected'      => 'Ditolak',
                        'cancelled'     => 'Batal',
                    ]),
                SelectFilter::make('metode_pembayaran')
                    ->label('Metode Pembayaran')
                    ->options([
                        'cash'         => 'Cash',
                        'transfer'     => 'Transfer',
                    ]),
                TrashedFilter::make(),
            ])
            ->actions([
                Action::make('konfirmasi')
                    ->label('Konfirmasi')
                    ->icon('heroicon-o-check-badge')
                    ->color('success')
                    ->visible(fn($record) => in_array($record->status, [
                        PurchaseInstallment::STATUS_PENDING,
                        PurchaseInstallment::STATUS_UNPAID,
                        PurchaseInstallment::STATUS_REJECTED,
                    ]))
                    ->form(function ($record) {
                        $fields = [
                            Placeholder::make('info')
                                ->label('Cicilan')
                                ->content(
                                    'Cicilan ke-' . $record->no_cicilan .
                                        ' | ' . \Carbon\Carbon::parse($record->tanggal_cicilan)->translatedFormat('F Y') .
                                        ' | Rp ' . number_format($record->harga_cicilan, 0, ',', '.')
                                ),
                        ];

                        if ($record->bukti_pembayaran) {
                            $fields[] = Placeholder::make('bukti')
                                ->label('Bukti Pembayaran')
                                ->content(new \Illuminate\Support\HtmlString(
                                    '<a href="' . asset('storage/' . $record->bukti_pembayaran) . '" 
                                        target="_blank" 
                                        class="text-primary-600 underline text-sm">
                                        Buka bukti pembayaran
                                    </a>'
                                ));
                        }

                        $fields[] = Select::make('aksi')
                            ->label('Tindakan')
                            ->options([
                                'approve' => 'Konfirmasi Lunas',
                                'reject'  => 'Tolak Pembayaran',
                            ])
                            ->required()
                            ->live();

                        $fields[] =  Select::make('metode_pembayaran')
                            ->label('Metode Pembayaran')
                            ->options([
                                PurchaseInstallment::METODE_CASH => 'Cash',
                                PurchaseInstallment::METODE_TRANSFER => 'Transfer',
                            ])
                            ->visible(fn(Get $get) => $get('aksi') === 'approve');

                        $fields[] = FileUpload::make('kwitansi')
                            ->label('Upload Kwitansi')
                            ->disk('public')
                            ->directory('kwitansi')
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'application/pdf'])
                            ->maxSize(2048)
                            ->optimize('webp')
                            ->visible(fn(Get $get) => $get('aksi') === 'approve');

                        $fields[] = Textarea::make('catatan_admin')
                            ->label('Catatan')
                            ->rows(3);

                        return $fields;
                    })
                    ->action(function ($record, array $data) {
                        DB::transaction(function () use ($record, $data) {
                            if ($data['aksi'] === 'approve') {
                                $record->update([
                                    'status'        => PurchaseInstallment::STATUS_PAID,
                                    'tanggal_bayar' => now(),
                                    'kwitansi'      => $data['kwitansi'] ?? null,
                                    'metode_pembayaran' => $data['metode_pembayaran'] ?? null,
                                    'verified_by'   => auth()->id(),
                                    'verified_at'   => now(),
                                    'catatan_admin' => $data['catatan_admin'] ?? null,
                                ]);

                                $available = $record->purchaseTransaction
                                    ->installments()
                                    ->where('status', '!=', PurchaseInstallment::STATUS_PAID)
                                    ->exists();

                                if (! $available) {
                                    $record->purchaseTransaction->update([
                                        'status'        => 'paid',
                                        'tanggal_lunas' => now()->toDateString(),
                                    ]);
                                }

                                Notification::make()
                                    ->title('Cicilan ke-' . $record->no_cicilan . ' berhasil dikonfirmasi.')
                                    ->success()
                                    ->send();
                            } else {
                                $record->update([
                                    'status'        => PurchaseInstallment::STATUS_REJECTED,
                                    'catatan_admin' => $data['catatan_admin'],
                                    'verified_by'   => auth()->id(),
                                    'verified_at'   => now(),
                                ]);

                                Notification::make()
                                    ->title('Pembayaran cicilan ke-' . $record->no_cicilan . ' ditolak.')
                                    ->warning()
                                    ->send();
                            }
                        });
                    }),

                EditAction::make()
                    ->label('Edit')
                    ->visible(fn($record) => ! $record->isLunas()),

                DeleteAction::make()
                    ->label('Hapus')
                    ->visible(fn($record) => ! $record->isLunas())
                    ->requiresConfirmation()
                    ->modalHeading('Hapus Cicilan')
                    ->modalDescription(fn($record) => new \Illuminate\Support\HtmlString(
                        'Anda akan menghapus <strong>cicilan ke-' . $record->no_cicilan . '</strong> ' .
                            'bulan <strong>' . \Carbon\Carbon::parse($record->tanggal_cicilan)->translatedFormat('F Y') . '</strong> ' .
                            'sejumlah <strong>Rp ' . number_format($record->harga_cicilan, 0, ',', '.') . '</strong>. ' .
                            'Tindakan ini tidak dapat dibatalkan.'
                    ))
                    ->modalSubmitActionLabel('Ya, Hapus'),
            ])
            ->bulkActions([
                ForceDeleteBulkAction::make(),
                RestoreBulkAction::make(),
            ]);
    }
}

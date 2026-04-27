<?php

namespace App\Filament\Resources\PurchaseTransactionResource\Pages;

use App\Filament\Resources\PurchaseTransactionResource;
use App\Models\PurchaseInstallment;
use App\Models\PurchaseTransaction;
use Filament\Actions;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\ViewField;
use Filament\Forms\Get;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Facades\DB;

class ViewPurchaseTransaction extends ViewRecord
{
    protected static string $resource = PurchaseTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make()
                ->label('Edit'),

            Actions\Action::make('upload_pjb')
                ->label('Upload PJB')
                ->icon('heroicon-o-document-arrow-up')
                ->color('info')
                ->visible(fn() => ! $this->record->pjb)
                ->form([
                    FileUpload::make('pjb')
                        ->label('File PJB (PDF)')
                        ->disk('public')
                        ->directory('pjb')
                        ->acceptedFileTypes(['application/pdf'])
                        ->maxSize(5120)
                        ->required(),
                ])
                ->action(function (array $data) {
                    $this->record->update([
                        'pjb' => $data['pjb'],
                    ]);

                    Notification::make()
                        ->title('PJB berhasil diupload.')
                        ->success()
                        ->send();

                    $this->refreshFormData(['pjb']);
                }),
                
            Actions\Action::make('batalkan')
                ->label('Batalkan Pembelian')
                ->icon('heroicon-o-x-circle')
                ->color('danger')
                ->visible(fn() => ! in_array($this->record->status, [
                    PurchaseTransaction::STATUS_PAID,
                    PurchaseTransaction::STATUS_CANCELLED,
                ]))
                ->requiresConfirmation()
                ->modalHeading('Batalkan Pembelian')
                ->modalDescription('Semua cicilan yang belum lunas akan dinonaktifkan. Tindakan ini tidak dapat dibatalkan.')
                ->modalSubmitActionLabel('Ya, Batalkan')
                ->action(function () {
                    DB::transaction(function () {
                        $this->record->installments()
                            ->where('status', '!=', PurchaseInstallment::STATUS_PAID)
                            ->update(['status' => PurchaseInstallment::STATUS_CANCELLED]);

                        $this->record->update(['status' => PurchaseTransaction::STATUS_CANCELLED]);
                        $this->record->product->update(['status' => 'Tersedia']);
                    });

                    Notification::make()
                        ->title('Pembelian berhasil dibatalkan.')
                        ->warning()
                        ->send();

                    $this->refreshFormData(['status']);
                }),
        ];
    }
}

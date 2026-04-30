<?php

namespace App\Filament\Resources\PurchaseTransactionResource\Pages;

use App\Filament\Resources\PurchaseTransactionResource;
use App\Services\PurchaseTransactionService;
use Filament\Resources\Pages\EditRecord;

class EditPurchaseTransaction extends EditRecord
{
    protected static string $resource = PurchaseTransactionResource::class;

    public int $originalJumlahBulan = 0;
    public float $originalJumlahDp  = 0;
    public float $originalTotalHarga = 0;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('view', ['record' => $this->record]);
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $this->originalJumlahBulan  = (int)   $this->record->jumlah_bulan_cicilan;
        $this->originalJumlahDp     = (float) $this->record->jumlah_dp;
        $this->originalTotalHarga   = (float) $this->record->total_harga;

        return $data;
    }

    protected function afterSave(): void
    {
        $record = $this->record->fresh();
        $data   = $this->data;

        if (! $record->hasCicilan()) {
            return;
        }

        $jumlahBulanBaru = (int)   ($data['jumlah_bulan_cicilan'] ?? 0);
        $jumlahDpBaru    = (float) ($data['jumlah_dp'] ?? 0);
        $totalHargaBaru  = (float) ($data['total_harga'] ?? 0);

        $adaPerubahan = $jumlahBulanBaru   !== $this->originalJumlahBulan
            || $jumlahDpBaru    !== $this->originalJumlahDp
            || $totalHargaBaru  !== $this->originalTotalHarga;

        if ($adaPerubahan) {
            app(PurchaseTransactionService::class)->update($record, $data);
        }
    }
}

<?php

namespace App\Filament\Resources\RiwayatTransactionResource\Pages;

use App\Filament\Resources\RiwayatTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRiwayatTransaction extends EditRecord
{
    protected static string $resource = RiwayatTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

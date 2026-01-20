<?php

namespace App\Filament\Resources\RiwayatTransactionResource\Pages;

use App\Filament\Resources\RiwayatTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRiwayatTransactions extends ListRecords
{
    protected static string $resource = RiwayatTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}

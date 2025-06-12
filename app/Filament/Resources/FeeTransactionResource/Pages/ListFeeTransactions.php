<?php

namespace App\Filament\Resources\FeeTransactionResource\Pages;

use App\Filament\Resources\FeeTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeeTransactions extends ListRecords
{
    protected static string $resource = FeeTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Developer\Resources\BookingTransactionResource\Pages;

use App\Filament\Developer\Resources\BookingTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBookingTransactions extends ListRecords
{
    protected static string $resource = BookingTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

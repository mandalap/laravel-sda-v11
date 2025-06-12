<?php

namespace App\Filament\Resources\FeeTransactionResource\Pages;

use App\Filament\Resources\FeeTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFeeTransaction extends EditRecord
{
    protected static string $resource = FeeTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

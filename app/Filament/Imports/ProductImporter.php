<?php

namespace App\Filament\Imports;

use App\Models\Product;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ProductImporter extends Importer
{
    protected static ?string $model = Product::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('code_product')
                ->label('Kode Produk')
                ->requiredMapping()
                ->rules(['required', 'string', 'max:255']),

            ImportColumn::make('nama_product')
                ->label('Nama Produk')
                ->requiredMapping()
                ->rules(['required', 'string', 'max:255']),

            ImportColumn::make('panjang')
                ->label('Panjang')
                ->numeric()
                ->rules(['nullable', 'numeric']),

            ImportColumn::make('lebar')
                ->label('Lebar')
                ->numeric()
                ->rules(['nullable', 'numeric']),

            ImportColumn::make('luas')
                ->label('Luas')
                ->numeric()
                ->rules(['nullable', 'numeric']),

            ImportColumn::make('harga')
                ->label('Harga')
                ->numeric()
                ->rules(['required', 'numeric']),

            ImportColumn::make('discount')
                ->label('Discount')
                ->numeric()
                ->rules(['nullable', 'numeric']),

            ImportColumn::make('pembayaran')
                ->label('Pembayaran')
                ->rules(['nullable', 'string']),

            ImportColumn::make('fee')
                ->label('Fee')
                ->numeric()
                ->rules(['nullable', 'numeric']),

            ImportColumn::make('status')
                ->label('Status')
                ->rules(['nullable', 'string']),

            ImportColumn::make('jenis')
                ->label('Jenis')
                ->rules(['nullable', 'string']),
        ];
    }

    public function resolveRecord(): ?Product
    {
        return Product::firstOrNew([
            'code_product' => $this->data['code_product'],
            'project_id'   => $this->options['project_id'],
        ]);
    }

    protected function beforeFill(): void
    {
        $nullableFields = ['panjang', 'lebar', 'luas', 'discount', 'fee', 'pembayaran', 'status', 'jenis'];

        foreach ($nullableFields as $field) {
            if (isset($this->data[$field]) && $this->data[$field] === '') {
                $this->data[$field] = null;
            }
        }

        $this->data['project_id'] = $this->options['project_id'];
        
        $exists = Product::where('code_product', $this->data['code_product'])
            ->where('project_id', $this->options['project_id'])
            ->exists();

        if (!$exists) {
            $this->data['slug'] = Str::slug($this->data['nama_product'] ?? '') . '-' . uniqid();
        }
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Import produk selesai. ' . number_format($import->successful_rows) . ' baris berhasil diimport.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' baris gagal.';
        }

        return $body;
    }
}

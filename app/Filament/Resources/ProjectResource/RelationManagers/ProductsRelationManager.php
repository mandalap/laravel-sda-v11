<?php

namespace App\Filament\Resources\ProjectResource\RelationManagers;

use App\Filament\Imports\ProductImporter;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Actions\ImportAction;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action as TableAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ProductsRelationManager extends RelationManager
{
    protected static string $relationship = 'products';

    protected static ?string $title = 'Daftar Produk';

    protected static ?string $recordTitleAttribute = 'nama_product';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Product')
                    ->schema([
                        TextInput::make('code_product')
                            ->label('Kode Product')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(50)
                            ->suffixAction(
                                Action::make('generate')
                                    ->icon('heroicon-m-arrow-path')
                                    ->action(function (Forms\Set $set) {
                                        $random = 'SDA-' . strtoupper(substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 10));
                                        $set('code_product', $random);
                                    })
                            )
                            ->placeholder('Klik icon untuk generate otomatis'),

                        TextInput::make('nama_product')
                            ->label('Nama Product')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Contoh: Blok A1, Rumah Type 36'),

                        Select::make('jenis')
                            ->label('Jenis')
                            ->options([
                                'Jual' => 'Jual',
                                'Sewa' => 'Sewa',
                                'Jual/Sewa' => 'Jual/Sewa',
                            ])
                            ->required()
                            ->native(false)
                            ->default('Jual'),

                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'Tersedia' => 'Tersedia',
                                'Booking' => 'Booking',
                                'Pending' => 'Pending',
                                'Terjual' => 'Terjual',
                            ])
                            ->required()
                            ->native(false)
                            ->default('Tersedia'),
                    ])
                    ->columns(2),

                Section::make('Spesifikasi')
                    ->schema([
                        TextInput::make('panjang')
                            ->label('Panjang (m)')
                            ->numeric()
                            ->required()
                            ->suffix('m')
                            ->step(0.01)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function ($state, Forms\Get $get, Forms\Set $set) {
                                $lebar = $get('lebar');
                                if ($state && $lebar) {
                                    $set('luas', $state * $lebar);
                                }
                            }),

                        TextInput::make('lebar')
                            ->label('Lebar (m)')
                            ->numeric()
                            ->required()
                            ->suffix('m')
                            ->step(0.01)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function ($state, Forms\Get $get, Forms\Set $set) {
                                $panjang = $get('panjang');
                                if ($state && $panjang) {
                                    $set('luas', $state * $panjang);
                                }
                            }),

                        TextInput::make('luas')
                            ->label('Luas (m²)')
                            ->numeric()
                            ->required()
                            ->suffix('m²')
                            ->step(0.01)
                            ->disabled()
                            ->dehydrated()
                            ->helperText('Otomatis dihitung dari panjang x lebar'),
                    ])
                    ->columns(3),

                Section::make('Harga & Pembayaran')
                    ->schema([
                        TextInput::make('harga')
                            ->label('Harga')
                            ->numeric()
                            ->required()
                            ->prefix('Rp')
                            ->placeholder('0')
                            // ->live(onBlur: true)
                            ->afterStateUpdated(function ($state, Forms\Get $get, Forms\Set $set) {
                                $discount = $get('discount');
                                if ($state && $discount) {
                                    $hargaSetelahDiskon = $state - $discount;
                                    $set('harga_setelah_diskon', $hargaSetelahDiskon);
                                }
                            }),

                        TextInput::make('discount')
                            ->label('Diskon')
                            ->numeric()
                            ->prefix('Rp')
                            ->default(0)
                            ->placeholder('0')
                            // ->live(onBlur: true)
                            ->afterStateUpdated(function ($state, Forms\Get $get, Forms\Set $set) {
                                $harga = $get('harga');
                                if ($harga) {
                                    $hargaSetelahDiskon = $harga - ($state ?? 0);
                                    $set('harga_setelah_diskon', $hargaSetelahDiskon);
                                }
                            }),

                        Placeholder::make('harga_setelah_diskon')
                            ->label('Harga Setelah Diskon')
                            ->content(function (Forms\Get $get) {
                                $harga = $get('harga') ?? 0;
                                $discount = $get('discount') ?? 0;
                                $total = $harga - $discount;
                                return 'Rp ' . number_format($total, 0, ',', '.');
                            }),

                        Select::make('pembayaran')
                            ->label('Metode Pembayaran')
                            ->options([
                                'CASH' => 'CASH',
                                'CASH TEMPO' => 'CASH TEMPO',
                                'KREDIT' => 'KREDIT',
                                'SEMUA' => 'SEMUA',
                            ])
                            ->required()
                            ->native(false)
                            ->default('CASH'),
                    ])
                    ->columns(2),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->deferLoading()
            ->recordTitleAttribute('nama_product')
            ->striped()
            ->columns([
                TextColumn::make('code_product')
                    ->label('Kode Produk')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->weight('bold'),

                TextColumn::make('nama_product')
                    ->label('Nama Produk')
                    ->searchable()
                    ->sortable()
                    ->wrap(),

                TextColumn::make('luas')
                    ->label('Luas')
                    ->suffix(' m²')
                    ->numeric(
                        decimalPlaces: 2,
                        decimalSeparator: ',',
                        thousandsSeparator: '.',
                    )
                    ->sortable()
                    ->alignEnd(),

                TextColumn::make('harga')
                    ->label('Harga')
                    ->money('IDR')
                    ->sortable()
                    ->alignEnd(),

                TextColumn::make('discount')
                    ->label('Diskon')
                    ->money('IDR')
                    ->sortable()
                    ->alignEnd()
                    ->toggleable(),

                BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'success' => 'Tersedia',
                        'warning' => 'Booking',
                        'info' => 'Pending',
                        'danger' => 'Terjual',
                    ])
                    ->sortable(),

                TextColumn::make('jenis')
                    ->label('Jenis')
                    ->badge()
                    ->color('gray')
                    ->sortable()
                    ->toggleable(),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'tersedia' => 'Tersedia',
                        'terjual'  => 'Terjual',
                        'booking'  => 'Booking',
                    ]),
                Tables\Filters\TrashedFilter::make(),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
                ImportAction::make()
                    ->label('Import Produk')
                    ->importer(ProductImporter::class)
                    ->options(['project_id' => $this->getOwnerRecord()->id])
                    ->icon('heroicon-o-arrow-up-tray'),
            ])
            ->actions([
                TableAction::make('changeStatus')
                    ->label('Ubah Status')
                    ->icon('heroicon-o-arrow-path')
                    ->color('warning')
                    ->form([
                        Select::make('status')
                            ->label('Status Baru')
                            ->options([
                                'Tersedia' => 'Tersedia',
                                'Booking' => 'Booking',
                                'Pending' => 'Pending',
                                'Terjual' => 'Terjual',
                            ])
                            ->required()
                            ->default(fn($record) => $record->status),
                    ])
                    ->action(function (Product $record, array $data): void {
                        $oldStatus = $record->status;
                        $record->update([
                            'status' => $data['status']
                        ]);

                        Notification::make()
                            ->title('Status Berhasil Diubah')
                            ->body("Status produk '{$record->nama_product}' berhasil diubah dari {$oldStatus} menjadi {$data['status']}")
                            ->success()
                            ->send();
                    })
                    ->requiresConfirmation()
                    ->modalHeading('Ubah Status Product')
                    ->modalDescription(fn($record) => "Apakah Anda yakin ingin mengubah status product '{$record->nama_product}'?")
                    ->modalSubmitActionLabel('Ya, Ubah Status'),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),

                    Tables\Actions\BulkAction::make('bulkChangeStatus')
                        ->label('Ubah Status Massal')
                        ->icon('heroicon-o-arrow-path')
                        ->color('warning')
                        ->form([
                            Select::make('status')
                                ->label('Status Baru')
                                ->options([
                                    'Tersedia' => 'Tersedia',
                                    'Booking' => 'Booking',
                                    'Pending' => 'Pending',
                                    'Terjual' => 'Terjual',
                                ])
                                ->required(),
                        ])
                        ->action(function ($records, array $data): void {
                            $count = $records->count();
                            foreach ($records as $record) {
                                $record->update([
                                    'status' => $data['status']
                                ]);
                            }

                            Notification::make()
                                ->title('Status Berhasil Diubah')
                                ->body("{$count} produk berhasil diubah statusnya menjadi {$data['status']}")
                                ->success()
                                ->send();
                        })
                        ->requiresConfirmation()
                        ->modalHeading('Ubah Status Produk Terpilih')
                        ->modalDescription('Apakah Anda yakin ingin mengubah status semua produk yang dipilih?')
                        ->modalSubmitActionLabel('Ya, Ubah Status')
                        ->deselectRecordsAfterCompletion(),
                ]),
            ]);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}

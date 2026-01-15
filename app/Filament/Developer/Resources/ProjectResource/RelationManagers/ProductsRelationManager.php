<?php

namespace App\Filament\Developer\Resources\ProjectResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

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
                                'Cash' => 'Cash',
                                'Cash Tempo' => 'Cash Tempo',
                                'Kredit' => 'Kredit',
                            ])
                            ->required()
                            ->native(false)
                            ->default('Cash'),
                    ])
                    ->columns(2),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('nama_product')
            ->striped()
            ->columns([
                Tables\Columns\TextColumn::make('code_product')
                    ->label('Kode Produk')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('nama_product')
                    ->label('Nama Produk')
                    ->searchable()
                    ->sortable()
                    ->wrap(),

                Tables\Columns\TextColumn::make('luas')
                    ->label('Luas')
                    ->suffix(' m²')
                    ->numeric(
                        decimalPlaces: 2,
                        decimalSeparator: ',',
                        thousandsSeparator: '.',
                    )
                    ->sortable()
                    ->alignEnd(),

                Tables\Columns\TextColumn::make('harga')
                    ->label('Harga')
                    ->money('IDR')
                    ->sortable()
                    ->alignEnd(),

                Tables\Columns\TextColumn::make('discount')
                    ->label('Diskon')
                    ->money('IDR')
                    ->sortable()
                    ->alignEnd()
                    ->toggleable(),

                Tables\Columns\BadgeColumn::make('status')
                    ->label('Status')
                    ->colors([
                        'success' => 'Tersedia',
                        'warning' => 'Booking',
                        'info' => 'Pending',
                        'danger' => 'Terjual',
                    ])
                    ->sortable(),

                Tables\Columns\TextColumn::make('jenis')
                    ->label('Jenis')
                    ->badge()
                    ->color('gray')
                    ->sortable()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'Tersedia' => 'Tersedia',
                        'Booking' => 'Booking',
                        'Pending' => 'Pending',
                        'Terjual' => 'Terjual',
                    ])
                    ->native(false),

                Tables\Filters\SelectFilter::make('jenis')
                    ->options([
                        'Jual' => 'Jual',
                        'Sewa' => 'Sewa',
                        'Jual/Sewa' => 'Jual/Sewa',
                    ])
                    ->native(false),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->label('Tambah Product')
                    ->icon('heroicon-o-plus')
                    ->disabled(fn($livewire) => $livewire->ownerRecord->is_approved !== 'Diterima')
                    ->tooltip(
                        fn($livewire) => $livewire->ownerRecord->is_approved !== 'Diterima'
                            ? 'Project harus disetujui admin terlebih dahulu'
                            : null
                    ),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->visible(fn($record) => $record->status === 'Tersedia'),
                Tables\Actions\DeleteAction::make()
                    ->visible(fn($record) => $record->status === 'Tersedia'),

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([]),
            ])
            ->modifyQueryUsing(fn(Builder $query) => $query->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]));
    }
}

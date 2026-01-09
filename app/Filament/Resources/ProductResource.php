<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Lokasi;
use App\Models\Product;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\Action as TableAction;
use Filament\Notifications\Notification;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    protected static ?string $navigationGroup = 'Data Master';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('project_id')
                    ->label('Project')
                    ->options(Project::all()->pluck('nama_project', 'id'))
                    ->searchable()
                    ->required(),

                TextInput::make('code_product')
                    ->label('ID Product')
                    ->helperText('ID Product Harus Unik')
                    ->required()
                    ->suffixAction(
                        Action::make('generateCode')
                            ->icon('heroicon-m-arrow-path')
                            ->action(function ($set) {
                                $random = 'SDA-' . strtoupper(substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 10));
                                $set('code_product', $random);
                            })
                    ),

                TextInput::make('nama_product')
                    ->label('Nama Product')
                    ->helperText('Masukkan nama blok A / B1')
                    ->required(),

                TextInput::make('panjang')
                    ->label('Panjang')
                    ->numeric()
                    ->required(),

                TextInput::make('lebar')
                    ->label('Lebar')
                    ->numeric()
                    ->required(),

                TextInput::make('luas')
                    ->label('Luas')
                    ->numeric()
                    ->required(),

                TextInput::make('harga')
                    ->label('Harga')
                    ->numeric()
                    ->required(),

                TextInput::make('discount')
                    ->label('Diskon')
                    ->numeric(),

                TextInput::make('fee')
                    ->label('Fee Marketing')
                    ->numeric()
                    ->required(),

                Select::make('pembayaran')
                    ->options([
                        'Cash' => 'Cash',
                        'Cash Tempo' => 'Cash Tempo',
                        'Kredit' => 'Kredit',
                    ])
                    ->required(),

                Select::make('status')
                    ->options([
                        'Tersedia' => 'Tersedia',
                        'Booking' => 'Booking',
                        'Pending' => 'Pending',
                        'Terjual' => 'Terjual',
                    ])
                    ->required(),

                Select::make('jenis')
                    ->options([
                        'Jual' => 'Jual',
                        'Sewa' => 'Sewa',
                        'Jual/Sewa' => 'Jual/Sewa',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->deferLoading()
            ->striped()
            ->columns([
                // TextColumn::make('project.developer.nama')
                //     ->label('Developer')
                //     ->formatStateUsing(fn($state, $record) => $record->project->developer->nama ?? 'No Developer')
                //     ->sortable()
                //     ->searchable(),

                TextColumn::make('project.nama_project')
                    ->label('Project')
                    ->formatStateUsing(fn($state, $record) => $record->project->nama_project ?? 'No Project')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('project.kategori.kategori')
                    ->label('Kategori')
                    ->formatStateUsing(fn($state, $record) => $record->project->kategori->kategori ?? 'No Kategori')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('nama_product')
                    ->label('Nama Product')
                    ->formatStateUsing(fn($state, $record) => $record->nama_product ?? 'No Nama Product')
                    ->searchable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->formatStateUsing(fn($state, $record) => $record->status ?? 'No Status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Tersedia' => 'success',
                        'Booking' => 'warning',
                        'Pending' => 'info',
                        'Terjual' => 'danger',
                        default => 'gray',
                    })
                    ->sortable()
                    ->searchable(),

                TextColumn::make('harga')
                    ->label('Harga')
                    ->formatStateUsing(fn($state, $record) =>
                    $record->harga
                        ? 'Rp' . number_format($record->harga, 0, ',', '.')
                        : 'No Harga'),

                TextColumn::make('discount')
                    ->label('Diskon')
                    ->formatStateUsing(fn($state, $record) =>
                    $record->discount
                        ? 'Rp' . number_format($record->discount, 0, ',', '.')
                        : '-'),

                TextColumn::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->dateTime()
                    ->sortable()
                    ->formatStateUsing(function ($state, $record) {
                        return \Carbon\Carbon::parse($state)
                            ->locale('id')
                            ->timezone('Asia/Jakarta')
                            ->isoFormat('dddd, D MMMM YYYY, HH:mm');

                        return '';
                    })
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('project_id')
                    ->label('Project')
                    ->searchable()
                    ->relationship('project', 'nama_project'),

                SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'Tersedia' => 'Tersedia',
                        'Booking' => 'Booking',
                        'Pending' => 'Pending',
                        'Terjual' => 'Terjual',
                    ]),

                Tables\Filters\TrashedFilter::make(),
            ], layout: FiltersLayout::AboveContent)
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
                Tables\Actions\ViewAction::make()
                    ->label('Detail')
                    ->color('warning'),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PromoBannerResource\Pages;
use App\Filament\Resources\PromoBannerResource\RelationManagers;
use App\Models\PromoBanner;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;


class PromoBannerResource extends Resource
{
    protected static ?string $model = PromoBanner::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                FileUpload::make('image')
                    ->label('Banner (1083 x 360 - 360 pixels)')
                    ->image()
                    ->optimize('webp')
                    ->required(),
                TextInput::make('title')
                    ->label('Judul')
                    ->reactive() // Penting: Membuat field kategori reaktif
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state)); // Memanggil mutator secara manual
                    })
                    ->unique(ignoreRecord: true)
                    ->required(),
                TextInput::make('slug')
                    ->disabled()
                    ->label('Tampilan'),
                Textarea::make('description'),
                Select::make('status')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ])
                    ->default('active')
                    ->required(),
                TextInput::make('redirect_url') // Tambahkan field untuk URL tujuan
                    ->label('Redirect URL')
                    ->placeholder('https://example.com/target atau /products/special')
                    ->columnSpanFull()
                    ->required(),
                DateTimePicker::make('start_date')
                    ->label('Tanggal Mulai')
                    ->timezone('Asia/Jakarta')
                    ->displayFormat('d M Y H:i')
                    ->required()
                    ->default(now()),
                DateTimePicker::make('end_date')
                    ->label('Tanggal Berakhir')
                    ->after('start_date')
                    ->displayFormat('d M Y H:i')
                    ->required()
                    ->default(now()->addDays(30))
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Gambar'),
                TextColumn::make('title')
                    ->label('Judul'),
                TextColumn::make('description')
                    ->label('Deskripsi'),
                TextColumn::make('status')
                    ->label('Status')
                    ->formatStateUsing(fn($state) => match ($state) {
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    }),
                TextColumn::make('redirect_url')
                    ->label('Redirect URL')
                    ->limit(30),
                TextColumn::make('start_date')
                    ->label('Tanggal Mulai')
                    ->sortable()
                    ->formatStateUsing(function ($state, $record) {
                        return \Carbon\Carbon::parse($state)
                            ->timezone('Asia/Jakarta')
                            ->locale('id')
                            ->isoFormat('dddd, D MMMM YYYY, HH:mm');
                    }),
                TextColumn::make('end_date')
                    ->label('Tanggal Berakhir')
                    ->sortable()
                    ->formatStateUsing(function ($state, $record) {
                        return \Carbon\Carbon::parse($state)
                            ->timezone('Asia/Jakarta')
                            ->locale('id')
                            ->isoFormat('dddd, D MMMM YYYY, HH:mm');
                    }),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListPromoBanners::route('/'),
            'create' => Pages\CreatePromoBanner::route('/create'),
            'edit' => Pages\EditPromoBanner::route('/{record}/edit'),
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

<?php

namespace App\Filament\Developer\Resources;

use App\Filament\Developer\Resources\ProjectResource\Pages;
use App\Filament\Developer\Resources\ProjectResource\RelationManagers;
use App\Models\Developer;
use App\Models\Jenis;
use App\Models\Kategori;
use App\Models\Kelompok;
use App\Models\Lokasi;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    protected static ?string $navigationLabel = 'Project';

    // protected static ?string $navigationGroup = 'Project Management';

    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = 'nama_project';

    public static function getEloquentQuery(): Builder
    {
        $developer = auth('member')->user()?->developer;

        return parent::getEloquentQuery()
            ->where('developer_id', $developer?->id)
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('Project Tabs')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('Detail')
                            ->schema([
                                Forms\Components\Grid::make(2)
                                    ->schema([
                                        Hidden::make('developer_id')
                                            ->default(fn() => auth('member')->user()->developer?->id),

                                        Select::make('lokasi_id')
                                            ->label('Lokasi')
                                            ->options(Lokasi::all()->pluck('regency.name', 'id'))
                                            ->searchable()
                                            ->required(),

                                        Select::make('kategori_id')
                                            ->label('Kategori')
                                            ->options(Kategori::all()->pluck('kategori', 'id'))
                                            ->searchable()
                                            ->required(),

                                        Select::make('jenis_id')
                                            ->label('Jenis')
                                            ->options(Jenis::all()->pluck('jenis', 'id'))
                                            ->searchable()
                                            ->required(),

                                        TextInput::make('nama_project')
                                            ->label('Nama Project')
                                            ->required()
                                            ->maxLength(255)
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(
                                                fn($state, Forms\Set $set) =>
                                                $set('slug', Str::slug($state))
                                            )
                                            ->placeholder('Contoh: PARIT SIDIQ'),

                                        TextInput::make('slug')
                                            ->label('Slug URL')
                                            ->required()
                                            ->maxLength(255)
                                            ->unique(ignoreRecord: true)
                                            ->disabled()
                                            ->dehydrated(),

                                        FileUpload::make('thumbnail')
                                            ->nullable()
                                            ->image()
                                            ->optimize('webp'),

                                        Textarea::make('alamat_project')
                                            ->label('Alamat Lokasi')
                                            ->rows(5)
                                            ->maxLength(255)
                                            ->required(),

                                        TextInput::make('url_video')
                                            ->label('Link Video')
                                            ->nullable(),

                                        TextInput::make('latlang')
                                            ->label('Lat-Lang Google Maps')
                                            ->nullable()
                                            ->helperText('Contoh: -0.058839944096, 109.2474171703'),

                                        RichEditor::make('deskripsi')
                                            ->label('Deskripsi')
                                            ->nullable(),

                                        Select::make('sertifikat')
                                            ->options([
                                                'SHM' => 'SHM',
                                                'SKT' => 'SKT',
                                            ])
                                            ->required(),

                                        Select::make('status_sertifikat')
                                            ->label('Status Sertifikat')
                                            ->options([
                                                'Siap Balik Nama' => 'Siap Balik Nama',
                                                'Proses Pemecahan' => 'Proses Pemecahan',
                                            ])
                                            ->required(),

                                        Select::make('transaksi')
                                            ->options([
                                                'Cash' => 'Cash',
                                                'Cash Tempo' => 'Cash Tempo',
                                                'Kredit' => 'Kredit',
                                            ])
                                            ->required(),

                                        Select::make('kelompok_id')
                                            ->label('Kelompok')
                                            ->options(Kelompok::all()->pluck('kelompok', 'id'))
                                            ->searchable()
                                            ->required(),
                                    ]),
                            ])
                            ->columnSpanFull(),
                        Forms\Components\Tabs\Tab::make('Foto')
                            ->schema([
                                Forms\Components\Grid::make(2)
                                    ->schema([
                                        Forms\Components\Repeater::make('photos')
                                            ->relationship('projectPhotos')
                                            ->label('Foto Project')
                                            ->schema([
                                                FileUpload::make('photo')

                                                    ->image()
                                                    ->optimize('webp'),
                                            ])
                                            ->required(),
                                    ]),
                            ])
                            ->columnSpanFull(),
                        Forms\Components\Tabs\Tab::make('Brosur')
                            ->schema([
                                Forms\Components\Grid::make(2)
                                    ->schema([
                                        Forms\Components\Repeater::make('photo')
                                            ->relationship('projectsBrosur')
                                            ->label('Brosur Project')
                                            ->schema([
                                                FileUpload::make('photo')

                                                    ->image()
                                                    ->optimize('webp'),
                                            ])
                                            ->required(),
                                    ]),
                            ])
                            ->columnSpanFull(),
                        Forms\Components\Tabs\Tab::make('Fasilitas')
                            ->schema([
                                Forms\Components\Grid::make(2)
                                    ->schema([
                                        Forms\Components\Repeater::make('fasilitas')
                                            ->relationship('projectFasilitas')
                                            ->label('Fasilitas Project')
                                            ->schema([
                                                TextInput::make('fasilitas'),
                                            ])
                                            ->required(),
                                    ]),
                            ])
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->striped()
            ->columns([
                TextColumn::make('nama_project')
                    ->label('Nama Project')
                    ->searchable()
                    ->weight('bold')
                    ->wrap(),

                TextColumn::make('kategori.kategori')
                    ->label('Kategori')
                    ->formatStateUsing(fn($state, $record) => $record->kategori->kategori ?? 'No Kategori')
                    ->searchable(),

                TextColumn::make('lokasi.regency.name')
                    ->label('Lokasi')
                    ->formatStateUsing(fn($state, $record) => $record->lokasi->regency->name ?? 'No Lokasi')
                    ->searchable(),

                TextColumn::make('product_count')
                    ->label('Jumlah Produk')
                    ->getStateUsing(fn($record) => $record->products()->count())
                    ->badge()
                    ->color('info')
                    ->alignCenter()
                    ->sortable(query: function ($query, $direction) {
                        return $query->withCount('products')->orderBy('products_count', $direction);
                    }),

                TextColumn::make('available_products')
                    ->label('Tersedia')
                    ->getStateUsing(fn($record) => $record->products()->where('status', 'Tersedia')->count())
                    ->badge()
                    ->color('success')
                    ->alignCenter()
                    ->toggleable(),

                BadgeColumn::make('is_approved')
                    ->label('Status')
                    ->colors([
                        'warning' => 'Pending',
                        'success' => 'Diterima',
                        'danger' => 'Ditolak',
                    ]),

                ImageColumn::make('thumbnail'),

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
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\ProductsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'view' => Pages\ViewProject::route('/{record}'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        $developer = auth('member')->user()?->developer;


        if (!$developer) {
            return null;
        }

        $pending = static::getModel()::where('developer_id', $developer->id)
            ->where('is_approved', 'Pending')
            ->count();

        return $pending > 0 ? (string) $pending : null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'warning';
    }
}

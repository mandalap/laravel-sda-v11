<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DeveloperResource\Pages;
use App\Filament\Resources\DeveloperResource\RelationManagers;
use App\Models\Developer;
use App\Models\Member;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class DeveloperResource extends Resource
{
    protected static ?string $title = 'Developer';
    protected static ?string $model = Developer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rocket-launch';

    protected static ?string $navigationLabel = 'Developer';
    protected static ?string $navigationGroup = 'Data Master';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Select::make('member_id')
                    ->label('Member')
                    ->options(Member::all()->pluck('nama', 'id'))
                    ->searchable()
                    ->required(),

                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->label('Nama Developer'),

                Forms\Components\TextInput::make('telepon')
                    ->required()
                    ->numeric()
                    ->unique(ignoreRecord: true)
                    ->minLength(9),

                Forms\Components\TextInput::make('email')
                    ->email()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),


                Forms\Components\FileUpload::make('thumbnail')
                    ->required()
                    ->image()
                    ->optimize('webp')
                    ->afterStateUpdated(function ($state, callable $get) {
                        $existingThumbnail = $get('existing_thumbnail');

                        if ($existingThumbnail) {
                            Storage::delete($existingThumbnail);
                        }
                    }),

                Forms\Components\Hidden::make('existing_thumbnail')
                    ->default(fn($record) => $record ? $record->thumbnail : null),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('member.nama')
                    ->label('Nama Member')
                    ->formatStateUsing(fn($state, $record) => $record->member->nama ?? 'No Member')
                    ->searchable(),

                TextColumn::make('nama')
                    ->label('Nama Developer')
                    ->searchable(),

                TextColumn::make('telepon')
                    ->searchable(),

                TextColumn::make('email')
                    ->searchable(),

                ImageColumn::make('thumbnail'),

            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\Action::make('konfirmasi_developer')
                    ->label('Konfirmasi')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->visible(fn($record) => $record->status === 'pending' || $record->status === 'rejected')
                    ->requiresConfirmation()
                    ->modalHeading('Konfirmasi Developer')
                    ->modalDescription('Setuju menerima Developer ini?')
                    ->modalButton('Ya, Konfirmasi')
                    ->action(function ($record, array $data) {
                        $record->update([
                            'status' => 'approved',
                        ]);

                        \Filament\Notifications\Notification::make()
                            ->title('Developer berhasil dikonfirmasi.')
                            ->success()
                            ->send();
                    }),
                Tables\Actions\Action::make('tolak_developer')
                    ->label('Tolak')
                    ->icon('heroicon-o-x-circle')
                    ->color('danger')
                    ->visible(fn($record) => $record->status === 'pending')
                    ->requiresConfirmation()
                    ->modalHeading('Tolak Developer')
                    ->modalDescription('Setuju menolak Developer ini?')
                    ->modalButton('Ya, Tolak')
                    ->action(function ($record, array $data) {
                        $record->update([
                            'status' => 'rejected',
                        ]);

                        \Filament\Notifications\Notification::make()
                            ->title('Developer berhasil ditolak.')
                            ->success()
                            ->send();
                    }),

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
            'index' => Pages\ListDevelopers::route('/'),
            'create' => Pages\CreateDeveloper::route('/create'),
            'edit' => Pages\EditDeveloper::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function getNavigationBadge(): ?string
    {

        $pending = self::getModel()::where('status', 'Pending')
            ->count();

        return $pending > 0 ? (string) $pending : null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'warning';
    }
}

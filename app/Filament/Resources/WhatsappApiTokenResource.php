<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WhatsappApiTokenResource\Pages;
use App\Filament\Resources\WhatsappApiTokenResource\RelationManagers;
use App\Models\WhatsappApiToken;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WhatsappApiTokenResource extends Resource
{
    protected static ?string $model = WhatsappApiToken::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('sender')
                    ->required()
                    ->numeric(),
                TextInput::make('api_token')
                    ->required(),
                TextInput::make('url')
                    ->required(),
                Select::make('status')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ])
                    ->default('active')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('sender')
                    ->searchable(),
                TextColumn::make('api_token')
                    ->searchable(),
                TextColumn::make('url')
                    ->searchable(),
                TextColumn::make('status')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListWhatsappApiTokens::route('/'),
            'create' => Pages\CreateWhatsappApiToken::route('/create'),
            'edit' => Pages\EditWhatsappApiToken::route('/{record}/edit'),
        ];
    }
}

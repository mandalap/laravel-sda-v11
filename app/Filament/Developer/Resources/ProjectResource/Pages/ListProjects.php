<?php

namespace App\Filament\Developer\Resources\ProjectResource\Pages;

use App\Filament\Developer\Resources\ProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListProjects extends ListRecords
{
    protected static string $resource = ProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Project')
                ->icon('heroicon-o-plus'),
        ];
    }

    public function getTabs(): array
    {
        $developer = auth('member')->user()?->developer;

        if (!$developer) {
            return [];
        }

        return [
            'all' => Tab::make('Semua')
                ->badge(fn() => \App\Models\Project::where('developer_id', $developer->id)->count()),

            'pending' => Tab::make('Pending')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('is_approved', 'Pending'))
                ->badge(fn() => \App\Models\Project::where('developer_id', $developer->id)
                    ->where('is_approved', 'Pending')->count())
                ->badgeColor('warning'),

            'approved' => Tab::make('Disetujui')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('is_approved', 'Diterima'))
                ->badge(fn() => \App\Models\Project::where('developer_id', $developer->id)
                    ->where('is_approved', 'Diterima')->count())
                ->badgeColor('success'),

            'rejected' => Tab::make('Ditolak')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('is_approved', 'Ditolak'))
                ->badge(fn() => \App\Models\Project::where('developer_id', $developer->id)
                    ->where('is_approved', 'Ditolak')->count())
                ->badgeColor('danger'),
        ];
    }
}

<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use App\Filament\Resources\ProjectResource;
use App\Models\Project;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListProjects extends ListRecords
{
    protected static string $resource = ProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make('Semua')
                ->badge(fn() => Project::All()->count()),

            'pending' => Tab::make('Pending')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('is_approved', 'Pending'))
                ->badge(fn() => \App\Models\Project::where('is_approved', 'Pending')->count())
                ->badgeColor('warning'),

            'approved' => Tab::make('Disetujui')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('is_approved', 'Diterima'))
                ->badge(fn() => \App\Models\Project::where('is_approved', 'Diterima')->count())
                ->badgeColor('success'),

            'rejected' => Tab::make('Ditolak')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('is_approved', 'Ditolak'))
                ->badge(fn() => \App\Models\Project::where('is_approved', 'Ditolak')->count())
                ->badgeColor('danger'),
        ];
    }
}

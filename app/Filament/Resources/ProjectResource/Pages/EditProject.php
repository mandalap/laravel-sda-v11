<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use App\Filament\Resources\ProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class EditProject extends EditRecord
{
    protected static string $resource = ProjectResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $svgPath = $data['siteplan']['svg_path'] ?? null;
        unset($data['siteplan']);

        if ($svgPath && $record->siteplan && $record->siteplan->svg_path !== $svgPath) {
            Storage::disk('public')->delete($record->siteplan->svg_path);
        }

        if (! $svgPath && $record->siteplan) {
            Storage::disk('public')->delete($record->siteplan->svg_path);
            $record->siteplan()->delete();
        }

        $project = parent::handleRecordUpdate($record, $data);

        if ($svgPath) {
            $project->siteplan()->updateOrCreate(
                ['project_id' => $project->id],
                ['svg_path' => $svgPath]
            );
        }

        return $project;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}

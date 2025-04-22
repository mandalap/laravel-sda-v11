<?php

namespace App\Filament\Resources\TestimoniBannerResource\Pages;

use App\Filament\Resources\TestimoniBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestimoniBanner extends EditRecord
{
    protected static string $resource = TestimoniBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}

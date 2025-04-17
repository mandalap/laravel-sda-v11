<?php

namespace App\Filament\Resources\TestimoniBannerResource\Pages;

use App\Filament\Resources\TestimoniBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestimoniBanners extends ListRecords
{
    protected static string $resource = TestimoniBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

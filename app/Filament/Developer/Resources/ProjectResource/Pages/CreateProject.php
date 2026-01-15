<?php

namespace App\Filament\Developer\Resources\ProjectResource\Pages;

use App\Filament\Developer\Resources\ProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProject extends CreateRecord
{
    protected static string $resource = ProjectResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Project berhasil dibuat dan menunggu persetujuan admin';
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Set developer_id
        $data['developer_id'] = auth('member')->user()->developer->id;

        // Set status approval ke Pending
        $data['is_approved'] = 'Pending';

        return $data;
    }
}

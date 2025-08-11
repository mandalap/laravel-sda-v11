<?php

namespace App\Filament\Resources\MemberResource\Pages;

use App\Filament\Resources\MemberResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Laratrust\Models\Role;

class CreateMember extends CreateRecord
{
    protected static string $resource = MemberResource::class;

    protected function afterCreate(): void
    {
        // Menambahkan role 'member' setelah data dibuat
        $memberRole = Role::where('name', 'member')->first();
        $this->record->addRole($memberRole);
    }

}

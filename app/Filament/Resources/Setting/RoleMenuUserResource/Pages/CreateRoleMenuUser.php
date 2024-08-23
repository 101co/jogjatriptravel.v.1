<?php

namespace App\Filament\Resources\Setting\RoleMenuUserResource\Pages;

use App\Filament\Resources\Setting\RoleMenuUserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRoleMenuUser extends CreateRecord
{
    protected static string $resource = RoleMenuUserResource::class;
    
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['created_by'] = auth()->user()->name;
        $data['updated_by'] = auth()->user()->name;
        return $data;
    }
}

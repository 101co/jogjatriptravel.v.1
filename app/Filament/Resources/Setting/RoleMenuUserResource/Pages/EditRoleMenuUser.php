<?php

namespace App\Filament\Resources\Setting\RoleMenuUserResource\Pages;

use App\Filament\Resources\Setting\RoleMenuUserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRoleMenuUser extends EditRecord
{
    protected static string $resource = RoleMenuUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

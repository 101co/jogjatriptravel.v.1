<?php

namespace App\Filament\Resources\Master\RoleResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Support\Enums\MaxWidth;
use Filament\Resources\Pages\ManageRecords;
use App\Filament\Resources\Master\RoleResource;

class ManageRoles extends ManageRecords
{
    protected static string $resource = RoleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Add')
                ->modalAutofocus(false)
                ->modalHeading('Create Role')
                ->modalWidth(MaxWidth::Medium)
                ->mutateFormDataUsing(function (array $data): array 
                {
                    $data['created_by'] = auth()->user()->username;
                    $data['updated_by'] = auth()->user()->username;
                    return $data;
                }),
        ];
    }
}

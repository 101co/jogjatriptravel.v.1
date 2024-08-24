<?php

namespace App\Filament\Resources\Setting\RoleMenuUserResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Support\Enums\MaxWidth;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\Setting\RoleMenuUserResource;

class ListRoleMenuUsers extends ListRecords
{
    protected static string $resource = RoleMenuUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Add')
                ->modalAutofocus(false)
                ->modalHeading('Create Contact')
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

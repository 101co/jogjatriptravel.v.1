<?php

namespace App\Filament\Resources\Master\MenuResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Support\Enums\MaxWidth;
use Filament\Resources\Pages\ManageRecords;
use App\Filament\Resources\Master\MenuResource;

class ManageMenus extends ManageRecords
{
    protected static string $resource = MenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Add')
                ->modalAutofocus(false)
                ->modalHeading('Create Menu')
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

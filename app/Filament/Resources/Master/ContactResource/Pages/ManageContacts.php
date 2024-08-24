<?php

namespace App\Filament\Resources\Master\ContactResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Support\Enums\MaxWidth;
use Filament\Resources\Pages\ManageRecords;
use App\Filament\Resources\Master\ContactResource;

class ManageContacts extends ManageRecords
{
    protected static string $resource = ContactResource::class;

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

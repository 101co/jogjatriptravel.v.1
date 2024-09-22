<?php

namespace App\Filament\Resources\Transaction\TravelCatalogueResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Support\Enums\MaxWidth;
use Filament\Resources\Pages\ManageRecords;
use App\Filament\Resources\Transaction\TravelCatalogueResource;

class ManageTravelCatalogues extends ManageRecords
{
    protected static string $resource = TravelCatalogueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Add')
                ->modalAutofocus(false)
                ->modalHeading('Create City')
                ->modalWidth(MaxWidth::Medium)
                ->mutateFormDataUsing(function (array $data): array 
                {
                    // dd($data);
                    $data['created_by'] = auth()->user()->username;
                    $data['updated_by'] = auth()->user()->username;
                    return $data;
                }),
        ];
    }
}

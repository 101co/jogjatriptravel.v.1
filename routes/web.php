<?php

use App\Livewire\Main;
use App\Livewire\TourismCatalogue;
use App\Livewire\TourismCatalogueDetail;
use App\Models\Transaction\TravelCatalogue;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', Main::class);
Route::get('/{slug}', TourismCatalogueDetail::class);

Route::get('/clearCommand', function() 
{
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
});
    

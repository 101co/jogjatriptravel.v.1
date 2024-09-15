<?php

use App\Livewire\Main;
use App\Livewire\TourismCatalogue;
use App\Livewire\TourismCatalogueDetail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', Main::class);
Route::get('/travel-catalogue', TourismCatalogue::class);
Route::get('/travel-catalogue-detail', TourismCatalogueDetail::class);


Route::get('/symlink', function () {
    // $target ='/../../../applications/jogjatriptravel/demo/storage/app/public';
    // $link = $_SERVER['DOCUMENT_ROOT'].'/storage';
    // symlink($target, $link);
    // echo "Done**".$target."**".$link;

    // Artisan::command('php artisan config:clear');
    // Artisan::command('php artisan view:clear');
});

Route::get('/clearCommand', function() 
{
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
});
    

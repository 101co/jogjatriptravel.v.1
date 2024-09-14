<?php

use App\Livewire\Main;
use App\Livewire\TourismCatalogue;
use App\Livewire\TourismCatalogueDetail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', Main::class);
Route::get('/tourism-catalogue', TourismCatalogue::class);
Route::get('/tourism-catalogue-detail', TourismCatalogueDetail::class);


Route::get('/symlink', function () {
    // $target ='/../../../applications/jogjatriptravel/demo/storage/app/public';
    // $link = $_SERVER['DOCUMENT_ROOT'].'/storage';
    // symlink($target, $link);
    // echo "Done**".$target."**".$link;

    Artisan::command('php artisan config:clear');
});
    

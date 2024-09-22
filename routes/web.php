<?php

use App\Livewire\Main;
use App\Livewire\TourismCatalogue;
use App\Livewire\TourismCatalogueDetail;
use App\Models\Transaction\TravelCatalogue;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', Main::class);
// Route::get('/travel-catalogue', TourismCatalogue::class);
// Route::get('/travel-catalogue-detail', TourismCatalogueDetail::class);


Route::get('/{slug}', TourismCatalogueDetail::class);
// Route::get('/{slug}', function () {
//     // dd('workz**'.request()->segment('1'));
//     $data = TravelCatalogue::where('slug', '=',request()->segment('1'))->first();
//     // dd($data);
//     // $data = Invitation::where('slug', '=', request()->segment('1'))->first();
//     return view('viewer.example', ['data' => $data]);
// });


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
    

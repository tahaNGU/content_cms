<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\site\newsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//require __DIR__.'/auth.php';

Route::get('main', [\App\Http\Controllers\site\HomeController::class, 'main']);
Route::prefix('/news')->as('news.')->group(function () {
    Route::get('/', [newsController::class, 'index'])->name('_index');
    Route::get('/cat/{news_cat:seo_url}', [newsController::class, 'index'])->name('index');
});


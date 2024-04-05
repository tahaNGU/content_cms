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

require __DIR__.'/auth.php';

Route::get('main', [\App\Http\Controllers\site\HomeController::class, 'main'])->name('main');
Route::prefix('/news')->as('news.')->group(function () {
    Route::get('/', [newsController::class, 'index'])->name('index');
    Route::get('/cat/{news_cat:seo_url}', [newsController::class, 'index'])->name('index_cat');
    Route::get('/{news:seo_url}',[newsController::class,'show'])->name('show');
    Route::post('/news_send_email/{id}',[newsController::class,'mail'])->name('mail');
    Route::get('/{news:seo_url}/print',[newsController::class,'show'])->name('print');
});


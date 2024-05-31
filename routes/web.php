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

Route::get('', [\App\Http\Controllers\site\HomeController::class, 'main'])->name('main');
Route::get('about', [\App\Http\Controllers\site\HomeController::class, 'about'])->name('about');
Route::prefix('/news')->as('news.')->group(function () {
    Route::get('/', [newsController::class, 'index'])->name('index');
    Route::get('/cat/{news_cat:seo_url}', [newsController::class, 'index'])->name('index_cat');
    Route::get('/{news:seo_url}',[newsController::class,'show'])->name('show');
    Route::post('/news_send_email/{id}',[newsController::class,'mail'])->name('mail');
    Route::get('/{news:seo_url}/print',[newsController::class,'show'])->name('print');
});


Route::prefix('comment/{type}/{module_id}')->middleware('auth')->middleware('access')->as('comment.')->group(function (){
    Route::post('/store',[\App\Http\Controllers\site\user\commentController::class,'store'])->name('store');
});
Route::get('pages/{pages}',[\App\Http\Controllers\site\pageController::class,'page'])->name("page");
// Route::get('employment',[\App\Http\Controllers\EmploymentController::class,'show']);
//Route::get('/show/{model}',[\App\Http\Controllers\site\user\commentController::class,'show'])->name('comment.show');

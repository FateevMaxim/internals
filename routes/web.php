<?php

use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ZehuaController;
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

Route::get('/', [MainPageController::class, 'index'])->name('home');
Route::group(['prefix' => 'zehua'], function () {
    Route::get('categories', [ZehuaController::class, 'categories'])->name('zehua.categories');
    Route::get('products/{slug}', [ZehuaController::class, 'products'])->name('zehua.products');
    Route::get('product/{slug}', [ZehuaController::class, 'product'])->name('zehua.product');
});
Route::get('/symlink', function () {
    \Illuminate\Support\Facades\Artisan::call('storage:link');
});

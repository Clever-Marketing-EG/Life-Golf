<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\MetaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!

*/


/*
|--------------------------------------------------------------------------
| Products Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('products', ProductController::class);
Route::post('/images/products', [ImagesController::class, 'products'])->name('products.images');


/*
|---------------------------------------------------------------------------
| Categories Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('categories', CategoryController::class);
Route::post('/images/categories', [ImagesController::class, 'categories'])->name('categories.images');


/*
|---------------------------------------------------------------------------
| Articles Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('articles', ArticleController::class);
Route::post('/images/articles', [ImagesController::class, 'articles'])->name('articles.images');


/*
|---------------------------------------------------------------------------
| Meta Routes
|--------------------------------------------------------------------------
*/
Route::get('/meta', [MetaController::class, 'index'])->name('meta.index');
Route::post('/meta', [MetaController::class, 'store'])->name('meta.store');


/*
/*--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';


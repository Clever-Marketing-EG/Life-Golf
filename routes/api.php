<?php

use App\Http\Controllers\ImagesController;
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
Route::post('/products/images', [ImagesController::class, 'products'])->name('products.images');


/*
|---------------------------------------------------------------------------
| Categories Routes
|--------------------------------------------------------------------------
*/

Route::apiResource('categories', CategoryController::class);
Route::post('/categories/images', [ImagesController::class, 'categories'])->name('categories.images');

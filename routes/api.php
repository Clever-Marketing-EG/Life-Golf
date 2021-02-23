<?php

use App\Http\Controllers\ImagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
/*--------------------------------------------------------------------------
| Products Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('products', ProductController::class);
Route::post('/products/images', [ImagesController::class, 'products'])->name('products.images');


/*
/*--------------------------------------------------------------------------
| Categories Routes
|--------------------------------------------------------------------------
*/
Route::post('/categories/images', [ImagesController::class, 'categories'])->name('categories.images');



/*
/*--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});

<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\MetaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\GalleryController;
use App\Models\Meta;

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
| Terms Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('term', TermsController::class);
/*
|---------------------------------------------------------------------------
| Services Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('services', ServiceController::class);
Route::get('/services/type/{type}', [ServiceController::class, 'filter']);


/*
|---------------------------------------------------------------------------
| Videos Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('videos', VideoController::class);
Route::get('/videos/type/{type}', [VideoController::class, 'filter']);


/*
/*
|---------------------------------------------------------------------------
| Gallery Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('gallery', GalleryController::class);
Route::get('/gallery/type/{type}', [GalleryController::class, 'filter']);

/*

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
Route::put('/meta/update/{id}', [MetaController::class, 'update'])->name('meta.update');
Route::post('/images/meta', [ImagesController::class, 'meta'])->name('meta.images');

/* Meta Handling */
Route::get('/meta/text/{page}', [MetaController::class, 'showtextbypage']);
Route::get('/meta/image/{page}', [MetaController::class, 'showimagebypage']);
Route::get('/meta/{id}', [MetaController::class, 'getbyid']);
// Route::get('/meta/image/{id}',[MetaController::class,'showimagebypageone']);
/*
/*--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Route::group([
    'prefix' => 'auth'
], function () {

    Route::post('register', [AuthController::class, 'register'])
        ->name('auth.register');

    Route::post('login', [AuthController::class, 'login'])
        ->name('auth.login');

    Route::patch('update', [AuthController::class, 'update'])
        ->name('auth.update');

    Route::post('logout', [AuthController::class, 'logout'])
        ->name('auth.logout');

    Route::post('refresh', [AuthController::class, 'refresh'])
        ->name('auth.refresh');

    Route::post('me', [AuthController::class, 'me'])
        ->name('auth.name');

    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');
});

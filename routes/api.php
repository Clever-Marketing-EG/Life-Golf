
<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MetaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\PartnerController;

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


/*
|---------------------------------------------------------------------------
| Categories Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('categories', CategoryController::class);
Route::get('/categories/{category}/subcategories', [CategoryController::class, 'subCategories']);
Route::get('/categories/{category}/products', [CategoryController::class, 'products']);

/*
|---------------------------------------------------------------------------
| partners Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('partners', PartnerController::class);

/*
|---------------------------------------------------------------------------
| SubCategories Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('subcategories', SubCategoryController::class);
Route::get('/subcategories/{subcategory}/products', [SubCategoryController::class, 'products']);

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
Route::get('services/service/{name}', [ServiceController::class, 'filter']);

/*
|---------------------------------------------------------------------------
| Certificates Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('certificates', CertificateController::class);

/*
|---------------------------------------------------------------------------
| Videos Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('videos', VideoController::class);


/*
/*
|---------------------------------------------------------------------------
| Gallery Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('gallery', GalleryController::class);


/*
|---------------------------------------------------------------------------
| Articles Routes
|--------------------------------------------------------------------------
*/
Route::apiResource('articles', ArticleController::class);


/*
|---------------------------------------------------------------------------
| Meta Routes
|--------------------------------------------------------------------------
*/
Route::get('/meta', [MetaController::class, 'index'])->name('meta.index');
Route::patch('/meta/update/{meta}', [MetaController::class, 'update'])->name('meta.update');


/*
|--------------------------------------------------------------------------
| Images Routes
|--------------------------------------------------------------------------
*/
Route::post('/images', [ImageController::class, 'store'])->name('images.store');

/*
|---------------------------------------------------------------------------
| Mailing Routes
|--------------------------------------------------------------------------
*/
Route::group([
    'prefix' => 'mail'
], function () {
    Route::post('/contact-us', [FormsController::class, 'contactUs'])
        ->name('mail.contact');
    Route::post('/customize', [FormsController::class, 'customize'])
        ->name('mail.customize');
    Route::post('/order', [FormsController::class, 'order'])
        ->name('mail.order');
});


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


Route::fallback(function () {
    return response()->json([
        'success' => false,
        'message' => 'Not Found'
    ], 404);
});

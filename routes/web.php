<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
/*--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';

Route::get('/test', function () {
    Artisan::call('storage:link');
    Artisan::call('migrate:fresh --seed');
    return 'done';
});

Route::fallback(function (){
   return response()->json([
       'success' => false,
       'message' => 'Not Found!'
   ],404);
});


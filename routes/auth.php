<?php

use App\Http\Controllers\Auth\NewPasswordController;
use Illuminate\Support\Facades\Route;




Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
    ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
    ->name('password.update');


Route::get('/password-reset-confirm', [NewPasswordController::class, 'confirm'])
    ->name('password.reset.confirm');

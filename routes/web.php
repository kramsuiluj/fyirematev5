<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    LoginController,
    LogoutController
};

Route::group(['middleware' => 'guest'], function () {
    Route::view('/', 'index')->name('index');
    Route::post('/login', LoginController::class)->name('login');
});

Route::group(['middleware' => 'auth'], function () {
   Route::delete('/logout', LogoutController::class)->name('logout');
});

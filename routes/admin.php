<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AdminDashboardController,
    MarshalController,
    ChiefController,
    LocationController,
};

Route::group(['prefix' => 'administrator', 'as' => 'administrators.'], function () {
    Route::resources([
        'marshals' => MarshalController::class,
        'chiefs' => ChiefController::class
    ], ['except' => 'show']);

    Route::get('/locations/set', [LocationController::class, 'create'])->name('locations.create');
});

Route::get('/administrators/dashboard', AdminDashboardController::class)->name('administrators.dashboard');



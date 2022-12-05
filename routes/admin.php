<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AdminDashboardController,
};

Route::get('/administrators/dashboard', AdminDashboardController::class)->name('administrators.dashboard');

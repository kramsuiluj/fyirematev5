<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserDashboardController,
};

Route::get('/users/dashboard', [UserDashboardController::class])->name('users.dashboard');

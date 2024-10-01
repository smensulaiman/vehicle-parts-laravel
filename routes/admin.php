<?php
/**
 * Admin Routes
 */

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [AdminDashboardController::class, 'dashboard'])
    ->name('dashboard');

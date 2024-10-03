<?php
/**
 * Admin Routes
 */

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ShipmentController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [AdminDashboardController::class, 'dashboard'])
    ->name('dashboard');

/* Parts */
Route::resource('shipment', ShipmentController::class);

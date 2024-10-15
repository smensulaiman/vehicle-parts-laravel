<?php
/**
 * Admin Routes
 */

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\PartController;
use App\Http\Controllers\Admin\ShipmentController;
use App\Http\Controllers\Admin\VehicleController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [AdminDashboardController::class, 'dashboard'])
    ->name('dashboard');

/* Shipment */
Route::resource('shipment', ShipmentController::class);

/* Vehicle */
Route::resource('vehicle', VehicleController::class);

/* Part */
Route::resource('part', PartController::class);
Route::get('part/print/{vehicleId}', [PartController::class, 'print'])->name('part.print');

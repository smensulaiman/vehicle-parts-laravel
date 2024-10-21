<?php
/**
 * Admin Routes
 */

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\PartController;
use App\Http\Controllers\Admin\PaymentController;
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

/* Stripe */
Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');

Route::post('/handle-payment', [PaymentController::class, 'handlePayment'])->name('handle.payment');

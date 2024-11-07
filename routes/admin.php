<?php
/**
 * Admin Routes
 */

use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\PartCategoryController;
use App\Http\Controllers\Admin\PartController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\ShipmentController;
use App\Http\Controllers\Admin\VehicleController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [AdminDashboardController::class, 'dashboard'])
    ->name('dashboard');

/* Shipment */
Route::get('shipment/receive-request/{id}', [ShipmentController::class, 'handleReceiveRequest'])->name('shipment.receive.request');
Route::resource('shipment', ShipmentController::class);

/* Vehicle */
Route::get('/vehicle/models', [VehicleController::class, 'getModels'])->name('vehicle.models');
Route::resource('vehicle', VehicleController::class);

/* Part */
Route::get('part/print/{vehicleId}', [PartController::class, 'print'])->name('part.print');
Route::resource('part', PartController::class);

/* Part Category */
Route::resource('part-category', PartCategoryController::class);

/* Cart */
Route::resource('cart', CartController::class);

/* Stripe */
Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
Route::post('/handle-payment', [PaymentController::class, 'handlePayment'])->name('handle.payment');

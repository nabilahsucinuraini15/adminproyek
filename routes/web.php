<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\MandorController;
use App\Http\Controllers\PembelianController;

// Home route
Route::get('/', function () {
    return view('dashboard');
});

Route::resource('vendor', VendorController::class);
Route::resource('mandor', MandorController::class);
Route::resource('pembelian', PembelianController::class);


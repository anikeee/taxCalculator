<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\homeController::class, 'index'])->name('dashboard');
Route::post('/calculate-tax', [\App\Http\Controllers\homeController::class, 'calculateTax'])->name('calculate.tax');

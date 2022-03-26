<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\homeController::class, 'index'])->name('dashboard');

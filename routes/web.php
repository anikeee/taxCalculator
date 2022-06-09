<?php

use Illuminate\Support\Facades\Route;


Route::get('/calculator', [\App\Http\Controllers\homeController::class, 'index'])->name('dashboard');
Route::get('/', [\App\Http\Controllers\homeController::class, 'createStudent'])->name('createStudent');
Route::get('/studentDetails', [\App\Http\Controllers\homeController::class, 'studentDetails'])->name('studentDetails');
Route::get('/studentEdit/{id}', [\App\Http\Controllers\homeController::class, 'studentEdit'])->name('studentEdit');
Route::post('/storeStudent', [\App\Http\Controllers\homeController::class, 'storeStudent'])->name('store.student');
Route::post('/updateStudent/{id}', [\App\Http\Controllers\homeController::class, 'updateStudent'])->name('update.student');
Route::post('/calculate-tax', [\App\Http\Controllers\homeController::class, 'calculateTax'])->name('calculate.tax');


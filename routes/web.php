<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ClassController;


Route::get('cars', [CarController::class, 'index']);
Route::get('cars/create', [CarController::class, 'create']);
Route::post('cars', [CarController::class, 'store'])->name('cars.store');
Route::get('cars/{id}/edit', [CarController::class, 'edit'])->name('cars.edit');
Route::put('cars/{id}', [CarController::class, 'update'])->name('cars.update');
Route::get('cars/{id}/delete', [CarController::class, 'destroy'])->name('cars.destroy');


// get: show data
// post: submit new data to server
// put: update data in server
// patch
// delete: 
Route::get('classes', [ClassController::class, 'index']);
Route::get('classes/create', [ClassController::class, 'create']);
Route::post('classes', [ClassController::class, 'store'])->name('classes.store');
Route::get('classes/{id}/edit', [ClassController::class, 'edit'])->name('classes.edit');
Route::put('classes/{id}', [ClassController::class, 'update'])->name('classes.update');
Route::get('classes/{id}/delete', [ClassController::class, 'destroy'])->name('classes.destroy');
Route::get("show/{id}", [ClassController::class,"show"])->name('classes.show');

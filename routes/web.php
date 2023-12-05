<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CarController::class, 'index'])->name('index');

Route::prefix('cars')->name('cars')->group(function () {
    Route::get('show', [CarController::class, 'show'])->name('.show');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('dashboard')->name('dashboard')->group(function () {
        // CARS
        Route::prefix('cars')->name('.cars')->group(function () {
            Route::get('', [CarController::class, 'dashboard']);
            Route::get('create', [CarController::class, 'create'])->name('.create');
        });

        // PROPERTIES
        Route::prefix('properties')->name('.properties')->group(function () {
            Route::get('', [PropertyController::class, 'dashboard']);
            Route::get('create', [PropertyController::class, 'create'])->name('.create');
            Route::post('store', [PropertyController::class, 'store'])->name('.store');
            Route::prefix('{property}')->group(function () {
                Route::get('edit', [PropertyController::class, 'edit'])->name('.edit');
                Route::post('update', [PropertyController::class, 'update'])->name('.update');
                Route::get('delete', [PropertyController::class, 'delete'])->name('.delete');
            });
        });
        // Route::get('cars', [CarController::class, 'show'])->name('.show');
    });
});

require __DIR__ . '/auth.php';

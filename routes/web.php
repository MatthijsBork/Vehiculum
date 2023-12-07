<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarPropertiesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;

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
    Route::get('', [CarController::class, 'index'])->name('.index');
    Route::prefix('{car}')->group(function () {
        Route::get('show', [CarController::class, 'show'])->name('.show');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // USER
    Route::prefix('user')->name('user')->group(function () {
        Route::prefix('cars')->name('.cars')->group(function () {
            Route::get('', [CarController::class, 'own']);
            Route::prefix('{car}')->group(function () {
                // Route::get('', [CarController::class, 'own']);
            });
        });
        // user routes
    });

    // ADMIN
    Route::prefix('dashboard')->name('dashboard')->middleware('admin')->group(function () {
        Route::get('', function () {
            return view('dashboard');
        });

        // CARS
        Route::prefix('cars')->name('.cars')->group(function () {
            Route::get('create', [CarController::class, 'create'])->name('.create');
            Route::post('store', [CarController::class, 'store'])->name('.store');
            Route::prefix('{car}')->group(function () {
                Route::get('info', [CarController::class, 'info'])->name('.info');
                Route::get('show', [CarController::class, 'show'])->name('.show');
                Route::get('respond', [CarController::class, 'respond'])->name('.respond');
                Route::get('photos', [CarController::class, 'photos'])->name('.photos');
                Route::get('edit', [CarController::class, 'edit'])->name('.edit');
                Route::post('update', [CarController::class, 'update'])->name('.update');
                Route::get('delete', [CarController::class, 'delete'])->name('.delete');
                Route::prefix('properties')->name('.properties')->group(function () {
                    Route::get('', [CarController::class, 'properties']);
                    Route::get('edit', [CarPropertiesController::class, 'edit'])->name('.edit');
                    Route::post('update', [CarPropertiesController::class, 'update'])->name('.update');
                });
            });
            Route::get('', [CarController::class, 'dashboard']);
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

        // BRANDS
        Route::prefix('brands')->name('.brands')->group(function () {
            Route::get('', [BrandController::class, 'dashboard']);
            Route::get('create', [BrandController::class, 'create'])->name('.create');
            Route::post('store', [BrandController::class, 'store'])->name('.store');
            Route::prefix('{brand}')->group(function () {
                Route::get('edit', [BrandController::class, 'edit'])->name('.edit');
                Route::post('update', [BrandController::class, 'update'])->name('.update');
                Route::get('delete', [BrandController::class, 'delete'])->name('.delete');
            });
        });

        // USERS
        Route::prefix('users')->name('.users')->group(function () {
            Route::get('', [UserController::class, 'dashboard']);
            Route::get('create', [UserController::class, 'create'])->name('.create');
            Route::post('store', [UserController::class, 'store'])->name('.store');
            Route::prefix('{user}')->group(function () {
                Route::get('edit', [UserController::class, 'edit'])->name('.edit');
                Route::post('update', [UserController::class, 'update'])->name('.update');
                Route::get('delete', [UserController::class, 'delete'])->name('.delete');
            });
        });
        // Route::get('cars', [CarController::class, 'show'])->name('.show');
    })->middleware('admin');
});

require __DIR__ . '/auth.php';

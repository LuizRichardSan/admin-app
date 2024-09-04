<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServicesController;

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


Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login/store', 'store')->name('login.store');
    Route::get('/destroy', 'logout')->name('login.logout');
});

// Rotas protegidas pelo middleware auth
Route::middleware(['admin'])->group(function () {
    Route::get('/', function() {
        return redirect()->route('dashboard');
    });
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
    Route::post('/products/create', [ProductsController::class, 'create'])->name('products.create');
    Route::delete('/products/destroy/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');
    Route::put('/products/{product}', [ProductsController::class, 'update'])->name('products.update');
    
    // Category
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::post('/category/store', [CategoryController::class,'store'])->name('category.store');
    Route::delete('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::put('/category/{category}', [CategoryController::class, 'update'])->name('category.update');
    

    //Configurações do sistema
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::put('/settings/update', [SettingsController::class, 'update'])->name('settings.update');

    // Services
    Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/', function() {
        return redirect()->route('dashboard');
    });
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

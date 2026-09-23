<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

//voor dit moeten de controllers een specifieke opzet hebben (laravel names)
// Route::resource('categories', CategoryController::class);
// Route::resource('products', ProductController::class);

Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories.index');

Route::get('/categories/{id}', [CategoryController::class, 'get'])
    ->name('categories.get');

Route::put('/categories/{id}', [CategoryController::class, 'update'])
    ->name('categories.update');

Route::post('/categories/create', [CategoryController::class, 'create'])
    ->name('categories.create');

Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])
    ->name('categories.destroy');

Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');


<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories.index');

Route::get('/categories/{id}', [CategoryController::class, 'get'])
    ->name('categories.get');

Route::put('/categories/{id}', [CategoryController::class, 'update'])
    ->name('categories.update');


    Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

// Route::get('/categories/{id}', [ProductController::class, 'get'])
//     ->name('categories.get');

// Route::put('/categories/{id}', [ProductController::class, 'update'])
//     ->name('categories.update');
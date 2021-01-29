<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\SaludoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Routes for the admin panel
|
*/

Route::get(
    '/',
    [
        AdminController::class,
        'index'
    ]
)->name('admin.index');

Route::get(
    'users',
    [
        AdminController::class,
        'adminUser'
    ]
);

Route::get(
    'users/{user}/profile',
    [
        AdminController::class,
        'adminProfile'
    ]
);

Route::get('products', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('products/create', [ProductController::class, 'create'])
    ->name('products.create');

Route::post('products', [ProductController::class, 'store'])
    ->name('products.store');

Route::get('products/{product:slug}', [ProductController::class, 'show'])
    ->name('products.show');

Route::get('products/{product}/edit', [ProductController::class, 'edit'])
    ->name('products.edit');

Route::put('products/{product}', [ProductController::class, 'update'])
    ->name('products.update');

Route::delete('products/{product}', [ProductController::class, 'destroy'])
    ->name('products.destroy');


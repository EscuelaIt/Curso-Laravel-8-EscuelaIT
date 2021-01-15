<?php

use App\Http\Controllers\Admin\AdminController;
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


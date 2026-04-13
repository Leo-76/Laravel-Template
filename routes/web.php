<?php

use Illuminate\Support\Facades\Route;
use VendorName\PackageName\Http\Controllers\PackageController;

/*
|--------------------------------------------------------------------------
| Package Routes
|--------------------------------------------------------------------------
|
| These routes are loaded by the PackageServiceProvider.
| You can disable them by removing loadRoutesFrom() in the provider.
|
*/

Route::middleware(['web'])
    ->prefix('package-name')
    ->name('package-name.')
    ->group(function () {
        Route::get('/', [PackageController::class, 'index'])->name('index');
    });

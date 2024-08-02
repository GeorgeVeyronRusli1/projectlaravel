<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Custom Backpack Routes

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () {
    // Custom admin routes
    Route::crud('furniture', 'FurnitureCrudController');
    Route::crud('supplier', 'SupplierCrudController');
});
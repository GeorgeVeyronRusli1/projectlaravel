<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', function () {
    if (Auth::check()) {
        // Redirect to admin dashboard if the user is authenticated
        return redirect()->route('admin.dashboard');
    } else {
        return redirect('admin/login');
    }
});

Route::get('{any}', function () {
    return redirect()->route('backpack.auth.login');
})->where('any', '.*');


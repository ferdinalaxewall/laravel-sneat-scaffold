<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

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
    return redirect()->route('auth.login');
});

Route::group([
    'prefix' => 'auth',
    'as' => 'auth.'
], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('store-login');
    Route::get('/logout', [LogoutController::class, 'destroySession'])->name('logout');
});

Route::group([
    'prefix' => 'example',
    'as' => 'example.'
], function () {
    Route::get('/dashboard', fn () => view('admin.pages.examples.dashboard'))->name('dashboard');
    Route::get('/profile', fn () => view('admin.pages.examples.profile'))->name('profile');
});

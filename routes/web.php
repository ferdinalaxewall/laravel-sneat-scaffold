<?php

use App\Http\Controllers\Admin\Users\AdministratorController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', fn() => redirect()->route('auth.login'));

Route::group([
    'prefix' => 'auth',
    'as' => 'auth.',
], function (): void {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('store-login');
    Route::get('/logout', [LogoutController::class, 'destroySession'])->name('logout');
});

Route::group([
    'prefix' => 'example',
    'as' => 'example.',
    'middleware' => ['auth'],
], function (): void {
    Route::get('/dashboard', fn () => view('admin.pages.examples.dashboard'))->name('dashboard');
    Route::get('/profile', fn () => view('admin.pages.examples.profile'))->name('profile');

    Route::group([
        'prefix' => 'users',
        'as' => 'users.',
    ], function (): void {
        Route::group([
            'prefix' => 'administrator',
            'as' => 'administrator.',
        ], function (): void {
            Route::get('/', [AdministratorController::class, 'index'])->name('index');
            Route::get('/create', [AdministratorController::class, 'create'])->name('create');
            Route::post('/store', [AdministratorController::class, 'store'])->name('store');
            Route::get('/{id}', [AdministratorController::class, 'show'])->name('show');
            Route::get('/{id}/edit', [AdministratorController::class, 'edit'])->name('edit');
            Route::put('/{id}/update', [AdministratorController::class, 'update'])->name('update');
            Route::delete('/{id}/delete', [AdministratorController::class, 'destroy'])->name('destroy');
        });
    });
});

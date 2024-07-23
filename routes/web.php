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
    'as' => 'example.',
    'middleware' => ['auth']
], function () {
    Route::get('/dashboard', fn () => view('admin.pages.examples.dashboard'))->name('dashboard');
    Route::get('/profile', fn () => view('admin.pages.examples.profile'))->name('profile');

    Route::group([
        'prefix' => 'users',
        'as' => 'users.'
    ], function () {
        Route::group([
            'prefix' => 'administrator',
            'as' => 'administrator.',
        ], function () {
            Route::get('/', fn () => view('admin.pages.examples.users.administrator.index'))->name('index');
            Route::get('/detail', fn () => view('admin.pages.examples.users.administrator.detail'))->name('detail');
            Route::get('/create', fn () => view('admin.pages.examples.users.administrator.create'))->name('create');
            Route::get('/edit', fn () => view('admin.pages.examples.users.administrator.edit'))->name('edit');
            Route::delete('/delete', fn () => dd('deleted!'))->name('delete');
        });
    });
});

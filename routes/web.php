<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Route::group([
    'prefix' => 'example',
    'as' => 'example.'
], function () {
    Route::get('/dashboard', fn () => view('admin.pages.examples.dashboard'))->name('dashboard');
    Route::get('/profile', fn () => view('admin.pages.examples.profile'))->name('profile');
});

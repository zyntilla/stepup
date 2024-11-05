<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pengguna', PenggunaController::class);
Auth::routes();

Auth::routes();

Route::get('/home', [PenggunaController::class, 'index'])->name('home'); // Adjust the URI as necessary

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DaftarSuratMasukController;
use App\Http\Controllers\DaftarSuratKeluarController;
use App\Http\Controllers\LegalisirSuratController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('manajemen-user', UserController::class);

Route::resource('surat-masuk', DaftarSuratMasukController::class);
Route::resource('surat-keluar', DaftarSuratKeluarController::class);
Route::resource('legalisir-surat', LegalisirSuratController::class);

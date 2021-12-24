<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LegalisirSuratController;
use App\Http\Controllers\PengajuanSuratController;
use App\Http\Controllers\DaftarSuratMasukController;
use App\Http\Controllers\DaftarSuratKeluarController;
use App\Http\Controllers\DisposisiSuratMasukController;

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




Route::middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('surat-masuk', DaftarSuratMasukController::class);

Route::resource('surat-keluar', DaftarSuratKeluarController::class);

// Route::resource('disposisi-surat', DisposisiSuratMasukController::class);
Route::get('/disposisi-surat/{id}', [DisposisiSuratMasukController::class, 'index'])->name('disposisi-surat.index');
Route::get('/disposisi-surat/{id}/create', [DisposisiSuratMasukController::class, 'create'])->name('disposisi-surat.create');
Route::post('/disposisi-surat/{id}/create', [DisposisiSuratMasukController::class, 'store'])->name('disposisi-surat.store');
Route::get('/disposisi-surat/{id}/edit/{disposisi_id}', [DisposisiSuratMasukController::class, 'edit'])->name('disposisi-surat.edit');
Route::put('/disposisi-surat/{id}/edit/{disposisi_id}', [DisposisiSuratMasukController::class, 'update'])->name('disposisi-surat.update');
Route::delete('/disposisi-surat/{id}', [DisposisiSuratMasukController::class, 'destroy'])->name('disposisi-surat.destroy');

Route::resource('pengajuan-surat', PengajuanSuratController::class);

Route::resource('legalisir-surat', LegalisirSuratController::class);

Route::resource('manajemen-user', UserController::class);
});

Auth::routes();


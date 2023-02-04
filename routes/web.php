<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AdminGuruController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminSiswaController;
use App\Http\Controllers\AdminArtikelController;
use App\Http\Controllers\AdminProfilController;

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

Route::get('/', [ArtikelController::class, 'facade']);
Route::get('/informasi', [ArtikelController::class, 'index']);
Route::get('/post/{post:slug}', [ArtikelController::class, 'show']);
Route::get('/login', [LoginController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/admin/dashboard', [DashboardController::class, 'AdminDashboard'])->middleware('auth');
Route::get('/admin/informasi/terbitkan', [AdminArtikelController::class, 'terbitkan'])->middleware('auth');
Route::get('/admin/informasi/batalkan', [AdminArtikelController::class, 'batalkan'])->middleware('auth');
Route::get('/admin/informasi/checkSlug', [AdminArtikelController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/informasi', AdminArtikelController::class)->middleware('auth');
Route::resource('/admin/guru', AdminGuruController::class)->middleware('admin');
Route::resource('/admin/siswa', AdminSiswaController::class)->middleware('auth');
Route::resource('/admin/profil', AdminProfilController::class)->except('show')->middleware('auth');
Route::get('/admin/pesanmasuk', function () {
 return view('/admin/pesanmasuk');
})->middleware('auth');

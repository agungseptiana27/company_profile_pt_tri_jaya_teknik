<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProducController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SejarahController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');


// Profil
Route::get('/profil/sejarah', [ProfilController::class, 'sejarah'])->name('profil.sejarah');
Route::get('/profil/kontruksi', [ProfilController::class, 'kontruksi'])->name('profil.kontruksi');
Route::get('/profil/iso', [ProfilController::class, 'iso'])->name('profil.iso');
Route::get('/profil/personal', [ProfilController::class, 'personal'])->name('profil.personal');

Route::get('/produk/fabrication', [ProducController::class, 'fabrication'])->name('produk.fabrication');
Route::get('/produk/jig', [ProducController::class, 'jig'])->name('produk.jig');
Route::get('/produk/machining', [ProducController::class, 'machining'])->name('produk.machining');
Route::get('/produk/stamping', [ProducController::class, 'stamping'])->name('produk.stamping');
Route::get('/produk/spm', [ProducController::class, 'spm'])->name('produk.spm');
Route::get('/produk/civil', [ProducController::class, 'civil'])->name('produk.civil');

Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');

Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');

Route::get('/karir', [KarirController::class, 'index'])->name('karir.index');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [BeritaController::class, 'detail'])->name('berita.detail');
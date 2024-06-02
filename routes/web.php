<?php

use Illuminate\Support\Facades\Route;
use App\Models\Wisata;

Route::get('/', function () {
    $wisata = Wisata::all(); 
    return view('welcome', compact('wisata'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Crud Lokasi
use App\Http\Controllers\LokasiController;
Route::resource('lokasi', LokasiController::class);

// Crud Kategori
use App\Http\Controllers\KategoriController;
Route::resource('kategori', KategoriController::class);

// Crud Event
use App\Http\Controllers\EventController;
Route::resource('event', EventController::class);

// Crud Wisata
use App\Http\Controllers\WisataController;
Route::resource('wisata', WisataController::class);

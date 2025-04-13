<?php

use App\Http\Controllers\Perpustakaan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lihat', [Perpustakaan::class, 'lihat']);
Route::match(['post', 'get'], '/tambah', [Perpustakaan::class, 'tambah']);
Route::get('/delete/{nisn}', [Perpustakaan::class, 'delete']);
Route::match(['post', 'get'], '/edit/{nisn}', [Perpustakaan::class, 'edit']);

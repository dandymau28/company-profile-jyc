<?php

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
    return view('beranda');
})->name('beranda');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/kegiatan', function () {
    return view('kegiatan');
})->name('kegiatan');

Route::get('/prestasi', function () {
    return view('prestasi');
})->name('prestasi');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
})->name('tentang-kami');



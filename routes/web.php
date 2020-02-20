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
    return view('beranda', ["title" => "Beranda"]);
})->name('beranda');

Route::get('/profile', function () {
    return view('profile', ["title" => "Profile"]);
})->name('profile');

Route::get('/kegiatan', function () {
    return view('kegiatan', ["title" => "Kegiatan"]);
})->name('kegiatan');

Route::get('/prestasi', function () {
    return view('prestasi', ["title" => "Prestasi"]);
})->name('prestasi');

Route::get('/berita', function () {
    return view('berita', ["title" => "Berita"]);
})->name('berita');

Route::get('/tentang-kami', function () {
    return view('tentang-kami', ["title" => "Tentang"]);
})->name('tentang-kami');



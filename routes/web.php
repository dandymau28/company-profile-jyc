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

// Route::get('/', function () {
//     return view('beranda', ["title" => "Beranda"]);
// })->name('beranda');

Route::get('/', 'berandaController@beranda'
)->name('beranda');

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

// Route::get('/berita', 'berandaController@beritaTerbaru')->name('berita');

Route::get('/tentang-kami', function () {
    return view('tentang-kami', ["title" => "Tentang"]);
})->name('tentang-kami');

Route::get('/pendaftaran',function () {
    return view('pendaftaran', ['title' => 'Pendaftaran']);
});

/*
Route Controller
Sementara untuk testing Controller bisa gunakan Route di bawah.
Seperti get berita, post pendaftaran, post kegiatan, dll.
*/

Route::get('/testing', 'beritaController@index');
Route::post('/pendaftaran/create', 'cabController@store'); //untuk menggunakan ini gunakan =>  'method=post' dan 'action=/pendaftaran/' dan name setiap form inputnya sesuai dengan nama atribut di db ya <3




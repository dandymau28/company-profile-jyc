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

// Comingsoon Page
Route::get('/coming-soon', function () {
    return view('comingsoon.index');
})->name('coming-soon');




Route::get('/', 'berandaController@beranda'
)->name('beranda');

Route::get('/profile', function () {
    return view('profile', ["title" => "Profile", "nav" => "profile"]);
})->name('profile');

Route::get('/profile/ariadi-limbong', function(){
    return view('founderlimbong', ["title" => "Ponirin Ariadi", "nav" => "profile"]);
})->name('founder');

Route::get('/profile/septo-adi-kristanto', function(){
    return view('foundercepo', ["title" => "Septo Adi", "nav" => "profile"]);
})->name('founderrr');

// Route::get('/kegiatan', function () {
//     return view('kegiatan', ["title" => "Kegiatan"]);
// })->name('kegiatan');

Route::get('/kegiatan', 'kegiatanController@kegiatan')->name('kegiatan');
Route::get('/kegiatan/oprec', 'kegiatanController@oprec')->name('oprec');

// Route::get('/prestasi', function () {
//     return view('prestasi', ["title" => "Prestasi"]);
// })->name('prestasi');

Route::get('/prestasi', 'prestasiController@prestasi')->name('prestasi');

// Route::get('/berita', function () {
//     return view('berita', ["title" => "Berita"]);
// })->name('berita');

Route::get('/berita', 'beritaController@berita')->name('berita');
Route::get('/berita/cari-berita','api\apiController@searchByTerm');
Route::get('/berita/{berita}','beritaController@show');
Route::get('/berita/kategori/{kategori}','beritaController@getBeritaByKategori');
Route::get('/berita/tag/{tag}','api\apiController@searchTag');


Route::get('/tentang-kami', function () {
    return view('tentang-kami', ["title" => "Tentang", "nav" => "tentang"]);
})->name('tentang-kami');

Route::post('/pendaftaran','cabController@store');

/*
Route Controller
Sementara untuk testing Controller bisa gunakan Route di bawah.
Seperti get berita, post pendaftaran, post kegiatan, dll.
*/

Route::get('/upload-bukti-bayar/{kode_bayar}','cabController@viewBuktiBayar');
Route::post('/upload-bukti-bayar','cabController@terimaBuktiBayar');


// Admin route
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard', ["title" => "Admin"]);
    })->name('admin');

    Route::get('/login', function () {
        return view('admin.auth.login', ["title" => "Login"]);
    })->name('login');

    Route::post('/login', 'authController@login')->name('login-post');

    Route::get('/daftar', function () {
        return view('admin.daftar', ["title" => "Daftar"]);
    })->name('daftar');

    Route::get('/lupa-sandi', function () {
        return view('admin.lupa-sandi', ["title" => "Lupa Sandi"]);
    })->name('lupa-sandi');

    //Anggota
    Route::get('/anggota', function () {
        return view('admin.anggota.master', ["title" => "Anggota"]);
    })->name('anggota-master');

    //Calon Anggota
    Route::get('/cab', 'adminController@viewCAB')->name('cab-master');
    Route::get('/cab/anggota/id/{id}', 'adminController@editCAB');

    //Berita
    Route::get('/berita/buat', 'adminController@create')->name('buat-berita');
    Route::get('/berita', 'adminController@viewBerita')->name('olah-berita');
    Route::get('/berita/kategori-dan-tag', 'adminController@viewKategoriTag')->name('kategoriTag');
    Route::post('/berita/create', 'adminController@store')->name('post-berita');
    Route::post('/berita/tambah-kategori', 'adminController@tambahKategori')->name('tambah-kategori');
    Route::post('/berita/tambah-tag', 'adminController@tambahTag')->name('tambah-tag');
    Route::get('/berita/hapus/{id}','adminController@hapusBerita');
    Route::get('/berita/edit/{id}','adminController@editBerita');
    Route::post('/berita/edit/{id}','adminController@updateBerita')->name('edit-berita');


    //Prestasi
    Route::get('/prestasi','adminController@formPrestasi')->name('form-prestasi');
    Route::post('/prestasi','adminController@tambahPrestasi')->name('input-prestasi');
    Route::get('/prestasi/hapus/{id}','adminController@hapusPrestasi');

    //Galeri
    Route::get('/galeri/foto', 'galeriController@index')->name('upload-foto-view');
    Route::post('/upload-foto', 'galeriController@store')->name('upload-foto');
    Route::get('/galeri/video','galeriController@videoView')->name('video-view');
    Route::post('/galeri/video','galeriController@video')->name('submit-video');
    Route::get('/galeri','galeriController@galeriView')->name('galeri');

    Route::get('/kegiatan','adminController@kegiatan')->name('kegiatan-view');
    Route::post('/kegiatan','adminController@tambahKegiatan')->name('add-kegiatan');
    
    Route::get('/contoh', function () {
        return view('admin.foto.contoh');
    });
});

//Mail routes
Route::get('/send-mail', 'mailController@sendEmail');
Route::get('/uji-mail', function() {
    return view('data');
});
Route::post('/send-mail', 'mailController@sendEmail')->name('post-mail');


Route::get('/ujigambar', 'beritaController@countByKategori');
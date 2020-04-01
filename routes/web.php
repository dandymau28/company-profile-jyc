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

// Route::get('/kegiatan', function () {
//     return view('kegiatan', ["title" => "Kegiatan"]);
// })->name('kegiatan');

Route::get('/kegiatan', 'kegiatanController@kegiatan')->name('kegiatan');

// Route::get('/prestasi', function () {
//     return view('prestasi', ["title" => "Prestasi"]);
// })->name('prestasi');

Route::get('/prestasi', 'prestasiController@prestasi')->name('prestasi');

// Route::get('/berita', function () {
//     return view('berita', ["title" => "Berita"]);
// })->name('berita');

Route::get('/berita', 'beritaController@berita')->name('berita');
Route::get('/berita/{berita}','beritaController@show');
Route::get('/berita/kategori/{kategori}','beritaController@getBeritaByKategori');

Route::get('/tentang-kami', function () {
    return view('tentang-kami', ["title" => "Tentang", "nav" => "tentang"]);
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
    Route::get('/cab', function () {
        return view('admin.anggota.cab-master', ["title" => "Anggota"]);
    })->name('cab-master');

    //Berita
    Route::get('/berita/buat', 'adminController@create')->name('buat-berita');
    Route::get('/berita/kategori-dan-tag', 'adminController@viewKategoriTag')->name('kategoriTag');
    Route::post('/berita/buat', 'adminController@store')->name('berita-post');
    Route::post('/berita/tambah-kategori', 'adminController@tambahKategori')->name('tambah-kategori');
    Route::post('/berita/tambah-tag', 'adminController@tambahTag')->name('tambah-tag');

    //Prestasi
    Route::get('/prestasi','adminController@formPrestasi')->name('form-prestasi');
    Route::post('/prestasi','adminController@tambahPrestasi')->name('input-prestasi');

    //Foto Kegiatan
    Route::get('/foto', 'UploadFotoController@index')->name('upload-foto-view');
    Route::post('/upload-foto', 'UploadFotoController@store')->name('upload-foto');
    
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
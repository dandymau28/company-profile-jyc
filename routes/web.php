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

// JNCC Page
Route::get('/jncc', function () {
    return view('jncc', ["title" => "jncc", "nav" => "jncc"]);
})->name('jncc');

// Comingsoon Page
Route::get('/coming-soon', function () {
    return view('comingsoon.index');
})->name('coming-soon');

//Oprec
Route::get('/pendaftaran','cab\viewForm@create');
Route::post('/pendaftaran','cab\storeCAB@store');


Route::get('/', 'beranda\berandaController@beranda')->name('beranda');

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
Route::get('/kegiatan/oprec', 'cab\viewForm@create')->name('oprec');

// Route::get('/prestasi', function () {
//     return view('prestasi', ["title" => "Prestasi"]);
// })->name('prestasi');

Route::get('/prestasi', 'prestasi\prestasiController@prestasi')->name('prestasi');

// Route::get('/berita', function () {
//     return view('berita', ["title" => "Berita"]);
// })->name('berita');

Route::get('/berita', 'berita\indexBerita@berita')->name('berita');
Route::get('/berita/cari-berita','api\apiController@searchByTerm');
Route::get('/berita/{berita}','berita\showBerita@show');
Route::get('/berita/kategori/{kategori}','berita\beritabyKategori@getBeritaByKategori');
Route::get('/berita/tag/{tag}','api\apiController@searchTag');


Route::get('/tentang-kami', function () {
    return view('tentang-kami', ["title" => "Tentang", "nav" => "tentang"]);
})->name('tentang-kami');



/*
Route Controller
Sementara untuk testing Controller bisa gunakan Route di bawah.
Seperti get berita, post pendaftaran, post kegiatan, dll.
*/

Route::get('/upload-bukti-bayar/{kode_bayar}','cabController@viewBuktiBayar');
Route::post('/upload-bukti-bayar','cabController@terimaBuktiBayar');

//subcscribe
Route::post('/berlangganan','subscribe\subscribeController@store')->name('subscribe');
Route::get('/berlangganan/{unsubscribe?}','subscribe\subscribeController@destroy');


// Admin route
Route::group([
    'prefix' => 'admin'
], function() {
    Route::get('/login', 'authController@view')->name('login');
    Route::post('/login', 'authController@login')->name('login-post');
});

Route::group([
    'middleware' => 'auth',
    'prefix' => 'admin'
],function ($router) {
    Route::get('/', function () {
        return view('admin.dashboard', ["title" => "Admin"]);
    })->name('admin');


    Route::get('/daftar', function () {
        return view('admin.daftar', ["title" => "Daftar"]);
    })->name('daftar');

    Route::get('/lupa-sandi', function () {
        return view('admin.lupa-sandi', ["title" => "Lupa Sandi"]);
    })->name('lupa-sandi');

    Route::get('/logout', 'loginSystem\logout@logout')->name('logout');

    //Anggota
    Route::get('/anggota', function () {
        return view('admin.anggota.master', ["title" => "Anggota"]);
    })->name('anggota-master');

    //Calon Anggota
    Route::get('/cab', 'admin\viewCAB@viewCAB')->name('cab-master');
    Route::get('/cab/id/{id}', 'admin\editCAB@editCAB');
    Route::get('/cab/verif/{id}', 'cab\updateVerify@verify');
    Route::get('/cab/unverif/{id}','cab\updateVerify@unverify');

    //Berita
    Route::get('/berita/buat', 'admin\createBerita@create')->name('buat-berita');
    Route::get('/berita', 'admin\viewBerita@viewBerita')->name('olah-berita');
    Route::get('/berita/kategori-dan-tag', 'admin\viewKategoriTag@viewKategoriTag')->name('kategoriTag');
    Route::post('/berita/create', 'admin\storeBerita@store')->name('post-berita');
    Route::post('/berita/tambah-kategori', 'admin\tambahKategori@tambahKategori')->name('tambah-kategori');
    Route::post('/berita/tambah-tag', 'admin\tambahTag@tambahTag')->name('tambah-tag');
    Route::get('/berita/hapus/{id}','admin\hapusBerita@hapusBerita');
    Route::get('/berita/edit/{id}','admin\editBerita@editBerita');
    Route::post('/berita/edit/{id}','admin\updateBerita@updateBerita')->name('edit-berita');


    //Prestasi
    Route::get('/prestasi','admin\viewPrestasi@formPrestasi')->name('form-prestasi');
    Route::post('/prestasi','admin\tambahPrestasi@tambahPrestasi')->name('input-prestasi');
    Route::get('/prestasi/hapus/{id}','admin\hapusPrestasi@hapusPrestasi');

    //Galeri
    Route::get('/galeri/foto', 'admin\viewFoto@index')->name('upload-foto-view');
    Route::post('/upload-foto', 'admin\storeFoto@store')->name('upload-foto');
    Route::get('/galeri/video','admin\viewVideo@videoView')->name('video-view');
    Route::post('/galeri/video','admin\storeVideo@video')->name('submit-video');
    Route::get('/galeri','admin\indexGaleri@galeriView')->name('galeri');

    Route::get('/kegiatan','admin\viewKegiatan@kegiatan')->name('kegiatan-view');
    Route::post('/kegiatan','admin\tambahKegiatan@tambahKegiatan')->name('add-kegiatan');
    
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
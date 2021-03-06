<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


//API get foto by kegiatan
Route::get('/foto/{id_kegiatan}', 'kegiatanController@fotoKegiatan');

//API Search By Term
// Route::get('/berita/searchbyterm/{term?}','api\apiController@searchByTerm');

//API Search Tag
Route::get('/berita/tag/{term?}','api\apiController@searchTag');

//API Get Data CAB
Route::get('/cab/get', 'api\apiController@jsonCAB');
Route::get('/cab/getWL', 'api\apiController@jsonWLCAB');
Route::get('/cab/get/count', 'cab\cabController@countCAB');
Route::get('/prestasi/all', 'api\apiController@getAllPrestasi');
Route::get('/prestasi/{id}', 'api\apiController@getPrestasiByID');
Route::get('/penghargaan/prestasi/{id_prestasi}', 'api\apiController@getPenghargaanByID');
Route::get('/videos/all', 'api\apiController@getAllVideos');
Route::get('/foto/all', 'api\apiController@getAllFoto');

// Route::post('/subscribe','beranda\subscribeController@subscribe');
// Route::put('/subscribe/{email}','beranda\subscribeController@unsubscribe');


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
// Route::get('/foto/{id_kegiatan}', 'kegiatanController@fotoKegiatan');

//API Search By Term
Route::post('/berita/searchbyterm','api\apiController@searchByTerm');

//API Search Tag
Route::post('/berita/tag','api\apiController@searchTag');
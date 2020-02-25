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
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthApiController@login');
    Route::post('logout', 'AuthApiController@logout');
    Route::post('refresh', 'AuthApiController@refresh');
    Route::post('me', 'AuthApiController@me');

});

Route::apiResource('artikel','ArtikelAPIController');
route::apiResource('KategoriArtikel','KategoriArtikellAPIController');

Route::apiResource('berita','BeritaAPIController');
route::apiResource('KategoriBerita','KategoriBeritalAPIController');

Route::apiResource('galeri','GaleriAPIController');
route::apiresource('KategoriGaleri','KategoriGaleriAPIController');

Route::apiResource('pengumuman','PengumumanAPIController');
route::apiresource('KategoriPengumuman','KategoriPengumuman APIController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

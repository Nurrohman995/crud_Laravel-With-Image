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
    return view('home');
});

Route::get('/tes','LatController@index');
Route::get('/tambah_siswa',function(){
    return view('crud/tambah_data');
});
Route::post('/insert','LatController@tambah_data');
Route::get('/delete/{id}','LatController@delete_data');
Route::get('/edit/{id}','LatController@edit');
Route::post('/update/{id}','LatController@update_data');

// Route::prefix('admin')->group(function () {
//     Route::get('/progdi', 'ProgdiController@index');
// });
// Route::get('/progdi','ProgdiController@index');
// Route::get('/tambah_progdi',function(){
//     return view('progdi/tambah_data');
// });
Route::group(['prefix' => 'admin'], function () {
    Route::get('/progdi','ProgdiController@index');
    Route::get('/tambah_progdi',function(){
        return view('progdi/tambah_data');
    });
    Route::post('/insert','ProgdiController@insert');
    Route::get('/edit/{id}','ProgdiController@edit');
    Route::post('/update/{id}','ProgdiController@update');
    Route::get('/delete/{id}','ProgdiController@delete_data');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/login', function () {
    return view('admin.login');
})->name('login');

Route::get('/register', 'LoginController@registrasi')->name('registrasi');
Route::post('/postregister', 'LoginController@postregister')->name('postregister');
Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');

//akses sebagai user


    Route::get('/', 'BerandaController@index')->name('beranda');
    //kategori
    Route::get('/makananBerat', 'BerandaController@makananBerat')->name('makananBerat');
    Route::get('/makananRingan', 'BerandaController@makananRingan')->name('makananRingan');
    Route::get('/minuman', 'BerandaController@minuman')->name('minuman');

    //Bahan-bahan
    Route::get('/telur', 'BerandaController@telur')->name('telur');
    Route::get('/ayam', 'BerandaController@ayam')->name('ayam');
    Route::get('/sapi', 'BerandaController@sapi')->name('sapi');
    Route::get('/buah', 'BerandaController@buah')->name('buah');

    //route detail resep
    Route::get('/detailresep/{id}', 'BerandaController@detailresep');

    //route pencarian
    Route::get('/cari', 'BerandaController@cari');

    //theme
    Route::get('/darktheme', 'BerandaController@darktheme')->name('darktheme');
    //theme
    Route::get('/lighttheme', 'BerandaController@lighttheme')->name('lighttheme');



//akses sebagai admin
Route::group(['middleware' => ['auth','ceklevel']], function(){
    Route::get('/berandaadmin', 'BerandaController@indexadmin')->name('berandaadmin');

    Route::get('/resepadmin', 'BerandaController@resepadmin')->name('resepadmin');

    //route pencarian
    Route::get('/resepadmin/cari', 'BerandaController@cariadmin');

    //route detail resep
    Route::get('/resepadmin/detail/{id}', 'BerandaController@detailadmin');

    Route::get('/editresep', 'BerandaController@editresep')->name('editresep');

    //route pencarian
    Route::get('/editresep/cari', 'BerandaController@cariedit');

    //upload data
    Route::get('/upload', 'UploadController@upload');
    Route::post('/upload/proses', 'UploadController@prosesupload');

    //route edit data
    Route::get('/editresep/ubah/{id}', 'BerandaController@ubahdata');

    //route update data
    Route::put('/editresep/update/{id}', 'BerandaController@updatedata');

    //route hapus data
    Route::get('/editresep/hapusdata/{id}', 'BerandaController@hapusdata');
});
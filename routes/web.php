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
    return view('welcome');
});

Auth::routes();

Route::get('kategori_artikel/trash','KategoriArtikelController@trash')->name('kategori_artikel.trash');
Route::get('kategori_berita/trash','KategoriBeritaController@trash')->name('kategori_berita.trash');
Route::get('kategori_galeritrash','KategoriGaleriController@trash')->name('kategori_galeri.trash');
Route::get('kategori_pengumuman/trash','KategoriPengumumanController@trash')->name('kategori_pengumuman.trash');



Route::get('/home', 'HomeController@index')->name('home');

Route::resource('kategori_artikel','KategoriArtikelController');

Route::resource('kategori_berita','KategoriBeritaController');

Route::resource('kategori_galeri','KategoriGaleriController');

Route::resource('kategori_pengumuman','KategoriPengumumanController');



Route::get('Artikel/trash','ArtikelController@trash')->name('Artikel.trash');
Route::get('Berita/trash','BeritaController@trash')->name('Berita.trash');
Route::get('Galeri/trash','GaleriController@trash')->name('Galeri.trash');
Route::get('Pengumuman/trash','PengumumanController@trash')->name('Pengumuman.trash');

Route::resource('Artikel','ArtikelController');
Route::resource('Berita','BeritaController');
Route::resource('Galeri','GaleriController');
Route::resource('Pengumuman','PengumumanController');

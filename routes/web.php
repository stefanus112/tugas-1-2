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

Route::get('/home', 'HomeController@index')->name('home');

//artikel
Route::get('/kategori_artikel', 'KategoriArtikelController@index')->name('kategori_artikel.index');
Route::get('/kategori_artikel/create','KategoriArtikelController@create')->name('kategori_artikel.create');
Route::post('/kategori_artikel','KategoriArtikelController@store')->name('kategori_artikel.store');
Route::get('/kategori_artikel/{id}','KategoriArtikelController@show')->name('kategori_artikel.show');

//berita
Route::get('/kategori_berita', 'KategoriBeritaController@index')->name('kategori_berita.index');
Route::get('/kategori_berita/create','KategoriBeritaController@create')->name('kategori_berita.create');
Route::post('/kategori_berita','KategoriBeritaController@store')->name('kategori_berita.store');
Route::get('/kategori_berita/{id}','KategoriBeritaController@show')->name('kategori_berita.show');

//galeri
Route::get('/kategori_galeri', 'KategoriGaleriController@index')->name('kategori_galeri.index');
Route::get('/kategori_galeri/create','KategoriGaleriController@create')->name('kategori_galeri.create');
Route::post('/kategori_galeri','KategoriGaleriController@store')->name('kategori_galeri.store');
Route::get('/kategori_galeri/{id}','KategoriGaleriController@show')->name('kategori_galeri.show');

//pengumuman
Route::get('/kategori_pengumuman', 'KategoriPengumumanController@index')->name('kategori_pengumuman.index');
Route::get('/kategori_pengumuman/create','KategoriPengumumanController@create')->name('kategori_pengumuman.create');
Route::post('/kategori_pengumuman','KategoriPengumumanController@store')->name('kategori_pengumuman.store');
Route::get('/kategori_pengumuman/{id}','KategoriPengumumanController@show')->name('kategori_pengumuman.show');


//artikel

Route::get('/Artikel', 'ArtikelController@index')->name('Artikel.index');
Route::get('/Artikel/create','ArtikelController@create')->name('Artikel.create');
Route::post('/Artikel','ArtikelController@store')->name('Artikel.store');
Route::get('/Artikel/{id}','ArtikelController@show')->name('Artikel.show');

//berita
Route::get('/Berita', 'BeritaController@index')->name('Berita.index');
Route::get('/Berita/create','BeritaController@create')->name('Berita.create');
Route::post('/Berita','BeritaController@store')->name('Berita.store');
Route::get('/Berita/{id}','BeritaController@show')->name('Berita.show');

//galeri
Route::get('/Galeri', 'GaleriController@index')->name('Galeri.index');
Route::get('/Galeri/create','GaleriController@create')->name('Galeri.create');
Route::post('/Galeri','GaleriController@store')->name('Galeri.store');
Route::get('/Galeri/{id}','GaleriController@show')->name('Galeri.show');

//pengumuman
Route::get('/Pengumuman', 'PengumumanController@index')->name('Pengumuman.index');
Route::get('/Pengumuman/create','PengumumanController@create')->name('Pengumuman.create');
Route::post('/Pengumuman','PengumumanController@store')->name('Pengumuman.store');
Route::get('/Pengumuman/{id}','PengumumanController@show')->name('Pengumuman.show');



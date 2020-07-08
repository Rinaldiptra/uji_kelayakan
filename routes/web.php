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
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

Route::get('/ruang','pageController@ruang');
Route::get('/ruang/create','ruangController@create');
Route::get('/ruang/{id_ruang}/delete','ruangController@delete');
Route::post('/storeruang','ruangController@store')->name('storeruang');
Route::get('/ruang/{id_ruang}/edit','ruangController@edit');
Route::put('/updateruang/{id_ruang}','ruangController@update')->name('ruang.update');

Route::get('/jenis','pageController@jenis');
Route::get('/jenis/create','jenisController@create');
Route::get('/jenis/{id}/delete','jenisController@delete');
Route::post('/storejenis','jenisController@store')->name('storejenis');
Route::get('/jenis/{id}/edit','jenisController@edit');
Route::put('/updatejenis/{id}','jenisController@update')->name('jenis.update');

Route::get('/inventaris','pageController@inventaris');
Route::get('/inventaris/create','inventarisController@create');
Route::get('/inventaris/{id_inventaris}/delete','inventarisController@delete');
Route::post('/storeinventaris','inventarisController@store')->name('storeinventaris');
Route::get('/inventaris/{id_inventaris}/edit','inventarisController@edit');
Route::put('/updateinventaris/{id_inventaris}','inventarisController@update')->name('inventaris.update');

Route::get('/detail_pinjam','pageController@detail_pinjam');
Route::get('/detail_pinjam/create','detail_pinjamController@create');
Route::get('/detail_pinjam/{id}/delete','detail_pinjamController@delete');
Route::post('/storedetail_pinjam','detail_pinjamController@store')->name('storedetail_pinjam');
Route::get('/detail_pinjam/{id}/edit','detail_pinjamController@edit');
Route::put('/updatedetail_pinjam/{id}','detail_pinjamController@update')->name('detail_pinjam.update');

Route::get('/peminjaman','pageController@peminjaman');
Route::get('/peminjaman/create','peminjamanController@create');
Route::post('/storepeminjaman','peminjamanController@store')->name('storepeminjaman');
Route::get('/peminjaman/{id}/delete','peminjamanController@delete');
Route::get('/peminjaman/{id}/edit','peminjamanController@edit');
Route::put('/updatepeminjaman/{id}','peminjamanController@update')->name('peminjaman.update');


Route::get('/dp','pageController@dp');
Route::get('/dp/create','dpController@create');
Route::post('/storedp','dpController@store')->name('storedp');
Route::get('/dp/{id}/delete','dpController@delete');
Route::get('/dp/{id}/edit','dpController@edit');
Route::put('/updatedp/{id}','dpController@update')->name('dp.update');


Route::get('/level','pageController@level');
Route::get('/level/create','levelController@create');
Route::post('/storelevel','levelController@store')->name('storelevel');
Route::get('/level/{id}/delete','levelController@delete');
Route::get('/level/{id}/edit','levelController@edit');
Route::put('/updatelevel/{id}','levelController@update')->name('level.update');

Route::get('/petugas','pageController@petugas');
Route::get('/petugas/create','petugasController@create');
Route::post('/storepetugas','petugasController@store')->name('storepetugas');
Route::get('/petugas/{id}/delete','petugasController@delete');
Route::get('/petugas/{id}/edit','petugasController@edit');
Route::put('/updatepetugas/{id}','petugasController@update')->name('petugas.update');

Route::get('/pegawai','pageController@pegawai');
Route::get('/pegawai/create','pegawaiController@create');
Route::post('/storepegawai','pegawaiController@store')->name('storepegawai');
Route::get('/pegawai/{id}/delete','pegawaiController@delete');
Route::get('/pegawai/{id}/edit','pegawaiController@edit');
Route::put('/updatepegawai/{id}','pegawaiController@update')->name('pegawai.update');

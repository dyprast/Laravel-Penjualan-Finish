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
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('data')->group(function(){
    Route::prefix('petugas')->group(function(){
        Route::get('/', 'Data\PetugasController@index')->name('petugasIndex');
        Route::get('/tambah', 'Data\PetugasController@add');
        Route::post('/prosesTambah', 'Data\PetugasController@save')->name('petugasSave');
        Route::get('/Edit/{id}', 'Data\PetugasController@edit')->name('petugasEdit');
        Route::post('/prosesEdit/{id}', 'Data\PetugasController@update')->name('petugasUpdate');
        Route::get('/hapus/{id}', 'Data\PetugasController@delete')->name('petugasDelete');
    });
    Route::prefix('distributor')->group(function(){
        Route::get('/', 'Data\DistributorController@index')->name('distributorIndex');
        Route::get('/tambah', 'Data\DistributorController@add');
        Route::post('/prosesTambah', 'Data\DistributorController@save')->name('distributorSave');
        Route::get('/Edit/{id}', 'Data\DistributorController@edit')->name('distributorEdit');
        Route::post('/prosesEdit/{id}', 'Data\DistributorController@update')->name('distributorUpdate');
        Route::get('/hapus/{id}', 'Data\DistributorController@delete')->name('distributorDelete');
    });
});

Route::prefix('barangMenu')->group(function(){
    Route::prefix('jenisBarang')->group(function(){
        Route::get('/', 'Barang\JenisBarangController@index')->name('jenisBarangIndex');
        Route::get('/tambah', 'Barang\JenisBarangController@add');
        Route::post('/prosesTambah', 'Barang\JenisBarangController@save')->name('jenisBarangSave');
        Route::get('/Edit/{id}', 'Barang\JenisBarangController@edit')->name('jenisBarangEdit');
        Route::post('/prosesEdit/{id}', 'Barang\JenisBarangController@update')->name('jenisBarangUpdate');
        Route::get('/hapus/{id}', 'Barang\JenisBarangController@delete')->name('jenisBarangDelete');
    });
    Route::prefix('barangMasuk')->group(function(){
        Route::get('/', 'Barang\BarangMasukController@index')->name('barangMasukIndex');
        Route::get('/tambah', 'Barang\BarangMasukController@add');
        Route::post('/prosesTambah', 'Barang\BarangMasukController@save')->name('barangMasukSave');
        Route::get('/Edit/{id}', 'Barang\BarangMasukController@edit')->name('barangMasukEdit');
        Route::post('/prosesEdit/{id}', 'Barang\BarangMasukController@update')->name('barangMasukUpdate');
        Route::get('/hapus/{id}', 'Barang\BarangMasukController@delete')->name('barangMasukDelete');
    });
    Route::prefix('barang')->group(function(){
        Route::get('/', 'Barang\BarangController@index')->name('barangIndex');
        Route::get('/tambah', 'Barang\BarangController@add');
        Route::post('/prosesTambah', 'Barang\BarangController@save')->name('barangSave');
        Route::get('/Edit/{id}', 'Barang\BarangController@edit')->name('barangEdit');
        Route::post('/prosesEdit/{id}', 'Barang\BarangController@update')->name('barangUpdate');
        Route::get('/hapus/{id}', 'Barang\BarangController@delete')->name('barangDelete');
    });
    Route::prefix('detailBarang')->group(function(){
        Route::get('/', 'Barang\DetailBarangController@index')->name('detailBarangIndex');
        Route::get('/tambah', 'Barang\DetailBarangController@add');
        Route::post('/prosesTambah', 'Barang\DetailBarangController@save')->name('detailBarangSave');
        Route::get('/Edit/{id}', 'Barang\DetailBarangController@edit')->name('detailBarangEdit');
        Route::post('/prosesEdit/{id}', 'Barang\DetailBarangController@update')->name('detailBarangUpdate');
        Route::get('/hapus/{id}', 'Barang\DetailBarangController@delete')->name('detailBarangDelete');
    });
    
    Route::prefix('penjualan')->group(function(){
        Route::get('/', 'Barang\PenjualanController@index')->name('penjualanIndex');
        Route::get('/tambah', 'Barang\PenjualanController@add');
        Route::post('/prosesTambah', 'Barang\PenjualanController@save')->name('penjualanSave');
        Route::get('/Edit/{id}', 'Barang\PenjualanController@edit')->name('penjualanEdit');
        Route::post('/prosesEdit/{id}', 'Barang\PenjualanController@update')->name('penjualanUpdate');
        Route::get('/hapus/{id}', 'Barang\PenjualanController@delete')->name('penjualanDelete');
    });
    Route::prefix('detailPenjualan')->group(function(){
        Route::get('/', 'Barang\DetailPenjualanController@index')->name('detailPenjualanIndex');
        Route::get('/tambah', 'Barang\DetailPenjualanController@add');
        Route::post('/prosesTambah', 'Barang\DetailPenjualanController@save')->name('detailPenjualanSave');
        Route::get('/Edit/{id}', 'Barang\DetailPenjualanController@edit')->name('detailPenjualanEdit');
        Route::post('/prosesEdit/{id}', 'Barang\DetailPenjualanController@update')->name('detailPenjualanUpdate');
        Route::get('/hapus/{id}', 'Barang\DetailPenjualanController@delete')->name('detailPenjualanDelete');
    });
});
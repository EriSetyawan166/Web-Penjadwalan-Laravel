<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth\ResetPasswordController;

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

Route::get('/', 'UtamaController@index', function () {
    return view('utama');
})->name('utama');

Auth::routes();


// Route::get('/lupapw', 'Auth\ForgotPasswordController')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/hari/{id}', 'UtamaController@hari')->name('hari');
Route::get('/input', 'HomeController@create')->name('input-home');

// Route::get('/welcome', 'UtamaController@index')->name('utama');


Route::get('/tambah-matkul', 'TambahMatkulController@index')->name('tambah-matkul');
Route::post('/tambah-matkul', 'TambahMatkulController@store')->name('tambah-matkul');

Route::get('/tambah-dosen', 'TambahDosenController@index')->name('tambah-dosen');
Route::post('/tambah-dosen', 'TambahDosenController@store')->name('tambah-dosen');

Route::get('/tambah-ruang', 'TambahRuanganController@index')->name('tambah-ruangan');
Route::post('/tambah-ruang', 'TambahRuanganController@store')->name('tambah-ruangan');

Route::get('/tambah-user', 'TambahUserController@index')->name('tambah-user');
Route::post('/tambah-user', 'TambahUserController@store')->name('tambah-user');

Route::get('/data-matkul', 'DataMatkulController@index')->name('data-matkul');
Route::get('/data-dosen', 'DataDosenController@index')->name('data-dosen');
Route::get('/data-ruangan', 'DataRuanganController@index')->name('data-ruangan');
Route::get('/data-user', 'DataUserController@index')->name('data-user');
// Route::get('/home', 'HomeController@delete')->name('delete');

Route::post('/simpan', 'HomeController@store')->name('simpan');
Route::get('/update/{id}', 'HomeController@edit')->name('edit');
Route::post('/update/{id}', 'HomeController@update')->name('update');
Route::get('/delete/{id}', 'HomeController@destroy')->name('delete');

Route::get('/update-matkul/{id}', 'DataMatkulController@edit')->name('edit-matkul');
Route::post('/update-matkul/{id}', 'DataMatkulController@update')->name('update-matkul');
Route::get('/delete-matkul/{id}', 'DataMatkulController@destroy')->name('delete-matkul');

Route::get('/update-dosen/{id}', 'DataDosenController@edit')->name('edit-dosen');
Route::post('/update-dosen/{id}', 'DataDosenController@update')->name('update-dosen');
Route::get('/delete-dosen/{id}', 'DataDosenController@destroy')->name('delete-dosen');

Route::get('/update-ruangan/{id}', 'DataRuanganController@edit')->name('edit-ruangan');
Route::post('/update-ruangan/{id}', 'DataRuanganController@update')->name('update-ruangan');
Route::get('/delete-ruangan/{id}', 'DataRuanganController@destroy')->name('delete-ruangan');


Route::get('/update-user/{id}', 'DataUserController@edit')->name('edit-user');
Route::post('/update-user/{id}', 'DataUserController@update')->name('update-user');
Route::get('/delete-user/{id}', 'DataUserController@destroy')->name('delete-user');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');



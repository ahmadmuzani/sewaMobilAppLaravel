<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
//login
Route::get('/login', 'App\Http\Controllers\LoginController@index')->middleware('guest');
Route::post('/login', 'App\Http\Controllers\LoginController@authenticate')->middleware('guest');
Route::post('/logout', 'App\Http\Controllers\LoginController@logout')->middleware('auth');

//register
Route::get('/register', 'App\Http\Controllers\RegisterController@index');
Route::post('/register', 'App\Http\Controllers\RegisterController@store');
//profile
Route::get('/profile', 'App\Http\Controllers\ProfileController@tampilSewa')->middleware('auth');

Route::get('/daftarmobil', 'App\Http\Controllers\DaftarmobilController@index');
Route::get('/daftarmobil', 'App\Http\Controllers\DaftarmobilController@show');
Route::get('/tambahmobil', 'App\Http\Controllers\DaftarmobilController@tambahView');
Route::post('/tambahmobil', 'App\Http\Controllers\TambahmobilController@store');

Route::get('/peminjaman/{mobil}', 'App\Http\Controllers\PeminjamanController@index');
Route::post('/peminjaman/{mobil}', 'App\Http\Controllers\PeminjamanController@store');

Route::get('/pengembalian/{pinjam}', 'App\Http\Controllers\PengembalianController@index');
Route::post('/pengembalian/{pinjam}', 'App\Http\Controllers\PengembalianController@verifPlat');

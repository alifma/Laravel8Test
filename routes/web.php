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
    return view('home');
});
Route::get('/siswa', function () {
    return view('siswa');
});
// Langsung Menampilkan, kalau tanpa controller
Route::view('/about', 'about');

Route::view('/admin','admin.v_index');
Route::view('/guru','admin.guru.v_dataguru');
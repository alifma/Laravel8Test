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
// ? dipakai buat ternary operator
Route::get('/siswa/{nama_siswa?}', function ($nama_siswa = 'None') {
    return view('siswa', [
        'nama_siswa' => $nama_siswa 
    ]);
});
// Langsung Menampilkan, kalau tanpa controller
Route::view('/about', 'v_about',[
    'nama' => 'Alif Maulana A',
    'alamat' => 'Pandeglang, Banten',
    'data_tag' => '<h1> Ini Tagnya dari variabel Data</h1>'
]);

Route::view('/admin','admin.v_index');
Route::view('/guru','admin.guru.v_dataguru');
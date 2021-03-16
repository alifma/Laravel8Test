<?php

use App\Http\Controllers\GuruController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/guru', [GuruController::class, 'index'])->name('guru');
Route::get('/guru/detail/{id}', [GuruController::class, 'detail']);
Route::get('/guru/add', [GuruController::class, 'add']);
Route::get('/guru/edit/{id}', [GuruController::class, 'edit']);
Route::post('/guru/update/{id}', [GuruController::class, 'update']);
Route::post('/guru/insert', [GuruController::class, 'insert']);
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/home/about/{id}', [HomeController::class, 'about']);

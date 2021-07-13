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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',     [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/daftar',    [App\Http\Controllers\IndexController::class, 'daftar'])->name('daftar');
Route::post('/daftar',     [App\Http\Controllers\IndexController::class, 'simpan'])->name('simpan');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home',     [App\Http\Controllers\SiswasController::class, 'index'])->name('home');
// Route::get('/show/{id}',    [App\Http\Controllers\SiswasController::class, 'show'])->name('show');
Route::get('/create-siswa',     [App\Http\Controllers\SiswasController::class, 'create'])->name('create');
Route::post('/add-siswa',           [App\Http\Controllers\SiswasController::class, 'store'])->name('store');
Route::get('/delete-siswa/{id}',        [App\Http\Controllers\SiswasController::class, 'destroy'])->name('delete');
Route::get('/edit-siswa/{id}',              [App\Http\Controllers\SiswasController::class, 'edit'])->name('edit');
Route::put('/update/{id}',                       [App\Http\Controllers\SiswasController::class, 'update'])->name('update');
Route::get('/trash',						        [App\Http\Controllers\SiswasController::class, 'getDeleteSiswa'])->name('trash');
Route::get('/restore/{id}',			            [App\Http\Controllers\SiswasController::class, 'restore'])->name('restore');
Route::get('/restore-all',			                [App\Http\Controllers\SiswasController::class, 'restoreAll'])->name('restoreAll');
Route::get('/delete/{id}', 			                    [App\Http\Controllers\SiswasController::class, 'deletePermanent'])->name('deletePermanent');
Route::get('/delete-all',			                            [App\Http\Controllers\SiswasController::class, 'deleteAll'])->name('deleteAll');
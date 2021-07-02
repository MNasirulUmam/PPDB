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

Route::view('/', 'index');
Route::view('register', 'register');
Route::view('login', 'login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\SiswasController::class, 'index'])->name('index');
Route::get('/show/{id}', [App\Http\Controllers\SiswasController::class, 'show'])->name('show');
Route::get('/create-siswa', [App\Http\Controllers\SiswasController::class, 'create'])->name('create');
Route::post('/add-siswa', [App\Http\Controllers\SiswasController::class, 'store'])->name('store');
Route::get('/delete-siswa/{id}', [App\Http\Controllers\SiswasController::class, 'destroy'])->name('delete');
Route::get('/edit-siswa/{id}', [App\Http\Controllers\SiswasController::class, 'edit'])->name('edit');

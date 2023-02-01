<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PengajuanController;

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

Route::get('/',[BukuController::class , 'index']);
Route::get('/detailBuku/{id}',[BukuController::class , 'detailBuku']);
//name('login) ..berarti memberi nama routes karena halaman ini auto redirect ketika ada user mencoba mengakses halaman admin
Route::get('/login', [LoginController::class,'loginAdmin'])->name('login')->middleware('guest');
Route::get('/register', [AdminController::class , 'adminSignUp'])->middleware('guest');
Route::post('/register', [AdminController::class , 'daftarAdmin']);
Route::post('/addKategori', [AdminController::class , 'addKategori']);
Route::post('admin/addKategoriBerita' , [AdminController::class , 'addKategoriBerita']);
Route::post('/login', [LoginController::class , 'authenticate']);
Route::post('/logout', [LoginController::class , 'logout']);
Route::put('/editBook/{id}', [AdminController::class , 'editBook'])->middleware('auth');
Route::put('/editNews/{id}', [NewsController::class , 'editNews'])->middleware('auth');


Route::get('/admin', [AdminController::class , 'homeAdmin'])->middleware('auth');
Route::get('/admin/editBuku/{id}', [AdminController::class , 'editBuku'])->middleware('auth');
Route::get('/admin/editBerita/{id}', [NewsController::class , 'editBerita'])->middleware('auth');
Route::get('/admin/tambahBuku', [AdminController::class , 'tambahBuku'])->middleware('auth');
Route::get('/admin/tambahKategoriBuku', [AdminController::class , 'tambahKategoriBuku'])->middleware('auth');
Route::get('/admin/dataBerita', [AdminController::class , 'dataBerita']);
Route::get('/admin/tambahKategoriBerita', [AdminController::class , 'tambahKategoriBerita'])->middleware('auth');
Route::get('/admin/tambahBerita', [AdminController::class , 'tambahBerita'])->middleware('auth');

Route::post('/addBook' , [BukuController::class , 'addBook']);
Route::post('/addNews' , [NewsController::class , 'addNews']);
Route::post('/addPengajuan' , [PengajuanController::class , 'addPengajuan']);
Route::get('/deleteBuku/{id}' , [BukuController::class , 'deleteBuku']);
Route::get('/deleteBerita/{id}' , [NewsController::class , 'deleteBerita']);


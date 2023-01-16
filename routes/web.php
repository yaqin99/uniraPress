<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\NewsController;

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
Route::get('/login', [LoginController::class,'loginAdmin']);
Route::post('/login', [LoginController::class , 'login']);
Route::get('/register', [AdminController::class , 'adminSignUp']);
Route::post('/register', [AdminController::class , 'registerAdmin']);
Route::post('/addKategori', [AdminController::class , 'addKategori']);
Route::post('admin/addKategoriBerita' , [AdminController::class , 'addKategoriBerita']);


Route::get('/admin', [AdminController::class , 'homeAdmin']);
Route::get('/admin/dataBerita', [AdminController::class , 'dataBerita']);

Route::post('/addBook' , [BukuController::class , 'addBook']);
Route::post('/admin/addNews' , [NewsController::class , 'addNews']);
Route::get('/deleteBuku/{id}' , [BukuController::class , 'deleteBuku']);


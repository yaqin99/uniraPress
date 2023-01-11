<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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


Route::get('/admin', [AdminController::class , 'homeAdmin']);
Route::post('/addBook' , [BukuController::class , 'addBook']);
Route::get('/deleteBuku/{id}' , [BukuController::class , 'deleteBuku']);


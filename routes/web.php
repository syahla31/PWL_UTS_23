<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerpustakaanController;

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


Auth::routes();

Route::get('/', [HomeController::class,'index']);
Route::get('/home', [HomeController::class,'index']);
Route::resource('perpustakaans', PerpustakaanController::class);
Route::get('/search', [PerpustakaanController::class, 'search'])->name('search');

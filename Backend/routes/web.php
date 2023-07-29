<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PelanggaranController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', [NewsController::class, 'test']);

Route::get('/berita', [BeritaController::class, 'berita']);

Route::get('/beritaAPI', [BeritaController::class, 'beritaAPI']);

Route::get('/pelanggaranAPI', [PelanggaranController::class, 'PelanggaranAPI']);

Route::get('/NewsAPI', [NewsController::class, 'index']);

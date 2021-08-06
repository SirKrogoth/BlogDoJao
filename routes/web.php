<?php

use App\Http\Controllers\ArtigoController;
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

Route::get('/', [ArtigoController::class, 'index'])->name('inicio');
Route::get('/artigo/{id}', [ArtigoController::class, 'show'])->name('buscar_artigo');
Route::get('/novo', [ArtigoController::class, 'novo'])->name('novo');

Route::post('/store', [ArtigoController::class, 'store'])->name('store');
Route::get('/edit/{id}', [ArtigoController::class, 'edit'])->name('editarArtigo');
Route::put('/update/{id}', [ArtigoController::class, 'update'])->name('atualizarArtigo');

Route::delete('/destroy/{id}', [ArtigoController::class, 'destroy'])->name('excluirArtigo');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Entrada;

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
    return view('welcome');
});

Route::get('/entrada', [Entrada::class,'iniciar'])->name('iniciarEntrada');
Route::get('/index', [Entrada::class,'index'])->name('index');
Route::get('/crear', [Entrada::class,'crear'])->name('crear');
Route::post('/crearLibro',[Entrada::class,'insertarLibroDB'])->name('crearLibro');
<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ConteudosController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicoController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('conteudos', ConteudosController::class);
Route::post('editor/upload', [EditorController::class, 'upload'])->name('editor.image-upload');
Route::get('/clientes/relatorio', [ClientesController::class, 'showReport']);



// rotas guest
Route::get('sobre', [PublicoController::class, 'sobre']);

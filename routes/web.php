<?php

use App\Http\Controllers\PersonaController;
use App\Http\Controllers\SexoController;
use App\Http\Controllers\TipoDocumentoController;
use App\Models\TipoDocumento;
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

Route::resource('personas',PersonaController::class);
Route::delete('/personas/{$id}', [PersonaController::class, 'destroy'])->name('personas.destroy');
Route::get('/sexo', [SexoController::class, 'index'])->name('sexo.index');
Route::get('/tipoDocumento', [TipoDocumentoController::class, 'index'])->name('tipoDocumento.index');


<?php

use App\Http\Controllers\ClientesController;
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
Route::post('/clientes/store', [ClientesController::class, 'store'])->name('clientes.store');
Route::post('/clientes/create', [ClientesController::class, 'create'])->name('clientes.create');
Route::get('/visualizar', [ClientesController::class, 'visualizar'])->name('clientes.visualizar');
Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');

Route::get('/', function () {
    return view('welcome');
});

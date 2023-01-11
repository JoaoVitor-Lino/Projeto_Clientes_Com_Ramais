<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DidsController;
use App\Http\Controllers\RamaisController;
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

//ROTAS DO CLIENTE
Route::prefix('clientes')->group(function () {
    Route::put('/{id}', [ClientesController::class, 'update'])->name('clientes.update');
    Route::get('/edit/{id}', [ClientesController::class, 'edit'])->name('clientes.edit');
    Route::delete('/{id}', [ClientesController::class, 'destroy'])->name('clientes.destroy');
    Route::post('/store', [ClientesController::class, 'store'])->name('clientes.store');
    Route::get('/create', [ClientesController::class, 'create'])->name('clientes.create');
    Route::get('/visualizar', [ClientesController::class, 'visualizar'])->name('clientes.visualizar');
    Route::get('/', [ClientesController::class, 'index'])->name('clientes.index');
});

//ROTAS DO DID
Route::prefix('dids')->group(function(){
    Route::put('/{id}', [DidsController::class, 'update'])->name('dids.update');
    Route::get('/edit/{id}', [DidsController::class, 'edit'])->name('dids.edit');
    Route::delete('/{id}', [DidsController::class, 'destroy'])->name('dids.destroy');
    Route::post('/store', [DidsController::class, 'store'])->name('dids.store');
    Route::get('/create', [DidsController::class, 'create'])->name('dids.create');
    Route::get('/', [DidsController::class, 'tabela'])->name('dids.tabela');
});
//ROTAS DO RAMAL
Route::prefix('ramais')->group(function(){
    Route::put('/{id}', [RamaisController::class, 'update'])->name('ramais.update');
    Route::get('/edit/{id}', [RamaisController::class, 'edit'])->name('ramais.edit');
    Route::delete('/{id}', [RamaisController::class, 'destroy'])->name('ramais.destroy');
    Route::post('/store', [RamaisController::class, 'store'])->name('ramais.store');
    Route::get('/create', [RamaisController::class, 'create'])->name('ramais.create');
    Route::get('/', [RamaisController::class, 'tabela'])->name('ramais.tabela');
});

Route::get('/', function () {
    return view('welcome');
});

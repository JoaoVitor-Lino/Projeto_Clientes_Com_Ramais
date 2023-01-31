<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DidsController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\RamaisController;
use App\Http\Controllers\UserController;
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

//                      Rotas de teste para Autenticação        
//---------------------------------------------------------------------------------------------
Route::get('/cadastro', [AuthController::class, 'formRegister'])->name('cadastro.register');
Route::get('/login', [AuthController::class, 'formLogin'])->name('login');
Route::post('/login', [AuthController::class, 'Login'])->name('post.login');
Route::post('/cadastro/store',[UserController::class, 'store'])->name('cadastro.store');
Route::get('/usuarios', [UserController::class, 'show'])->name('cadastro.show');
Route::get('/relatorio', [UserController::class, 'userCsv'])->name('user.csv');


//---------------------------------------------------------------------------------------------
//ROTAS DO CLIENTE
Route::middleware('auth')->prefix('clientes')->group(function () {
    Route::put('/{id}', [ClientesController::class, 'update'])->name('clientes.update');
    Route::get('/edit/{id}', [ClientesController::class, 'edit'])->name('clientes.edit');
    Route::delete('/{id}', [ClientesController::class, 'destroy'])->name('clientes.destroy');
    Route::post('/store', [ClientesController::class, 'store'])->name('clientes.store');
    Route::get('/create', [ClientesController::class, 'create'])->name('clientes.create');
    Route::get('/visualizar', [ClientesController::class, 'visualizar'])->name('clientes.visualizar');
    Route::get('/', [ClientesController::class, 'index'])->name('clientes.index');
    Route::get('/relatorio', [ClientesController::class, 'clienteCsv'])->name('clientes.csv');

    //Rota de Clientes com vinculo
    Route::get('/vinculo',[ClientesController::class, 'vinculo'])->name('vinculo');
    Route::get('/relatorios', [ClientesController::class, 'vinculoCsv'])->name('clientes.vinculoCsv');

});

//ROTAS DO DID
Route::prefix('dids')->group(function(){
    Route::put('/{id}', [DidsController::class, 'update'])->name('dids.update');
    Route::get('/edit/{id}', [DidsController::class, 'edit'])->name('dids.edit');
    Route::delete('/{id}', [DidsController::class, 'destroy'])->name('dids.destroy');
    Route::post('/store', [DidsController::class, 'store'])->name('dids.store');
    Route::get('/create', [DidsController::class, 'create'])->name('dids.create');
    Route::get('/', [DidsController::class, 'tabela'])->name('dids.tabela');
    Route::get('/relatorio', [DidsController::class, 'didCsv'])->name('dids.csv');
});
//ROTAS DO RAMAL
Route::prefix('ramais')->group(function(){
    Route::put('/{id}', [RamaisController::class, 'update'])->name('ramais.update');
    Route::get('/edit/{id}', [RamaisController::class, 'edit'])->name('ramais.edit');
    Route::delete('/{id}', [RamaisController::class, 'destroy'])->name('ramais.destroy');
    Route::post('/store', [RamaisController::class, 'store'])->name('ramais.store');
    Route::get('/create', [RamaisController::class, 'create'])->name('ramais.create');
    Route::get('/', [RamaisController::class, 'tabela'])->name('ramais.tabela');
    Route::get('/relatorio', [RamaisController::class, 'ramaisCsv'])->name('ramais.csv');
});
//Rota De EMAIL
Route::get('/email', [EmailController::class, 'mail'])->name('email.mail');




Route::get('/', function () {
    return view('welcome');
});

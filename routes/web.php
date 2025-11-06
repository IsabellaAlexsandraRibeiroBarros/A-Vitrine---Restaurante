<?php

//use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\CardapioController;
use App\Http\Controllers\Web\LoginController;
use App\Http\Controllers\Web\FuncionarioController;
use App\Http\Controllers\Web\PratosController;
use App\Http\Controllers\Web\PedidosController;
use App\Http\Controllers\Web\MesasController;
use App\Http\Controllers\Web\ClientesController;
use App\Http\Controllers\Web\IngredientesController;
use App\Http\Controllers\Web\FuncionariosController;
use App\Http\Controllers\Web\EstoqueController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/cardapio', [CardapioController::class, 'cardapio'])->name('cardapio');
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/area-funcionario', [FuncionarioController::class, 'areafuncionario'])->name('area.funcionario');
Route::prefix('gerenciar')->group(function () {
    Route::get('/pratos', [PratosController::class, 'index'])->name('gerenciar.pratos');
    Route::get('/pedidos', [PedidosController::class, 'index'])->name('gerenciar.pedidos');
    Route::get('/mesas', [MesasController::class, 'index'])->name('gerenciar.mesas');
    Route::get('/clientes', [ClientesController::class, 'index'])->name('gerenciar.clientes');
    Route::get('/ingredientes', [IngredientesController::class, 'index'])->name('gerenciar.ingredientes');
    Route::get('/funcionarios', [FuncionariosController::class, 'index'])->name('gerenciar.funcionarios');
    Route::get('/estoque', [EstoqueController::class, 'index'])->name('gerenciar.estoque');
});


Route::get('/pratos', [PratosController::class, 'index'])->name('pratos');
Route::get('/pedidos', [PedidosController::class, 'index'])->name('pedidos');
Route::get('/mesas', [MesasController::class, 'index'])->name('mesas');
Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes');
Route::get('/ingredientes', [IngredientesController::class, 'index'])->name('ingredientes');
Route::get('/funcionarios', [FuncionariosController::class, 'index'])->name('funcionarios');
Route::get('/estoque', [EstoqueController::class, 'index'])->name('estoque');
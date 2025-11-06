<?php

//use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\CardapioController;
use App\Http\Controllers\Web\LoginController;
use App\Http\Controllers\Web\FuncionarioController;
use App\Http\Controllers\Web\PratosController;
use App\Http\Controllers\Web\PedidoController;
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
    Route::get('/pedidos', [PedidoController::class, 'index'])->name('gerenciar.pedidos');
    Route::get('/mesas', [MesasController::class, 'index'])->name('gerenciar.mesas');
    
    Route::get('/ingredientes', [IngredientesController::class, 'index'])->name('gerenciar.ingredientes');
    Route::get('/funcionarios', [FuncionariosController::class, 'index'])->name('gerenciar.funcionarios');
    Route::get('/estoque', [EstoqueController::class, 'index'])->name('gerenciar.estoque');
});



Route::get('/pedidos', [PedidoController::class, 'index'])->name('pedidos');
Route::get('/mesas', [MesasController::class, 'index'])->name('mesas');
Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes');
Route::get('/ingredientes', [IngredientesController::class, 'index'])->name('ingredientes');
Route::get('/funcionarios', [FuncionariosController::class, 'index'])->name('funcionarios');
Route::get('/estoque', [EstoqueController::class, 'index'])->name('estoque');


Route::get('/clientes', [ClientesController::class, 'index'])->name('gerenciar.clientes');
Route::get('/clientes/create', [ClientesController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{id}/edit', [ClientesController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{id}', [ClientesController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{id}', [ClientesController::class, 'destroy'])->name('clientes.destroy');


// ROTAS DE MESAS
Route::get('/mesas', [MesasController::class, 'index'])->name('mesas.index');
Route::put('/mesas/{id}', [MesasController::class, 'update'])->name('mesas.update');


// GERENCIAMENTO DE PRATOS
Route::get('/pratos', [PratosController::class, 'index'])->name('pratos.index');
Route::get('/pratos/create', [PratosController::class, 'create'])->name('pratos.create');
Route::post('/pratos', [PratosController::class, 'store'])->name('pratos.store');
Route::get('/pratos/{id}/edit', [PratosController::class, 'edit'])->name('pratos.edit');
Route::put('/pratos/{id}', [PratosController::class, 'update'])->name('pratos.update');
Route::delete('/pratos/{id}', [PratosController::class, 'destroy'])->name('pratos.destroy');

// GERENCIAMENTO DE INGREDIENTES
Route::get('/ingredientes', [IngredientesController::class, 'index'])->name('ingredientes.index');
Route::get('/ingredientes/create', [IngredientesController::class, 'create'])->name('ingredientes.create');
Route::post('/ingredientes', [IngredientesController::class, 'store'])->name('ingredientes.store');
Route::get('/ingredientes/{id}/edit', [IngredientesController::class, 'edit'])->name('ingredientes.edit');
Route::put('/ingredientes/{id}', [IngredientesController::class, 'update'])->name('ingredientes.update');
Route::delete('/ingredientes/{id}', [IngredientesController::class, 'destroy'])->name('ingredientes.destroy');

// FUNCIONÁRIOS
Route::get('/funcionarios', [FuncionariosController::class, 'index'])->name('funcionarios.index');
Route::get('/funcionarios/create', [FuncionariosController::class, 'create'])->name('funcionarios.create');
Route::post('/funcionarios', [FuncionariosController::class, 'store'])->name('funcionarios.store');
Route::get('/funcionarios/{id}/edit', [FuncionariosController::class, 'edit'])->name('funcionarios.edit');
Route::put('/funcionarios/{id}', [FuncionariosController::class, 'update'])->name('funcionarios.update');
Route::delete('/funcionarios/{id}', [FuncionariosController::class, 'destroy'])->name('funcionarios.destroy');

// ESTOQUE
Route::get('/estoque', [EstoqueController::class, 'index'])->name('estoque.index');
Route::get('/estoque/create', [EstoqueController::class, 'create'])->name('estoque.create');
Route::post('/estoque', [EstoqueController::class, 'store'])->name('estoque.store');
Route::get('/estoque/{id}/edit', [EstoqueController::class, 'edit'])->name('estoque.edit');
Route::put('/estoque/{id}', [EstoqueController::class, 'update'])->name('estoque.update');
Route::delete('/estoque/{id}', [EstoqueController::class, 'destroy'])->name('estoque.destroy');


// PEDIDOS
Route::get('/pedidos', [PedidoController::class, 'index'])->name('pedidos.index');
Route::get('/pedidos/create', [PedidoController::class, 'create'])->name('pedidos.create');
Route::post('/pedidos', [PedidoController::class, 'store'])->name('pedidos.store');
Route::get('/pedidos/{id}', [PedidoController::class, 'show'])->name('pedidos.show');
Route::post('/pedidos/{id}/add-item', [PedidoController::class, 'addItem'])->name('pedidos.addItem');
Route::delete('/pedidos/{id}', [PedidoController::class, 'destroy'])->name('pedidos.destroy');
Route::put('/pedidos/{id}/update-status', [PedidoController::class, 'updateStatus'])->name('pedidos.updateStatus');


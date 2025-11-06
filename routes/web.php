<?php

use Illuminate\Support\Facades\Route;

// Controllers principais
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\CardapioController;
use App\Http\Controllers\Web\LoginController;
use App\Http\Controllers\Web\FuncionarioController;

// Controllers de gerenciamento
use App\Http\Controllers\Web\PratosController;
use App\Http\Controllers\Web\PedidoController;
use App\Http\Controllers\Web\MesasController;
use App\Http\Controllers\Web\ClientesController;
use App\Http\Controllers\Web\IngredientesController;
use App\Http\Controllers\Web\FuncionariosController;
use App\Http\Controllers\Web\EstoqueController;

/*
|--------------------------------------------------------------------------
| Rotas principais (públicas)
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/cardapio', [CardapioController::class, 'cardapio'])->name('cardapio');

// Login
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Área do funcionário
Route::get('/area-funcionario', [FuncionarioController::class, 'areafuncionario'])->name('area.funcionario');

/*
|--------------------------------------------------------------------------
| Grupo de rotas de gerenciamento (prefixo /gerenciar)
|--------------------------------------------------------------------------
*/
Route::prefix('gerenciar')->group(function () {
    Route::get('/pratos', [PratosController::class, 'index'])->name('gerenciar.pratos');
    Route::get('/pedidos', [PedidoController::class, 'index'])->name('gerenciar.pedidos');
    Route::get('/mesas', [MesasController::class, 'index'])->name('gerenciar.mesas');
    Route::get('/ingredientes', [IngredientesController::class, 'index'])->name('gerenciar.ingredientes');
    Route::get('/funcionarios', [FuncionariosController::class, 'index'])->name('gerenciar.funcionarios');
    Route::get('/estoque', [EstoqueController::class, 'index'])->name('gerenciar.estoque');
    Route::get('/clientes', [ClientesController::class, 'index'])->name('gerenciar.clientes');
});

/*
|--------------------------------------------------------------------------
| CRUD COMPLETOS
|--------------------------------------------------------------------------
*/

/* 🥘 PRATOS */
Route::prefix('pratos')->name('pratos.')->group(function () {
    Route::get('/', [PratosController::class, 'index'])->name('index');
    Route::get('/create', [PratosController::class, 'create'])->name('create');
    Route::post('/', [PratosController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [PratosController::class, 'edit'])->name('edit');
    Route::put('/{id}', [PratosController::class, 'update'])->name('update');
    Route::delete('/{id}', [PratosController::class, 'destroy'])->name('destroy');
});

/* 🧂 INGREDIENTES */
Route::prefix('ingredientes')->name('ingredientes.')->group(function () {
    Route::get('/', [IngredientesController::class, 'index'])->name('index');
    Route::get('/create', [IngredientesController::class, 'create'])->name('create');
    Route::post('/', [IngredientesController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [IngredientesController::class, 'edit'])->name('edit');
    Route::put('/{id}', [IngredientesController::class, 'update'])->name('update');
    Route::delete('/{id}', [IngredientesController::class, 'destroy'])->name('destroy');
});

/* 👩‍🍳 FUNCIONÁRIOS */
Route::get('/funcionarios', [FuncionariosController::class, 'index'])->name('funcionarios.index');
Route::get('/funcionarios/create', [FuncionariosController::class, 'create'])->name('funcionarios.create');
Route::post('/funcionarios', [FuncionariosController::class, 'store'])->name('funcionarios.store');
Route::get('/funcionarios/{id}/edit', [FuncionariosController::class, 'edit'])->name('funcionarios.edit');
Route::put('/funcionarios/{id}', [FuncionariosController::class, 'update'])->name('funcionarios.update');
Route::delete('/funcionarios/{id}', [FuncionariosController::class, 'destroy'])->name('funcionarios.destroy');


/* 🧾 CLIENTES */
Route::prefix('clientes')->name('clientes.')->group(function () {
    Route::get('/', [ClientesController::class, 'index'])->name('index');
    Route::get('/create', [ClientesController::class, 'create'])->name('create');
    Route::post('/', [ClientesController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [ClientesController::class, 'edit'])->name('edit');
    Route::put('/{id}', [ClientesController::class, 'update'])->name('update');
    Route::delete('/{id}', [ClientesController::class, 'destroy'])->name('destroy');
});

/* 📦 ESTOQUE */
Route::prefix('estoque')->name('estoque.')->group(function () {
    Route::get('/', [EstoqueController::class, 'index'])->name('index');
    Route::get('/create', [EstoqueController::class, 'create'])->name('create');
    Route::post('/', [EstoqueController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [EstoqueController::class, 'edit'])->name('edit');
    Route::put('/{id}', [EstoqueController::class, 'update'])->name('update');
    Route::delete('/{id}', [EstoqueController::class, 'destroy'])->name('destroy');
});

/* 🍽️ MESAS */
Route::prefix('mesas')->name('mesas.')->group(function () {
    Route::get('/', [MesasController::class, 'index'])->name('index');
    Route::put('/{id}', [MesasController::class, 'update'])->name('update');
});

/* 🧾 PEDIDOS */
Route::prefix('pedidos')->name('pedidos.')->group(function () {
    Route::get('/', [PedidoController::class, 'index'])->name('index');
    Route::get('/create', [PedidoController::class, 'create'])->name('create');
    Route::post('/', [PedidoController::class, 'store'])->name('store');
    Route::get('/{id}', [PedidoController::class, 'show'])->name('show');
    Route::post('/{id}/add-item', [PedidoController::class, 'addItem'])->name('addItem');
    Route::put('/{id}/update-status', [PedidoController::class, 'updateStatus'])->name('updateStatus');
    Route::delete('/{id}', [PedidoController::class, 'destroy'])->name('destroy');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/paginainicial', function () {
    return view('paginainicial');
});

Route::get('/cardapio', function () {
    return view('cardapio');
});

Route::get('/clientes', function () {
    return view('clientes');
});

Route::get('/estoque', function () {
    return view('estoque');
});

Route::get('/funcionarios', function () {
    return view('funcionarios');
});

Route::get('/ingredientes', function () {
    return view('ingredientes');
});

Route::get('mesas', function () {
    return view('mesas');
});

Route::get('pedidos', function () {
    return view('pedidos');
});
<?php

namespace App\Http\Controllers\Web;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ClientesController extends Controller
{
    public function index()
{
    $clientes = Cliente::all();
    return view('clientes.clientes', compact('clientes'));
}

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        Cliente::create($request->all());

        return redirect()->route('gerenciar.clientes')
                         ->with('success', 'Cliente cadastrado!');
    }

    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());

        return redirect()->route('gerenciar.clientes')
                         ->with('success', 'Cliente atualizado!');
    }

    public function destroy($id)
    {
        Cliente::destroy($id);

        return redirect()->route('gerenciar.clientes')
                         ->with('success', 'Cliente removido!');
    }
}

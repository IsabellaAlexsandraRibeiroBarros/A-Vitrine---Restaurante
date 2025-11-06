<?php

namespace App\Http\Controllers\Web;

use App\Models\Ingrediente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IngredientesController extends Controller
{
    public function index()
    {
        $ingredientes = Ingrediente::all();
        return view('ingredientes.ingredientes', compact('ingredientes'));
    }

    public function create()
    {
        return view('ingredientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'quantidade' => 'required|numeric|min:0',
            'unidade' => 'required|string|max:10',
            'valor_unitario' => 'required|numeric|min:0',
        ]);

        Ingrediente::create($request->all());
        return redirect()->route('ingredientes.index')->with('success', 'Ingrediente adicionado com sucesso!');
    }

    public function edit($id)
    {
        $ingrediente = Ingrediente::findOrFail($id);
        return view('ingredientes.edit', compact('ingrediente'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'quantidade' => 'required|numeric|min:0',
            'unidade' => 'required|string|max:10',
            'valor_unitario' => 'required|numeric|min:0',
        ]);

        $ingrediente = Ingrediente::findOrFail($id);
        $ingrediente->update($request->all());
        return redirect()->route('ingredientes.index')->with('success', 'Ingrediente atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Ingrediente::destroy($id);
        return redirect()->route('ingredientes.index')->with('success', 'Ingrediente removido com sucesso!');
    }
}

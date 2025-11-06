<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Estoque;
use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    public function index()
    {
        $estoques = Estoque::all();
        return view('estoque.estoque', compact('estoques'));
    }

    public function create()
    {
        return view('estoque.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'item' => 'required|max:100',
            'quantidade' => 'required|numeric|min:0',
            'unidade' => 'required|max:20',
            'valor_unitario' => 'required|numeric|min:0',
            'status' => 'required|in:Disponível,Indisponível',
        ]);

        Estoque::create($request->all());

        return redirect()->route('estoque.index')
                         ->with('success', 'Item adicionado ao estoque com sucesso!');
    }

    public function edit($id)
    {
        $item = Estoque::findOrFail($id);
        return view('estoque.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'item' => 'required|max:100',
            'quantidade' => 'required|numeric|min:0',
            'unidade' => 'required|max:20',
            'valor_unitario' => 'required|numeric|min:0',
            'status' => 'required|in:Disponível,Indisponível',
        ]);

        $item = Estoque::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('estoque.index')->with('success', 'Item atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Estoque::destroy($id);
        return redirect()->route('estoque.index')->with('success', 'Item removido com sucesso!');
    }
}

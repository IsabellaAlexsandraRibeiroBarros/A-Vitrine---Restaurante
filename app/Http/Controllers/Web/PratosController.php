<?php

namespace App\Http\Controllers\Web;

use App\Models\Prato;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PratosController extends Controller
{
    public function index()
    {
        $pratos = Prato::all();
        // O nome da view precisa incluir a subpasta "pratos"
        return view('pratos.pratos', compact('pratos'));
    }

    public function create()
    {
        return view('pratos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:100',
            'descricao' => 'nullable|string',
            'valor' => 'required|numeric|min:0',
            'composicao' => 'nullable|string',
        ]);
    
        // Usa os mesmos nomes do banco de dados
        $data = [
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'valor' => $request->valor,
            'composicao' => $request->composicao,
        ];
    
        Prato::create($data);
    
        return redirect()->route('pratos.index')->with('success', 'Prato cadastrado com sucesso!');
    }
    
    public function edit($id)
{
    $prato = Prato::findOrFail($id);
    return view('pratos.edit', compact('prato'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nome' => 'required|max:100',
        'descricao' => 'nullable|string',
        'valor' => 'required|numeric|min:0',
        'composicao' => 'nullable|string',
    ]);

    $prato = Prato::findOrFail($id);
    $prato->update($request->all());

    return redirect()->route('pratos.index')->with('success', 'Prato atualizado com sucesso!');
}

public function destroy($id)
{
    Prato::destroy($id);
    return redirect()->route('pratos.index')->with('success', 'Prato removido com sucesso!');
}


}

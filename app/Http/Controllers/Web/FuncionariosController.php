<?php

namespace App\Http\Controllers\Web;

use App\Models\Funcionario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FuncionariosController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionarios.funcionarios', compact('funcionarios'));
    }

    public function create()
    {
        return view('funcionarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'cargo' => 'required|max:50',
            'email' => 'required|email|max:100',
            'telefone' => 'required|max:20',
        ]);

        Funcionario::create($request->all());
        return redirect()->route('funcionarios.index')->with('success', 'Funcionário cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        return view('funcionarios.edit', compact('funcionario'));
    }

    public function update(Request $request, $id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->update($request->all());
        return redirect()->route('funcionarios.index')->with('success', 'Funcionário atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Funcionario::destroy($id);
        return redirect()->route('funcionarios.index')->with('success', 'Funcionário removido com sucesso!');
    }
}

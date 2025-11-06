<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Funcionario;
use Illuminate\Http\Request;

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
            'nome' => 'required|max:255',
            'cargo' => 'required|max:50',
            'email' => 'required|email|max:100',
            'telefone' => 'required|max:20',
        ]);

        Funcionario::create([
            'nome' => $request->nome,
            'cargo' => $request->cargo,
            'email' => $request->email,
            'telefone' => $request->telefone,
        ]);

        return redirect()->route('funcionarios.index')
                         ->with('success', 'Funcionário cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        return view('funcionarios.edit', compact('funcionario'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'cargo' => 'required|max:50',
            'email' => 'required|email|max:100',
            'telefone' => 'required|max:20',
        ]);

        $funcionario = Funcionario::findOrFail($id);
        $funcionario->update($request->only(['nome', 'cargo', 'email', 'telefone']));

        return redirect()->route('funcionarios.index')
                         ->with('success', 'Funcionário atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Funcionario::destroy($id);
        return redirect()->route('funcionarios.index')
                         ->with('success', 'Funcionário removido com sucesso!');
    }
}

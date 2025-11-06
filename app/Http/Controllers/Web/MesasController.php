<?php

namespace App\Http\Controllers\Web;

use App\Models\Mesa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MesasController extends Controller
{
    // Mostra todas as mesas
    public function index()
    {
        $mesas = Mesa::orderBy('numero')->get();
        return view('mesas.mesas', compact('mesas'));
    }

    // Atualiza apenas o status da mesa
    public function update(Request $request, $id)
    {
        $mesa = Mesa::findOrFail($id);
        $mesa->update(['status' => $request->status]);

        return redirect()->route('mesas.index')
                         ->with('success', "Status da mesa {$mesa->numero} atualizado para {$mesa->status}!");
    }
}

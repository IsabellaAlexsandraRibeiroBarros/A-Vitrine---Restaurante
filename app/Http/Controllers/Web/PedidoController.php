<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use App\Models\ItemPedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::with('itens')->get();
        return view('pedidos.index', compact('pedidos'));
    }

    public function create()
    {
        return view('pedidos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome_cliente' => 'required|max:100',
            'status' => 'required'
        ]);

        Pedido::create($request->all());
        return redirect()->route('pedidos.index')->with('success', 'Pedido criado com sucesso!');
    }

    public function show($id)
    {
        $pedido = Pedido::with('itens')->findOrFail($id);
        return view('pedidos.show', compact('pedido'));
    }

    public function addItem(Request $request, $id)
    {
        $pedido = Pedido::findOrFail($id);

        ItemPedido::create([
            'id_pedido' => $pedido->id,
            'nome_item' => $request->nome_item,
            'quantidade' => $request->quantidade,
            'valor_unitario' => $request->valor_unitario
        ]);

        // Atualiza o total
        $total = ItemPedido::where('id_pedido', $pedido->id)
            ->sum(\DB::raw('quantidade * valor_unitario'));

        $pedido->update(['total' => $total]);

        return redirect()->route('pedidos.show', $pedido->id)->with('success', 'Item adicionado!');
    }

    public function destroy($id)
    {
        Pedido::destroy($id);
        return redirect()->route('pedidos.index')->with('success', 'Pedido removido com sucesso!');
    }
    public function updateStatus(Request $request, $id)
{
    $pedido = Pedido::findOrFail($id);
    $pedido->update(['status' => $request->status]);

    return redirect()->route('pedidos.show', $pedido->id)
                     ->with('success', 'Status do pedido atualizado com sucesso!');
}

}

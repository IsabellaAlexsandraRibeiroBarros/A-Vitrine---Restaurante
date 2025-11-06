<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemPedido extends Model
{
    protected $table = 'itens_pedido';
    protected $fillable = ['id_pedido', 'nome_item', 'quantidade', 'valor_unitario'];
    public $timestamps = false;

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'id_pedido');
    }
}

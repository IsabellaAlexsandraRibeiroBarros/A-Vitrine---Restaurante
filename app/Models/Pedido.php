<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';
    protected $fillable = ['nome_cliente', 'status', 'total'];
    public $timestamps = false;

    public function itens()
    {
        return $this->hasMany(ItemPedido::class, 'id_pedido');
    }
}

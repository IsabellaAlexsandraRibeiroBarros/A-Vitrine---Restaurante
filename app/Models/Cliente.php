<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['id_cliente', 'nome', 'cpf', 'data_nasc', 'endereco', 'email', 'telefone', 'pontos'];

     public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}

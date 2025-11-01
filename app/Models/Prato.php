<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prato extends Model
{
    protected $fillable = [
        'nome', 'descricao', 'preco'
    ];

     public function ingredientes()
    {
        return $this->belongsToMany(Ingrediente::class)->withPivot('quantidade');
    }

    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class)->withPivot('quantidade');
    }
}
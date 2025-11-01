<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Funcionario extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nome', 'email', 'senha', 'cargo'
    ];

    protected $hidden = [
        'senha', 'remember_token'
    ];

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}


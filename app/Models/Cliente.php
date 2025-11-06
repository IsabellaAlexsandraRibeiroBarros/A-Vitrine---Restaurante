<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente'; // 👈 ESTA LINHA É A CHAVE!

    protected $fillable = [
        'id_cliente',
        'nome',
        'cpf',
        'data_nasc',
        'endereco',
        'email',
        'telefone',
        'pontos'
    ];
}

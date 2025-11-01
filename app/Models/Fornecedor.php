<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
     protected $fillable = ['nome', 'email', 'telefone', 'endereco'];

    public function ingredientes()
    {
        return $this->hasMany(Ingrediente::class);
    }
}

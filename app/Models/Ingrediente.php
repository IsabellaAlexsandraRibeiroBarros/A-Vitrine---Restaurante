<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
   protected $fillable = ['id_ingred','nome', 'quantidade', 'unidade'];

   public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class);
    }

    public function pratos()
    {
        return $this->belongsToMany(Prato::class)->withPivot('quantidade');
    }
}

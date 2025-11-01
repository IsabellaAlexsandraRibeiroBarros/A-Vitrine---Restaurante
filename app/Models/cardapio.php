<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cardapio extends Model
{
    protected $fillable = ['nome'];

    public function pratos()
    {
        return $this->hasMany(Prato::class);
    }
}
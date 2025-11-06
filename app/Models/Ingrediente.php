<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table = 'ingredientes';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'quantidade', 'unidade', 'valor_unitario'];
    public $timestamps = false;
}

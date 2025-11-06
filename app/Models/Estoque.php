<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $table = 'estoque';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'item',
        'quantidade',
        'unidade',
        'valor_unitario',
        'status'
    ];
}

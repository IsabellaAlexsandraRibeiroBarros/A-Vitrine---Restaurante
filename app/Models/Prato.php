<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prato extends Model
{
    // Se a tabela usar a PK padrão "id", você NÃO precisa definir $primaryKey.
    // Caso tenha definido antes como 'id_prato', remova-a ou defina como 'id'.

    // protected $primaryKey = 'id_prato'; // REMOVA ou comente esta linha
    // se preferir explicitar:
    protected $primaryKey = 'id';

    protected $fillable = ['nome', 'descricao', 'valor', 'composicao'];

    // Se sua tabela tem created_at/updated_at mantenha true (padrão).
    public $timestamps = true;
}

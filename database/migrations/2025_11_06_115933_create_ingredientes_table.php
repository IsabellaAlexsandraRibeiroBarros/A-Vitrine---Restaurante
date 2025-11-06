ingredientes


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Cria a tabela ingredientes.
     */
    public function up(): void
    {
        Schema::create('ingredientes', function (Blueprint $table) {
            $table->bigIncrements('id');              // ID auto incremento
            $table->string('nome', 100);              // Nome do ingrediente
            $table->integer('quantidade');            // Quantidade disponível
            $table->string('unidade', 50);            // Unidade de medida (ex: kg, L, un)
            $table->decimal('valor_unitario', 10, 2); // Valor por unidade
            $table->timestamps();                     // created_at e updated_at
        });
    }

    /**
     * Remove a tabela ingredientes (rollback).
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredientes');
    }
};

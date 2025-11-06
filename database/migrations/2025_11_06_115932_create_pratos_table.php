pratos



<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Cria a tabela pedidos
     */
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');               // ID auto incremento
            $table->string('nome_cliente', 100);       // Nome do cliente que fez o pedido
            $table->string('status', 20);              // Status do pedido (Aberto, Fechado, etc)
            $table->decimal('total', 10, 2)->default(0.00); // Valor total do pedido
            $table->timestamps();                      // created_at e updated_at
        });
    }

    /**
     * Remove a tabela pedidos (rollback)
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};

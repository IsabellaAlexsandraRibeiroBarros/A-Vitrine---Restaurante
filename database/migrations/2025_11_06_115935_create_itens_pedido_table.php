itens pedidos



<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Criação da tabela itens_pedido
     */
    public function up(): void
    {
        Schema::create('itens_pedido', function (Blueprint $table) {
            $table->bigIncrements('id'); // ID principal
            $table->unsignedBigInteger('id_pedido'); // Relaciona com pedidos
            $table->string('nome_item', 100); // Nome do prato/item
            $table->integer('quantidade'); // Quantidade do item
            $table->decimal('valor_unitario', 10, 2); // Valor unitário do item
            $table->timestamps(); // created_at e updated_at

            // Chave estrangeira (relacionamento com pedidos)
            $table->foreign('id_pedido')
                  ->references('id')
                  ->on('pedidos')
                  ->onDelete('cascade'); // se apagar o pedido, apaga os itens também
        });
    }

    /**
     * Reversão da tabela itens_pedido (rollback)
     */
    public function down(): void
    {
        Schema::dropIfExists('itens_pedido');
    }
};

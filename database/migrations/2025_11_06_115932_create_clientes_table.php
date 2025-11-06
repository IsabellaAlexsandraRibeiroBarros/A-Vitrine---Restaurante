clientes


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Cria a tabela clientes
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id_cliente');          // ID auto incremento
            $table->string('nome', 100);                  // Nome do cliente
            $table->string('cpf', 14)->unique();          // CPF único
            $table->date('data_nasc')->nullable();        // Data de nascimento
            $table->string('endereco', 150)->nullable();  // Endereço opcional
            $table->string('email', 100);                 // E-mail
            $table->string('telefone', 20)->nullable();   // Telefone opcional
            $table->integer('pontos')->default(0);        // Pontos acumulados
            $table->timestamps();                         // created_at e updated_at
        });
    }

    /**
     * Remove a tabela clientes (rollback)
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('clientes', function (Blueprint $table) {
        $table->id('id_cliente');                // ID primário
        $table->string('nome', 100);             // Nome do cliente
        $table->string('cpf', 14)->nullable();   // CPF opcional
        $table->date('data_nasc')->nullable();   // Data de nascimento
        $table->string('endereco', 150)->nullable(); // Endereço
        $table->string('email', 100)->unique();  // Email único
        $table->string('telefone', 20)->nullable(); // Telefone
        $table->integer('pontos')->default(0);   // Pontos de fidelidade
        $table->timestamps();                    // created_at / updated_at
    });
}


};

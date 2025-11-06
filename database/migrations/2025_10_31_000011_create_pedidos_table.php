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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('id_pedido');
            $table->unsignedBigInteger('id_cliente')->nullable();
            $table->unsignedBigInteger('id_mesa');
            $table->unsignedBigInteger('id_funcionario');
            $table->dateTime('data_hora');
            $table->decimal('total', 10, 2)->default(0);
            $table->string('status', 50);
            $table->timestamps();

            $table->foreign('id_cliente')->references('id_cliente')->on('clientes')->onDelete('set null');
            $table->foreign('id_mesa')->references('id_mesa')->on('mesas')->onDelete('cascade');
            $table->foreign('id_funcionario')->references('id_funcionario')->on('funcionarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};

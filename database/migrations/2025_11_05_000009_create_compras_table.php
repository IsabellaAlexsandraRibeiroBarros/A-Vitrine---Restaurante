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
        Schema::create('compras', function (Blueprint $table) {
            $table->id('id_compra');
            $table->unsignedBigInteger('id_fornecedor');
            $table->string('nota_fiscal', 50)->nullable();
            $table->date('data_compra');
            $table->decimal('total', 10, 2)->default(0);
            $table->timestamps();
            $table->foreign('id_fornecedor')->references('id_fornecedor')->on('fornecedores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};

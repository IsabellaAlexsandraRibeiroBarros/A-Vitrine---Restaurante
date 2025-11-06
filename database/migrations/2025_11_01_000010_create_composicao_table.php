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
        Schema::create('composicao', function (Blueprint $table) {
            $table->unsignedBigInteger('id_prato');
            $table->unsignedBigInteger('id_ingrediente');
            $table->string('quantidade', 50);
            $table->timestamps();

            $table->primary(['id_prato', 'id_ingrediente']);

            $table->foreign('id_prato')->references('id_prato')->on('pratos')->onDelete('cascade');
            $table->foreign('id_ingrediente')->references('id_ingrediente')->on('ingredientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('composicao');
    }
};

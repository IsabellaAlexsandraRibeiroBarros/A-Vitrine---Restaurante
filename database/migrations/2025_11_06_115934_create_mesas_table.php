mesa


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Cria a tabela mesas e insere dados iniciais
     */
    public function up(): void
    {
        Schema::create('mesas', function (Blueprint $table) {
            $table->bigIncrements('id_mesa'); // ID auto incremento
            $table->integer('numero')->unique(); // Número da mesa
            $table->enum('status', ['Livre', 'Reservada', 'Ocupada'])->default('Livre'); // Situação da mesa
        });

        // Inserindo as 15 mesas iniciais
        DB::table('mesas')->insert([
            ['numero' => 1, 'status' => 'Livre'],
            ['numero' => 2, 'status' => 'Livre'],
            ['numero' => 3, 'status' => 'Livre'],
            ['numero' => 4, 'status' => 'Livre'],
            ['numero' => 5, 'status' => 'Ocupada'],
            ['numero' => 6, 'status' => 'Livre'],
            ['numero' => 7, 'status' => 'Livre'],
            ['numero' => 8, 'status' => 'Livre'],
            ['numero' => 9, 'status' => 'Livre'],
            ['numero' => 10, 'status' => 'Livre'],
            ['numero' => 11, 'status' => 'Livre'],
            ['numero' => 12, 'status' => 'Livre'],
            ['numero' => 13, 'status' => 'Livre'],
            ['numero' => 14, 'status' => 'Livre'],
            ['numero' => 15, 'status' => 'Livre'],
        ]);
    }

    /**
     * Remove a tabela mesas (rollback)
     */
    public function down(): void
    {
        Schema::dropIfExists('mesas');
    }
};

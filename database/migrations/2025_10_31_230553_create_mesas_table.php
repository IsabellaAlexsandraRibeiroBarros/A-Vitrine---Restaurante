<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up()
    {
        Schema::create('mesas', function (Blueprint $table) {
            $table->id('id_mesa');
            $table->integer('numero')->unique();
            $table->enum('status', ['Livre', 'Reservada', 'Ocupada'])->default('Livre');
        });

        // Cria automaticamente as 15 mesas fixas
        for ($i = 1; $i <= 15; $i++) {
            DB::table('mesas')->insert([
                'numero' => $i,
                'status' => 'Livre'
            ]);
        }
    }

    public function down()
    {
        Schema::dropIfExists('mesas');
    }
};

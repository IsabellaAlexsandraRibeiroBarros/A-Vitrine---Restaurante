<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('pratos', function (Blueprint $table) {
            $table->id('id_prato');
            $table->string('nome', 100);
            $table->text('descricao')->nullable();
            $table->decimal('valor', 8, 2);
            $table->text('composicao')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pratos');
    }
};

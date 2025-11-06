pedidos


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Cria a tabela pedidos
     */
    public function up()
{
    Schema::create('pedidos', function (Blueprint $table) {
        $table->id();
        $table->foreignId('cliente_id')->nullable()->constrained('clientes')->onDelete('set null');
        $table->foreignId('mesa_id')->nullable()->constrained('mesas')->onDelete('set null');
        $table->string('status', 20)->default('em andamento');
        $table->decimal('total', 10, 2)->default(0);
        $table->timestamps();
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

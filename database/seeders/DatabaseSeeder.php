<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Desativa as foreign keys para evitar erro de truncate
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call([
            ClientesTableSeeder::class,
            FuncionariosTableSeeder::class,
            MesasTableSeeder::class,
            IngredientesSeeder::class,
            PratosSeeder::class,
            ComposicaoSeeder::class,
            FornecedoresSeeder::class,
            ComprasSeeder::class,
            PedidosSeeder::class,
        ]);

        // Reativa as foreign keys
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}

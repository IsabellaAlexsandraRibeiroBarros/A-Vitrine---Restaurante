<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComposicaoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('composicao')->insert([
            ['id_prato' => 1, 'id_ingrediente' => 1, 'quantidade' => '100g'],
            ['id_prato' => 1, 'id_ingrediente' => 2, 'quantidade' => '5 folhas'],
            ['id_prato' => 1, 'id_ingrediente' => 3, 'quantidade' => '50g'],
            ['id_prato' => 1, 'id_ingrediente' => 4, 'quantidade' => '30g'],
            ['id_prato' => 1, 'id_ingrediente' => 5, 'quantidade' => '1 unidade'],

            ['id_prato' => 2, 'id_ingrediente' => 6, 'quantidade' => '50g'],
            ['id_prato' => 2, 'id_ingrediente' => 7, 'quantidade' => '20g'],
            ['id_prato' => 2, 'id_ingrediente' => 8, 'quantidade' => '2 unidades'],

            ['id_prato' => 3, 'id_ingrediente' => 9, 'quantidade' => '80g'],
            ['id_prato' => 3, 'id_ingrediente' => 10, 'quantidade' => '40g'],
            ['id_prato' => 3, 'id_ingrediente' => 11, 'quantidade' => '150g'],

            ['id_prato' => 4, 'id_ingrediente' => 12, 'quantidade' => '100g'],
            ['id_prato' => 4, 'id_ingrediente' => 13, 'quantidade' => '20g'],
            ['id_prato' => 4, 'id_ingrediente' => 5, 'quantidade' => '1 unidade'],

            ['id_prato' => 5, 'id_ingrediente' => 14, 'quantidade' => '150g'],

            ['id_prato' => 6, 'id_ingrediente' => 15, 'quantidade' => '50g'],
            ['id_prato' => 6, 'id_ingrediente' => 16, 'quantidade' => '30g'],
            ['id_prato' => 6, 'id_ingrediente' => 17, 'quantidade' => '10ml'],
            ['id_prato' => 6, 'id_ingrediente' => 18, 'quantidade' => '50g'],
            ['id_prato' => 6, 'id_ingrediente' => 19, 'quantidade' => '30g'],

            ['id_prato' => 7, 'id_ingrediente' => 10, 'quantidade' => '60g'],
            ['id_prato' => 7, 'id_ingrediente' => 20, 'quantidade' => '20g'],

            ['id_prato' => 8, 'id_ingrediente' => 21, 'quantidade' => '40g'],
            ['id_prato' => 8, 'id_ingrediente' => 22, 'quantidade' => '1 dente'],
            ['id_prato' => 8, 'id_ingrediente' => 23, 'quantidade' => '10ml'],

            ['id_prato' => 9, 'id_ingrediente' => 24, 'quantidade' => '2 fatias'],
            ['id_prato' => 9, 'id_ingrediente' => 25, 'quantidade' => '50g'],
            ['id_prato' => 9, 'id_ingrediente' => 26, 'quantidade' => '20g'],
            ['id_prato' => 9, 'id_ingrediente' => 27, 'quantidade' => '10ml'],

            ['id_prato' => 10, 'id_ingrediente' => 28, 'quantidade' => '1 porção'],
            ['id_prato' => 10, 'id_ingrediente' => 29, 'quantidade' => '15ml'],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ingredientes')->truncate();

        DB::table('ingredientes')->insert([
            ['nome' => 'Tomate', 'un_medida' => 'un'],
            ['nome' => 'Manjericão', 'un_medida' => 'g'],
            ['nome' => 'Burrata', 'un_medida' => 'un'],
            ['nome' => 'Pesto', 'un_medida' => 'g'],
            ['nome' => 'Limão', 'un_medida' => 'un'],
            ['nome' => 'Prosciutto', 'un_medida' => 'g'],
            ['nome' => 'Pistache', 'un_medida' => 'g'],
            ['nome' => 'Torradas artesanais', 'un_medida' => 'un'],
            ['nome' => 'Linguiça artesanal', 'un_medida' => 'g'],
            ['nome' => 'Queijo Brie', 'un_medida' => 'g'],
            ['nome' => 'Massa artesanal', 'un_medida' => 'g'],
            ['nome' => 'Queijo Pecorino', 'un_medida' => 'g'],
            ['nome' => 'Bottarga', 'un_medida' => 'g'],
            ['nome' => 'Cordeiro', 'un_medida' => 'g'],
            ['nome' => 'Folhas verdes', 'un_medida' => 'g'],
            ['nome' => 'Nozes Pecan', 'un_medida' => 'g'],
            ['nome' => 'Molho balsâmico', 'un_medida' => 'ml'],
            ['nome' => 'Queijo Boursin', 'un_medida' => 'g'],
            ['nome' => 'Presunto Parma', 'un_medida' => 'g'],
            ['nome' => 'Geleia de pimenta', 'un_medida' => 'g'],
            ['nome' => 'Cebola assada', 'un_medida' => 'g'],
            ['nome' => 'Alho dourado', 'un_medida' => 'g'],
            ['nome' => 'Salsa trufada', 'un_medida' => 'ml'],
            ['nome' => 'Mascarpone', 'un_medida' => 'g'],
            ['nome' => 'Gorgonzola', 'un_medida' => 'g'],
            ['nome' => 'Pancetta', 'un_medida' => 'g'],
            ['nome' => 'Mel', 'un_medida' => 'ml'],
            ['nome' => 'Doce de leite', 'un_medida' => 'g'],
            ['nome' => 'Licor Amaretto', 'un_medida' => 'ml'],
        ]);
    }
}

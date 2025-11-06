<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PratosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pratos')->insert([
            [
                'nome' => 'Tagliolini Burrata',
                'descricao' => 'Massa fresca com molho de tomate, manjericão, burrata cremosa, pesto e raspas de limão.',
                'preco' => 58.90
            ],
            [
                'nome' => 'Prosciutto, Pistache e Torradas',
                'descricao' => 'Prosciutto, pistache e torradas artesanais.',
                'preco' => 49.00
            ],
            [
                'nome' => 'Lasanha Desconstruída',
                'descricao' => 'Ragu de linguiça artesanal, queijo brie derretido e massa artesanal.',
                'preco' => 62.50
            ],
            [
                'nome' => 'Rigatoni Cacio e Pepe',
                'descricao' => 'Massa com molho cremoso de queijo, bottarga e raspas de limão.',
                'preco' => 54.00
            ],
            [
                'nome' => 'Pappardelle com ragu de cordeiro',
                'descricao' => 'Massa fresca com cordeiro cozido lentamente.',
                'preco' => 69.90
            ],
            [
                'nome' => 'Salada com Figos Frescos',
                'descricao' => 'Folhas verdes, figos, nozes pecan, balsâmico, boursin e presunto parma.',
                'preco' => 42.00
            ],
            [
                'nome' => 'Ravioli de Brie',
                'descricao' => 'Massa recheada com brie e finalizada com geleia de pimenta.',
                'preco' => 52.90
            ],
            [
                'nome' => 'Carpaccio',
                'descricao' => 'Servido com cebola assada, alho dourado, manjericão e salsa trufada.',
                'preco' => 47.00
            ],
            [
                'nome' => 'Crostini di Pancetta',
                'descricao' => 'Focaccia, mascarpone, gorgonzola, pancetta e mel.',
                'preco' => 45.50
            ],
            [
                'nome' => 'Pudim de Doce de Leite',
                'descricao' => 'Pudim com doce de leite e licor Amaretto.',
                'preco' => 29.00
            ],
        ]);
    }
}

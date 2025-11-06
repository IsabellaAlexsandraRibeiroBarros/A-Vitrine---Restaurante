<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FornecedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fornecedores')->insert([
            [
                'nome' => 'Sabor & Arte Alimentos',
                'cnpj' => '12.345.678/0001-90',
                'celular' => '(11) 98888-1122',
                'email' => 'contato@saborearte.com.br',
            ],
            [
                'nome' => 'Delícia Gourmet Fornecimentos',
                'cnpj' => '23.456.789/0001-45',
                'celular' => '(21) 97777-2233',
                'email' => 'vendas@deliciagourmet.com',
            ],
            [
                'nome' => 'Natural Green Hortifruti',
                'cnpj' => '34.567.890/0001-67',
                'celular' => '(31) 96666-3344',
                'email' => 'contato@naturalgreen.com.br',
            ],
            [
                'nome' => 'La Panna Laticínios',
                'cnpj' => '45.678.901/0001-78',
                'celular' => '(41) 95555-4455',
                'email' => 'vendas@lapanna.com',
            ],
            [
                'nome' => 'Empório Italiano Importados',
                'cnpj' => '56.789.012/0001-89',
                'celular' => '(51) 94444-5566',
                'email' => 'contato@emporioitaliano.com',
            ],
        ]);
    }
}

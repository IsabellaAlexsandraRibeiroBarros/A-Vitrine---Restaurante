<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FuncionariosTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('pt_BR');

       
        $funcoes = ['Garçom', 'Cozinheiro', 'Auxiliar de Cozinha', 'Caixa', 'Gerente', 'Atendente', 'Faxineiro'];

        $funcionarios = [];

        for ($i = 0; $i < 20; $i++) {
            $funcionarios[] = [
                'nome' => $faker->name,
                'celular' => $faker->phoneNumber,
                'funcao' => $faker->randomElement($funcoes),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('funcionarios')->insert($funcionarios);
    }
}

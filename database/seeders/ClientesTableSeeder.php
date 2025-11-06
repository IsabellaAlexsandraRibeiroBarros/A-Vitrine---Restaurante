<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ClientesTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('pt_BR'); 

        $clientes = [];
        for ($i = 0; $i < 30; $i++) {
            $nome = $faker->name;
            $celular = $faker->phoneNumber;
            $email = $faker->unique()->safeEmail;
            $data_nasc = $faker->date($format = 'Y-m-d', $max = '2006-12-31');

            $clientes[] = [
                'nome' => $nome,
                'data_nasc' => $data_nasc,
                'celular' => $celular,
                'email' => $email,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('clientes')->insert($clientes);
    }
}

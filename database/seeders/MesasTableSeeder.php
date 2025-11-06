<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MesasTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mesas')->truncate();

        DB::table('mesas')->insert([
            ['numero' => 1, 'status' => 'Livre', 'descricao' => 'Ambiente reservado'],
            ['numero' => 2, 'status' => 'Reservada', 'descricao' => 'Área externa'],
            ['numero' => 3, 'status' => 'Ocupada', 'descricao' => 'Próxima à janela'],
            ['numero' => 4, 'status' => 'Ocupada', 'descricao' => 'Área externa'],
            ['numero' => 5, 'status' => 'Reservada', 'descricao' => 'Com vista para o jardim'],
            ['numero' => 6, 'status' => 'Reservada', 'descricao' => 'Com vista para o jardim'],
            ['numero' => 7, 'status' => 'Ocupada', 'descricao' => 'Ambiente reservado'],
            ['numero' => 8, 'status' => 'Livre', 'descricao' => 'Ambiente climatizado'],
            ['numero' => 9, 'status' => 'Livre', 'descricao' => 'Perto do balcão'],
            ['numero' => 10, 'status' => 'Livre', 'descricao' => 'Próxima à janela'],
            ['numero' => 11, 'status' => 'Ocupada', 'descricao' => 'Próxima à janela'],
            ['numero' => 12, 'status' => 'Ocupada', 'descricao' => 'Espaço para casal'],
            ['numero' => 13, 'status' => 'Reservada', 'descricao' => 'Perto do balcão'],
            ['numero' => 14, 'status' => 'Reservada', 'descricao' => 'Perto do balcão'],
            ['numero' => 15, 'status' => 'Reservada', 'descricao' => 'Com vista para o jardim'],
        ]);
    }
}

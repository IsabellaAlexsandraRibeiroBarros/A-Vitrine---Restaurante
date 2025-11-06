<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pedidos')->insert([
            [
                'id_cliente' => 2,
                'id_funcionario' => 2,
                'id_mesa' => 1,
                'data_hora' => Carbon::now()->subDays(9),
                'total' => 218.18,
                'status' => 'Em preparo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cliente' => 21,
                'id_funcionario' => 4,
                'id_mesa' => 6,
                'data_hora' => Carbon::now()->subDays(8),
                'total' => 248.89,
                'status' => 'Em preparo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cliente' => 20,
                'id_funcionario' => 7,
                'id_mesa' => 2,
                'data_hora' => Carbon::now()->subDays(5),
                'total' => 89.67,
                'status' => 'Cancelado',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cliente' => 3,
                'id_funcionario' => 9,
                'id_mesa' => 1,
                'data_hora' => Carbon::now()->subDays(1),
                'total' => 197.97,
                'status' => 'Entregue',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cliente' => 6,
                'id_funcionario' => 10,
                'id_mesa' => 5,
                'data_hora' => Carbon::now()->subDays(7),
                'total' => 121.14,
                'status' => 'Pago',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cliente' => 11,
                'id_funcionario' => 6,
                'id_mesa' => 11,
                'data_hora' => Carbon::now()->subDays(5),
                'total' => 126.48,
                'status' => 'Entregue',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cliente' => 9,
                'id_funcionario' => 10,
                'id_mesa' => 10,
                'data_hora' => Carbon::now()->subDays(4),
                'total' => 188.28,
                'status' => 'Entregue',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cliente' => 12,
                'id_funcionario' => 14,
                'id_mesa' => 2,
                'data_hora' => Carbon::now(),
                'total' => 103.65,
                'status' => 'Entregue',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cliente' => 8,
                'id_funcionario' => 9,
                'id_mesa' => 6,
                'data_hora' => Carbon::now()->subDays(3),
                'total' => 249.80,
                'status' => 'Em preparo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_cliente' => 19,
                'id_funcionario' => 6,
                'id_mesa' => 5,
                'data_hora' => Carbon::now()->subDays(2),
                'total' => 235.19,
                'status' => 'Em preparo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

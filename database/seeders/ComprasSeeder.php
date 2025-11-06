<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComprasSeeder extends Seeder
{
    public function run(): void
    {
       
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('compras')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        
        DB::table('compras')->insert([
            [
                'id_fornecedor' => 1, 
                'nota_fiscal' => 'NF-001',
                'data_compra' => '2025-11-05',
                'total' => 1250.50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_fornecedor' => 2,
                'nota_fiscal' => 'NF-002',
                'data_compra' => '2025-11-04',
                'total' => 840.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_fornecedor' => 3,
                'nota_fiscal' => 'NF-003',
                'data_compra' => '2025-11-02',
                'total' => 1640.75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
    for ($i = 1; $i <= 10; $i++) {
        $data[] = [
            'penjualan_id' => $i,
            'user_id' => 3, // Level Staff
            'pembeli' => 'Customer ' . $i,
            'penjualan_kode' => 'TRX' . sprintf("%03d", $i),
            'penjualan_tanggal' => now(),
        ];
    }
    DB::table('t_penjualan')->insert($data);
}
}

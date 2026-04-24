<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
  public function run(): void {
    $data = [
        ['supplier_id' => 1, 'supplier_kode' => 'SJP', 'supplier_nama' => 'Sejahtera Jaya', 'supplier_alamat' => 'Malang'],
        ['supplier_id' => 2, 'supplier_kode' => 'MTR', 'supplier_nama' => 'Mitra Abadi', 'supplier_alamat' => 'Surabaya'],
        ['supplier_id' => 3, 'supplier_kode' => 'GDS', 'supplier_nama' => 'Gudang Sembako', 'supplier_alamat' => 'Sidoarjo'],
    ];
    DB::table('m_supplier')->insert($data);
}
}

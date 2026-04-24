<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    public function run(): void {
    $data = [
        ['kategori_id' => 1, 'kategori_kode' => 'SNC', 'kategori_nama' => 'Snack/Makanan Ringan'],
        ['kategori_id' => 2, 'kategori_kode' => 'MKN', 'kategori_nama' => 'Makanan Utama'],
        ['kategori_id' => 3, 'kategori_kode' => 'MNM', 'kategori_nama' => 'Minuman'],
        ['kategori_id' => 4, 'kategori_kode' => 'KSM', 'kategori_nama' => 'Kosmetik'],
        ['kategori_id' => 5, 'kategori_kode' => 'PRT', 'kategori_nama' => 'Peralatan Rumah'],
    ];
    DB::table('m_kategori')->insert($data);
}
    /**
     * Run the migrations.
     */
   public function up(): void
{
    Schema::create('m_kategori', function (Blueprint $table) {
        $table->id('kategori_id');
        $table->string('kategori_kode', 10)->unique();
        $table->string('kategori_nama', 100);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_kategori');
    }
};

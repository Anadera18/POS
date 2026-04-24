<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up(): void
{
    Schema::create('m_user', function (Blueprint $table) {
        $table->id('user_id'); // Primary Key
        $table->unsignedBigInteger('level_id')->index(); // Kolom untuk Foreign Key
        $table->string('username', 20)->unique(); // Username unik, max 20 karakter
        $table->string('nama', 100); // Nama user, max 100 karakter
        $table->string('password'); // Kolom password
        $table->timestamps(); // Kolom created_at dan updated_at

        // Mendefinisikan Foreign Key ke tabel m_level
        $table->foreign('level_id')->references('level_id')->on('m_level');
    });
}

/**
 * Reverse the migrations.
 */
public function down(): void
{
    Schema::dropIfExists('m_user');
}
};

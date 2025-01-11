<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('products', function (Blueprint $table) {
        $table->json('gallery')->nullable(); // Tambahkan kolom untuk galeri gambar
        $table->json('specifications')->nullable(); // Tambahkan kolom untuk spesifikasi
    });
}

public function down()
{
    Schema::table('products', function (Blueprint $table) {
        $table->dropColumn(['gallery', 'specifications']);
    });
}
};

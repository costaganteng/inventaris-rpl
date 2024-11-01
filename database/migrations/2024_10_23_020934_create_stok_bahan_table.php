<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('stok_bahan', function (Blueprint $table) {
        $table->id();
        $table->string('nama_bahan', 100);
        $table->integer('stok_awal');
        $table->integer('stok_tambah');
        $table->integer('stok_keluar');
        $table->integer('stok_sisa');
        $table->float('angka_perolehan')->nullable();
        $table->float('angka_penyusutan')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stok_bahan');
    }
};

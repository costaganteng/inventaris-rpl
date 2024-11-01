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
    Schema::create('kerusakan_alat', function (Blueprint $table) {
        $table->id();
        $table->foreignId('id_alat')->constrained('inventaris');
        $table->text('spesifikasi')->nullable();
        $table->text('kerusakan');
        $table->date('tgl_kerusakan');
        $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('kerusakan_alat');
    }
};

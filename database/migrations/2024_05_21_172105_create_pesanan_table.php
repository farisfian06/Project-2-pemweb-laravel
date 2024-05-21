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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->string('nama', length: 100);
            $table->string('telepon', length: 100);
            $table->string('email', length: 100);
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian');
            $table->string('bukti_transaksi', length: 255);
            $table->unsignedBigInteger('id_mobil');
            $table->foreign('id_mobil')->references('id')->on('mobil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
};

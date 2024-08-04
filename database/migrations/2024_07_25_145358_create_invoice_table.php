<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kwitansi');
            $table->unsignedBigInteger('id_penyewa');
            $table->string('no_pol', 10); // Sesuaikan dengan tipe data di tabel kendaraan
            $table->timestamps();

            $table->foreign('id_kwitansi')->references('id')->on('kwitansi')->onDelete('cascade');
            $table->foreign('id_penyewa')->references('id_penyewa')->on('penyewa')->onDelete('cascade');
            $table->foreign('no_pol')->references('no_pol')->on('kendaraan')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoice');
    }
};
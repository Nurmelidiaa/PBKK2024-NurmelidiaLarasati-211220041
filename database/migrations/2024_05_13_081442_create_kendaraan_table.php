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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->string('no_pol', 10)->primary();
            $table->string('no_mesin', 20)->unique();
            $table->enum('jenis_mobil', ['mpv', 'city', 'suv']);
            $table->string('nama_mobil', 40);
            $table->enum('merek', ['honda', 'toyota', 'daihatsu']);
            $table->string('kapasitas', 5);
            $table->decimal('tarif', 10, 2);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraan');
    }
};

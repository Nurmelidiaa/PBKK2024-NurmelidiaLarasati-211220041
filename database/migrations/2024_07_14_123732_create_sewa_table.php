<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
            Schema::create('sewa', function (Blueprint $table) {
                $table->increments('id_sewa');
                $table->string('no_pol');
                $table->date('tgl_sewa');
                $table->date('tgl_selesai');
                $table->string('tlp_tujuan', 15);
                $table->text('alamat_tujuan');
                $table->integer('biaya_sewa');
                $table->string('kota', 50)->default('PONTIANAK');
                $table->unsignedBigInteger('id_penyewa')->default(0);
                $table->unsignedBigInteger('id_kwitansi');
                $table->integer('jlh_penumpang');
                $table->timestamps();
    
                $table->foreign('no_pol')->references('no_pol')->on('kendaraan')->onDelete('cascade');
                $table->foreign('id_penyewa')->references('id_penyewa')->on('penyewa')->onDelete('cascade');
                $table->foreign('id_kwitansi')->references('id')->on('kwitansi')->onDelete('cascade');
            });
        }
    
        public function down()
        {
            Schema::dropIfExists('sewa');
        }
    };
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
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();   
            $table->double('avarage_lama_menginap');
            $table->integer('jml_kamar_terpesan');
            $table->integer('jml_pemesanan');
            $table->integer('jml_kamar_tersedia');
            $table->double('total_pendapatan');
            $table->date('Tgl_Laporan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};

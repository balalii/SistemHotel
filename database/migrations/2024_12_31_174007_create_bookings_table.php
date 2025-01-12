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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('id_boking');
            $table->integer('id_customer');
            $table->integer('id_kamar');
            $table->date('Tgl_boking');
            $table->date('Tgl_masuk');
            $table->date('Tgl_keluar');
            $table->date('Tgl_Nginap');//baru
            $table->integer('lama_menginap');
            $table->double('jumlah_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};

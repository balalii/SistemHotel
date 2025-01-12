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
        Schema::create('kamars', function (Blueprint $table) {
            $table->id();
            $table->integer('id_hotel');
            $table->string('nama_kamar');
            $table->string('jenis_kamar');
            $table->string('ukuran_kamar');
            $table->integer('jumlah_bedroom');//baru
            $table->integer('ratings');//baru
            $table->boolean('status_ketersediaan');
            $table->double('harga_permalam');
            $table->boolean('AC');
            $table->boolean('Wifi');
            $table->boolean('Android Tv');
            $table->boolean('Karaoke');
            $table->boolean('Trademill');
            $table->string('media_path')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamars');
    }
};

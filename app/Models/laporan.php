<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    protected $fillable = [
        'id_kamar',
        'id_payment',
        'id_boking',
        'avarage_lama_menginap',
        'jml_kamar_terpesan',
        'jml_pemesanan',
        'jml_kamar_tersedia',
        'total_pendapatan',
        'Tgl_Laporan',    
    ];
    
}

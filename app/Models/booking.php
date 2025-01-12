<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $fillable = [
        'id_boking',
        'id_customer',
        'id_kamar',
        'Tgl_boking',
        'Tgl_Nginap',
        'Tgl_masuk',
        'Tgl_keluar',
        'lama_menginap',
        'jumlah_total',
];
}

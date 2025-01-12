<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $fillable = [
        'id_boking',
        'Tgl_Pembayaran',
        'Metode_Pembayaran',
    ];
}

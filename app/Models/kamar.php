<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class kamar extends Model
{
    protected $fillable = [
        'id_hotel',
        'nama_kamar',
        'jenis_kamar',
        'ukuran_kamar',
        'jumlah_bedroom',
        'ratings',
        'status_ketersediaan',
        'harga_permalam',
        'AC',
        'Wifi',
        'Android Tv',
        'Karaoke',
        'Trademill',
        'media_path'
    ];
}

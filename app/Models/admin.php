<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class admin extends Authenticatable
{
    use Notifiable;
    protected $guard = 'admin';

    protected $fillable = [
        'Nama',
        'Email',
        'password',    
    ];

    protected $hidden = ['password'];
}


//model ini sudah saya ubah menjadi authenticable 
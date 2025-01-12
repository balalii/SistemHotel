<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class customer extends Authenticatable
{
    
    use Notifiable;
    protected $guard = 'customer';

    protected $fillable = [
            'Nama',
            'No_Tlp',
            'Email',
            'No_KTP',
            'password'    
    ];

    protected $hidden = ['password'];
}

<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'apellido',
        'nickname',
        'city',
        'fecha',
        'email',
        'password',
        'rol',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function spots(){

        //Relacion de uno a muchos, entre un usuario y los spots
        return $this->hasMany('App\Models\Spot');
    }

    public function etiquetas(){

        //Relacion de muchos a muchos, entre las etiquetas y los spots
        return $this->belongsToMany('App\Models\Etiqueta');
    }
}

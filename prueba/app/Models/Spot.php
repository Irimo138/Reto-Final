<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    protected $fillable = [
        'Titulo',
        'Descripción',
        'Latitud',
        'Longitud',
        'Nickname',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    use HasFactory;

    //Relacion muchos a muchos, entre las etiquetas y los spots
    public function spots(){

        return $this->belongsToMany('App\Models\Spot');
    }
}

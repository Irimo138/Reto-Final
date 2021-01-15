<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    protected $guarded = [];

    public function user(){

        //relacion uno a muchos inversa.
        return $this->belongsTo('App\User');
    }
}

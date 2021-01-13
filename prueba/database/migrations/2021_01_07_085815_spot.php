<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Spot extends Migration
{
    public function up()
    {
        Schema::create('spot', function (Blueprint $table) {
            $table->id('id_spot')->autoIncrement();
            $table->string('url');
            $table->string('titulo');
            $table->string('descripción');
            $table->string('latitud');
            $table->string('longitud');
            //$table->string('Nickname')->references('nickname')->on('users');
            //$table->id('id_etiquetas')->references('id_etiquetas')->on('etiquetas');
        });
    }

    public function down()
    {
        Schema::dropIfExists('spot');
    }
}

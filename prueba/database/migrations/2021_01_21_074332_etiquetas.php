<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Etiquetas extends Migration
{
    
    public function up()
    {
        Schema::create('etiquetas', function (Blueprint $table) {
            $table->id();
            $table->string('Paisaje');
            $table->string('Urbano');
            $table->string('Grafiti');
            $table->string('Abandonado');
            $table->string('Iluminacion_natural');
            $table->string('artificial');
            $table->string('Mar');
            $table->string('Playa');
            $table->string('Monte');
            $table->string('Aereo');
            $table->string('Nocturno');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('etiquetas');
    }
}

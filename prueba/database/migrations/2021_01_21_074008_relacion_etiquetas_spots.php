<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelacionEtiquetasSpots extends Migration
{
   
    public function up()
    {
        Schema::create('relacion_etiquetas_spots', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('etiquetas_id');
            $table->unsignedBigInteger('spots_id');

            $table->foreign('etiquetas_id')->references('id')->on('etiquetas')->onDelete('cascade');
            $table->foreign('spots_id')->references('id')->on('spots')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('relacion_etiquetas_spots');
    }
}

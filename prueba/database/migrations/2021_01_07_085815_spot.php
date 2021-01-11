<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Spot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spots', function (Blueprint $table) {
            $table->id('id_spot')->autoIncrement();
            //$table->file('Imagen');
            $table->string('titulo');
            $table->string('descripción');
            $table->string('latitud');
            $table->string('longitud');
            //$table->string('Nickname')->references('nickname')->on('users');
            //$table->id('id_etiquetas')->references('id_etiquetas')->on('etiquetas');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spots');
    }
}

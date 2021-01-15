<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Spot extends Migration
{
    public function up()
    {
        Schema::create('spots', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("url");
            $table->string("descripcion");
            $table->double("latitud");
            $table->double("longitud");
            $table->timestamps();

            //Utilidades de la relacion con los spots
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('create_users_table')->onDelete('cascade');
                //Sirve para elimanr los registros de los spots. No se eliminaran las imagenes.
        });
    }

    public function down()
    {
        Schema::dropIfExists('spots');
    }
}
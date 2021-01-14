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
            $table->string("latitud");
            $table->string("longitud");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('spots');
    }
}

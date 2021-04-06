<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comunidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comunidad', function (Blueprint $table) {
            $table->id('idComunidad');
            $table->integer('poblacion')->unsigned();
            $table->string('comunidad');
            $table->float('latitud');
            $table->float('longitud');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comunidad');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Provincia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provincia', function (Blueprint $table) {
            $table->id('idProvincia');
            $table->foreignId('idComunidad')->constrained('comunidad');
            $table->integer('poblacion')->unsigned();
            $table->string('provincia');
            $table->float('longitud');
            $table->float('latitud');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provincia');
    }
}

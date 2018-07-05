<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Habitacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Habitacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Direccion');
            $table->string('MCuadrado');
            $table->boolean('Estado');
            $table->integer('calificacion');
            $table->integer('PrecioBase');
            $table->string('Detalles', 300);
            $table->boolean('Disponibilidad');

            $table->integer('idUsuario')->unsigned();
            $table->foreign('idUsuario')->references('id')->on('usuario');
            $table->integer('idPiso')->unsigned();
            $table->foreign('idPiso')->references('id')->on('piso');
            $table->integer('idTecho')->unsigned();
            $table->foreign('idTecho')->references('id')->on('Techo');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

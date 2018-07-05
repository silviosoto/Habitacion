<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServHabitacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servHabitacion', function (Blueprint $table) {
            
            $table->integer('idhabitacion')->unsigned();
            $table->foreign('idhabitacion')->references('id')->on('habitacion');
            $table->integer('idServicio')->unsigned();
            $table->foreign('idServicio')->references('id')->on('servicio');
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

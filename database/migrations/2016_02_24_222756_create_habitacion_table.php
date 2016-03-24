<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitacion',function(Blueprint $table)
        {
            $table->increments('codHabitacion');
            $table->string('descripcion');
            $table->string('codTipo')->unsigned();
            $table->foreign('codTipo')->references('codTipo')->on('tipoHabitacion');

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

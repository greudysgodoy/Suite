<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitacions', function (Blueprint $table) {
           $table->increments('codigo');

            $table->string('descripcion');

            $table->integer('codigoTipoHabitacion')->unsigned();
            $table->foreign('codigoTipoHabitacion')->references('codigo')->on('tipohabitacions');

            $table->char('estatus');


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
        Schema::drop('habitacions');
    }
}

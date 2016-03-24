<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleReservacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_reservacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigoReservacion');
            $table->string('codigoHuesped');
            $table->string('codigoHabitacio');
            $table->bool('estatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalle_reservacions');
    }
}

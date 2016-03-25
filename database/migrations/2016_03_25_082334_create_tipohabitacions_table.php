<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipohabitacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipohabitacions', function (Blueprint $table) {
            $table->increments('codigo');

            $table->string('descripcion');

            $table->integer('capacidad');

            $table->double('precio');

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
        Schema::drop('tipohabitacions');
    }
}

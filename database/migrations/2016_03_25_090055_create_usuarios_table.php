<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('codigo');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('email');
            $table->date('fechaNacimiento');
            $table->string('codigoRol');
            $table->string('password');
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
        Schema::drop('usuarios');
    }
}

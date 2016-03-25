<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
	protected $table = "usuarios";
    protected $primaryKey="codigo";

    protected $fillable = [
        'codigo', 'nombre', 'apellido','telefono', 'email', 'fechaNacimiento','codigoRol','password','estatus',
    ];
}

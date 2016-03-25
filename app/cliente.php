<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table = "clientes";
    protected $primaryKey="codigo";


    protected $fillable = [
        'codigo', 'nombre', 'apellido','telefono', 'email', 'fechaNacimiento','estatus',
    ];

}

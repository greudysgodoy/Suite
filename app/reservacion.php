<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservacion extends Model
{
	protected $table = "reservacion";
    protected $primaryKey="codigo";
    protected $fillable = [
        'codigo', 'codigoCliente', 'fechaIngreso','fechaSalida','estatus',
    ];
}

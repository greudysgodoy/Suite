<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservacion extends Model
{
	protected $table = "reservacions";
    protected $primaryKey="codigo";

    protected $fillable = [
        'codigo', 'codigoCliente', 'fechaIngreso','fechaSalida','estatus',
    ];
}

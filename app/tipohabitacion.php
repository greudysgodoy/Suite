<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipohabitacion extends Model
{
    protected $table = "tipohabitacions";
    protected $fillable = ['descripcion','capacidad','precio','estatus'];
    protected $primaryKey = "codigo";
}

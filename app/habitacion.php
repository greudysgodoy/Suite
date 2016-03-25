<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class habitacion extends Model
{
    protected $table = "Habitacions";
    protected $fillable = ['descripcion','codigoTipoHabitacion','estatus'];
    protected $primaryKey = "codigo";
}

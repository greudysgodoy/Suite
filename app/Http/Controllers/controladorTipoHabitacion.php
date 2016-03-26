<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\tipohabitacion;
use Session;
use Redirect;


class controladorTipoHabitacion extends Controller
{
    //
    public function index()
    {
        return view('registroTipoHabitacion');
    }


    public function store(Request $request)
    {
        	tipohabitacion::create([
			'descripcion' => $request['descripcion'],
			'capacidad' => $request['capacidad'],
			'precio' => $request['precio'],
			'estatus' => '1',
			]);

		Session::flash('message-success','Tipo de habitacion registrada exitosamente');
        return Redirect::to('registroTipoHabitacion');
    }
}
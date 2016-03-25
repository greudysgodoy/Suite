<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;



use App\servicio;
use Session;
use Redirect;


class controladorServicio extends Controller
{

	 public function index()
	{
		return view('registroServicio');

	
	}

	public function store(Request $request)
	{			
			servicio::create([
			'descripcion' => $request['descripcion'],
			'precio' => $request['precio'],
			'estatus' => '1',
			]);

		Session::flash('message-success','Servicio registrado exitosamente');
        return Redirect::to('registroServicio');
	}
    //
}

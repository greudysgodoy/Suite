<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\habitacion;
use App\tipohabitacion;
use App\reservacion;
use App\cliente;
use Session;
use Redirect;

class controladorCheckIn extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$reservacion = reservacion::get()->where('codCliente', '21244015')->first();
        $registro = var_dump($reservacion->fechaInicio);*/

       /* $registro = reservacion::get('fechaIngreso')->where('codCliente', '21244015')->first();*/

        /*$registro = DB::table('reservacion')->where('codCliente', '21244015')->first();

        var_dump($registro->codCliente;
       
        /*$tipohabitacions = tipohabitacion::lists('descripcion','codigo');
        return view('checkin',compact('registro'));*/
        $nombre = '---';
        $codigo = '---';
        $fechaIngreso = '---';
        $fechaSalida = '---';
        return view('checkin',compact('codigo','nombre'),compact('fechaIngreso','fechaSalida'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "hola create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            if(isset($request["buscar"]))
            {
                $codigo = $request['txtCodigo'];
                $tabla = reservacion::find($codigo);
                $fechaIngreso = $tabla->fechaIngreso;
                $fechaSalida = $tabla->fechaSalida;
                $codigoCliente = $tabla->codigoCliente;

                $tabla2 = cliente::find($codigoCliente);
                $nombre = $tabla2->nombre;

                          
            }



           return view('checkin',compact('codigo','nombre'),compact('fechaIngreso','fechaSalida'));

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

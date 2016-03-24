<?php namespace App\Http\Controllers;

class controladorVistas extends Controller {

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index');
	}

	public function inicio()
	{
		return view('inicio');
	}

	public function checkOut()
	{
		return view('checkOut');
	}

	public function registroHabitacion()
	{
		return view('registroHabitacion');
	}

	public function registroTipoHabitacion()
	{
		return view('registroTipoHabitacion');
	}



	public function reporteDisponibilidad()
	{
		return view('reporteDisponibilidad');
	}


	public function reportePresupuesto()
	{
		return view('reportePresupuesto');
	}

	public function reporteReservacion()
	{
		return view('reporteReservacion');
	}

	public function sugerencias()
	{
		return view('sugerencias');
	}

	public function checkIn()
	{
		return view('checkIn');
	}

	public function reservacion()
	{
		return view('reservacion');
	}

	public function registroServicio()
	{
		return view('registroServicio');
	}

	public function contacto()
	{
		return view('contacto');
	}

	public function sugerencia()
	{
		return view('sugerencia');
	}

	public function factura()
	{
		return view('factura');
	}

	public function calificacion()
	{
		return view('calificacion') ;
	}

	public function registroCliente()
	{
		return view('registroCliente') ;
	}

	public function registroUsuario()
	{
		return view('registroUsuario') ;
	}

		public function abono()
	{
		return view('abono');
	}

	public function reporteClientes()
	{
		return view('reporteClientes');
	}

	public function reporteCuentas()
	{
		return view('reporteCuentas');
	}

	public function reporteCalificaciones()
	{
		return view('reporteCalificaciones');
	}

		public function reporteIngresos()
	{
		return view('reporteIngresos');
	}

}

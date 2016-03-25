<?php


Route::get('/', 'controladorVistas@index');

Route::get('checkOut','controladorVistas@checkOut');

Route::get('registroHabitacion','controladorVistas@registroHabitacion');

Route::get('registroTipoHabitacion','controladorVistas@registroTipoHabitacion');

Route::get('checkIn','controladorVistas@checkIn');

Route::get('reporteDisponibilidad','controladorVistas@reporteDisponibilidad');

Route::get('reportePresupuesto','controladorVistas@reportePresupuesto');

Route::get('sugerencias','controladorVistas@sugerencias');

Route::get('reservacion','controladorVistas@reservacion');

Route::get('reporteReservacion','controladorVistas@reporteReservacion');

Route::get('registroServicio','controladorVistas@registroServicio');

Route::get('contacto', 'controladorVistas@contacto');

Route::get('sugerencia', 'controladorVistas@sugerencia');

Route::get('factura', 'controladorVistas@factura');

Route::get('calificacion', 'controladorVistas@calificacion');

Route::get('registroCliente', 'controladorVistas@registroCliente');

Route::get('registroUsuario', 'controladorVistas@registroUsuario');

Route::get('abono','controladorVistas@abono');

Route::get('reporteClientes','controladorVistas@reporteClientes');

Route::get('reporteCuentas','controladorVistas@reporteCuentas');

Route::get('reporteCalificaciones','controladorVistas@reporteCalificaciones');

Route::get('reporteIngresos','controladorVistas@reporteIngresos');

Route::get('inicio','controladorVistas@inicio');



Route::resource('habitacion','controladorHabitacion');

Route::resource('cliente','controladorCliente@create');

Route::resource('usuario','controladorUsuario@create');


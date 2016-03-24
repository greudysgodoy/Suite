
@extends('templates.templateGerente')

@section('content')
	<div class="panel panel-default">
	<div class="panel-heading"> 
	<h3> <b>Registro de Sugerencias</b>  </h3>

	</div>
 		<div class="panel-body">

			<div align="center" class="row">
			  <div class="col-xs-12"> </div>
			</div>
			
			<!--<div class="logo-interior6"></div>-->

			<div class="row">
			  <div class="col-lg-12 col-md-8 col-sm-6 col-xs-6">
			  		<form action="">
			  		<!--Parte interna del panel-->
						<div class="form-group">
							<textarea type="text" class="form-control" name="comentarios" rows="8" cols="40">Escribe aquí tus sugerencias</textarea>
						</div>
						<input type="submit" name="btn_aceptar" value="Aceptar"></input>
						<!--fin de la Parte interna del panel-->



					</form>
			</div>
		</div>
	</div>

@stop
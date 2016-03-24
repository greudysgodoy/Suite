@extends('templates.principal')

@section('content')

<!-- Panel -->
<div class="panel panel-default">
	<!-- Cabecera del panel -->
	<div class="panel-heading"> 
	<!-- Titulo del panel -->
	<strong><h5  class="panel-title"> Registro de habitaciones </h5></strong>

	</div>
		<!-- contenido del panel -->
 		<div class="panel-body">
			<div align="center" class="row">
			  <div class="col-xs-12"> </div>
			</div>



			<div class="row">
			  <div class="col-lg-12 col-md-8 col-sm-6 col-xs-6">
			  		<form action="">
						<div class="form-group">
							<label form="" >Codigo</label>
							<input type="text" class="form-control">
						</div>	
						<div class="form-group">
							<label form="">Descripcion</label>
							<input  type="text" class="form-control">
						</div>
						<div class="form-group">
							<label form="">Tipo</label>
							<input type="text" class="form-control">
						</div>

						<div class="botones">
							<input type="submit" name="btn_cancelar" value="Aceptar"></input>
							<input type="reset" name="btn_cancelar" value="Cancelar"></input>
							<input type="submit" name="btn_aceptar" value="Agregar nuevo tipo"></input>	
						</div>				
					</form>												
			  </div>
			  <div class="logo-interior7"> </div>
			</div>	
		</div>




@stop
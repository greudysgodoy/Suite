
@extends('templates.templateGerente')

@section('content')
<div align="center">	
	<div class="panel panel-default" style="width: 50%">
		<div class="panel-heading" > 
			<h4 align="center"> <B> Check in </B> </h4>
		</div>
	 		<div class="panel-body">
				<div class="col-lg-12 col-md-8 col-sm-6 col-xs-6" >	  
					<div class="row">
						<div class="contenedor-formulario">
						<br><br><br>
								<form class="formulario" name="formularios" method="post">
									<div>
								  		<div  class="input-group">  				 	
											<input type="text" id="codigo" name="codigo">
											<label class="label" for="codigo">Codigo del cliente</label>
										</div>
										<div class="input-group">	
											<input type="date" id="fechaEnt" name="fechaEnt">
											<label class="label" for="fechaEnt">Fecha de Entrada</label>				
										</div>
										<div class="input-group">	
									   		<input type="date" id="fechaSal" name="fechaSal"> 
									   		<label class="label" for="fechaSal">Fecha de Salida</label>
									   	</div>
										<div class="input-group">
											<input type="text" id="cantHuesp" name="cantHuesp" >
											<label class="label" for="cantHuesp">Cantidad de Huespedes</label>
										</div>
										<div class="input-group">					
											<input type="text" id="cantHabit" name="cantHabit">
											<label class="label" for="cantHabit">Cantidad de Habitaciones</label>
										</div>
										<input id="btn-reset" type="reset" value="Cancelar">
								  		<input id="btn-submit" type="submit" value="Procesar">
									</div>

							 	</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>				
@stop
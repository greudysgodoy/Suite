
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
			{!!Form::open(['route'=>'checkIn.store', 'method'=>'POST', 'class'=>'formulario'])!!}
									<div>
								  		<div  class="input-group">  				 	
											<input type="text" id="codigo" name="txtCodigo">
											<label class="label" for="codigo">Codigo de la reservacion</label>		
											<input type="submit" value="Buscar" name="buscar">
										</div>
									</div>							
								<div>
									<div class="input-group">	
								   		<input type="text" id="nombre" name="txtNombre" value={{$nombre}}> 
								   		<label class="label" for="nombre">Nombre del cliente</label>
								   	</div>								
									<div class="input-group">	
										<input type="text" id="fechaEnt" name="fechaEntrada" value={{$fechaSalida}}> 
										<label class="label" for="fechaEntrada">Fecha de Entrada</label>			
									</div>
									<div class="input-group">	
								   		<input type="text" id="fechaSal" name="fechaSal" value={{$fechaSalida}}> 
								   		<label class="label" for="fechaSalida">Fecha de Salida</label>
								   	</div>
									<input id="btn-reset" type="reset" value="Cancelar">
							  		<input id="btnProcesar" type="submit" name="procesarCheck"value="Procesar">
								</div>';
			{!!Form::close()!!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>				
@stop
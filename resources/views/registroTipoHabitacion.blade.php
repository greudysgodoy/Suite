@extends('templates.templateGerente')

@section('content')
<div align="center">	
	<div class="panel panel-default" style="width: 50%">
		<div class="panel-heading" > 
			<h4 align="center"> <B>Tipo de habitación</B> </h4>
		</div>
	 		<div class="panel-body">
				<div class="col-lg-12 col-md-8 col-sm-6 col-xs-6" >	  
					<div class="row">
						<div class="contenedor-formulario">
								{!!Form::open(['route'=>'tipoHabitacion.store', 'method'=>'POST','name' => 'formularios', 'class'=>'formulario'])!!}
									<div>
								  
										<div class="input-group">	
											<input type="text"  name="descripcion">
											<label class="label" for="descripcion">Descripcion</label>				
										</div>
										<div class="input-group">	
									   		<input type="text"  name="capacidad"> 
									   		<label class="label" for="-capacidad">Capacidad</label>
									   	</div>
										<div class="input-group">
											<input type="text"  name="precio">
											<label class="label" for="precio">Precio</label>
										</div>
										
								  		<input id="btn-submit" type="submit" value="Aceptar">
									</div>

							 	{!!Form::close()!!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>			
@stop
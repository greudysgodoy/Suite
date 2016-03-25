@extends('templates.templateGerente')

@section('content')
<div align="center">	
	<div class="panel panel-default" style="width: 60%">
		<div class="panel-heading" > 
			<h4 align="center"> <B>Registro de cliente</B> </h4>
		</div>
	 		<div class="panel-body">
				<div class="col-lg-12 col-md-8 col-sm-6 col-xs-6" >		
					<div class="row">
						<div class="contenedor-formulario">
						<br><br>
				{!!Form::open(['route'=>'cliente.store','method'=>'post','class'=>'formulario','name'=>'formularios'])!!}				
								<!--<form class="formulario" name="formularios" method="post" route="cliente.sotore">-->
									<div>
										<div  class="left">
											<div  class="input-group">	
												<input type="text" id="cedula" name="txtCedula">
							  				 	<label class="label" for="cedula">Cédula</label>
											</div>	
											<div class="input-group">
												<input type="text" id="nombre" name="txtNombre">
												<label class="label" for="nombre">Nombre</label>						
											</div>
											<div class="input-group">
												<input type="text" id="apellido" name="txtApellido">
												<label class="label" for="apellido">Apellido</label>					
											</div>											
						   				</div>

						   				<div class="right">
											<div class="input-group">							
								   				<input type="date" id="nacimiento" name="fechaNacimiento">
								   				<label class="label" for="edad">Fecha de nacimiento</label>
								   			</div>							   				
						   					<div class="input-group">			   				
												<input type="text" id="telefono" name="txtTelefono">
												<label class="label" for="telefono">Teléfono</label>
											</div>	
											<div class="input-group">							
												<input type="email" name="email">
												<label class="label" for="email">Correo</label>
											</div>											
										</div>									
										<input type="reset" value="Cancelar">
					  				 	<input type="submit" name="btnAceptar" value="Aceptar">  
				  				 	</div>
				  				 {!!Form::close()!!}	
				  				<!--</form>-->					
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
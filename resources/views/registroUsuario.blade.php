@extends('templates.templateGerente')

@section('content')
<div align="center">	
	<div class="panel panel-default" style="width: 60%">
		<div class="panel-heading" > 
			<h4 align="center"> <B> Registro de cliente</B> </h4>
		</div>
	 		<div class="panel-body">
				<div class="col-lg-12 col-md-8 col-sm-6 col-xs-6" >	  
					<div class="row">
						<div class="contenedor-formulario">
								<form class="formulario" name="formularios" method="post">
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
										   		<input type="date" id="edad" name="fechaNacimiento"> 
										   		<label class="label" for="edad">Fecha de nacimiento</label>
										   	</div>
						  				</div>
						  				<div  class="right">		  				
											<div class="input-group">
												<input type="text" id="telefono" name="txtTelefono">
												<label class="label" for="telefono">Teléfono</label>
											</div>
						  					<div class="input-group">					
												<input type="email" id="email" name="email">
												<label class="label" for="email">Correo</label>
											</div>
											
											<div class="input-group">									
												<input id="contraseña" type="password" name="contraseña">
												<label class="label" for="contraseña">Contraseña</label>
											</div>
						  				</div>
								  		<div style="width: 100%" class="input-group radio">					
												<div class="left">
													<input type="radio" name="radio" id="recepcionista" value="Recepcionista">
													<label for="recep">Recepcionista</label>
												</div>
												<div class="left">
													<input type="radio" name="radio" id="gerente" value="Gerente">
													<label for="gerente">Gerente</label>
												</div>					          
									    </div>
										
										<input id="btn-reset" type="reset" value="Cancelar">
								  		<input id="btn-submit" type="submit" value="Aceptar">
									</div>

							 	</form>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>			
@stop
@extends('templates.templateGerente')

@section('content')
<div align="center">	
	<div class="panel panel-default" style="width: 50%">
		<div class="panel-heading" > 
			<h4 align="center"> <B> Check out </B> </h4>
		</div>
	 		<div class="panel-body">
				<div class="col-lg-12 col-md-8 col-sm-6 col-xs-6" >	  
					<div class="row">
						<div class="contenedor-formulario">
						
								<form class="formulario" name="formularios" method="post">
									<div class="left2">
										<div  class="input-group">  				 	
											<input type="text" id="cedulaCli" name="cedulaCli">
											<label class="label" for="cedulaCli">Cedula Cliente</label>
										</div>
										<div  class="input-group">  				 	
											<input type="text" id="nombreCli" name="nombreCli">
											<label class="label" for="nombreCli">Nombre Cliente</label>
										</div>
									</div>
									<div class="right2">
										<div  class="input-group">  				 	
											<input type="text" id="codigoRes" name="codigoRes">
											<label class="label" for="codigoRes">Codigo de la reservacion</label>
										</div>
										<div  class="input-group">  				 	
											<input type="text" id="cantidadHues" name="cantidadHues">
											<label class="label" for="cantidadHues">Cantidad de Huespedes</label>
										</div>
									</div><br><br><br>
										<input id="btn-reset" type="reset" value="Cancelar">
										<input id="btn-submit" type="submit" value="Guardar">									
								</form>	
							</div>
							 
						</div>
					</div>
				</div>
			</div>
		</div>				
@stop
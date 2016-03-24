@extends('templates.templateGerente')

@section('content')
<div align="center">	
	<div class="panel panel-default" style="width: 50%">
		<div class="panel-heading" > 
			<h4 align="center"> <B>Registro de habitación </B> </h4>
		</div>
	 		<div class="panel-body">
				<div class="col-lg-12 col-md-8 col-sm-6 col-xs-6" >	  
					<div class="row">
						<div class="contenedor-formulario">
								<form class="formulario" name="formularios" method="post">
									<div>
								  		<div  class="input-group">  				 	
											<input type="text" id="codigoHab" name="codigoHab">
											<label class="label" for="codigoHab">Codigo Habitación</label>
										</div>
										<div  class="input-group">  				 	
											<input type="text" id="descripcion" name="descripcion">
											<label class="label" for="descripcion">Descripción Habitación</label>
										</div>
										<div class="input-group">
											<select>
												<option></option>
												<option>Duplex</option>
												<option>Triple sencilla</option>
												<option>Matrimonial</option>
												<option>Suite presidencial</option>
											</select>
											<label class="label" for="tipoHab">Tipo de Habitacion</label>		
										</div>
										<div  class="input-group">  				 	
											<input type="text" id="precio" name="precio">
											<label class="label" for="precio">Precio Habitación</label>
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
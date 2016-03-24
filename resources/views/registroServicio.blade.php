@extends('templates.templateGerente')

@section('content')
<div align="center">	
	<div class="panel panel-default" style="width: 50%">
		<div class="panel-heading" > 
			<h4 align="center"> <B> Registro de servicios </B> </h4>
		</div>
	 		<div class="panel-body">
				<div class="col-lg-12 col-md-8 col-sm-6 col-xs-6" >	  
					<div class="row">
						<div class="contenedor-formulario">
								<form class="formulario" name="formularios" method="post">
									<div>
								  		<div  class="input-group">  				 	
											<input type="text" id="nombreServ" name="nombreServ">
											<label class="label" for="nombreServ">Nombre Servicio</label>
										</div>
										<div class="input-group">	
											<input type="text" id="descripcion" name="descripcion">
											<label class="label" for="descripcion">Descripcion</label>				
										</div>
										<div class="input-group">	
									   		<input type="text" id="precio" name="precio"> 
									   		<label class="label" for="precio">Precio</label>
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
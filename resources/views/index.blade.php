@extends('templates.templateUsuario')
@section('content')
<divclass="col-lg-12 col-md-8 col-sm-6 col-xs-6" >	  
	<div class="row">
		<div   class="contenedor-formulario">
			<div style="max-width: 40%" class="wrap">
				<form class="formulario" name="formularios" method="post">
					<div>
		    				<h3 align="center"><b>Inicio de Sesión</b></h3><br>
				  		<div  class="input-group">  				 	
							<input type="text" id="usuario" name="usuario">
							<label class="label" for="usuario">Usuario</label>
						</div>
						<div class="input-group">	
							<input type="password" id="contraseña" name="contraseña">
							<label class="label" for="contraseña">Contraseña</label>				
						</div>
						<input id="btn-reset" type="reset" value="Cancelar">
				  		<input id="btn-submit" type="submit" value="Iniciar">
					</div>

			 	</form>
			</div>
		</div>
	</div>
</div>
@stop
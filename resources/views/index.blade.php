@extends('templates.templateGerente')
@section('content')
<div align="center">  
  <div class="panel panel-default" style="width: 40%">
    <div class="panel-heading" > 
      <h4 align="center"> <B>Inicio de Sesión</B> </h4>
    </div>
      <div class="panel-body">
        <div class="col-lg-12 col-md-8 col-sm-6 col-xs-6" >   
          <div class="row">
            <div class="contenedor-formulario">
                <form class="formulario" name="formularios" method="post">
                  	<div>				  
						<div  class="input-group">  				 	
										<input type="text" id="usuario" name="usuario">
							<label class="label" for="usuario">Usuario</label>
						</div>
						<div class="input-group">	
							<input type="password" id="contraseña" name="contraseña">
							<label class="label" for="contraseña">Contraseña</label>				
						</div>
						<input id="btn-submit" type="submit" value="Iniciar">
						<input id="btn-regis" type="submit" value="Registrar">			  		
					</div>
                </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
@stop
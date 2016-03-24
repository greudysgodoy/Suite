@extends('templates.templateGerente')

@section('content')
<div class="col-lg-12 col-md-8 col-sm-6 col-xs-6"  align="center">	
	<div class="panel panel-default" style="width: 70%">
		<div class="panel-heading" > 
			<<h3 align="center"><b>Reservacion</b></h3>
		</div>
	 		<div class="panel-body">
				<div class="col-lg-12 col-md-8 col-sm-6 col-xs-6" >		
					<div class="row">
						<div class="contenedor-formulario">
						<br><br>				
								<form class="formulario" name="formularios" method="post">
									
				  				  <br><br>
								  <div class="left2" >
								 	 <div class="panel panel-default">
								  		<div class="panel-heading">
								  			<h4>Fecha</h4>
								  		</div>	
								  		<div class="panel-body">							  	
								  			<div class="input-group">										
												<input type="date" id="entrada" name="fechaSalida"  class="tcal" value="" >
												<label class="label" for="entrada">Entrada:</label>									
											</div>
											<div class="input-group">
												<input type="date" id="salida" name="fechaSalida" class="tcal" value="" />
												<label class="label" for="salida">Salida:</label>											
											</div>
								  		</div>							  	
								 	 </div>	
								  </div>	
								  					  	
								  <div class="right2" >
								 	 <div class="panel panel-default">
								  		<div class="panel-heading">
								  			<h4>Cliente</h4>
								  		</div>
								  		<div class="panel-body">
								  			<div class="input-group">										
												<input type="text" id="cedula" name="txtCedula">
												<label class="label" for="cedula">Cédula:</label>							
											</div>
											<div class="input-group">
												<input type="text" id="nombre" name="txtNombre">
												<label class="label" for="nombre">Nombre:</label>												
											</div>
								  		</div>
								  	</div>							  	
								  </div>
								  <div class="left2" >
								  	<div class="panel panel-default">
								  		<div class="panel-heading">
								  			<h4>Cantidad de huespédes</h4>
								  		</div>	
								  		<div class="panel-body">
								  			<div class="input-group">										
												<input type="text" id="aReservar" name="txtNumHuespedes"> 
												<label class="label" for="aReservar">A Reservar:</label>									
											</div>
											<div class="input-group">
												<input type="text" id="sinAsignar" name="txtSinAsignar"> 
												<label class="label" for="sinAsignar">Sin Asignar:</label>											
											</div>
								  		</div>
								  	</div>							  	
								  </div>
								  <div class="right2" >
								  	 <div class="panel panel-default">
								  		<div class="panel-heading">
								  			<h4>Habitaciones</h4>
								  		</div>
								  		<div class="panel-body">
								  			<div class="input-group"> 
								  				<label class="label" for="tipo">Tipo:</label><br>
												<select id="tipo" name="selectTipo">   	 
								  	  				<option value="opcion-n">Seleccione</option>
								  	  				<option value="opcion-n">Dubplex</option>
								  	  				<option value="opcion-n">Matrimonial</option>
								  				</select>
											</div>
											<div class="input-group">
												<input type="text" id="cantidad" name="txtCantidadHabitaciones">
												<label class="label" for="cantidad">Cantidad:</label>														
											</div>
								  		</div>
									  </div>								   	
								 </div>
								 <div class="left2" >
								 	<div class="panel panel-default">
								  		<div class="panel-heading">
								  			<h4>Registrod de Huespédes</h4>
								  		</div>	
								  		<div class="panel-body">
								  			<div class="input-group">
												<input type="text" id="cedulaHuesped" name="txtCedulaHuesped" >
												<label class="label" for="cedulaHuesped">Cédula:</label>					
											</div>
											<div class="input-group">
												<input type="text" id="nombreHuesped" name="txtNombreHuesped">
												<label class="label" for="nombreHuesped">Nombre:</label>						
											</div>
											<div class="input-group">
												<input type="date" id="fechaHuesped" name="txtFechaHuesped">
												<label class="label" for="fechaHuesped">Fecha de nacimiento:</label>						
											</div>											
	  										<input style="width: 25%" type="reset" name="btn_agregar" value="Agregar">
	  									</div>
	  								</div>								  	
								 </div>							  	
								  	<div class="right2" >
									 	 <div class="panel panel-default">
									  		<div class="panel-heading">
									  			<h4>Huespuedes Asignados</h4>
									  		</div>
									  		<div class="panel-body">
									  			<table  class="form-control">
													<tr>
												      <th width="50%" scope="col">Huesped</th>
												      <th width="50%" scope="col">Habitacion</th>
												    </tr>
												    <tr>
												      <td>&nbsp;</td>
												      <td>&nbsp;</td>
												    </tr>
												    <tr>
												      <td>&nbsp;</td>
												      <td>&nbsp;</td>
												    </tr>
												    <tr>
												      <td>&nbsp;</td>
												      <td>&nbsp;</td>
												    </tr>
												    <tr>
												      <td>&nbsp;</td>
												      <td>&nbsp;</td>
												    </tr>
						  						</table>
									  		</div>
										  </div>
									</div>
									<div> 
										<input style="width: 25%" type="reset" name="btn_cancelar" value="Cancelar">
										<input style="width: 25%; margin-top: 200px" type="submit" name="btn_aceptar" value="Aceptar">			
									</div>	
				  				</form>					
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
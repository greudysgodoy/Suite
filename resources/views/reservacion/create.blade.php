
@extends('templates.principal')

@section('content')
	<div class="panel panel-default">
	<div class="panel-heading"> 
	<strong><h5  class="panel-title"> Reservaciones </h5></strong>

	</div>
 		<div class="panel-body">

			<div align="center" class="row">
			  <div class="col-xs-12"> </div>
			</div>
			
			<!--<div class="logo-interior6"></div>-->

			<div class="row">
			  <div class="col-lg-12 col-md-8 col-sm-6 col-xs-6">
			  		<form action="">
			  		<!--Parte interna del panel-->
						<div class="contenedorReservacion">
							<form action="">

								<div class="fecha">
									Fecha Entrada:
									<input type="date" class="form-control" name="date" placeholder="Fecha de Ingreso" class="tcal" value="" />			
								</div>
								<div class="fecha">
									Fecha Salida:
									<input type="date" class="form-control" name="date" placeholder="Fecha de Salida" class="tcal" value="" />
								</div>
								<div>
									Cedula Cliente:
									<input type="text" class="form-control" placeholder="&#128272 V-00000000">
								</div>
								<div>
									Nombre Cliente:
									<input type="text" class="form-control" placeholder="&#128272 José">
								</div>
								<div class="fecha">
									Cantidad de Huespedes:
									<input type="text" class="form-control"  placeholder="20"> 
								</div>
								<div class="fecha">
									Huespedes Sin Asignar:
									<input type="text" class="form-control"  placeholder="#20"> 
								</div>
								<div> 
									<select class="form-control">   	 
						  	  			<option class="form-control" value="opcion-n">Tipo de Habitación</option>
						  			</select>
								</div>
								<div>
									Cantidad de habitaciones:
									<input type="text" class="form-control" placeholder="Cant Habitaciones">
								</div>
								
								<div class="panel-body">
  									<div class="panel-heading">
  									<caption class="form-control">
					    				Habitacion:HM-0004
					  				</caption>
  										<div>
  											Cedula:
											<input type="text" class="form-control" placeholder="&#128272 V-00000000">
										</div>
										<div>
											Nombre:
											<input type="text" class="form-control" placeholder="&#128272 José">
										</div>
  										<input type="reset" name="btn_agregar" value="Agregar"></input>
  									</div>
  								</div>
  								  
  								

								<div>
				<table  class="form-control">
					Habitaciones
					<tr>
				      <th width="50%" scope="col">cantidad</th>
				      <th width="50%" scope="col">habitacion</th>
				    </tr>
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
				    <tr>
				      <td>&nbsp;</td>
				      <td>&nbsp;</td>
				    </tr>
				  </table>
				</div>
								<input type="reset" name="btn_cancelar" value="Aceptar"></input>
								<input type="submit" name="btn_aceptar" value="Cancelar"></input>
							</form>

						</div>
						<div class="pos"  
							class="logo-interior6">							
						</div>
						<!--fin de la Parte interna del panel-->



					</form>
			</div>
		</div>
	</div>

@stop
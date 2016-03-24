@extends('templates.templateGerente')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading"> 
			<h4> <b>Reporte de Presupuesto</b> </h4>
		</div>
 		<div class="panel-body">
			<div class="row">
			    <div class="col-lg-12 col-md-8 col-sm-6 col-xs-6">
			    	<div class="contenedor-formulario">
			  		 	<form class="formulario" name="formularios" action="" method="post">
					  		<!--Parte interna del panel-->
					  		<br><br>
					  		<div class="left2">
						  		<div class="input-group">
						  			<label class="label" for="tipo">Tipo de Habitaciones:</label><br>
										<select id="tipo" name="selectTipo">
											  	 <option value="opcion-n">Seleccione: </option>
											  	 <option value="opcion-n">Matrimonial</option>
											  	 <option value="opcion-n">Duplex</option>
											  	 <option value="opcion-n">Seleccione: </option>
											  	 <option value="opcion-n">Triple</option>
										</select>
								</div>	
								<div class="input-group" style="padding-top: 10px">	
									<input type="text" id="cantHabitaciones" name="txtCantHabitaciones">
									<label class="label" for="cantHabitaciones">Cantidad de habitaciones:</label>
								</div>
								<br><br><br><br>								
								<input style="width: 100%; margin-top: -20%;" type="submit" name="btnAgregarHabitacion" value="Agregar">					
							</div>
							<div class="right2" style="padding-top: 9.2%">
						  		<div class="input-group">
							  		<label class="label" for="servicios">Servicios:</label><br> 			
										<select id="servicios" name="selectServicios">
										  	 <option value="opcion-n">Seleccione: </option>
										  	 <option value="opcion-n">Lavanderia </option>
										  	 <option value="opcion-n">Piscina </option>
										  	 <option value="opcion-n">Gym: </option>
										</select>
								</div>							
								<br><br><br><br>
								<input style="width: 100%; margin-top:-20%;"type="submit" name="btnAgregarServicio" value="Agregar">
							</div>		
							<div class="left2">
								<table class="form-control" style="width: 100%;">
									<caption >
					    				<label>Habitaciones:</label> 
					  				</caption>		
									<tr>
								      <th width="5%" scope="col">Cantidad</th>
								      <th width="20%" scope="col">Descripcion</th>
								      <th width="5%" scope="col">P. Unit</th>
								      <th width="5%" scope="col">Total</th>
								    </tr>
								    <tr>
								      <td>2</td>
								      <td>Matrimonial</td>
								      <td>10000</td>
								      <td>20000</td>
								    </tr>
								    <tr>
								      <td>10</td>
								      <td>Triple</td>
								      <td>15000</td>
								      <td>150000</td>
								    </tr>
								    <tr>
								      <td>1</td>
								      <td>Individual</td>
								      <td>10000</td>
								      <td>10000</td>
								    </tr>
								    <tr>
								      <td>&nbsp;</td>
								      <td>&nbsp;</td>
								      <td>&nbsp;</td>
								      <td>&nbsp;</td>
								    </tr>
								    <tr>
								      <td>&nbsp;</td>
								      <td>&nbsp;</td>
								      <td>&nbsp;</td>
								      <td>&nbsp;</td>
								    </tr>
								</table>
							</div>	
							<div class="right2">
								<table class="form-control" style="width: 100%;">
									<caption >
					    				<label>Servicios:</label> 
					  				</caption>		
									<tr>
								      <th width="40%" scope="col">Descripcion</th>
								      <th width="20%" scope="col">P. Unit</th>
								      <th width="20%" scope="col">Total</th>
								    </tr>
								    <tr>
								      <td>Lavanderia</td>
								      <td>4000</td>
								      <td>4000</td>
								    </tr>
								    <tr>
								      <td>Gimnasio</td>
								      <td>5000</td>
								      <td>5000</td>
								    </tr>
								    <tr>
								      <td>Peluqueria</td>
								      <td>3000</td>
								      <td>3000</td>
								    </tr>
				    				<tr>
								      <td>&nbsp;</td>
								      <td>&nbsp;</td>
								      <td>&nbsp;</td>
								    </tr>
				    				<tr>
								      <td>&nbsp;</td>
								      <td>&nbsp;</td>
								      <td>&nbsp;</td>
								    </tr>									    								    
								</table>
							</div>
							<div>
								<div class="input-group" style="width: 40%"> 
									<input type="text" id="cantDias" name="txtCantDias">
									<label class="label" for="cantDias">Cantidad de dias:</label>	
								</div>							
								<div class="input-group" style="width: 40%">				
									<input type="text" id="total" name="txtTotal">
									<label class="label" style="float: right;">Total a pagar:</label>							
								</div>
								<div class="right" style="width: 60%; margin-top: -10%;">
									<input style="width: 25%; float: right; margin-right: 0px" type="submit" name="btnGuardar" value="Guardar">
									<input style="width: 25%;float: right; margin-right: 0px;" type="submit" name="btnImprimir" value="Imprimir">
								</div>					
							</div>
							<!--fin de la Parte interna del panel-->
				 		</form>
				</div>
			</div>
		</div> 
	</div>
@stop
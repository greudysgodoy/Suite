@extends('templates.templateGerente')

@section('content')
<div class="panel panel-default">
	<div class="panel-heading"> 
	<h4> <b>Reporte de Disponibilidad</b> </h4>
	</div>
 		<div class="panel-body">			
			<!--<div class="logo-interior6"></div>-->
			<div class="row">
			 	<div class="col-lg-12 col-md-8 col-sm-6 col-xs-6">
			 		<div class="contenedor-formulario">
			  			<form class="formulario" name="formularios" action="" method="post">
			  				<!--Parte interna del panel-->	
			  				<br><br>
			  				<div class="left" style="width: 30%">	
				  				<div class="input-group">								
									<input type="date" id="entrada" name="fechaEntrada">
									<label class="label" for="entrada">Fecha Entrada:</label>	
								</div>	
							</div>	
							<div class="right" style="width: 30%; margin-right: 300px;">
								<div class="input-group">
									<input type="date" id="salida" name="fechaSalida">
									<label class="label" for="salida">Fecha Salida:</label>
								</div>
							</div>			
							<input style="width: 25%; float: right; margin-right: 0px; margin-top: -70px;" type="submit" value="Generar">
								<table align="center" style="width: 100%;">  
									<caption>
										<label>Habitaciones</label>
									</caption>					
									<tr>
								      <th width="50%" scope="col">Codigo</th>
								      <th width="50%" scope="col">Tipo Habitacion</th>
								    </tr>
								    <tr>
								      <td>12</td>
								      <td>Matrimonial</td>
								    </tr>
								    <tr>
								      <td>23</td>
								      <td>Suite normal</td>
								    </tr>
								    <tr>
								      <td>24</td>
								      <td>Triple</td>
								    </tr>
								    <tr>
								      <td>33</td>
								      <td>Matrimonial</td>
								    </tr>
								    <tr>
								      <td>37</td>
								      <td>Suite preferencial</td>
								    </tr>
						 		</table>
						 		<div align="right">
									<input style="width: 25%;margin-right: 0%;" type="submit" name="btn_guardar" value="Guardar">
									<input style="width: 25%;margin-right: 0%;" type="submit" name="btn_imprimir" value="Imprimir">
								</div> 		
						</form>							
					</div>
				</div>
			</div>						<!--fin de la Parte interna del panel-->
		</div>
	</div>
@stop
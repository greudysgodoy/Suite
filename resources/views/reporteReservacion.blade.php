
@extends('templates.templateGerente')

@section('content')
<div class="panel panel-default">
	<div class="panel-heading"> 
	<h4><b>Reporte de Reservacion</b></h4>
	</div>
 		<div class="panel-body">		
			<!--<div class="logo-interior6"></div>-->
			<div class="row">
				 <div class="col-lg-12 col-md-8 col-sm-6 col-xs-6">
				 	<div class="contenedor-formulario">
			  		 	<form class="formulario" name="formularios" action="" method="post">
						<br><br>							
							<div class="left" style="width: 30%">
								<div class="input-group">
									<input type="date" id="desde" name="fecha_desde" value=""/>
									<label class="label" for="desde"> Desde: </label>
								</div>								
							</div>					
							<div class="right" style="width: 30%; margin-right: 300px;">
								<div class="input-group">
									<input type="date" id="hasta" name="fecha_hasta" value=""/>
									<label class="label" for="hasta"> Hasta: </label>
								</div>
							</div>
							<br><br>							 	
							 	<input style="width: 25%; float: right; margin-right: 0px; margin-top: -70px;" type="submit" value="Generar">
							 	<br><br><br><br><br>								
							<div>	
							<div>
								 <table  class="form-control">
								    <tr>
								      <th width="195" scope="col">Cliente</th>
								      <th width="84" scope="col">Reservacion</th>
								      <th width="80" scope="col">Habitacion</th>
								      <th width="80" scope="col">Tipo Habitacion </th>
								      <th width="80" scope="col">Fecha Entrada </th>
								      <th width="80" scope="col">Fecha Salida </th>
								      <th width="80" scope="col">Estatus</th>
								    </tr>
								    <tr>
								      <td>Greudys Godoy</td>
								      <td>R100</td>
								      <td>12</td>
								      <td>Matrimonial</td>
								      <td>23/03/2016</td>
								      <td>24/03/2016</td>
								      <td>Procesada</td>
								    </tr>
								    <tr>
								      <td>Jose Martin</td>
								      <td>R101</td>
								      <td>45</td>
								      <td>Triple</td>
								      <td>25/03/2016</td>
								      <td>27/03/2016</td>
								      <td>En espera</td>
								    </tr>
								    <tr>
								      <td>Jorhan Herrera</td>
								      <td>R102</td>
								      <td>33</td>
								      <td>Triple</td>
								      <td>12/04/2016</td>
								      <td>14/04/2016</td>
								      <td>En espera</td>
								    </tr>
								    <tr>
								      <td>Manuel Silva</td>
								      <td>R103</td>
								      <td>21</td>
								      <td>Matrimonial</td>
								      <td>15/04/2016</td>
								      <td>16/04/2016</td>
								      <td>Rechazada</td>
								    </tr>
								    <tr>
								      <td>&nbsp;</td>
								      <td>&nbsp;</td>
								      <td>&nbsp;</td>
								      <td>&nbsp;</td>
								      <td>&nbsp;</td>
								      <td>&nbsp;</td>
								      <td>&nbsp;</td>
								    </tr>
							  </table>
							</div>
								<div class="right" style="width: 20%; margin-right: -2%;">
									<input type="submit" name="btn_guardar" value="Guardar">
								</div>
								<div class="right" style="width: 20%; margin-right: -2%;">										
									<input type="submit" name="btn_imprimir" value="Imprimir">
								</div>						
						</form>	
					</div>
				</div>		
			</div>
		</div>
	</div>

@stop
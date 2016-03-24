
@extends('templates.templateGerente')

@section('content')
<div class="panel panel-default">
	<div class="panel-heading"> 
	<h3><b>Reporte de Reservacion</b></h3>
	</div>
 		<div class="panel-body">		
			<!--<div class="logo-interior6"></div>-->
			<div class="row">
				 <div class="col-lg-12 col-md-8 col-sm-6 col-xs-6">
				 	<div class="contenedor-formulario">
			  		 	<form class="formulario" name="formularios" action="" method="post">
			  			<!--Parte interna del panel-->				
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
								      <td>&nbsp;</td>
								      <td>&nbsp;</td>
								      <td>&nbsp;</td>
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
								      <td>&nbsp;</td>
								      <td>&nbsp;</td>
								      <td>&nbsp;</td>
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
								    <tr>
								      <td>&nbsp;</td>
								      <td>&nbsp;</td>
								      <td>&nbsp;</td>
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
								<div class="right" style="width: 20%; margin-right: -2%;">	
									<input type="reset" name="btn_generar" value="Generar">
									<!--fin de la Parte interna del panel-->
								</div>	
						
						</form>	
					</div>
				</div>		
			</div>
		</div>
	</div>

@stop
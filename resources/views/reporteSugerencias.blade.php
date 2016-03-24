
@extends('templates.templateGerente')

@section('content')
<div class="panel panel-default">
	<div class="panel-heading"> 
	<h4><b>Reporte de Sugerencias</b></h4>
	</div>
 		<div class="panel-body">		
			<!--<div class="logo-interior6"></div>-->
			<div class="row">
				 <div class="col-lg-12 col-md-8 col-sm-6 col-xs-6">
				 	<div class="contenedor-formulario">
			  		 	<form class="formulario" name="formularios" action="" method="post">
						<br><br>							
							<div style="width: 50%">
								<div  style="position: relative; margin-right: 10px" class="input-group">
									<input type="text" id="año" name="año" value=""/>
									<label class="label" for="año"> Seleccione un año</label>
								</div>
								<div style="position: relative;" >
									<input style="width: 25%; float: right; margin-right: 0px; margin-top: -70px;" type="submit" value="Generar">	
								</div>															
							</div>
							<br><br> 							
							<div>	
							<div>
								 <table  class="form-control">
								    <tr>
								      <th width="90" scope="col">Cliente</th>
								      <th width="70" scope="col">Sugerencia</th>
								      <th width="80" scope="col">Servicio</th>
								      <th width="195" scope="col">Descripcion</th>
								      <th width="60" scope="col">Fecha</th>
								      <th width="40" scope="col">Estatus</th>
								    </tr>
								    <tr>
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
								    </tr>
								    <tr>
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
								    </tr>
								    <tr>
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
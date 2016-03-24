@extends('templates.templateGerente')

@section('content')
<div  class="panel panel-default" >
	<div class="panel-heading" > 
		<h4 align=""> <B> Reporte de calificaciones </B> </h4>
	</div>
 		<div class="panel-body">
			<div class="row">
				<div class="col-lg-12 col-md-8 col-sm-6 col-xs-6">
					<div class="contenedor-formulario">	
						<form class="formulario" name="formularios" action="" method="post" >
							<br><br>							
							<div class="left" style="width: 30%">
								<div class="input-group">										
									<input type="date" id="desde" name="fechaDesde" value=""/>
									<label class="label" for="desde"> Desde: </label>
								</div>
							</div>							
							<div class="right" style="width: 30%; margin-right: 300px;">
								<div class="input-group">
									<input type="date" id="hasta" name="fechaHasta" value=""/>
									<label class="label" for="hasta"> Hasta: </label>										
								</div>										
							</div>	
							<br><br>					 	
					 		<input style="width: 25%; float: right; margin-right: 0px; margin-top: -70px;" type="submit" value="Generar">
							<br><br><br><br><br>								
							<div>
								<table width="100%"  style="margin-top: 1%" class="form-control">
								    <tr>
								      <td width="" align="center"><B>Nombre del Servicio</B></td>
								      <td width="" align="center"><B>Calificación Obtenida</B></td>
								    </tr>
						    		<tr align="center">
								      <td>Peluqueria</td>
								      <td>3</td>
						   			</tr>
								    <tr align="center">
								      <td>Gimnasio</td>
								      <td>5</td>
						   			</tr>
								    <tr align="center">
								      <td>Sala de masajes</td>
								      <td>5</td>
						   			</tr>
								    <tr align="center">
								      <td>Restaurant</td>
								      <td>4</td>
						   			</tr>
								</table>
								 		<div align="right">
											<input style="width: 25%;margin-right: 0%;" type="submit" name="btn_guardar" value="Guardar">
											<input style="width: 25%;margin-right: 0%;" type="submit" name="btn_imprimir" value="Imprimir">
										</div> 
								<br>
							</div>	
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>			
@stop
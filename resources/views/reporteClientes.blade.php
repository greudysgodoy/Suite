@extends('templates.templateGerente')

@section('content')
<div  class="panel panel-default" >
	<div class="panel-heading" > 
		<h4 align=""> <B> Clientes Atendidos </B> </h4>
	</div>
 		<div class="panel-body">
			<div class="row">
				<div class="col-lg-12 col-md-8 col-sm-6 col-xs-6">
					<div class="contenedor-formulario">
						<form class="formulario" name="formularios" action="" method="post">
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
								      <td width="20%" align="center"><B>Código del cliente</B></td>
								      <td width="" align="center"><B>Nombre y Apellido</B></td>
								      <td width="30%" align="center"><B>Cantidad de asistencias</B></td>
								    </tr>
						    		<tr>
								      <td>V-20922842</td>
								      <td>Greudys Godoy</td>
								      <td align="center">5</td>
						   			</tr>
								    <tr>
								      <td>V-21289886</td>
								      <td>Jorhan Herrera</td>
								      <td align="center">9</td>
								    </tr>
								    <tr>
								      <td>V-21244015</td>
								      <td>Carlos Peraza</td>
								      <td align="center">7</td>
								    </tr>
								    <tr>
								      <td>V-23456878</td>
								      <td>Eduardo Alvarado</td>
								      <td align="center">25</td>
								    </tr>
								    <tr>
								      <td>V-20222541</td>
								      <td>Pedro Perez</td>
								      <td align="center">50</td>
								    </tr>
								    <tr>
								      <td>V-26854743</td>
								      <td>Cristina Fernandez</td>
								      <td align="center">50</td>
								    </tr>
								</table>
						 		<div align="right">
									<input style="width: 25%;margin-right: 0%;" type="submit" name="btn_guardar" value="Guardar">
									<input style="width: 25%;margin-right: 0%;" type="submit" name="btn_imprimir" value="Imprimir">
								</div> 
							</div>	
						</form>
					</div>
				</div>
			</div>
		</div>		
</div>


@stop
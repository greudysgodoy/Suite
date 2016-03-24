@extends('templates.templateGerente')

@section('content')

<div  class="panel panel-default"  >
	<div class="panel-heading" > 
		<h4 align=""> <B> Ingresos </B> </h4>
	</div>
		<div class="panel-body">
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
							<input style="width: 25%; float: right; margin-right: 0%; margin-top: -70px;" type="submit" value="Generar">
								<br><br><br><br><br>							
							<div>
								<table width="100%"  style="margin-top: 1%" class="form-control">
								    <tr>
								      <td width="" align="center"><B>Fecha</B></td>
								      <td width="" align="center"><B>Ingresos por Servicios</B></td>
								      <td width="" align="center"><B>Ingresos por Habitación</B></td>
								      <td width="" align="center"><B>Total Ingresos</B></td>
								    </tr>
						    		<tr>
								      <td align="center">01/03/2016</td>
								      <td align="center">10000</td>
								      <td align="center">25000</td>
								      <td align="center">35000</td>
						   			</tr>
								    <tr>
								      <td align="center">02/03/2016</td>
								      <td align="center">0</td>
								      <td align="center">32000</td>
								      <td align="center">32000</td>
						   			</tr>
								    <tr>
								      <td align="center">03/03/2016</td>
								      <td align="center">15000</td>
								      <td align="center">25000</td>
								      <td align="center">40000</td>
						   			</tr>
								    <tr>
								      <td align="center">04/03/2016</td>
								      <td align="center">20000</td>
								      <td align="center">40000</td>
								      <td align="center">60000</td>
						   			</tr>
						   			<tr>
								      <td><B>Total</B> </td>
								      <td align="center">45000</td>
								      <td align="center">122000</td>
								      <td align="center"> <B> 167000 </B></td>
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
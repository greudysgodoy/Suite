@extends('templates.templateUsuario')

@section('content')
		<section class="main row">	

			<p class="col-xs-10  col-sm-8 col-md-9 col-lg-8">
					<h1 align="center">Registro de huespedes</h1>
			
		</section>	

		<div class="row">
				<div class="col-xs-10 col-sm-6">

					<form name="form_registro" action="procesar.php" method="POST">

						Cedula
			  		 	<input type="text" name="txt_cedula" value=""> <br><br>				             	
			            Nombres <br>
			            <input type="text" name="txt_nombre" value=""> <br><br>
			            Apellidos <br>
	                    <input type="text" name="txt_apellido" value=""> <br><br> 	                    
	                    <input type="submit" value="Agregar" name="btn_cancelar" />
                    	<input type="submit" value="Cancelar" name="btn_aceptar" />       
			        </form>     
		</div>

				<div class="col-xs-10 col-sm-6">

				<table>
					<tr>
						<td>Cedula</td>
						<td>Nombre</td>
					</tr>
					<tr>
						<td>21244345</td>
						<td>Simon Linares</td>		
					</tr>
					<tr>
						<td>165456342</td>
						<td>Armando Paredes</td>
					</tr>
					<tr>
						<td>17654235</td>
						<td>Hector Nillo</td>						
					</tr>
					<tr>
						<td>22564125</td>
						<td>Ramona lisa</td>						
					</tr>
					<tr>
						<td>231234333</td>
						<td>Andreina Alguero</td>						
					</tr>
					<tr>
						<td>22564422</td>
						<td>Jose Perez</td>						
					</tr>
					<tr>
						<td>22345125</td>
						<td>Luis Torrealba</td>						
					</tr>	
					<tr>
						<td>22345125</td>
						<td>Pedro Perez</td>						
					</tr>	
					<tr>
						<td>22345125</td>
						<td>Carlos Peralta</td>						
					</tr>	
					<tr>
						<td>22345125</td>
						<td>Jorhan Herrera</td>						
					</tr>	
					<tr>
						<td>22345125</td>
						<td>Eduardo Alvarado</td>						
					</tr>	
					<tr>
						<td>22345125</td>
						<td>Kelvin Villanueva</td>						
					</tr>	
					<tr>
						<td>22345125</td>
						<td>Honorio Aguilar</td>						
					</tr>																										

				</table> <br> 
				<input type="submit" value="Guardar" name="btn_guardar" /> 
				</div>		

						<!--clase que permite corregir algunos errores de tamaño de paginas web-->
						<div class="clearfix visible-sm-block">
						</div>			
		</div>
@stop		
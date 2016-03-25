
<html lang="en"> 
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="description" content="Esta es mi primera pagina creada en html">
		<meta name="keyword" content="mi primera pagina, tutorial html, curso basico">

		<title>	Suite
            </title>

        

		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0,minimun-scale=1.0">

		<!-- {!!Html::style('css/bootstrap.css')!!}   
 
 		 {!!Html::style('css/estilos.css')!!}   

 		 {!!Html::style('css/fuentes.css')!!} -->   		 		 
		

		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

		<link rel="stylesheet" type="text/css" href="css/estilos.css">

		<link rel="stylesheet" type="text/css" href="css/fuentes.css"/> 

		<link rel="stylesheet" href="fonts.css">
		


		<style>
			body
			{
				padding-top: 30px;
			}
		</style>
		

	</head>	

	<body  background="imagenes/bg.jpg" bgcolor="#c2f6a7">


	
	<!-- Barra de navegacion con Bootstrap-->

	<div class="container">
		<br>
		<header>
			<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
							<spam class="sr-only">Menu</spam>
							<spam class="icon-bar"></spam>
							<spam class="icon-bar"></spam>
							<spam class="icon-bar"></spam>
						</button>

						<a href="" class="navbar-brand"><font size=6><b><img src="imagenes/logo2.png">Suite</b></font></a>
					</div>

					<div class="collapse navbar-collapse" id="navbar-1">
						<ul class="nav navbar-nav">

							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" role="button" >
									Registros <spam class="caret"> </spam>
								</a>
								<ul class="dropdown-menu">
									<li><a href="registroCliente">Registro de cliente</a></li>												 
								</ul>
							</li>							

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >
									Transacciones <spam class="caret"> </spam>
								</a>
								<ul class="dropdown-menu">
									<li><a href="checkIn">Check In</a></li>
									<li><a href="checkOut">Check Out</a></li>		
									<li><a href="reservacion">Reservacion</a></li>
								</ul>
							</li>							

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >
									Reportes <spam class="caret"> </spam>
								</a>
								<ul class="dropdown-menu">
									<li><a href="reporteDisponibilidad">Disponibilidad</a></li>
									<li><a href="reportePresupuesto">Presupuesto</a></li>
									<li><a href="reporteReservacion">Reservaciones</a></li>
								</ul>
							</li>
						</ul>						
						<form action="" class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Buscar"> 
							</div>
						</form>		
						<ul class="nav navbar-nav navbar-right" class="dropdown-menu">
							<li class="dropdown">

								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >
									Usuario <spam class="caret"> </spam>
									<div class="logo-interior5"></div>
								</a>

								<ul class="dropdown-menu">
									<li><a href="cuenta">Cuenta</a></li>
									<li><a href="index">Cerrar sesión</a></li>
								</ul>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right" class="dropdown-menu">
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >
								<div class="logo-interior7"></div>
							</a>	
							</li>	
						</ul>
					</div>
				</div>				
			</nav>
		</header>
	</div>
	
	<!--fin de barra de navegacion -->
	


	
	<!--Barra lateral-->
	<div class="container">
		<div class="fijo" id="menu">

			

			<div id="contenedor-general-primero"class="contenedorGeneral">
				<div class="logo-interior1">
				</div>
					<a href="reservacion" style="text-decoration:none"> <p class="texto">Reservaciones</p></a>		
			</div>

			<div class="contenedorGeneral">
				<div class="logo-interior2">
				</div>
					<a href="habitacion" style="text-decoration:none"> <p class="texto">Habitaciones</p></a>			
			</div>

			<div class="contenedorGeneral">
				<div class="logo-interior3">
				</div>
					<a href="calificacion" style="text-decoration:none"><p class="texto">Servicios</p></a>			
			</div>

			<div class="contenedorGeneral">
				<div class="logo-interior6">
				</div>
					<a href="reportePresupuesto" style="text-decoration:none"><p class="texto">Presupuesto</p></a>			
			</div>			

			<br>
			<br>
			<br>

			<div class="contenedorGeneral">
				<div class="logo-interior4">
				</div>
					<a href="#" style="text-decoration:none"><p class="texto">Ajustes</p></a>			
			</div>								

		 </div>
	 </div>
	 <!--Fin de la barra lateral-->	

<!--Iconos lateral-->

<div class="social">
<ul>
		<li><a href="#" target="_blank" class="icon-facebook"></a></li>
		<li><a href="#" target="_blank" class="icon-twitter"></a></li>
		<li><a href="#" target="_blank" class="icon-google"></a></li>
		<li><a href="#" target="_blank" class="icon-pinterest"></a></li>
		<li><a href="#" target="_blank" class="icon-mail"></a></li>

</ul>
	
</div>

<!--fin de Iconos lateral-->

	
	<div class="container-body">
		@yield('content')	
	</div>

	
	<!--{!!Html::script('../../../public/js/jquery.js')!!}
	{!!Html::script('../../../public/js/bootstrap.min.js')!!}-->

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/formulario.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="js/script.js"></script>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	</body>





</html>
@extends('templates.templateCliente')

@section('content')

		<div class="mainSlides">
				<div class="slides">
					<img src="imagenes/hotel (2).jpeg" alt="">
					<img src="imagenes/hotel (3).jpeg" alt="">
					<img src="imagenes/hotel (4).jpeg" alt="">
					<img src="imagenes/hotel (5).jpeg" alt="">
					<img src="imagenes/hotel (6).jpeg" alt="">
				</div>
		</div>

		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/jquery.slides.js"></script>
		<script>

			$(function(){
		  		$(".slides").slidesjs({
					play: {
					    active: true,
					        // [boolean] Generate the play and stop buttons.
					        // You cannot use your own buttons. Sorry.
					    effect: "slide",
					        // [string] Can be either "slide" or "fade".
					    interval: 4000,
					        // [number] Time spent on each slide in milliseconds.
					    auto: true,
					        // [boolean] Start playing the slideshow on load.
					    swap: true,
					        // [boolean] show/hide stop and play buttons
					    pauseOnHover: false,
					        // [boolean] pause a playing slideshow on hover
					    restartDelay: 2500
					        // [number] restart delay on inactive slideshow
					}
				});
			});
		</script>				

@stop
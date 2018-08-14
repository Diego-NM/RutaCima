
<!DOCTYPE html>
<html lang="en">
<head>
<title>Detalle Tour</title>
<meta charset="UTF-8">
<meta name="description" content="Rize Portfolio Template">
<meta name="keywords" content="personal, portfolio">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Stylesheets -->

	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/reset.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
	<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/bebas" type="text/css"/>
	<link rel="stylesheet" href="{{asset('css/really-simple-jquery-dialog.css')}}"/>

   <!-- Font icons -->

	<style>
			.botonimagen{
				width: 100px;
				height: 100px;
				border: 0;
				margin: 4px 2px;
		    opacity: 1;
		    transition: 0.3s;
				background-image:url('/images/boton-atras.png');
		  	};

				.botonimagen : hover {opacity: 0.6};

				#form {
					  width: 250px;
					  margin: 0 auto;
					  height: 50px;
					}

					#form p {
					  text-align: center;
					}

					#form label {
					  font-size: 20px;
					}

					input[type="radio"] {
					  display: none;
					}

					label {
					  color: grey;
					}

					.clasificacion {
					  direction: rtl;
					  unicode-bidi: bidi-override;
					}

					label:hover,
					label:hover ~ label {
					  color: orange;
					}

					input[type="radio"]:checked ~ label {
					  color: orange;
					}
	</style>



</head>
<body>

	<!-- LOADER -->
	<div class="loader-wrapper">
	    <div class="loader"></div>
	</div>

	<!-- HEADER -->


	<div class="blogs-single top_90">
		<div class="container">
			<button id="returnMainFromTourDetail" class="botonimagen" data-toggle="tooltip" title="Regresar"></button>
			<input id="idTour" style="display:none;" type="text" name="idTour" value="@foreach($tour as $item){{ $item['ID_Viaje'] }}@endforeach">
			<input id="priceSelectedTour" style="display:none;" type="text" name="priceSelectedTour" value="@foreach($tour as $item){{ $item['Costo'] }}@endforeach">
			<div class="row">
				<div class="col-lg-9 col-md-8">
					<div class="blog-content">
						<div class="blog-image">
							<img src='http://localhost/Admin-RC/public/images/@foreach($tour as $item){{ $item['Ruta_Imagen'] }}@endforeach' alt'' style="height:600px" >
						</div>
						<h1 class="title top_30 bottom_30">@foreach($tour as $item)
																								{{ $item['Titulo'] }}
																								@endforeach
																							</h1>
								<p>@foreach($tour as $item)
								{{ $item['Descripcion'] }}
								@endforeach</p>
						<br>
           	<br>
						<blockquote>Incluye: <br>@foreach($tour as $item)
						{{ $item['Incluye'] }}
						@endforeach</blockquote>
						<p class="top_30"></p>
						Fecha de salida: @foreach($tour as $item)
						{{ $item['FechaHora_Salida'] }}
						@endforeach<br>
						Fecha de Regreso: @foreach($tour as $item)
						{{ $item['FechaHora_Regreso'] }}
						@endforeach<br>
						Cupo: @foreach($tour as $item)
						{{ $item['Cupo'] }}
						@endforeach<br>
						Requisitos: @foreach($tour as $item)
						{{ $item['Requisitos'] }}
						@endforeach<br>
            		</div>

		      		<div class="form">
								<h3 class="widget-title top_60">Reserve Ya! </h3>
						        <form class="contact-form top_30" method="POST">
		                    <div class="row">

		                        <div class="col-md-6">
															  <h3>Cantidad de personas</h3>
																<br/>
		                            <input style="font-size:large;" id="CantidadPersonasReservacion" min="1" max="@foreach($tour as $item){{ $item['Cupo'] }}@endforeach" name="CantidadPersonasReservacion" class="form-inp requie" type="number" required>
		                        </div>

		                        <div class="col-md-6">
															  <h3>Costo total en colones</h3>
																<br/>
		                            <input style="font-size:large;" id="CostoTotalReservacion"  name="CostoTotalReservacion" class="form-inp requie" type="text"  disabled required>
		                        </div>
		                        <div class="col-md-12">
		                            <button id="reservar" class="site-btn top_60" type="button">Reservar</button>
		                        </div>
		                    </div>
		                </form>
		            </div>
				</div>
				<div class="col-lg-3 col-md-4 sidebar">

					<!-- Categories -->
					<div class="categories top_45">
						<h2 class="widget-title">Califique del Tour</h2>
						<br/>
		            <form action="">
								  <p class="clasificacion">
								    <input id="5estrella" type="radio" name="estrellas" value="5"><!--
								    --><label for="5estrella" style="font-size:50px">★</label><!--
								    --><input id="4estrella" type="radio" name="estrellas" value="4"><!--
								    --><label for="4estrella" style="font-size:50px">★</label><!--
								    --><input id="3estrella" type="radio" name="estrellas" value="3"><!--
								    --><label for="3estrella" style="font-size:50px">★</label><!--
								    --><input id="2estrella" type="radio" name="estrellas" value="2"><!--
								    --><label for="2estrella" style="font-size:50px">★</label><!--
								    --><input id="1estrella" type="radio" name="estrellas" value="1"><!--
								    --><label for="1estrella" style="font-size:50px">★</label>
								  </p>
		           </form>
						<br/>
						<br/>
					</div>


					<!-- Recent Posts -->
					<div class="recent-post">
						<h3 class="widget-title">Comentarios Recientes</h3>
						<ul class="top_15" id="ulComments">
							@foreach($comment as $item)
							<li>
								<a href="#">
									<h4 class="title">
									{{ $item['Mensaje'] }}
								  </h4>
									<span>
									{{ $item['Fecha'] }}
									</span>
									<span>
									{{ $item['NombreUsuario'] }}
									</span>
								</a>
							</li>
						 @endforeach
					 </ul><br/><br/>
						<ul>
								<li>
	 							 <h4 class="title">Añadir Comentario </h4><br/>
	                    <textarea id="newComment" class="form-inp requie" style="height: 88px;"></textarea>
	 						     	 <button style="margin:0px" id="addNewComment" class="site-btn top_60">Enviar Comentario</Button>
	 						 </li>
						</ul>
					</div>
				</div>
			</div> <!-- row end -->
		</div><!-- container end -->
		<div id="message"></div>
		<input type="text" id="baseURL" style="display:none;" value="BASE_URL"/>
	</div>

	<footer class="top_90">
		<div class="container text-center">
				<div class="social top_30 bottom_15">
		            <a href="https://www.facebook.com/pg/RutaLaCima/"><i class="fab fa-facebook"></i>  </a>
		        </div>
			<p>Copyright © 2018 RutaCima, Todos los derechos reservados. </p>
		</div>

	</footer>






<!-- Javascripts -->
<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('js/typed.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('projectjs/viaje.js')}}"></script>
<script src="{{asset('projectjs/booking.js')}}"></script>
<script src="{{asset('projectjs/comments.js')}}"></script>
<script src="{{asset('js/really-simple-jquery-dialog.js')}}"></script>


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Detalle Tour</title>
<meta charset="UTF-8">
<meta name="description" content="Rize Portfolio Template">
<meta name="keywords" content="personal, portfolio">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Stylesheets -->
  <link rel="stylesheet" href="{{asset('css/really-simple-jquery-dialog.css')}}"/>

  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/reset.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
	<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/bebas" type="text/css"/>

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
			<div class="row">
				<div class="col-lg-9 col-md-8">
					<div class="blog-content">
						<div class="blog-image">
							<img src="images/single-blog.jpg" alt="">
						</div>
						<h1 class="title top_30 bottom_30">@foreach($producto as $item)
																								{{ $item['Titulo'] }}
																								@endforeach
																							</h1>
								<p>@foreach($producto as $item)
								{{ $item['Descripcion'] }}
								@endforeach</p>
						<br>
           	<br>
						<blockquote>Incluye: <br>@foreach($producto as $item)
						{{ $item['Incluye'] }}
						@endforeach</blockquote>
						<p class="top_30"></p>
						Fecha de salida: @foreach($producto as $item)
						{{ $item['FechaHora_Salida'] }}
						@endforeach<br>
						Fecha de Regreso: @foreach($producto as $item)
						{{ $item['FechaHora_Regreso'] }}
						@endforeach<br>
						Cupo: @foreach($producto as $item)
						{{ $item['Cupo'] }}
						@endforeach<br>
						Requisitos: @foreach($producto as $item)
						{{ $item['Requisitos'] }}
						@endforeach<br>
            		</div>

                <div class="form">
                  <h3 class="widget-title top_60">Reserve Ya! </h3>
                      <form class="contact-form top_30" method="POST">
                          <div class="row">

                              <div class="col-md-6">
                                  <input id="CantidadPersonasProducto" name="CantidadPersonasProducto" class="form-inp requie" type="numeric" placeholder="Cantidad de personas">
                              </div>

                              <div class="col-md-6">
                                  <input id="CostoTotalProducto" name="CostoTotalProducto" class="form-inp requie" type="text" placeholder="Costo" disabled>
                              </div>
                              <div class="col-md-12">
                                  <button id="con_submit" class="site-btn top_60" type="submit">Reservar</button>
                              </div>
                          </div>
                      </form>
                  </div>
				</div>
				<div class="col-lg-3 col-md-4 sidebar">

					<!-- Categories -->
					<div class="categories top_45">
						<h3 class="widget-title">Calificación del Tour</h3>
						<ul class="top_30">
							<li><a href="#">Excelente</a></li>
							<li><a href="#">Bueno</a></li>
							<li><a href="#">Regular</a></li>
							<li><a href="#">Malo</a></li>
							<li><a href="#">Muy malo</a></li>
						</ul>
					</div>

           <br/>
					<!-- Recent Posts -->
					<div class="recent-post">
						<h3 class="widget-title">Comentarios Recientes</h3>
						<ul class="top_15">
							<li>
								<a href="#">
									<h4 class="title">His boss would certainly come round with the doctor from the medical...</h4>
									<span>02 March, 2018</span>
								</a>
							</li>
							<li>
								<a href="#">
									<h4 class="title">Gregor then turned to look out the window at the dull weather.</h4>
									<span>02 March, 2018</span>
								</a>
							</li>
							<li>
								<a href="#">
									<h4 class="title">One morning, when Gregor Samsa woke from troubled dreams.</h4>
									<span>02 March, 2018</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div> <!-- row end -->
		</div><!-- container end -->
	</div>

	<footer class="top_90">
		<div class="container text-center">
				<div class="social top_30 bottom_15">
		            <a href="#"><i class="fab fa-facebook"></i>  </a>
		            <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i>  </a>
		            <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i>  </a>
		            <a href="#"><i class="fab fa-behance" aria-hidden="true"></i>  </a>
		            <a href="#"><i class="fab fa-dribbble" aria-hidden="true"></i>  </a>
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
<script src="{{asset('projectjs/producto.js')}}"></script>
<script src="{{asset('js/really-simple-jquery-dialog.js')}}"></script>

</body>
</html>

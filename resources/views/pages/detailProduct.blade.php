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
			<button id="returnMainFromProductDetail" class="botonimagen" data-toggle="tooltip" title="Regresar"></button>
			<div class="row">
				<div class="col-lg-12 col-md-8">
					<div class="blog-content">
						<div class="blog-image">
							<img src='http://localhost/Admin-RC/public/images/@foreach($product as $item){{ $item['Ruta_Imagen'] }}@endforeach' alt="" style="height:600px">
						</div>
						<h1 class="title top_30 bottom_30">@foreach($product as $item)
																								{{ $item['Nombre'] }}
																								@endforeach
																							</h1>
						<br>
           	<br>
						<blockquote>Descripción: <br>@foreach($product as $item)
						{{ $item['Descripcion'] }}
						@endforeach</blockquote>
					   <br>
            </div>

				</div>

			</div> <!-- row end -->
		</div><!-- container end -->
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
<script src="{{asset('projectjs/product.js')}}"></script>
<script src="{{asset('js/really-simple-jquery-dialog.js')}}"></script>

</body>
</html>

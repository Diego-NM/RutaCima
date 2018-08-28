<!DOCTYPE html>
<html lang="en">
<head>
<title>Ruta a la Cima</title>
<meta charset="UTF-8">
<meta name="description" content="Ruta a la Cima">
<meta name="keywords" content="personal, portfolio">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/reset.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/style.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/really-simple-jquery-dialog.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/ebootstrap.min.css')}}">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
	<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/bebas" type="text/css"/>

	   <!-- Font icons -->
    <link rel="stylesheet" href="{{asset('icon-fonts/fontawesome-5.0.6/css/fontawesome-all.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('icon-fonts/etlinefont/style.css')}}"/>
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


<!-- LOGIN SECTION -->
	<div class="container text-center">
		<div class="row">
			<div class="row">
					<div class="col-2">
							<button id="returnMainFromLogin" class="botonimagen" data-toggle="tooltip" title="Regresar"></button>
					</div>
			</div>
		</div>
   <h1>Cambio de Contraseña</h1>

					<div class="col-md-8 offset-md-2">

                 <!--Forgot Password Form -->
                      <div class="row">
                       <div class="col-md-12">
                         <input  required id="viejaContrasenna" name="con_nameReseteo" class="form-inp requie" type="password" placeholder="Contraseña Anterior">
                       </div>
											</div>

											<div class="row">
                       <div class="col-md-12">
                         <input  required id="nuevaContrasenna" name="con_CorreoReseteo" class="form-inp requie" type="password" placeholder="Nueva Contraseña">
                       </div>
											 </div>

	                    <div class="row">
                       <div class="col-md-12">
                         <input  required id="Rep_nuevaContrasenna" name="con_CorreoReseteo" class="form-inp requie" type="password" placeholder="Repita Nueva Contraseña">
                       </div>
                     </div>

                    <!--End Forgot Password Form -->
                     <button id="con_enviarReseteoContraseña" class="site-btn top_60" style="font-weight: bold;" type="button">Cambiar</button>
          </div>


   <div id="message"></div>
</div>





<!-- Javascripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="{{asset('js/typed.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('projectjs/user.js')}}"></script>
<script src="{{asset('js/really-simple-jquery-dialog.js')}}"></script>

<footer style="height:100px; position:absolute; bottom:0; width:100%; padding:0px">
		<div class="container text-center">
				<div class="social top_30 bottom_15">
		            <a href="https://www.facebook.com/pg/RutaLaCima/"><i class="fab fa-facebook"></i>  </a>
		        </div>
			<p>Copyright © 2018 RutaCima, Todos los derechos reservados. <br></p>
		</div>
</footer>


</body>
</html>

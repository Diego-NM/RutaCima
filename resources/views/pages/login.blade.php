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
<div id="exTab1" class="container">
			<div class="login">
				<div class="container text-center">
						<div class="row">
							<div class="row">
									<div class="col-2">
											<button id="returnMainFromLogin" class="botonimagen" data-toggle="tooltip" title="Regresar"></button>
									</div>
							</div>
						</div>



					<div class="col-md-8 offset-md-2">
         </br>
			 			 <ul  class="nav nav-pills" >
									 <li class="active">
			 							 <a   href="#login" style="font-weight: bold; font-size:large;" data-toggle="tab">Inicio Sesión</a>
			 						 </li>
									 <li>
			 							 <a   href="#register" style="font-weight: bold; font-size:large;" data-toggle="tab">Registrarse</a>
			 						 </li>
			 						 <li><a href="#resetPass" style="font-weight: bold; font-size:large;" data-toggle="tab">Recuperación de Contraseña</a>

			 			 </ul>
             <br/>
			 						 <div class="tab-content clearfix" >

												<div class="tab-pane active" id="login">
															<!--Login Form -->
																  <div class="row" id="loginForm">
																	  <!--Email-->
																	  <div class="col-md-6">
																		  <input required id="con_emailInicioSesion" name="con_email" class="form-inp requie" type="text" placeholder="Correo Electronico">
																	  </div>
																	  <!--Email-->
																	  <div class="col-md-6">
																		  <input required id="con_passwordInicioSesion" name="con_email" class="form-inp requie" type="password" placeholder="Contraseña">
																	  </div>
																  </div>
																<!--End login Form -->
                                <button id="con_ingresar" class="site-btn top_60" style="font-weight: bold;"  type="button">Ingresar</button>
												</div>

												<div class="tab-pane" id="register">
															 <!--Register Account Form -->
																	  <div id="registerForm">
																		<div class="row">
																			<!--Email-->
																			<div class="col-md-6">
																				<input required id="con_name" name="con_name" class="form-inp requie" type="text" placeholder="Nombre Completo">
																			</div>
																			<!--Email-->
																			<div class="col-md-6">
																				<input  required id="con_firstLastName" name="con_firstLastName" class="form-inp requie" type="text" placeholder="Primer Apellido">
																			</div>
																		</div>
																		<div class="row">
																		  <div class="col-md-6">
																			  <input required id="con_secondLastName" name="con_secondLastName" class="form-inp requie" type="text" placeholder="Segundo Apellido">
																		  </div>
																		  <div class="col-md-6">
																			  <input required id="con_idNumber" name="con_idNumber" class="form-inp requie" type="text" placeholder="Identificación">
																		  </div>
																		</div>
																		<div class='row'>
																		  <div class="col-md-6">
																			  <input  required id="con_age" name="con_age" class="form-inp requie" type="text" placeholder="Edad">
																		  </div>
																		  <div class="col-md-6">
																			  <input required id="con_email" name="con_email" class="form-inp requie" type="text" placeholder="Correo Electrónico">
																		  </div>
																		</div>
																		<div class='row'>
																		  <div class="col-md-6">
																			  <input  required id="con_telephone" name="con_telephone" class="form-inp requie" type="text" placeholder="Teléfono">
																		  </div>
																		  <div class="col-md-6">
																			  <input  required id="con_password" name="con_password" class="form-inp requie" type="password" placeholder="Contraseña">
																		  </div>
																		</div>

																	  </div>
																   <!-- End Register Account Form -->
                                  <button id="con_crearUsuario" class="site-btn top_60" style="font-weight: bold;" type="button">Registrarse</button>
												</div>

			 					   		 <div class="tab-pane" id="resetPass">
														<!--Forgot Password Form -->
															  <div id="forgotPassword">
																<div class="row">
																	<!--Email-->
																	<div class="col-md-6">
																		<input  required id="con_nameReseteo" name="con_nameReseteo" class="form-inp requie" type="text" placeholder="Nombre Completo">
																	</div>
																	<!--Email-->
																	<div class="col-md-6">
																		<input  required id="con_CorreoReseteo" name="con_CorreoReseteo" class="form-inp requie" type="text" placeholder="Correo Electrónico">
																	</div>
																</div>
															  </div>
														   <!--End Forgot Password Form -->
                                <button id="con_enviarContraseña" class="site-btn top_60" style="font-weight: bold;" type="button">Enviar</button>
			 								    </div>


			 						 </div>
            </div>
          </div>
        </div>

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
<script src="{{asset('projectjs/viaje.js')}}"></script>
<script src="{{asset('projectjs/contact.js')}}"></script>
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

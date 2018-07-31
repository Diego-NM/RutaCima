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



</head>
<body>


<!-- LOGIN SECTION -->
<section class="about white-bg padbot_120" id="login">
  <div class="login">
    <div class="container text-center padbot_120">
      <div class="col-md-8 offset-md-2">
          <form class="contact-form top_60" method="POST">
              <div class="row">
                <h2 class="title" id="loginTitle">Inicio de Sesión<span class="number"></span> </h2>
              </div>
            </br>

            <!--Login Form -->
              <div class="row" id="loginForm">
                  <!--Email-->
                  <div class="col-md-6">
                      <input id="con_emailInicioSesion" name="con_email" class="form-inp requie" type="text" placeholder="Correo Electronico">
                  </div>
                  <!--Email-->
                  <div class="col-md-6">
                      <input id="con_passwordInicioSesion" name="con_email" class="form-inp requie" type="password" placeholder="Contraseña">
                  </div>
              </div>
            <!--End login Form -->

            <!--Register Account Form -->
              <div id="registerForm" style="display:none;">
                <div class="row">
                    <!--Email-->
                    <div class="col-md-6">
                        <input id="con_name" name="con_name" class="form-inp requie" type="text" placeholder="Nombre Completo">
                    </div>
                    <!--Email-->
                    <div class="col-md-6">
                        <input id="con_firstLastName" name="con_firstLastName" class="form-inp requie" type="text" placeholder="Primer Apellido">
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                      <input id="con_secondLastName" name="con_secondLastName" class="form-inp requie" type="text" placeholder="Segundo Apellido">
                  </div>
                  <div class="col-md-6">
                      <input id="con_idNumber" name="con_idNumber" class="form-inp requie" type="text" placeholder="Identificación">
                  </div>
                </div>
                <div class='row'>
                  <div class="col-md-6">
                      <input id="con_age" name="con_age" class="form-inp requie" type="text" placeholder="Edad">
                  </div>
                  <div class="col-md-6">
                      <input id="con_email" name="con_email" class="form-inp requie" type="text" placeholder="Correo Electrónico">
                  </div>
                </div>
                <div class='row'>
                  <div class="col-md-6">
                      <input id="con_telephone" name="con_telephone" class="form-inp requie" type="text" placeholder="Teléfono">
                  </div>
                  <div class="col-md-6">
                      <input id="con_password" name="con_password" class="form-inp requie" type="password" placeholder="Contraseña">
                  </div>
                </div>
              </div>
           <!-- End Register Account Form -->

           <!--Forgot Password Form -->
              <div id="forgotPassword" style="display:none;">
                <div class="row">
                    <!--Email-->
                    <div class="col-md-6">
                        <input id="con_nameReseteo" name="con_nameReseteo" class="form-inp requie" type="text" placeholder="Nombre Completo">
                    </div>
                    <!--Email-->
                    <div class="col-md-6">
                        <input id="con_CorreoReseteo" name="con_CorreoReseteo" class="form-inp requie" type="text" placeholder="Correo Electrónico">
                    </div>
                </div>
              </div>
           <!--End Forgot Password Form -->
              <div class="row">
                  <div class="col-md-12" style="text-aling:'center';">
                      <button id="con_crearUsuario" class="site-btn top_60" style="display:none;font-weight: bold;" type="button">Registrarse</button>
                      <button id="con_ingresar" class="site-btn top_60" style="font-weight: bold;"  type="button">Ingresar</button>
                      <button id="con_enviarContraseña" class="site-btn top_60" style="display:none;font-weight: bold;" type="button">Enviar</button>
                  </div>
              </div>
              </br>
              <div class="row">
                  <div class="col-md-12" style="text-aling:'center';">
                      <button id="con_registrarse" class="btn btn-success" style="font-weight: bold;"  type="button">No tienes cuenta?, Registrate aquí</button>
                      <button id="con_iniciarSesion" class="btn btn-success" style="display:none;font-weight: bold;" type="button">Ya  tienes  cuenta?,  Ingresa  aquí</button>
                  </div>
              </div>
              </br>
              <div class="row">
                  <div class="col-md-12" style="text-aling:'center';">
                  <button id="con_ReseteoContrasena" class="btn btn-warning" style="font-weight: bold;"  type="button">Olvidaste tu contraseña?, Click aquí</button>
                  </div>
              </div>
          </form>
      </div>
    </div>
  </div>
  <!-- bottom shape -->
  <svg class="left-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
          <path d="M0 0 0 0 0 0 Z"></path>
      </svg>
      <svg class="right-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
          <path d="M0 0 0 0 0 0 Z"></path>
      </svg>
      <div id="message"></div>
</section>



<footer style='position:absolute;
	 bottom:0;
	 width:100%;'>
		<div class="container text-center">
				<div class="social top_30 bottom_15">
		            <a href="https://www.facebook.com/pg/RutaLaCima/"><i class="fab fa-facebook"></i>  </a>
		        </div>
			<p>Copyright © 2018 RutaCima, Todos los derechos reservados. <br></p>
		</div>

	</footer>




<!-- Javascripts -->
<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('js/typed.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('projectjs/user.js')}}"></script>
<script src="{{asset('projectjs/viaje.js')}}"></script>
<script src="{{asset('projectjs/contact.js')}}"></script>
<script src="{{asset('js/really-simple-jquery-dialog.js')}}"></script>


</body>
</html>

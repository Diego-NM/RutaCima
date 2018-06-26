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


	<!-- LOADER -->
	<div class="loader-wrapper">
	    <div class="loader"></div>
	</div>

	<!-- HEADER -->
	<header>
        <!--<div class="logo">
            <img src="{{asset('images/logo-w.png')}}" alt="">
        </div>-->
        <div class="nav-icon">
		  <span></span>
		  <span></span>
		  <span></span>
		</div>
	</header>
	<!-- Fixed Header -->
	<header class="fixed fixed-top">
        <!--<div class="logo">
            <img src="{{asset('images/logo.png')}}" alt="">
        </div>-->
        <div class="nav-icon">
		  <span></span>
		  <span></span>
		  <span></span>
		</div>
	</header>

	<!-- FULL MENU -->
	<div class="right-menu">
		<div class="menu-close"></div>
		<div class="right-inner">
			<nav>
				<ul>
					<li><a href="#login" class="active">Iniciar Sesión</a></li>
					<li><a href="#about">Acerca de nosotros</a></li>
					<li><a href="#whatwedo">Servicios</a></li>
					<li><a href="#portfolio">Aventuras</a></li>
          <li><a href="#blogs">Tours</a></li>
					<li><a href="#blogs">Productos</a></li>
					<li><a href="#contact">Contactenos</a></li>
				</ul>
			</nav>
			<div class="right-copyright">
				<p>Copyright © 2018 Ruta a la Cima, All rights Reserved.<br></p>
			</div>
		</div>
	</div>

	<!-- HOME -->
	<section id="home" class="home">
		<div class="home-content">
            <h1>Somos <span class="element" data-text1="aventuras" data-text2="nuevas experiencias" data-text3="su opción"  data-loop="true" data-backdelay="3000"></span></h1>
				<p class="top_30">Excelentes Servicios.<br> Viajes nacionales e internacionales. </p>
				    <div class="social top_30">
		            <a href="https://www.facebook.com/pg/RutaLaCima/"><i class="fab fa-facebook"></i>  </a>
		        </div>
	         	<div id="line-scroll">
          		<div class="line-scroll" id="lsl"> <span class="line active"></span> </div>
        	  </div>
		</div>
		<!-- bottom shape -->
		<svg class="left-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
            <path d="M0 100 L100 100 L0 10 Z"></path>
        </svg>
        <svg class="right-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
            <path d="M0 100 L100 100 L100 10 Z"></path>
        </svg>
	</section>

	<!-- ABOUT SECTION -->
	<section class="about white-bg padbot_120" id="about">
		<div class="container">
			<div class="section-title bottom_15">
				<h2 class="title">QUIENES SOMOS <span class="number"></span> </h2>
			</div>
			<div class="row bottom_60 top_90">
				<div class="col-lg-5 col-md-6 image">
					<img src="{{asset('images/r1.png')}}" alt="">
				</div>
				<div class="col-lg-6 col-md-6 offset-lg-1 text">
					<p>Somos una empresa de tours de aventura y senderismos por diferentes lugares de Costa Rica. Visitando lugares como Chirripó, Cerro Pelado, Pico Blanco, Corcovado, entre otros.</p>
					<p>
          <br>
          Nuestro principal objetivo, es darle un avetura a la altura que usted merece.</p>
				</div>
			</div>
		</div>
		<!-- bottom shape -->
		<svg class="left-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
            <path d="M0 100 L100 100 L0 10 Z"></path>
        </svg>
        <svg class="right-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
            <path d="M0 100 L100 100 L100 10 Z"></path>
        </svg>
	</section>

	<!-- WHAT CAN WE DO SECTION -->
	<section class="whatwedo gray-bg padbot_120" id="whatwedo">
		<div class="container">
			<div class="section-title bottom_15">
				<h2 class="title">CUALES SON NUESTROS SERVICIOS<span class="number"></span> </h2>
			</div>
			<div class="row bottom_60">
                <div class="col-md-4 col-sm-6  service text-center">
                    <i class="icon-map" aria-hidden="true"></i>
                    <h3 class="title top_30">TOURS</h3>
                    <p>El servicio de tours, ofrecemos aventuras tanto nacionales como internacionales.</p>
                </div>
                <div class="col-md-4 col-sm-6  service text-center">
                    <i class="icon-pricetags" aria-hidden="true"></i>
                    <h3 class="title top_30">PRODUCTOS</h3>
                    <p>Ofrecemos productos, totalmente propios y a un precio accesible</p>
                </div>
                <div class="col-md-4 col-sm-6  service text-center">
                    <i class="icon-pencil" aria-hidden="true"></i>
                    <h3 class="title top_30">SERVICIOS ADICIONALES</h3>
                    <p>Si necesita un paramedico, servicio de almuerzos, etc, lo podemos cubrir por usted.</p>
                </div>
            </div>
		</div>
		<!-- bottom shape -->
		<svg class="left-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
            <path d="M0 100 L100 100 L0 10 Z"></path>
        </svg>
        <svg class="right-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
            <path d="M0 100 L100 100 L100 10 Z"></path>
        </svg>
	</section>

	<!-- TOURS SECTION -->
	<section class="portfolio white-bg padbot_120" id="portfolio">
		<div class="container bottom_60">
			<div class="section-title bottom_15">
				<h2 class="title">AVENTURAS<span class="number"></span></h2>
	           <!-- <div class="portfolio_filter">
	                <ul>
	                    <li data-filter=".web-design">Web Design</li>
	                    <li data-filter=".aplication">Applications</li>
	                    <li data-filter=".development">Development</li>
	                    <li class="select-cat" data-filter="*">All Works</li>
	                </ul>
	            </div>-->
			</div>
        <!--Portfolio Items-->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="isotope_items row">
                    <!-- Item -->
                  <!--  <a href="https://www.youtube.com/watch?v=M-M3rdL_WLQ" class="popup-youtube single_item link development col-md-4 col-sm-6">
                        <i class="fa fa-play" aria-hidden="true"></i>
                        <img src="{{asset('images/work1.jpg')}}" alt="">
                    </a>-->
                    <!-- Item -->
                    <a href="{{asset('images/work1.jpg')}}" class="single_item link aplication col-md-4 col-sm-6">
                        <img src="{{asset('images/work1.jpg')}}" alt="">
                    </a>
                    <a href="{{asset('images/work2.jpg')}}" class="single_item link aplication col-md-4 col-sm-6">
                        <img src="{{asset('images/work2.jpg')}}" alt="">
                    </a>
                    <!-- Item -->
                    <a href="{{asset('images/work3.jpg')}}" class="single_item link development col-md-4 col-sm-6">
                        <img src="{{asset('images/work3.jpg')}}" alt="">
                    </a>
                    <!-- Item -->
                    <a href="{{asset('images/work4.jpg')}}" class="single_item link web-design col-md-4 col-sm-6">
                        <img src="{{asset('images/work4.jpg')}}" alt="">
                    </a>
                    <!-- Item -->
                    <a href="{{asset('images/work6.jpg')}}" class="single_item link aplication col-md-4 col-sm-6">
                        <img src="{{asset('images/work6.jpg')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
		</div>
		<!-- bottom shape -->
		<svg class="left-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
            <path d="M0 100 L100 100 L0 10 Z"></path>
        </svg>
        <svg class="right-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
            <path d="M0 100 L100 100 L100 10 Z"></path>
        </svg>
	</section>

	<!-- BLOG SECTION -->
	<section class="blogs gray-bg padbot_120" id="blogs">
		<div class="container bottom_60">
			<div class="section-title bottom_15">
				<h2 class="title">TOURS DISPONIBLES<span class="number"></span> </h2>
			</div>
			<div class="row" id="toursDiv">
       <!-- CARGADO DINAMICO -->


       <!-- TERMINA CARGADO DINAMICO -->

			</div>
			<a href="blogs.html" class="site-btn">CARGAR MAS...</a>
		</div>
		<!-- bottom shape -->
		<svg class="left-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
            <path d="M0 100 L100 100 L0 10 Z"></path>
        </svg>
        <svg class="right-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
            <path d="M0 100 L100 100 L100 10 Z"></path>
        </svg>
	</section>

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
                <div class="row">
                    <div class="col-md-12" style="text-aling:'center';">
											  <button id="con_crearUsuario" class="site-btn top_60" style="display:none;" type="button">Registrarse</button>
                        <button id="con_ingresar" class="site-btn top_60" type="button">Ingresar</button>
                    </div>
                </div>
              </br>
                <div class="row">
                    <div class="col-md-12" style="text-aling:'center';">
                        <button id="con_registrarse" class="btn btn-success" type="button">No tienes cuenta?, Registrate aquí</button>
												<button id="con_iniciarSesion" class="btn btn-success" style="display:none;" type="button">Ya tienes cuenta?, Ingresa aquí</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
		</div>
		<!-- bottom shape -->
    <!-- bottom shape -->
    <svg class="left-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
            <path d="M0 100 L100 100 L0 10 Z"></path>
        </svg>
        <svg class="right-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
            <path d="M0 100 L100 100 L100 10 Z"></path>
        </svg>
	</section>

	<!-- CONTACT -->
	<section class="contact gray-bg padbot_120" id="contact">
		<div class="container text-center padbot_120">
			<div class="col-md-8 offset-md-2">
				<div class="section-title">
					<h2 class="title">CONTACTENOS<span class="number"></span> </h2>
				</div>
				<p>Haganos llegar cualquier inquietud, recomendación o solicitud</p>
				<div class="information top_30">
					<a href="#">rutaalacima@gmail.com</a><br>
					<a href="#">Tel: 8917-8414</a>
				</div>
				<div class="social top_30">
		            <a href="https://www.facebook.com/pg/RutaLaCima/"><i class="fab fa-facebook"></i>  </a>
		        </div>
		        <!-- Contact Form -->
		            <form class="contact-form top_60" method="POST">
                    <div class="row">
                        <!--Name-->
                        <div class="col-md-6">
                            <input id="con_name" name="con_name" class="form-inp requie" type="text" placeholder="Nombre">
                        </div>
                        <!--Email-->
                        <div class="col-md-6">
                            <input id="con_email" name="con_email" class="form-inp requie" type="text" placeholder="Correo Electronico">
                        </div>
                        <div class="col-md-12">
                            <!--Message-->
                            <textarea name="con_message" id="con_message" class="requie" placeholder="En que le podemos ayudar?" rows="8"></textarea>
                            <button id="con_submit" class="site-btn top_60 pull-right" type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
			</div>
		</div>

    <!-- bottom shape -->
		<svg class="left-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
            <path d="M0 0 0 0 0 0 Z"></path>
        </svg>
        <svg class="right-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
            <path d="M0 0 0 0 0 0 Z"></path>
        </svg>
	</section>


	<footer>
		<div class="container text-center">
				<div class="social top_30 bottom_15">
		            <a href="https://www.facebook.com/pg/RutaLaCima/"><i class="fab fa-facebook"></i>  </a>
		        </div>
			<p>Copyright © 2018 RutaCima, All rights Reserved. <br></p>
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


</body>
</html>

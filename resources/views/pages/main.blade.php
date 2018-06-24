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
    <button id="popup" class="btn"> Pop Up </button>
    	<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Iniciar Sesión</button>-->
		<div class="menu-close"></div>
		<div class="right-inner">
			<nav>
				<ul>
					<li><a href="#home" class="active">Principal</a></li>
					<li><a href="#about">Acerca de nosotros</a></li>
					<li><a href="#whatwedo">Servicios</a></li>
					<li><a href="#portfolio">Aventuras</a></li>
          <li><a href="#blogs">Tours</a></li>
					<li><a href="#blogs">Productos</a></li>
					<li><a href="#contact">Contactenos</a></li>
				</ul>
			</nav>
			<div class="right-copyright">
				<p>Copyright © 2018 Ruta a la Cima, All rights Reserved. <br></p>
			</div>
		</div>
	</div>

	<!-- HOME -->
	<section id="home" class="home">
		<div class="home-content">
            <h1>Somos <span class="element" data-text1="su Aventura" data-text2="nuevas Experiencias " data-text3="su Opción"  data-loop="true" data-backdelay="3000"></span></h1>
				<p class="top_30">Excelentes Servicios.<br> Viajes nacionales e internacionales. </p>
				    <div class="social top_30">
		            <a href="https://www.facebook.com/pg/RutaLaCima/"><i class="fab fa-facebook"></i>  </a>
		            <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i>  </a>
		            <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i>  </a>
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

	<!-- PORTFOLIO SECTION -->
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
			<div class="row">
       <!-- CARGADO DINAMICO -->

				<!-- TOUR 1 -->
				<a href="single-blog.html" class="col-md-4 blog">
					<div class="image">
						<img src="{{asset('images/blog-1.jpg')}}" alt="">
					</div>
					<span>C</span>
					<h3 class="title">His boss would certainly come round with the doctor from the medical...</h3>
					<div class="date">02 March, 2018</div>
				</a>
				<!-- TOUR 2 -->
				<a href="single-blog.html" class="col-md-4 blog">
					<div class="image">
						<img src="{{asset('images/blog-2.jpg')}}" alt="">
					</div>
					<span>CACHÍ</span>
					<h3 class="title">Gregor then turned to look out the window at the dull weather.</h3>
					<div class="date">02 March, 2018</div>
				</a>
				<!-- TOUR 3 -->
				<a href="single-blog.html" class="col-md-4 blog">
					<div class="image">
						<img src="{{asset('images/blog-3.jpg')}}" alt="">
					</div>
					<span>EVENT</span>
					<h3 class="title">One morning, when Gregor Samsa woke from troubled dreams.</h3>
					<div class="date">02 March, 2018</div>
				</a>

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

	<!-- CONTACT -->
	<section class="contact last-section" id="contact">
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
		            <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i>  </a>
		            <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i>  </a>
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
            <path d="M0 100 L100 100 L0 10 Z"></path>
        </svg>
        <svg class="right-svg" width="50%" height="80" viewBox="0 0 100 102" preserveAspectRatio="none">
            <path d="M0 100 L100 100 L100 10 Z"></path>
        </svg>
	</section>


	<footer>
		<div class="container text-center">
				<div class="social top_30 bottom_15">
		            <a href="https://www.facebook.com/pg/RutaLaCima/"><i class="fab fa-facebook"></i>  </a>
		            <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i>  </a>
		            <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i>  </a>
		        </div>
			<p>Copyright © 2018 RutaCima, All rights Reserved. <br></p>
		</div>

	</footer>


<!-- Login Modal
  <div class="modal fade" id="myModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesión</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Ingresar</button>
        </div>
      </div>
    </div>
  </div>
 End Login Modal -->
 <div class="modal fade" id ="modalPopup" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <p>One fine body</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- ============= info popup ============= -->

<!-- Javascripts -->
<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('js/typed.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script>
$(function(){
    var options = {
            "backdrop" : "static",
            "show":true
        }
    $("#popup").on("click", function(){
        console.log("modal popup");
        $('#modalPopup').modal(options);
    });
});
</script>

</body>
</html>

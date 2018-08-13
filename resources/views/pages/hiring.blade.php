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
	  <link rel="stylesheet" href="{{asset('css/bootstrap-datetimepicker.min.css')}}">

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
				.select-style {
			    border: 1px solid #ccc;
			    width: 120px;
			    border-radius: 3px;
			    overflow: hidden;
			    background: #fafafa url("img/icon-select.png") no-repeat 90% 50%;
			}

			.select-style select {
			    padding: 5px 8px;
			    width: 130%;
			    border: none;
			    box-shadow: none;
			    background: transparent;
			    background-image: none;
			    -webkit-appearance: none;
			}

			.select-style select:focus {
			    outline: none;
			}

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


	<section>

		<div id="exTab1" class="container">
			<div class="login">
				<div class="container text-center">
						<div class="row">
								<div class="col-2">
										<button id="returnMainFromHiring" class="botonimagen" data-toggle="tooltip" title="Regresar"></button>
								</div>
								<div class="col-8">
									<h2>Contratación</h2>
									<p>Escoga el tipo de servicio que desea contratar</p>
								</div>
								<div class="col-2"></div>
						</div>



					<div class="col-md-8 offset-md-2">
         </br>
			 			 <ul  class="nav nav-pills" >
									 <li class="active">
			 							 <a   href="#tour" style="font-weight: bold; font-size:large;" data-toggle="tab">Tours</a>
			 						 </li>
									 <li>
			 							 <a   href="#taller" style="font-weight: bold; font-size:large;" data-toggle="tab">Taller</a>
			 						 </li>
			 						 <li><a href="#programa" style="font-weight: bold; font-size:large;" data-toggle="tab">Programas</a>
			 						 </li>
			 						 <li><a href="#other" style="font-weight: bold; font-size:large;" data-toggle="tab">Otros Servicios</a>
			 						 </li>
			 			 </ul>
             <br/>
			 						 <div class="tab-content clearfix" >

												<div class="tab-pane active" id="tour">
																		 <div class="row">
																				 <div class="col-md-6">
																						 <h4>Seleccione un Tour<h4/>
																				 </div>
																				 <div class="col-md-6">
																					 <div class="select-style" style="width:200px;">
																						 <select id="tourContratacion">
																							 <option value="">Seleccione</option>
																						 </select>
																					 </div>
																				 </div>
																			</div>



																			<div class="row">
																				 <div class="col-md-6">
																						 <h4>Seleccione la cantidad de personas</h4>
																				 </div>
																				 <div class="col-md-6">
																					 <div style=' width: 200px;
																						border-radius: 3px;'>
																					 <input required class="form-control" type="number" id="numeroPersonasContratacion" name="numeroPersonasContratacion" placeholder="Min: 1, max: 100" min="1" max="100" />
																					 </div>
																				 </div>
																		 </div>



																		 <div class="row">
																				<div class="col-md-6">
																						<h4>Fecha del evento</h4>
																				</div>
																				<div class="col-md-6">
																					<div style=' width: 200px;
																					 border-radius: 3px;'>
																					 <div class='input-group date' id='DivfechaContratacion'>
																							 <input required id='fechaContratacion' type='text' class="form-control" />
																							 <span class="input-group-addon">
																									 <span class="glyphicon glyphicon-calendar"></span>
																							 </span>
																					 </div>
																					</div>
																				</div>
																		</div>



																		<div class="row">
																				<div class="col-md-6">
																						<h4>Seleccione Tipo de Evento<h4/>
																				</div>
																				<div class="col-md-6">
																					<div class="select-style" style="width:200px;">
																						<select id="tipoEnvento">
																							<option value="">Seleccione</option>
																							<option value="1">Universitario</option>
																							<option value="5">Familiar</option>
																						</select>
																					</div>
																				</div>
																		 </div>



																		 <div class="row">
																			 <div class="col-md-6">
																					 <h4>Algun servicio extra que desea para el Tour?<h4/>
																			 </div>
																			 <div class="col-md-3">
																				 <label>Comida
																				 <input   type="checkbox"  id="comidachkTour" value="Comida">
																				 <span class="checkmark"></span>
																				 </label>
																				 <label>Estadia
																					 <input  type="checkbox"  id="estadischkTour" value="Estadia">
																					 <span class="checkmark"></span>
																				 </label>
																				 <label>Paramédico
																					<input  type="checkbox" id="paramedicochkTour" value="Paramédico">
																					<span class="checkmark"></span>
																				</label>
																				 <label>Otro
																					 <input   type="checkbox" id="otrochkTour">
																					 <span class="checkmark"></span>
																				 </label>
																			 </div>
																			 <div class="col-md-3">
																					<input  id="tourOtroExtra" class="form-control" type="text" style="display:none;"/>
																			 </div>
																		</div>


																		 <br/>

																		 <div class="row">
																				<div class="col-md-12">
																					<button id="enviarContratacionTour" style="font-weight:bold; width:50% " class="btn btn-success">Enviar</button>
																				</div>
																		 </div>
												</div>

												<div class="tab-pane" id="taller">
																		 <div class="row">
																				 <div class="col-md-6">
																						 <h4>Seleccione un Taller<h4/>
																				 </div>
																				 <div class="col-md-3">
																					 <div class="select-style" style="width:200px;">
																						 <select id="tallerContratacion">
																							 <option>Seleccione</option>
																							 <option value="Equipos">Equipos de personas de alto rendimiento o team building</option>
																							 <option value="otro">Otro</option>
																						 </select>
																					 </div>
																				 </div>
																				 <div class="col-md-3">
																						 <input  id="tallerOtro" class="form-control" type="text" style="display:none; height: 31px;"/>
																				 </div>
																			</div>



																			<div class="row">
																				 <div class="col-md-6">
																						 <h4>Seleccione la cantidad de personas</h4>
																				 </div>
																				 <div class="col-md-6">
																					 <div style=' width: 200px;
																						border-radius: 3px;'>
																					 <input required class="form-control" type="number" id="numPersonasTaller" name="numPersonasTaller" placeholder="Min: 1, max: 100" min="1" max="100" />
																					 </div>
																				 </div>
																		 </div>



																		 <div class="row">
																				<div class="col-md-6">
																						<h4>Fecha del evento</h4>
																				</div>
																				<div class="col-md-6">
																					<div style=' width: 200px;
																					 border-radius: 3px;'>
																					 <div class='input-group date' id='DivfechaContratacionTaller'>
																							 <input required id='fechaTaller' type='text' class="form-control" />
																							 <span class="input-group-addon">
																									 <span class="glyphicon glyphicon-calendar"></span>
																							 </span>
																					 </div>
																					</div>
																				</div>
																		</div>



																		<div class="row">
																				<div class="col-md-6">
																						<h4>Seleccione Tipo de Evento<h4/>
																				</div>
																				<div class="col-md-6">
																					<div class="select-style" style="width:200px;">
																						<select id="tipoEnventoTaller">
																							<option value="">Seleccione</option>
																							<option value="1">Universitario</option>
																							<option value="5">Familiar</option>
																						</select>
																					</div>
																				</div>
																		 </div>

																			 <br/>

																		 <div class="row">
																				<div class="col-md-6">
																						<h4>Algun servicio extra que desea para el Taller?<h4/>
																				</div>
																				<div class="col-md-3">
																					<label>Comida
																					<input type="checkbox"  id="comidachkTaller"  value="Comida">
																					<span class="checkmark"></span>
																					</label>
																					<label>Estadia
																						<input type="checkbox"  id="estadischkTaller"  value="Estadia">
																						<span class="checkmark"></span>
																					</label>
																					<label>Otro
																						<input type="checkbox" id="otrochkTaller">
																						<span class="checkmark"></span>
																					</label>
																				</div>
																				<div class="col-md-3">
																					 <input id="tallerOtroExtra" class="form-control" type="text" style="display:none;"/>
																				</div>
																		 </div>


																		 <br/>

																		 <div class="row">
																				<div class="col-md-12">
																					<button id="enviarTaller" style="font-weight:bold; width:50% " class="btn btn-success">Enviar</button>
																				</div>
																		 </div>
												</div>

			 									<div class="tab-pane" id="programa">
																					<div class="row">
																						 <div class="col-md-6">
																								 <h4>Seleccione el Programa<h4/>
																						 </div>
																						 <div class="col-md-3">
																							 <div class="select-style" style="width:200px;">
																								 <select id="programaContratacion">
																									 <option>Seleccione</option>
																									 <option value="Entrenamientos">Entrenamientos Fisicos</option>
																									 <option value="otro">Otro</option>
																								 </select>
																							 </div>
																						 </div>
																						 <div class="col-md-3">
																								<input id="programaOtro" class="form-control" type="text" style="display:none; height: 31px;"/>
																						</div>
																					 </div>


																						<div class="row">
						 																	 <div class="col-md-6">
																								   <h4>Seleccione la cantidad</h4>
																							 </div>
																							 <div class="col-md-6">
																								 <div style=' width: 200px;
																							    border-radius: 3px;'>
																								 <input required class="form-control" type="number" id="numPrograma" name="numPrograma" placeholder="Min: 1, max: 100" min="1" max="100" />
																							   </div>
																							 </div>
						 															 </div>


																					 <div class="row">
 		 																				<div class="col-md-6">
 		 																						<h4>Fecha del evento</h4>
 		 																				</div>
 		 																				<div class="col-md-6">
 		 																					<div style=' width: 200px;
 		 																					 border-radius: 3px;'>
 		 																					 <div class='input-group date' id='DivfechaContratacionPrograma'>
 		 																							 <input required id='fechaPrograma' type='text' class="form-control" />
 		 																							 <span class="input-group-addon">
 		 																									 <span class="glyphicon glyphicon-calendar"></span>
 		 																							 </span>
 		 																					 </div>
 		 																					</div>
 		 																				</div>
 		 																		</div>



 		 																		<div class="row">
 		 																				<div class="col-md-6">
 		 																						<h4>Seleccione Tipo de Evento<h4/>
 		 																				</div>
 		 																				<div class="col-md-6">
 		 																					<div class="select-style" style="width:200px;">
 		 																						<select id="tipoEnventoPrograma">
 		 																							<option value="">Seleccione</option>
																									<option value="1">Universitario</option>
																									<option value="5">Familiar</option>
 		 																						</select>
 		 																					</div>
 		 																				</div>
 		 																		 </div>

 		 																			 <br/>

 		 																		 <div class="row">
 		 																				<div class="col-md-6">
 		 																						<h4>Algun servicio extra que desea para el Taller?<h4/>
 		 																				</div>
 		 																				<div class="col-md-3">
 		 																					<label>Comida
 		 																					<input type="checkbox"  id="comidachkPrograma" value="Comida">
 		 																					<span class="checkmark"></span>
 		 																					</label>
 		 																					<label>Estadia
 		 																						<input type="checkbox"  id="estadischkPrograma" value="Estadia">
 		 																						<span class="checkmark"></span>
 		 																					</label>
 		 																					<label>Otro
 		 																						<input type="checkbox" id="otrochkPrograma">
 		 																						<span class="checkmark"></span>
 		 																					</label>
 		 																				</div>
 		 																				<div class="col-md-3">
 		 																					 <input id="programaOtroExtra" class="form-control" type="text" style="display:none;"/>
 		 																				</div>
 		 																		 </div>


 		 																		 <br/>

 		 																		 <div class="row">
 		 																				<div class="col-md-12">
 		 																					<button id="enviarPrograma" style="font-weight:bold; width:50% " class="btn btn-success">Enviar</button>
 		 																				</div>
 		 																		 </div>


			 										</div>

		 								 	  <div class="tab-pane" id="other">
																 <div class="row">
																		 <div class="col-md-6">
																				 <h4>Escriba algun otro servicio<h4/>
																		 </div>
																		 <div class="col-md-6">
																			 <div class="select-style" style="width:200px;">
																				 <input id="otraContratacion" class="form-control" type="text"/>
																			 </div>
																		 </div>
																	</div>

																	<div class="row">
																		 <div class="col-md-6">
																				 <h4>Seleccione la cantidad de personas</h4>
																		 </div>
																		 <div class="col-md-6">
																			 <div style=' width: 200px;
																				border-radius: 3px;'>
																			 <input class="form-control" type="number" id="numPersonasOtro" name="numPersonasOtro" placeholder="Min: 1, max: 100" min="1" max="100" />
																			 </div>
																		 </div>
																 </div>



																 <div class="row">
																		<div class="col-md-6">
																				<h4>Fecha del evento</h4>
																		</div>
																		<div class="col-md-6">
																			<div style=' width: 200px;
																			 border-radius: 3px;'>
																			 <div class='input-group date' id='DivfechaContratacionOtro'>
																					 <input required id='fechaOtro' type='text' class="form-control" />
																					 <span class="input-group-addon">
																							 <span class="glyphicon glyphicon-calendar"></span>
																					 </span>
																			 </div>
																			</div>
																		</div>
																</div>



																<div class="row">
																		<div class="col-md-6">
																				<h4>Seleccione Tipo de Evento<h4/>
																		</div>
																		<div class="col-md-6">
																			<div class="select-style" style="width:200px;">
																				<select required id="tipoEnventoOtro">
																					<option value="">Seleccione</option>
																					<option value="1">Universitario</option>
																					<option value="5">Familiar</option>
																				</select>
																			</div>
																		</div>
																 </div>



																 <div class="row">
																		<div class="col-md-6">
																				<h4>Algun servicio extra que desea para su contratación?<h4/>
																		</div>
																		<div class="col-md-3">
																			<label>Comida
																			<input type="checkbox"  id="comidachkOtro" value="Comida">
																			<span class="checkmark"></span>
																			</label>
																			<label>Estadia
																				<input type="checkbox"  id="estadischkOtro" value="Estadia">
																				<span class="checkmark"></span>
																			</label>
																			<label >Otro
																				<input type="checkbox" id="otrochkOtro">
																				<span class="checkmark"></span>
																			</label>
																		</div>
																		<div class="col-md-3">
																			 <input id="otroExtra" class="form-control" type="text" style="display:none;"/>
																		</div>
																 </div>


																 <br/>

																 <div class="row">
																		<div class="col-md-12">
																			<button id="enviarContratacionOtro" style="font-weight:bold; width:50% " class="btn btn-success">Enviar</button>
																		</div>
																 </div>
		 										</div>

			 						 </div>
            </div>
          </div>
        </div>
 	 </div>


	      <div id="message"></div>
	</section>


<!-- Javascripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="{{asset('js/typed.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('projectjs/hiring.js')}}"></script>
<script src="{{asset('js/really-simple-jquery-dialog.js')}}"></script>
<script src="{{asset('js/bootstrap-datetimepicker.js')}}"></script>
<script src="{{asset('js/locales/bootstrap-datetimepicker.fr.js')}}"></script>

<footer style="height:100px; position:absolute; bottom:0; width:100%; padding:0px">
	<div class="container text-center">
			<div class="social top_30">
							<a href="https://www.facebook.com/pg/RutaLaCima/"><i class="fab fa-facebook"></i>  </a>
					</div>
		<p>Copyright © 2018 RutaCima, Todos los derechos reservados. <br></p>
	</div>
</footer>

</body>

</html>

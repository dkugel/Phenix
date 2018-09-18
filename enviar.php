<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>PHENIX SALUD OCUPACIONAL  | Home </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Clinical Lab Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<link href='//fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<script src="js/responsiveslides.min.js"></script>
</head>
<body>
<!-- header -->
<div class="header_w3l">
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><img class="logo" src="images/logo.gif" alt="logo phenix"/></h1>
			</div>
				<!-- top-nav -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.html" class="active">Home</a></li>
					<li><a href="about.html">Nosotros</a></li>
					<li><a href="services.html">Servicios</a></li>
					<li><a href="certificados.html">Descarga de certificados</a></li>
					<li><a href="contact.html">Contacto</a></li>
				</ul>	
				<div class="clearfix"> </div>	
			</div>
		</nav>
	</div>
</div>
<!-- header -->
<!-- banner -->
<div class="banner_w3ls w3layouts">
	<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
	</script>
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li>
					<div class="banner-info w3">
						<div class="banner-text w3l">
							<h3>Medicina laboral o del trabajo</h3>
							<p>Realizamos los exámenes médicos ocupacionales, exámenes de ingreso y control
							para mantener la salud de los trabajadores.
       <?php        
         $name = isset($_POST['name'])? $_POST['name'] : NULL;
         $email = isset($_POST['email'])? $_POST['email'] : NULL;
         $phone = isset($_POST['phone'])? $_POST['phone'] : NULL;
         $message = isset($_POST['message'])? $_POST['message'] : NULL;
        
         $para = 'servicioalcliente@phenixsaludocupacional.com.co';
         $titulo = 'Nuevo contacto';
         $header = 'From: ' . $email;
         $msjCorreo = "Nombre: $name\n E-Mail: $email\n  Telefono: $phone\n   Mensaje:\n $message";
           
         if (isset($_POST['submit'])) {
         if (mail($para, $titulo, $msjCorreo, $header)) {
         echo "<script language='javascript'>
         alert('Mensaje enviado, muchas gracias.');
         window.location.href = 'http://www.phenixsaludocupacional.com.co';
         </script>";
         } else {
         echo 'Falló el envio';
         }
         }
        ?>	
       </p>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-info w3ls">
						<div class="banner-text agileits">
							<h3>Exámenes complementarios</h3>
							<p>Audiometría, visiometría, espirometría, optometría. </p>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-info agileinfo">
						<div class="banner-text wthree">
							<h3>Laboratorio clínico</h3>
							<p>Realizamos diversos tipos de pruebas de laboratorio
							   para llevar a cabo una evaluación completa de nuestros pacientes.</p>
						</div>
					</div>
				</li>
			</ul>
			<div class="clearfix"></div>
		</div>
</div>
<!-- //banner -->
<!-- banner-bottom -->
<div class="bottom_wthree">
	<div class="col-md-6 bottom-left w3-agileits">	
		<figure class="cube-1">
			<div class="btm-hov">
				<div class="btm-wid">
					<div class="thumbs">
						<span class="rotate">
							<a href="#" class="btn">Laboratorio <br> clínico</a>
						</span>
					</div>
					<div class="fill_fig">
						<span class="fill"></span>
						<span class="fill"></span>
						<span class="fill"></span>
						<span class="fill"></span>
					</div>
				</div>
			</div>
		</figure>
		<div class="clearfix"></div>
	</div>
	<div class="col-md-6 bottom-right agileits-w3layouts">
		<div class="btm-right-grid agile">
			<h2>PHENIX Salud Ocupacional SAS</h2>
			<p>Todos nuestros servicios están orientados a mejorar las calidad de vida de nuestros pacientes y apoyar
a las empresas para mejorar las condiciones de trabajo, reduciendo la accidentalidad laboral, las
enfermedades profesionales, el ausentismo laboral y por consiguiente la conservación de la salud de los
trabajadores, colaborando de esta forma con el mejoramiento y productividad de nuestros clientes.</p>
		</div>	
	</div>
	<div class="clearfix"></div>
</div>
<!-- //banner-bottom -->
<!-- services -->
<div class="services_agile">
	<div class="container">
		<h3 class="title">Nuestros servicios</h3>
		<div class="services_right w3-agile">
			<div class="col-md-4 list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<span><img src="images/icon1.png" alt=" "/></span>
				<h4>Medicina en salud ocupacional </h4>
				<div class="multi-gd-text"><a href="#"><img class="img-responsive" src="images/p5.jpg" alt=" "/></a></div>
				<p>Realizamos los exámenes médicos ocupacionales de ingreso periódicos y de retiro.</p>
			</div>
			<div class="col-md-4 list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
				<span><img src="images/icon2.png" alt=" "/></span>
				<h4>Exámenes complementarios</h4>
				<div class="multi-gd-text"><a href="#"><img class="img-responsive" src="images/p6.jpg" alt=" "/></a></div>
				<p>Realizamos exámenes de Audiometría, tamiz visiometría, Optometria y Espirometría</p>
			</div>
			<div class="col-md-4 list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.3s">
				<span><img src="images/icon3.png" alt=" "/></span>
				<h4>Laboratorio <br> clínico</h4>
				<div class="multi-gd-text"><a href="#"><img class="img-responsive" src="images/p7.jpg" alt=" "/></a></div>
				<p>Contamos con laboratorio clínico para diferentes tipos de estudios como cuadro hemático, frotis faríngeo
				   serologías, entre otros estudios.</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //services -->

<!-- care -->
<div class="care_agileits">
	<div class="container">
		<div class="offer agile">
			<h3>Beneficios de contar con PHENIX SALUD OCUPACIONAL</h3>
			
			<ul>
				<li>
					<div class="offer-left w3-agile">
						<div class="hi-icon-wrap hi-icon-effect-2 hi-icon-effect-2b">
							<a href="#" class="hi-icon hi-icon-cog glyphicon glyphicon-education"></a>
						</div>
					</div>
					<div class="offer-right agileits-w3layouts">
						<p>Nos encontramos habilitados por La Secretaria Distrital de Salud con
						todos los permisos y licencias exigidas por la Legislación Colombiana</p>
					</div>
					<div class="clearfix"></div>
				</li>
				<li>
					<div class="offer-left w3-agile">
						<div class="hi-icon-wrap hi-icon-effect-2 hi-icon-effect-2b">
							<a href="#" class="hi-icon hi-icon-cog glyphicon glyphicon-education"></a>
						</div>
					</div>
					<div class="offer-right agileits-w3layouts">
						<p>Contamos con un grupo de profesionales multidisciplinario e idóneo, que nos permite ofrecer
servicios oportunos y confiables, haciéndonos competitivos en el mercado.</p>
					</div>
					<div class="clearfix"></div>
				</li>	
				<li>
					<div class="offer-left w3-agileits">
						<div class="hi-icon-wrap hi-icon-effect-2 hi-icon-effect-2b">
							<a href="#" class="hi-icon hi-icon-cog glyphicon glyphicon-scissors"></a>
						</div>
					</div>
					<div class="offer-right wthree">
						<p>Exámenes medico ocupacionales eficientes, rápidos, oportunos. </p>
					</div>
					<div class="clearfix"></div>
				</li>
				<li>
					<div class="offer-left agileinfo">
						<div class="hi-icon-wrap hi-icon-effect-2 hi-icon-effect-2b">
							<a href="#" class="hi-icon hi-icon-cog glyphicon glyphicon-plus"></a>
						</div>
					</div>
					<div class="offer-right agileits">
						<p>Nuestras instalaciones son confortables e idóneas para brindarle un excelente servicio.</p>
					</div>
					<div class="clearfix"></div>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- //care -->
<div class="contact_w3agile">
	<div class="container">
		<h2 class="title w3">Contáctenos</h2>
		<div class="strip"></div>
		<ul>
			<li><a class="fb-icon1" href="#"></a></li>
			<li><a class="fb-icon2" href="#"></a></li>
			<li><a class="fb-icon3" href="#"></a></li>
			<li><a class="fb-icon4" href="#"></a></li>
			<li><a class="fb-icon5" href="#"></a></li>
		</ul>
		<form action="#" method="post">
			<input type="text" value="Nombre" name="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Nombre';}"><br>
			<input type="text" value="Telefono" name="Phone" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Telefono';}">
			<input type="email" value="Email" name="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}">
			<textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mensaje';}" required="">Mensaje</textarea>
			<div class="con-form text-center">
				<input type="submit" value="Enviar">
			</div>
		</form>
		<p class="agileinfo">&copy; 2017 Clinical Lab . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
	</div>
</div>
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>
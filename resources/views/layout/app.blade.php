<!DOCTYPE html>
<html lang="es-ES">
<head>
	<title>Iglesia Bautista Hispana de Conroe</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport"  content="width=device-width,initial-scale=1">
	<meta name="keywords" content="iglesia, conroe, tx, texas, houston, isaias martinez, jesus, dios, cristo, 77301, 77304, esperanza, iglesias, evangelicas, evangelica, bautista, hispana, templo, ayuda, biblia, fe, cruz" />
	<meta name="description" content="Bienvenidos a la Iglesia Bautista Hispana de Conroe,TX. Somos una iglesia cristiana bautista que existe para adorar al creador del universo y para ayudar a la comunidad hispana a tener una mejor relacion con Jesucristo" />
	<meta name="robots" content="index,follow" />
	<meta name="author" content="https://ibhconroe.org" />
	<!-- Open graph data -->
	<meta property="og:title" content="Iglesia Bautista Hispana de Conroe" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.ibhconroe.org/" />
	<meta property="og:image" content="https://www.ibhconroe.org/resources/images/meta-image.jpg" />
	<meta property="og:description" content="Bienvenidos a la Iglesia Bautista Hispana de Conroe,TX. Somos una iglesia cristiana bautista que existe para adorar al creador del universo y para ayudar a la comunidad hispana a tener una mejor relacion con Jesucristo" />
	<!-- Links  -->
		<!-- js -->

			<!-- fin js -->
		<!-- css -->
<!-- plugins -->
		<!-- Bootstrap -->
			<!--<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">-->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
		<!-- Fin de Boostrap -->
		
<link rel="stylesheet" href="/css/general-style.css" />
			
			<!-- fin css -->
			<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Give+You+Glory" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Padauk" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">



				<link rel="stylesheet" type="text/css" href="css/animate/animate.css">
 			
	<!-- fullCalendar -->
		<link rel='stylesheet' href='/api/fullcalendar/fullcalendar.css'/>
		<link rel="stylesheet" type="text/css" href="/css/util.css">
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/
	font-awesome.min.css">
	<!--  Fin de fullCalendar -->
	<!-- Jquery gallery plugin -->
		<link rel="stylesheet" href="/css/lc_lightbox.css" />


	<!-- fin de jquery gallery plugin -->
		<link rel="stylesheet" type="text/css" href="/css/slider.css">
	<!-- fin links -->
</head>
<body id="top">
<?php function activeMenu($url){
    return request()->is($url) ? 'active' : '';
  }?>
		@include('templates.top')

	<header>
		   <nav class="navbar navbar-default  center  stroke">
          <div class="container-fluid navbar-inner">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
               
            </div>
              <div class="collapse navbar-collapse center" id="navbar-1">
                  <ul class="nav navbar-nav text-center">
                   	  <li><a href="/"  class="{{ activeMenu('/') }}">
                   	  	 @if(auth()->check())
                   	  	 	Editar
                   	  	 @endif
                   	 		 Menú
                   		</a></li>
	                  <li><a href="/servicios" class="{{ activeMenu('servicios') }}">
	                  	 @if(auth()->check())
                   	  	 	Editar
                   	  	 @endif
	                    	Servicios
	                  </a></li>
	                  <li><a href="/eventos" class="{{ activeMenu('eventos') }}">
	                  	 @if(auth()->check())
                   	  	 	Editar
                   	  	 @endif
	                        Eventos
	                    </a></li>
	                  <li><a href="/quienessomos" class="{{ activeMenu('quienessomos') }}">
	                  	 @if(auth()->check())
                   	  	 	Editar
                   	  	 @endif
	                  		Quienes Somos
	                  	</a></li>
	                  <li><a href="/galeria" class="{{ activeMenu('galeria') }}">
	                  	 @if(auth()->check())
                   	  	 	Editar
                   	  	 @endif
	                  		Galería
	                  	</a></li>
	                  <li><a href="/contactos" class="{{ activeMenu('contactos') }}">
	                  	 @if(auth()->check())
                   	  	 	Editar
                   	  	 @endif
	                        Contactos
	                    </a></li>
	                    <li class="hidden-sm hidden-xm hidden-lg hidden-md">
	                    	<a style="font-size: 40px" href="https://www.facebook.com/ibhconroe/" target="_blank"><span class="fab fa-facebook-square"> </span></a>
							<a style="font-size: 40px" href="https://twitter.com/ibhconroe" target="_blank"><span class="fab fa-twitter-square"> </span></a>
							<a style="font-size: 40px" href="mailto:ibhconroe@gmail.com" target="_blank"><span class="far fa-envelope"> </span></a>
	                    </li>
                  </ul>

              </div>
          </div>
        </nav>


	</header>




	@include('templates.slideshow')
		
		<div id="middle">
			@yield('content')
		</div>
		
	@include('templates.form_contact')
	@include('templates.footer')


	<!-- Js files -->
		<!-- Bootstrap JS -->		 
<script src="https://code.jquery.com/jquery-latest.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
		<!-- jQuery JS -->
	<!--	<script type="text/javascript" src="/js/slider.js"></script>-->
		<script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>



		<script src="/js/lc_lightbox.lite.js" type="text/javascript"></script>
		<script src="lib/AlloyFinger/alloy_finger.min.js" type="text/javascript"></script>


		<script src='/api/lib/moment.min.js'></script>
		<script src='/api/fullcalendar/fullcalendar.js'></script>
		<script type='text/javascript' src='/api/lib/gcal.js'></script>

		<script type="text/javascript" src="/js/custom.js"></script>
		<script type="text/javascript" src="/js/particles.js"></script>
		<script type="text/javascript" src="/js/partApp.js"></script>
		<script type="text/javascript" src="/js/slider.min.js"></script>
		
<!-- FIN Js files -->

</body>
</html>
 
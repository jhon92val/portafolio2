<!DOCTYPE html>
<html lang="es">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Jesús Konde - @yield('titulo' , 'Diseñador')</title>
		<!-- Favicons-->
		<link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}">
		<link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon.png')}}">
		<link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/images/apple-touch-icon-72x72.png')}}">
		<link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/images/apple-touch-icon-114x114.png')}}">
		<!-- Fuentes Web-->
		<link href="https://fonts.googleapis.com/css?family=Lora|Montserrat:400,500,600,700|Open+Sans:400,400i,700" rel="stylesheet">
		<!-- Bootstrap core CSS-->
		<link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
		<!-- Fuentes de Iconos-->
		<link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/et-line.css')}}" rel="stylesheet">
		<!-- Plugins-->
		<link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/magnific-popup.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/vertical.min.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
		<!-- Template core CSS-->
		<link href="{{asset('assets/css/template.css')}}" rel="stylesheet">
	</head>
	<body>

		<!-- Preloader-->
		<div class="page-loader">
			<div class="cssload-container">
				<div class="cssload-whirlpool"></div>
			</div>
		</div>
		<!-- Preloader end-->

		<!-- Barra de Menú-->

		@include('layouts.menu')

		<!-- Fin Barra de Menú-->

		<!-- Wrapper-->
<div class="wrapper">
	
	@yield('cabecera')

	@yield('contenido')



	@include('layouts.footer')
</div>
		<!-- Wrapper end-->

		<!-- Scripts-->
		<script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
		<!--<script src="../../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>-->
		<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/bootstrap/notify/bootstrap-notify.js')}}"></script>
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA0rANX07hh6ASNKdBr4mZH0KZSqbHYc3Q"></script>
		<script src="{{asset('assets/js/plugins.min.js')}}"></script>
		<script src="{{asset('assets/js/custom.min.js')}}"></script>
	</body>
</html>
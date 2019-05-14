<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	@yield('title')

	<link href="{{asset('Template/img/favicon.144x144.png')}}" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="{{asset('Template/img/favicon.114x114.png')}}" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="{{asset('Template/img/favicon.72x72.png')}}" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="{{asset('Template/img/favicon.57x57.png')}}" rel="apple-touch-icon" type="image/png">
	<link href="{{asset('Template/img/favicon.png')}}" rel="icon" type="image/png">
	<link href="{{asset('Template/img/favicon.ico')}}" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
  <link rel="stylesheet" href="{{asset('Template/css/lib/font-awesome/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('Template/css/main.css')}}">
	<link rel="stylesheet" href="{{asset('Template/css/tablas.css')}}">
	<link rel="stylesheet" href="{{asset('Template/css/lib/datatables-net/datatables.min.css')}}">
	<link rel="stylesheet" href="{{asset('Template/css/lib/fullcalendar/fullcalendar.min.css')}}">
	<link rel="stylesheet" href="{{asset('Template/css/lib/bootstrap-sweetalert/sweetalert.css')}}"/>
	<link rel="stylesheet" href="{{asset('Template/css/lib/clockpicker/bootstrap-clockpicker.min.css')}}"/>
    @yield('css')
</head>
@yield('popUp')



<body class="with-side-menu dark-theme dark-theme-green">
	<header class="site-header">
	    <div class="container-fluid">
	        <a onclick="cambiarPagina('/home')" class="site-logo-text">Menu principal</a>
	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>
	        <div class="site-header-content">
	            <div class="site-header-content-in">
	                <div class="site-header-shown">

										<div class="dropdown user-menu">
												<button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<img src="{{asset('Template/img/avatar-2-64.png')}}" alt="">
												</button>
												<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
														<a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>Perfil</a>
														<a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-screenshot"></span>Holi</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-log-out"></span>Salir</a>
												</div>
										</div>
	                </div><!--.site-header-shown-->

	                <div class="mobile-menu-right-overlay"></div>
	                <div class="site-header-collapsed">
	                    <div class="site-header-collapsed-in">
	                        <div class="site-header-search-container">
	                            <form class="site-header-search">
	                                <input type="text" placeholder="Search"/>
	                                <button type="submit">
	                                    <span class="font-icon-search"></span>
	                                </button>
	                                <div class="overlay"></div>
	                            </form>
	                        </div>
	                    </div><!--.site-header-collapsed-in-->
	                </div><!--.site-header-collapsed-->
	            </div><!--site-header-content-in-->
	        </div><!--.site-header-content-->
	    </div><!--.container-fluid-->
	</header><!--.site-header-->

	<div class="mobile-menu-left-overlay"></div>
	<nav class="side-menu">
	    <div class="side-menu-avatar">
	        <div class="avatar-preview avatar-preview-100">
	            <img src="{{asset('Template/img/avatar-1-256.png')}}" alt="">
	        </div>
	    </div>

	    <ul class="side-menu-list">
				<li class="blue">
						<a onclick="cambiarPagina('/tabla')">
								<i class="font-icon font-icon-chart-2"></i>
								<span class="lsl">Alta de prácticas escolares</span>
						</a>
				</li>

	        <li class="brown">
	            <a onclick="cambiarPagina('/nomina')">
	                <i class="font-icon font-icon-chart"></i>
	                <span class="lbl">Captura de nominas</span>
	            </a>
	        </li>

			<li class="green">
	            <a onclick="cambiarPagina('/informes')">
	                <i class="font-icon font-icon-tablet"></i>
					<span class="lbl">Captura de informes académicos</span>
	            </a>
	        </li>

					<li class="red">
						 <a href="#">
								 <i class="font-icon font-icon-mail"></i>
								 <span class="lbl">Mandar SMS y Correos</span>
						 </a>
				 </li>
					<li class="gold">
	            <a href="#">
	                <i class="font-icon font-icon-notebook"></i>
	                <span class="lbl">Imprimir reportes</span>
	            </a>
	        </li>
					<li class="blue">
	            <a href="#catalogos" data-toggle="collapse">
	                <i class="font-icon font-icon-widget"></i>
										<span class="lbl">Catálogos</span>
							</a>
							<div class="collapse" id="catalogos">
								<div class="list-group">
									<a onclick="cambiarPagina('/catalogos/plantel')" class="list-group-item list-group-item-action">Programa Académico</a>
									<a onclick="cambiarPagina('/catalogos/semestre')" class="list-group-item list-group-item-action">Semestre</a>
									<a onclick="cambiarPagina('/catalogos/nivel')" class="list-group-item list-group-item-action">Nivel</a>
									<a onclick="cambiarPagina('/catalogos/grupo')" class="list-group-item list-group-item-action">Grupo</a>
									<a onclick="cambiarPagina('/catalogos/tipo_practica')" class="list-group-item list-group-item-action">Tipo de práctica</a>
									<a onclick="cambiarPagina('/catalogos/entidad_federativa')" class="list-group-item list-group-item-action">Entidad federativa</a>
									<a onclick="cambiarPagina('/catalogos/unidad_aprendizaje')" class="list-group-item list-group-item-action">Unidad de aprendizaje</a>
									<a onclick="cambiarPagina('/catalogos/profesor')" class="list-group-item list-group-item-action">Profesor</a>
								</div>
							</div>
	        </li>
					<li class="purple">
	            <a onclick="cambiarPagina('/configuracion');">
	                <i class="font-icon font-icon-cogwheel"></i>
	                <span class="lbl">Configuraciones</span>
	            </a>
	        </li>
	    </ul>
	</nav><!--.side-menu-->


    @yield('content')

</body>

<script src="{{asset('Template/js/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('Template/js/lib/tether/tether.min.js')}}"></script>
<script src="{{asset('Template/js/lib/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('Template/js/lib/datatables-net/datatables.min.js')}}"></script>
<script src="{{asset('Template/js/lib/moment/moment.min.js')}}"></script>
<script src="{{asset('Template/js/lib/fullcalendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('Template/js/plugins.js')}}"></script>
<script src="{{asset('Template/js/app.js')}}"></script>
<script src="{{asset('Template/js/spa.js')}}"></script>

@yield('scripts')

</html>

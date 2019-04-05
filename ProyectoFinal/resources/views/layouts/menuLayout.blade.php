<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	@yield('title')

	<link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="img/favicon.png" rel="icon" type="image/png">
	<link href="img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    <link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">

    @yield('css')
</head>
@yield('popUp')

<body class="with-side-menu dark-theme dark-theme-blue">

	<header class="site-header">
	    <div class="container-fluid">
	        <a href="#" class="site-logo-text">Menu principal</a>
	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>
	        <div class="site-header-content">
	            <div class="site-header-content-in">
	                <div class="site-header-shown">

	                    <div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <img src="img/avatar-2-64.png" alt="">
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
	            <img src="img/avatar-1-256.png" alt="">
	        </div>
	    </div>
	    <ul class="side-menu-list">
	        <li class="brown">
	            <a href="tabla">
	                <i class="font-icon font-icon-chart-2"></i>
	                <span class="lbl">Busca docente/administrador</span>
	            </a>
	        </li>
	        <li class="green">
	            <a href="#">
	                <i class="font-icon font-icon-mail"></i>
	                <span class="lbl">Buscar cursos capturados</span>
	            </a>
	        </li>
	        <li class="gold">
	            <a href="#">
	                <i class="font-icon font-icon-zigzag"></i>
	                <span class="lbl">Registrar Docentes/Administrativos</span>
	            </a>
	        </li>
					<li class="purple">
	            <a href="#">
	                <i class="font-icon font-icon-cogwheel"></i>
	                <span class="lbl">Situación laboral</span>
	            </a>
	        </li>
					<li class="purple">
	            <a href="#">
	                <i class="font-icon font-icon-cogwheel"></i>
	                <span class="lbl">Listado general del escalfón</span>
	            </a>
	        </li>
					<li class="purple">
	            <a href="#">
	                <i class="font-icon font-icon-cogwheel"></i>
	                <span class="lbl">Imprimir listado basificados</span>
	            </a>
	        </li>
					<li class="purple">
	            <a href="#">
	                <i class="font-icon font-icon-cogwheel"></i>
	                <span class="lbl">Imprimir listado Homologados</span>
	            </a>
	        </li>
					<li class="purple">
	            <a href="#">
	                <i class="font-icon font-icon-cogwheel"></i>
	                <span class="lbl">Integrantes de la comisión</span>
	            </a>
	        </li>
					<li class="blue with-sub">
							<span>
								<i class="font-icon font-icon-widget"></i>
								<span class="lbl">Catálogos</span>
							</span>
							<ul>
									<li><a href="#"><span class="lbl">Ciclo escolar</span></a></li>
									<li><a href="#"><span class="lbl">Ciclo escolar vigente</span></a></li>
									<li><a href="#"><span class="lbl">Estatus del trabajador</span></a></li>
									<li><a href="#"><span class="lbl">Fecha de cálculo de antigüedad</span></a></li>
									<li><a href="#"><span class="lbl">Tipos de homologación</span></a></li>
									<li><a href="#"><span class="lbl">Planteles/Centros</span></a></li>
							</ul>
	        </li>


	    </ul>
	</nav><!--.side-menu-->


                @yield('content')

</body>

<script src="js/lib/jquery/jquery.min.js"></script>
<script src="js/lib/tether/tether.min.js"></script>
<script src="js/lib/bootstrap/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/app.js"></script>

@yield('scripts')

</html>

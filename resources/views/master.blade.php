 @guest redirect()->route('landing.landing') @else
                            
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield ('titulo')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
  @yield('scripts')
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <script src="https://use.fontawesome.com/99347ac47f.js"></script>
    <!-- Font Icons CSS-->
    <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page home-page">
      <!-- Main Navbar-->
      <header class="header">

                           
                        
                                   

        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="/index" class="navbar-brand">
                  <div class="brand-text brand-big hidden-lg-down"><span>Unillanos </span><strong>Epi Sanjuanito</strong></div>
                  <div class="brand-text brand-small"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>

                        <!-- Logout    -->
                <li class="nav-item"><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      
      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="{{asset('img/logounillanos.png')}}" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">{{ Auth::user()->name }}</h1>
              <p>Unillanos</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Menu</span>
          <ul class="list-unstyled">
            <li class="active"> <a href="/index"><i class="icon-home"></i>Inicio</a></li>
            <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-screen"></i>Formulario </a>
              <ul id="dashvariants" class="collapse list-unstyled">
                <li><a href="{{route('formulario.index')}}">General</a></li>
                <li><a href="{{route('formulario.cultivos')}}">Actividad Agricola</a></li>
              <li><a href="{{route('formulario.pecuario')}}">Actividad Pecuaria</a></li>
              <li><a href="{{route('formulario.forestal')}}">Plantaciones Forestales</a></li>
                <li><a href="{{route('anexos')}}">Anexos</a></li>
              </ul>
            </li>
             <li><a href="{{route('preguntas.index')}}" > <i class="icon-padnote"></i>Preguntas </a></li>
             <li><a href="{{route('respuestas.index')}}" > <i class="fa fa-bar-chart" aria-hidden="true"></i>Respuestas</a></li>
              <li><a href="/mapa" > <i class="fa fa-globe" aria-hidden="true"></i>Mapa</a></li>
               
           
            <li> <a href="{{route('usuarios.index')}}"> <i class="icon-user"></i>Usuarios </a></li>
            
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">@yield('dashboard')</h2>
            </div>
          </header>
          @yield('contenido')

            <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Epi Sanjuanito &copy; 2017-2019</p>
                </div>
                <div class="col-sm-6 text-right">
                 	&copy; Desarrollado por <a href="http://paginaswebvillavicencio.tk">Anderson Martinez</a>, dieño de <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
  
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{asset('js/tether.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.cookie.js')}}"> </script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="{{asset('js/charts-home.js')}}"></script>
    <script src="{{asset('js/front.js')}}"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>
 @endguest
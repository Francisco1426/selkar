<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Grupo selkar</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icons -->
<link rel="icon" href="{{asset('assets/img/fevicon/fevicon.png" type="image/gif')}}" />
<!-- bootstrap css -->
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
<!-- Site css -->
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
<!-- responsive css -->
<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
<!-- colors css -->
<link rel="stylesheet" href="{{asset('assets/css/colors1.css')}}" />
<!-- custom css -->
<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" />
<!-- wow Animation css -->
<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" />
<!-- revolution slider css -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/revolution/css/settings.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/revolution/css/layers.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/revolution/css/navigation.css')}}" />
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<!-- header -->
<header id="default_header" class="header_style_1">
  <!-- header top -->
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="full">
            <div class="topbar-left">
              <ul class="list-inline">
                <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight">Juan Aldama S/N entre Juarez e Hidalgo</span> </li>
                <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="gruposelkar@gmail.com">gruposelkar@gmail.com</a></span> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 right_section_header_top">
          <div class="float-left">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://es-la.facebook.com/grupoSelkar" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header top -->
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="#"><img src="{{asset('assets/img/logos/logo.jpg')}}" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li> <a href="{{route ('inicio') }}">Inicio</a>
                </li>
                <li><a href="{{route ('sobrenosotros') }}">Acerca de </a></li>
                <li> <a href="{{route ('galeria') }}">Galeria</a>
                </li>
                <li> <a href="{{route ('contacto') }}">Contáctenos</a>
                </li>
              </ul>
            </div>
            <div class="search_icon">
              <ul>
                <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>
<div id = "contenido">
@yield('contenido')    
<div>
<!-- end header -->
<!-- section -->
</html>

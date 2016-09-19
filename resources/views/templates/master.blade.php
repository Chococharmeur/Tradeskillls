<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>@yield('titre')</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/css/material-kit.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('assets/css/material-bootstrap-wizard.css')}}" rel="stylesheet" />
    
    <!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    
</head>
<style>
    body {
      /*min-height: 2000px;*/
      padding-top: 150px;
    }
</style>
<body style="background-image: url('{{URL::asset('assets/img/wizard-profile.jpg')}}')">

<!-- Navbar will come here -->
<!-- Fixed navbar -->
        <nav class="navbar navbar-info navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">TRADESKILLS</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Accueil</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Service <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Normal</a></li>
                    <li><a href="#">Urgent</a></li>
                  </ul>
                </li>
                <li><a href="#">Profil</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Aide</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Inscription</a></li>
                <li><a href="#">Connexion</a></li>
                <li class="active"><a href="#"><img src="{{URL::asset('assets/img/searchicon.png')}}"> <span class="sr-only">(current)</span></a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
<!-- end navbar -->

<div class="wrapper">
<!--
	<div class="header">

	</div>
-->
	<!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
<!--	<div class="main main-raised">-->
		<div class="container">

			<!-- here you can add your content -->
            @yield('contenu')
			
		</div>
<!--	</div>-->
</div>

</body>

	<!--   Core JS Files   -->
	<script src="{{URL::asset('assets/js/jquery.min.js')}}" type="text/javascript"></script>
	<script src="{{URL::asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{URL::asset('assets/js/material.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.bootstrap.js')}}" type="text/javascript"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="{{URL::asset('assets/js/nouislider.min.js')}}" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="{{URL::asset('assets/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="{{URL::asset('assets/js/material-kit.js')}}" type="text/javascript"></script>
    
    <!--  Plugin for the Wizard -->
	<script src="{{URL::asset('assets/js/material-bootstrap-wizard.js')}}"></script>
    
    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="{{URL::asset('assets/js/jquery.validate.min.js')}}"></script>

</html>
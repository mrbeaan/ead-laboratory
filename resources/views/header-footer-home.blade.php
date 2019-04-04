<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EAD-Laboratory</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">


  <!-- Favicons -->
  <link href="{{asset('img/fav.png')}}" rel="icon">
  <!-- <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="{{asset('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i')}}" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- <link href="{{asset('css/style.css')}}" rel="stylesheet"> -->


  <!-- Libraries CSS Files -->
  <link href="{{asset('lib/animate/animate.css')}}" rel="stylesheet">
  <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/style-card-praktikum.scss')}}" rel="stylesheet">
  <!-- =======================================================
    Theme Name: Avilon
    Theme URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->



</head>

<body>



  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left row align-items-center">
        <a href="/"><img src="/img/icon_logo.png"/></a>
        <h1><a href="/" class="scrollto ml-2">EAD-Lab</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="/">Home</a></li>
          <li class="menu-has-children"><a href="/aboutus">About us</a>
            <ul>
              <li><a href="/aboutus/assistant">Assistant</a></li>
              <li class="menu-has-children"><a href="/aboutus/alumnus">Alumnus</a>
                <ul>
                  <li><a href="#">A-2012</a></li>
                  <li><a href="#">A-2013</a></li>
                  <li><a href="#">A-2014</a></li>
                  <li><a href="#">A-2015</a></li>
                  <li><a href="#">A-2016</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="menu-has-children"><a href="/product">Product</a>
            <ul>
              <li><a href="/product/template">Template</a></li>
            </ul>
          </li>
          <li class="menu"><a href="/event">Event</a></li>
          <li class="menu"><a href="/gallery">Gallery</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

@yield('content')


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright<strong> EAD-Laboratory</strong>
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Avilon
            -->
             All Rights Reserved
            <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="/" class="scrollto">Home</a>
            <a href="aboutus" class="scrollto">About</a>
            <!-- <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a> -->
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- #footer -->



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('lib/magnific-popup/magnific-popup.min.js')}}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{asset('contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('js/main.js')}}"></script>


</body>
</html>

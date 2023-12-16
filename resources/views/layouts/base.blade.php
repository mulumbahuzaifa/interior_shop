<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Bits Interior Design</title>

<!-- Fav Icon -->
<link rel="shortcut icon" href="{{ asset('images/BitsLogo.png') }}">

<!-- Bootstrap -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
<link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('rs-plugin/css/settings.css') }}">

<link rel="stylesheet" href="{{ asset('css/plugins/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/plugins/glightbox.min.css') }}">

<link href="{{ asset('css/style2.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
@livewireStyles
</head>
<body>

<!--header start-->
<div class="header-wrap">
  <div class="container">
    <div class="navigationwrape">
      <div class="navbar navbar-default" role="navigation">
        <div class="row">
          <div class="col-md-3 col-sm-12">
            <div class="logo"><a href="/"><img src="{{ asset('images/BitsLogo.png') }}" alt="" width="70"></a></div>
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
          </div>

          <div class="col-md-8 col-sm-10">
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li> <a href="/"> Home </a></li>
                <li> <a href="{{ route('about') }}"> About Us </a></li>
                <li> <a href="{{ route('services') }}"> Services </a></li>
                <li> <a href="{{ route('products') }}"> Products </a></li>
                <li> <a href="{{ route('blogs') }}"> Blogs </a></li>
                <li> <a href="{{ route('contact') }}"> Contact us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-1 col-sm-2 pull-right">

            <div class="search-bar">
              <button type="button" class="search" data-toggle="dropdown"> <i class="fa fa-search" aria-hidden="true"></i> </button>
              <div class="dropdown-menu">
                <input type="text" class="form-control" placeholder="Search">
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!--header end-->

{{ $slot }}

<!--Footer Start-->
<div class="footer-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="footer-logo"><a href="index.html"><img src="{{ asset('images/BitsLogo.png') }}" alt="" width="80"></a></div>
        <p>Bits interiors is an interior design company that designs, creates and transforms interor spaces with more experince in elegant and fancy designs... <a href="{{ route('about') }}">Read More</a> </p>
        <div class="social"> <a href="#." target="_blank"> <i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a> </div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-12">
        <h3>Quick Links</h3>
        <ul class="footer-links">
          <li> <a href="/"> Home </a></li>
          <li> <a href="{{ route('about') }}"> About Us </a></li>
          <li> <a href="{{ route('services') }}"> Services </a></li>
          <li> <a href="{{ route('blogs') }}"> Blogs </a></li>
          <li> <a href="{{ route('contact') }}"> Contact us</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-12">
        <h3>Contact Info</h3>
        <div class="footer-address">1234 Lorem Road, ISpum A Kennesaw, GA 1234</div>
        <div class="call-us"> <a href="#">+(256) 759-104-567</a></div>
        <div class="fax"> <a href="#">+(256) 751-900-666</a></div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-12">
        <h3>Instragram</h3>
        <ul class="instragram">
          <li><a href="#"><img src="{{ asset('images/insta01.jpg') }}" alt=""></a></li>
          <li><a href="#"><img src="{{ asset('images/insta02.jpg') }}" alt=""></a></li>
          <li><a href="#"><img src="{{ asset('images/insta03.jpg') }}" alt=""></a></li>
          <li><a href="#"><img src="{{ asset('images/insta04.jpg') }}" alt=""></a></li>
          <li><a href="#"><img src="{{ asset('images/insta05.jpg') }}" alt=""></a></li>
          <li><a href="#"><img src="{{ asset('images/insta06.jpg') }}" alt=""></a></li>
        </ul>
      </div>
    </div>
    <div class="footerWrp">
      <div class="copyright">© 2022 company name here | All Rights Reserved</div>
    </div>
  </div>
</div>
<!--Footer Start-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- general script file -->
<script src="{{ asset('js/owl.carousel.js') }}"></script>

<!-- Counter -->
<script src="{{ asset('js/counter.js') }}"></script>

<script src="{{ asset('js/plugins/swiper-bundle.min.js') }}" defer="defer"></script>
<script src="{{ asset('js/plugins/glightbox.min.js') }}" defer="defer"></script>

<!-- Customscript js -->
<script src="{{ asset('js/script2.js') }}" defer="defer"></script>

<!-- general script file -->
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
@livewireScripts
</body>
</html>

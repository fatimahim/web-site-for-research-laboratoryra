<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>laboratoire : Systèmes Informatiques et Vision </title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

  <link rel="stylesheet" href="../assets/css/theme.css">



   
  
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
		  <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> 0528220957</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> Chef.laboratoir@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
	  <a class="navbar-brand" href="#"><span class="text-primary">Lab</span>SIV</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
          <a class="nav-link" href="\">Page d'acceuil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('more.index')}}">Publication</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('projet.index')}}">Projets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('doct')}}">Membres</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/Evenement">Evenements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('equipe.index')}}">Equipes</a>
            </li>
            <li class="nav-item"> 
              <a class="nav-link" href="/contact">Contactez-nous</a>
            </li>
            <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Connexion</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription doctorant') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('registerprof') }}">{{ __('Inscription prof') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Déconnecter') }}</a>
                                </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                
                            </li>
                        @endguest
                    </ul>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="\">page d'acceuil</a></li>
            <li class="breadcrumb-item active" aria-current="page">les événements</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Laboratoire des Systèmes Informatiques et Vision</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div>


  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Les évenements</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              
              <a href="blog-details.html" class="post-thumb">
              <img src="../assets/img/blog/blog_3.jpg" alt="">
              </a>
            </div>
            <div class="body">
            <h5 class="post-title"><a href="/Evenementdetail">{{$events[2]->title}}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  
                </div>
                <span class="mai-time"></span> commencer le {{$events[2]->start}} Jusqu'ua le {{$events[2]->end}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
               
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/blog/dpr_awb_fondation_imagine_ta_ville_linkedin_sept.png" alt="">
              </a>
            </div>
            <div class="body">
            <h5 class="post-title"><a href="/Evenementdetail">{{$events[1]->title}}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  
                </div>
                <span class="mai-time"></span> commencer le {{$events[1]->start}} Jusqu'ua le {{$events[1]->end}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              
              <a href="/Evenementdetail" class="post-thumb">
              <img src="../assets/img/blog/blog_1.jpg" alt="">
              </a>
            </div>
            <div class="body">
            <h5 class="post-title"><a href="/Evenementdetail">{{$events[0]->title}}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  
                </div>
                <span class="mai-time"></span> commencer le {{$events[0]->start}} Jusqu'ua le {{$events[0]->end}}
            </div>
          </div>
        </div>
</div>
        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="/Evenementdetail" class="btn btn-primary">Voir Plus</a>
        </div>

      </div>
    </div>
  </div>
  <script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
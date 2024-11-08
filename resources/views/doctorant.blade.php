<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />


  <title>laboratoire : Systèmes Informatiques et Vision </title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
  <style>
    .card-doctor .header img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
    }
  </style>
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
            <li class="nav-item active">
              <a class="nav-link" href="{{route('doct')}}"> Membres</a>
            </li>
            <li class="nav-item">
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
            <li class="breadcrumb-item active" aria-current="page">les Membres</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Laboratoire des Systèmes Informatiques et Vision</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->
  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Les Membres</h1>
      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
           @foreach($users as $user)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('/images/profs/'.$user->image)}}" >
              <div class="meta" style="display: flex; justify-content: center; align-items: center;">
                      <a href="{{ route('profile.show', $user->id) }}">
                          <span class="fa-solid fa-user"></span>
                       </a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$user->nom}} {{$user->Prénom}}</p>
              @if($user->type=='doctorant')
              <span class="text-sm text-grey">Doctorant</span>
              @endif
              @if($user->type=='cheflabo')
              <span class="text-sm text-grey">Chef de laboratoire</span>
              @endif
              @if($user->type=='chefEquipe')
              <span class="text-sm text-grey">Chef d'{{$user->Equipe}}</span>
              @endif
              @if($user->type=='Prof')
              <span class="text-sm text-grey">Professeur</span>
              @endif
              @if($user->type=='adjoint')
              <span class="text-sm text-grey">Adjoint</span>
              @endif
            </div>
          </div>
        </div>
        @endforeach
        
        
      </div>
    </div>
  </div>

 

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
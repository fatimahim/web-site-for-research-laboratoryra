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
            <li class="nav-item active">
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

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead"> Systèmes Informatiques et Vision</span>
        <h1 class="display-4">Laboratoire  de Recherche</h1>
       <!-- page present tout les partie de labo etablissmant.....-->
       @guest
                        @if (Route::has('login'))
        <a href="{{ route('login') }}" class="btn btn-primary">Connectez-vous</a>
        @endif
        @else
        <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Déconnecter') }}</a>
        @endguest
      </div>
    </div>
  </div>


  
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
       
            <h1> Laboratoire et structures de recherche</h1>
            <p class="text-grey mb-4">Le Laboratoire des Systèmes Informatiques et Vision (LabSIV)  de Faculté des Sciences Agadir mène des recherches dans les domaines des sciences et techniques, avec des disciplines spécifiques telles que l'Analyse et le Traitement d'images et vidéo, la Vision par ordinateur, la Vision Artificielle, la Sécurité des systèmes informatiques, le Datawarehouse, la Technologie des Systèmes Répartis, l'E-learning, l'E-Government, l'Informatique pervasive, les Réseaux sans fil, le Big Data, la Data science, l'Apprentissage Automatique, le Machine Learning, le Deep Learning, les Images Omnidirectionnelles et la Biométrie. Ces domaines de recherche sont variés et couvrent de nombreux aspects de la technologie informatique et de la vision par ordinateur.<br> Ce Laboratoire  est composé de 7 Équipes </p>
            <a href="about.html" class="btn btn-primary">Voir Équipes</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            
          
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  @include('users.doctorant')


   <!-- .page-section -->
@include('users.Evenement')
   <!-- .page-section -->
@include('users.contact')
  <!-- .banner-home -->

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
       
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Présentation du laboratoire</h5>
          <ul class="footer-menu">
            <li><a href="#">ÉTABLISSEMENT : Faculté des Sciences - Agadir</a></li>
            <li><a href="#">DOMAINE : Sciences de la Chimie </a></li>
            <li><a href="#">CED : Centre des Etudes Doctorales Ibn Zohr</a></li>
          </ul>
        </div>
        
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">Adresse :BP 8106 - Cité Dakhla</p>
          <a href="#" class="footer-link">0528220957</a>
          <a href="#" class="footer-link">Chef.laboratoir@gmail.com</a>

          <h5 class="mt-3">Réseaux sociaux</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      

    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>
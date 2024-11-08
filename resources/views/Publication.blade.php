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

  <link rel="stylesheet" href="{{asset('cssfile/listeprof3.css')}}">
  <style>
    .center-table {
      display: flex;
      justify-content: center;
    }
    h1.text-center {
      margin-bottom: 35px;
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
              <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
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

        <form action="#">
          <div class="input-group input-navbar">
            
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
              <a class="nav-link" href="\">Page d'acceuil</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link " href="{{route('more.index')}}">Publication</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('projet.index')}}">Projets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/membres">  Membres</a>
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
            <li class="breadcrumb-item"><a href="\">Page d'acceuil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Publication</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Laboratoire des Systèmes Informatiques et Vision</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  </div>
  <div class="page-section">
    <div class="container"><br>
      <h1 class="text-center mb-5 wow fadeInUp">Les publications</h1>
      <div class="center-table">

      <table>
            <tr id="items">
              <th>Photo D'auteur :</th>
              <th>Nom</th>
               <th>Titre</th>
                <th>Anneé de publication</th>
                <th>Auteurs</th>
                <th>Journal</th>
				
                </tr>
                @if(count($pubs)>0)
        
        @foreach($pubs as $projet)
                    <tr>
                    <td><img src="{{asset('/images/profs/'.$projet->image)}}" alt="Image" class="img-fluid rounded-start" style="border-radius: 50%;border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
"></td>
                        <td>{{$projet->nom}}</td>
                        <td>{{$projet->titre}}</td>
                        <td>{{$projet->anne}}</td>
                        <td>{{$projet->auteur1}} <br> {{$projet->auteur2}}</td>
                        <td>{{$projet->journal}}</td>
                        
                        <!--Nous alons mettre l'id de chaque employé dans ce lien -->
                        
                    </tr>
      @endforeach
       
       @else
       <tr>
        <td colspan="3">Aucune Publication Pour le moment</td>
     </tr>
    @endif
         
        </table>
   
        </div>
</div>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="{{asset('cssfile/inscription.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>

	<link rel="stylesheet" href="../assets/css/maicons.css">

<link rel="stylesheet" href="../assets/css/bootstrap.css">

<link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

<link rel="stylesheet" href="../assets/vendor/animate/animate.css">

<link rel="stylesheet" href="../assets/css/theme.css">

</head> 
<body>
<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Lab</span>SIV</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="\">Page d'acceuil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('more.index')}}">Publication</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('projet.index')}}">Projets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/doctorant">  Doctorants</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Evenement">Evenements</a>
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
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription doctorant') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('registerprof') }}">{{ __('Inscription prof') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
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
	<img class="wave" src="{{asset('images/wave.png')}}">
	<div class="containerr">
  
		<div class="img">
			<!-- <img src="{{asset('images/other/logotry.jpg')}}">-->
			 
		</div>
		<div class="login-content">
			<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
      @csrf 
                    <input id="Grade" type="hidden" name="Grade" value="no" >
                    <input id="Equipe" class="form-control @error('Grade') is-invalid @enderror" type="hidden" name="Equipe" value="no" >
                    <input type="hidden" name=" co-Encadrant" value="NULL">
                    @error('Grade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('Equipe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <input type="hidden" name="type" value="0" >
				<!-- <img src="{{asset('images/other/logotry.jpg')}}">-->
				<h1 class="title">Inscription Doctorant</h1>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nom</h5>
                    <input   id="nom" type="text" class="input form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                    @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  

           		</div>
                   <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Prénom</h5>
                    <input   id="Prénom" type="text" class="input form-control @error('Prénom') is-invalid @enderror" name="Prénom" value="{{ old('Prénom') }}" required autocomplete="Prénom" autofocus>
                    @error('Prénom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
           		</div>
                   <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Encadrant</h5>
                    <input  id="Encadrant" type="text" class="input form-control @error('Encadrant') is-invalid @enderror" name="Encadrant" value="{{ old('Encadrant') }}" required autocomplete="Encadrant">

                    @error('Encadrant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
           		</div>
                
                   <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>N° de télephone</h5>
                    <input  id="tél" type="text " class="input form-control @error('tél') is-invalid @enderror" name="tél" value="{{ old('tél') }}" required autocomplete="tél">
                    @error('tél')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  

           		</div>
                   <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
                    <input id="email" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  

           		</div>
                   <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Cne</h5>
                    <input   id="Cne" type="text" class="input form-control @error('Cne') is-invalid @enderror" name="Cne" value="{{ old('Cne') }}" required autocomplete="Cne">
                    @error('Cne')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  

           		</div>
                   <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Cin</h5>
                    <input  id="Cin" type="text" class="input form-control @error('Cin') is-invalid @enderror" name="Cin" value="{{ old('Cin') }}" required autocomplete="Cin">
                    @error('Cin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  

           		</div>
                  
                   
           		   <div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Mot de passe</h5>
           		    	<input id="password" type="password" class="input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                     @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            	   </div>
            	</div>
                  
                
           		
                   <div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Confirmé votre mot de passe</h5>
                    <input   id="password-confirm" type="password" class="input form-control" name="password_confirmation" required autocomplete="new-password">
                   
                  </div>
                  

           		</div>
                   
                   <div class="input-div one">
           		   <div class="i">
                      <i class="fa fa-file-image-o"></i>
           		   </div>
           		   <div class="div">
           		   	
                    <input   id="image" type="file" class="input form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" autocomplete="image" autofocus>
                   
                  </div>
                  

           		</div>
           		
                  
           		   <div class="div">
           		   	 <select  id="Etablissement" name="Etablissement" class="form-control @error('Etablissement') is-invalid @enderror"  value="{{ old('Etablissement') }}"  required autocomplete="Etablissement" autofocus >
                        <option value="Etablissement1">Etablissement1</option>
                        <option value="Etablissement2">Etablissement2</option>
                        <option value="Etablissement3">Etablissement3</option>
                        <option value="Etablissement4">Etablissement4</option>
                        <option value="Etablissement5">Etablissement5</option>
                     </select> <br>
                     @error('Etablissement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
              @if (Route::has('password.request'))
            	<a href="{{ route('password.request') }}">mot de passe oublié?</a>
              @endif
              <button type="submit" class="btn btn-primary">
                                    {{ __("S'inscrire") }}
                                </button>
             
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('js/main2.js')}}"></script>
</body>
</html>

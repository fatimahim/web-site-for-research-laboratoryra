@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chef Équipe</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('cssfile/espace.css')}}">
	<link rel="stylesheet" href="{{asset('cssfile/listeprof2.css')}}">
	<link rel="stylesheet" href="{{asset('cssfile/chat.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

  

</head>
<body>
	<section class="py-5 my-5">
		<div class="container">
			<h1 class="mb-5">Paramètres de Compte</h1>
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3"> 
						<img src="{{asset('/images/profs/'.Auth::user()->image)}}" alt="Image" class="shadow">
						</div>
						<h4 class="text-center">{{Auth::user()->nom}} {{Auth::user()->Prénom}}</h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link " id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
						<i class="fa fa-home text-center mr-1"></i> 
							Profil
						</a>
						
						
						
						
						
						
						<a class="nav-link" id="event-tab" data-toggle="pill" href="#event" role="tab" aria-controls="event" aria-selected="false">
						<img src="{{asset('images/espace/list.png')}}">
							Les Evenement
						</a>
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
					<h3 class="mb-4">Paramètres de Compte</h3>
						<form action="{{route('prof.update',Auth::user()->id)}}" method="post">
                            @csrf
                           @method('PUT')
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Prénom</label>
								  	<input type="text" class="form-control"  name="Prénom" value="{{Auth::user()->Prénom}} ">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Nom</label>
								  	<input type="text" class="form-control" name="nom" value="{{Auth::user()->nom}}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Email</label>
								  	<input type="email" class="form-control" name="email" value="{{Auth::user()->email}}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>N° de télephone</label>
								  	<input type="Number" class="form-control" name="tél" value="{{Auth::user()->tél}}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Grade</label>
								  	<input type="text" class="form-control" name="Grade" value="{{Auth::user()->Grade}}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Equipe</label>
								  	<input type="text" class="form-control" name="Equipe" value="{{Auth::user()->Equipe}}">
								</div>
							</div>
							
						</div>
						<div>
						<button class="btn btn-primary" type="submit" name="button">Mise a jour</button>
						</form>
						</div>
					</div>
							
					
					
					
					<div class="tab-pane fade" id="event" role="tabpanel" aria-labelledby="event-tab">
						<h3 class="mb-4">Les Évenement </h3>
						
						<a href="{{url('/ajoutevent')}}" class="Btn_add"> <img src="{{asset('images/espace/eye.png')}}"> Voir </a>
        
		<table>
		  <tr id="items">
			  <th>Nom </th>
			  <th>commencer à</th>
			  <th>fini à</th>
			  
		  </tr>
		  @foreach($events as $event)
					  <tr>
						  <td>{{$event->title}}</td>
						  <td>{{$event->start}}</td>
						  <td>{{$event->end}}</td>
						 
						  <!--Nous alons mettre l'id de chaque employé dans ce lien -->
						 
						 
					  </tr>
	 
		@endforeach
	    
				</table>
	
					</div>
					
						
	
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
					</div> 
				</div>
			</div>
		</div>
	</section>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
@endsection
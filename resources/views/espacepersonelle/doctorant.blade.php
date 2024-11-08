@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Paramètres de compte</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('cssfile/espace.css')}}">
	<link rel="stylesheet" href="{{asset('cssfile/listeprof2.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>



</head>
<body>
	<section class="py-5 my-5">
		<div class="container">
			
			<h1 class="mb-5">Parametres de Compte</h1>
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src="{{asset('/images/profs/'.Auth::user()->image)}}" alt="Image" class="shadow">
						</div> 
						<h4 class="text-center">{{Auth::user()->nom}} {{Auth::user()->Prénom}}</h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
						<i class="fa fa-home text-center mr-1"></i> 
							Profil
						</a>
						
						
						
						
						<a class="nav-link " id="listeprof-tab" data-toggle="pill" href="#listeprof" role="tab" aria-controls="listeprof" aria-selected="false">
							<img src="{{asset('images/espace/list.png')}}">
							List Des Publications
						</a>
						
						
					</div>
				</div>
				
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">Paramètres de Compte</h3>
						<form action="{{route('more.update',Auth::user()->id)}}" method="post">
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
								  	<label>Cne</label>
								  	<input type="text" class="form-control" name="Cne" value="{{Auth::user()->Cne}}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>cin</label>
								  	<input type="text" class="form-control" name="Cin" value="{{Auth::user()->Cin}}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Encadrant</label>
								  	<input type="text" class="form-control" name="Encadrant" value="{{Auth::user()->Encadrant}}">
								</div>
							</div>
							
						</div>
						<div>
						<button class="btn btn-primary" type="submit" name="button">Mise a jour</button>
						</form>
						</div>
					</div>
					
					<div class="tab-pane fade  " id="listeprof" role="tabpanel" aria-labelledby="listeprof-tab">
					<a href="{{url('pub/create')}}" class="Btn_add"> <img src="{{asset('images/espace/plus.png')}}"> Ajouter</a>
        
          <table>
            <tr id="items">
                <th>Titre</th>
                <th>Anneé de publication</th>
                <th>Auteur</th>
                <th>Journal</th>
				
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
			
            @if(count($pubs)>0)
        
            @foreach($pubs as $projet)
			@if(Auth::user()->nom == $projet->nom)
                        <tr>
                            <td>{{$projet->titre}}</td>
                            <td>{{$projet->anne}}</td>
							<td>{{$projet->auteur1}} <br> {{$projet->auteur2}}</td>
                            <td>{{$projet->journal}}</td>
							
                            <!--Nous alons mettre l'id de chaque employé dans ce lien -->
                            <td><a href="{{route('pub.edit',$projet->id)}}"><img src="{{asset('images/espace/pen.png')}}"></a></td>
                            <td>
                                <form action="{{route('pub.destroy',$projet->id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                <button type="submit"><img src="{{asset('images/espace/trash.png')}}"></button>
                                </form>
                            </td>
                        </tr>
            @endif
          @endforeach
           
           @else
           <tr>
            <td colspan="3">Aucune Publication Pour le moment</td>
         </tr>
        @endif
         
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
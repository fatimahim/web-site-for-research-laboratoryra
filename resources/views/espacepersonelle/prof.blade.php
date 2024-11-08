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
					<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
						<i class="fa fa-home text-center mr-1"></i> 
							Profil
						</a>
						
						
						<a class="nav-link " id="listeprof-tab" data-toggle="pill" href="#listeprof" role="tab" aria-controls="listeprof" aria-selected="false">
							<img src="{{asset('images/espace/users.png')}}">
							List des Doctorants
						</a>
						
						<a class="nav-link" id="demandeinscri-tab" data-toggle="pill" href="#demandeinscri" role="tab" aria-controls="demandeinscri" aria-selected="false">
						<img src="{{asset('images/espace/list.png')}}">
							Demande d'inscription
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
					<div class="tab-pane fade " id="listeprof" role="tabpanel" aria-labelledby="listeprof-tab">
					<a href="{{url('doc/create')}}" class="Btn_add"> <img src="{{asset('images/espace/plus.png')}}"> Ajouter</a>
        
          <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Cin</th>
                <th>N° de téléphone</th>
                <th>Cne</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            @foreach($docs as $doc)
			
                        <tr>
                            <td>{{$doc->nom}}</td>
                            <td>{{$doc->prenom}}</td>
							<td>{{$doc->email}}</td>
                            <td>{{$doc->tele}}</td>
							<td>{{$doc->cne}}</td>
                            <td>{{$doc->cin}}</td>
                            <!--Nous alons mettre l'id de chaque employé dans ce lien -->     
							<td><a href="{{route('doc.edit',$doc->id)}}"><img src="{{asset('images/espace/pen.png')}}"></a></td>
                            <td>
                                <form action="{{route('doc.destroy',$doc->id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                <button type="submit"><img src="{{asset('images/espace/trash.png')}}"></button>
                                </form>
                            </td>
                        </tr>
          @endforeach
         
                  </table>
   
					</div>
					
					<div class="tab-pane fade " id="demandeinscri" role="tabpanel" aria-labelledby="demandeinscri-tab">
        
					<p class="Btn_add"> Demandes d'inscription</p>
        
        <table>
            <tr id="items">
			<tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>N° de téléphone</th>
                <th>Cin</th>
                <th>Cne</th>
                <th>Valider</th>
                
            </tr>
                
            </tr>
			@foreach($users as $user)
			@if(Auth::user()->nom==$user->Encadrant)
			@if($user->is_activated==0)
			@if($user->type=='doctorant')
                        <tr>
                            <td>{{$user->nom}}</td>
                            <td>{{$user->Prénom}}</td>
							<td>{{$user->email}}</td>
                            <td>{{$user->tél}}</td>
							<td>{{$user->Cne}}</td>
                            <td>{{$user->Cin}}</td>
                            <!--Nous alons mettre l'id de chaque employé dans ce lien -->

                           
							<td><a href="{{route('envoyer',$user->id)}}">Valider</a></td>
                            
                        </tr>
          @endif
		  @endif
		  @endif
          @endforeach
               
            
      
         
        </table>
   
					</div>
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
					
						<h3 class="mb-4">Paramétres de Mot de pass</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Ancienne mot de passe</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Nouveau mot de pass</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Confirmer nouveau mot de passe</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Modifier</button>
							<button class="btn btn-light">Annuler</button>
						</div>
					</div>
					
							
					
					<div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
						<h3 class="mb-4">Notification </h3>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification1">
								<label class="form-check-label" for="notification1">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum accusantium accusamus, neque cupiditate quis
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification2" >
								<label class="form-check-label" for="notification2">
									hic nesciunt repellat perferendis voluptatum totam porro eligendi.
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification3" >
								<label class="form-check-label" for="notification3">
									commodi fugiat molestiae tempora corporis. Sed dignissimos suscipit
								</label>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Modifier</button>
							<button class="btn btn-light">Annuler</button>
						</div>
					</div>
					
						
					
        
    </section>
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
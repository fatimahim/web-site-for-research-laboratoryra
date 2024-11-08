@extends('layouts.appch')
@section('content')
<!DOCTYPE html>
<html lang="fr">
<head> 
	<meta charset="UTF-8">
	<title>Paramétre de comptes</title>
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
					<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="false">
						<i class="fa fa-home text-center mr-1"></i> 
							Profil
						</a>
						
						
						
						<a class="nav-link " id="listeprof-tab" data-toggle="pill" href="#listeprof" role="tab" aria-controls="listeprof" aria-selected="false">
							<img src="{{asset('images/espace/users.png')}}">
							List des profs
						</a>
						
						<a class="nav-link" id="demandeinscri-tab" data-toggle="pill" href="#demandeinscri" role="tab" aria-controls="demandeinscri" aria-selected="false">
						<img src="{{asset('images/espace/list.png')}}">
							Demande d'inscription
						</a>
						<a class="nav-link" id="demandevalid-tab" data-toggle="pill" href="#demandevalid" role="tab" aria-controls="demandevalid" aria-selected="false">
						<img src="{{asset('images/espace/evenement.png')}}">
							Les événements
						</a>
						<a class="nav-link" id="listprojet-tab" data-toggle="pill" href="#listprojet" role="tab" aria-controls="listprojet" aria-selected="false">
						<img src="{{asset('images/espace/projet.png')}}">
							Les Projets
						</a>
						<a class="nav-link" id="equipes-tab" data-toggle="pill" href="#equipes" role="tab" aria-controls="equipes" aria-selected="false">
						<img src="{{asset('images/espace/equipe.png')}}">
							Les Équipes
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
							
							
						</div>
						<div>
						<button class="btn btn-primary" type="submit" name="button">Mise a jour</button>
						</form>
						</div>
						</div>
					<div class="tab-pane fade show " id="listeprof" role="tabpanel" aria-labelledby="listeprof-tab">
					<a href="{{url('espace/create')}}" class="Btn_add"> <img src="{{asset('images/espace/plus.png')}}"> Ajouter</a>
        
          <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Grade</th>
                <th>Numéro de téléphone</th>
                <th>Equipe</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            @foreach($profs as $prof)
                        <tr>
                            <td>{{$prof->nom}}</td>
                            <td>{{$prof->prenom}}</td>
                            <td>{{$prof->email}}</td>
                            <td>{{$prof->grade}}</td>
                            <td>{{$prof->tele}}</td>
                            <td>{{$prof->equipe}}</td>
                            <!--Nous alons mettre l'id de chaque employé dans ce lien -->
                            <td><a href="{{route('espace.edit',$prof->id)}}"><img src="{{asset('images/espace/pen.png')}}"></a></td>
                            <td>
                                <form action="{{route('espace.destroy',$prof->id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                <button type="submit"><img src="{{asset('images/espace/trash.png')}}"></button>
                                </form>
                            </td> 
                        </tr>
       
          @endforeach
         
                  </table>
   
					</div>
					<div class="tab-pane fade  " id="listprojet" role="tabpanel" aria-labelledby="-tab">
					<a href="{{route('projet.create')}}" class="Btn_add"> <img src="{{asset('images/espace/plus.png')}}">Nouveau Projet</a>
        
          <table>
		  <table>
            <tr id="items">
			<th>Titre</th>
               <th>Année</th>
                <th>Les Professeurs</th>
                <th>L'intervenence</th>
				<th>Modifier</th>	
				<th>Supprimer</th>
            </tr>
           @if(count($projets)>0)

            @foreach($projets as $projet)
                        <tr>
						<td>{{$projet->nom}}</td>
                        <td>{{$projet->annee}}</td>
                        <td>@php
                           $profss=json_decode($projet->profs)
                           @endphp
                           @foreach($profss as $prof)
                             {{$prof}} <br>
                           @endforeach</td>
                        <td>{{$projet->interv}}</td>
						<td><a href="{{route('projet.edit',$projet->id)}}"><img src="{{asset('images/espace/pen.png')}}"></a></td>
                            <td>
                                <form action="{{route('projet.destroy',$projet->id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                <button type="submit"><img src="{{asset('images/espace/trash.png')}}"></button>
                                </form>
                            </td>
                        </tr>
       
          @endforeach
           
           @else
           <tr>
            <td colspan="3">Aucune Projet Pour le moment</td>
         </tr>
        @endif
         
                  </table>
   
					</div>
						<div class="tab-pane fade  " id="equipes" role="tabpanel" aria-labelledby="-tab">
					<a href="{{route('equipe.create')}}" class="Btn_add"> <img src="{{asset('images/espace/plus.png')}}">Nouveau Équipe</a>
        
          <table>
		  <table>
            <tr id="items">
			<th>Nom De l'Equipe</th>
			<th>Chef De l'Equipe</th>
               <th>Acronym de L'Equipe</th>
                <th>Domaine de Recherche</th>
                <th>Spécialité</th>
				<th>Photo</th>
				<th>Modifier</th>	
				<th>Supprimer</th>
            </tr>
           @if(count($equipes)>0)

            @foreach($equipes as $equipe)
                        <tr>
						<td>{{$equipe->nom}}</td>
                        <td>{{$equipe->chef}}</td>
                        <td>{{$equipe->achro}}</td>
						<td>{{$equipe->domaine}}</td>
                        <td>{{$equipe->specialite}}</td>
						<td><img src="{{asset('/images/profs/'.$equipe->photo)}}" alt="Image" class="shadow"></td>
						<td><a href="{{route('equipe.edit',$equipe->id)}}"><img src="{{asset('images/espace/pen.png')}}"></a></td>
                            <td>
                                <form action="{{route('equipe.destroy',$equipe->id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                <button type="submit"><img src="{{asset('images/espace/trash.png')}}"></button>
                                </form>
                            </td>
                        </tr>
       
          @endforeach
           
           @else
           <tr>
            <td colspan="3">Aucune Equipe Pour le moment</td>
         </tr>
        @endif
         
                  </table>
   
					</div>
					<div class="tab-pane fade " id="demandeinscri" role="tabpanel" aria-labelledby="demandeinscri-tab">
        
					<p class="Btn_add"> Demandes d'inscription</p>
        
        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Grade</th>
                <th>N° de téléphone</th>
                <th>Equipe</th>
                <th>Voir</th> 
                
            </tr>
			@foreach($users as $user)
			@if($user->is_activated==0)
			@if($user->type=='Prof')
                        <tr>
                            <td>{{$user->nom}}</td>
                            <td>{{$user->Prénom}}</td>
							<td>{{$user->email}}</td>
                            <td>{{$user->tél}}</td> 
							<td>{{$user->Equipe}}</td>
                            <td>{{$user->Grade}}</td>
                            <!--Nous alons mettre l'id de chaque employé dans ce lien -->

                           
							<td><a href="{{route('envoyer',$user->id)}}">Valider</a></td>
                            
                        </tr>
          @endif
		  @endif
          @endforeach
            
      
         
        </table>
   
					</div>
					<div class="tab-pane fade " id="demandevalid" role="tabpanel" aria-labelledby="demandevalid-tab">
        
					<p class="Btn_add">les événements </p>
        
        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Commence à</th>
                <th>termine à</th>
                <th>Validation</th> 
                
            </tr>
			@foreach($events as $event)
			@if($event->is_activated==0)
                        <tr>
                            <td>{{$event->title}}</td>
                            <td>{{$event->start}}</td>
							<td>{{$event->end}}</td>
                            <!--Nous alons mettre l'id de chaque employé dans ce lien -->
							<td><a href="{{route('valide',$event->id)}}">Valider</a></td>
                            
                        </tr>
		  @endif
          @endforeach
            
      
         
        </table>
   
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Parametres de Compte</title>
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
			<a href="{{asset('ChatApp/index.php')}}">Chat</a>
			<a href="{{route('projet.index')}}">Projets</a>
			<h1 class="mb-5">Parametres de Compte</h1>
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src="{{asset('images/profs/chef.png')}}" alt="Image" class="shadow">
						</div>
						<h4 class="text-center">Proffeseur 1</h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="nav-link active" id="listeprof-tab" data-toggle="pill" href="#listeprof" role="tab" aria-controls="listeprof" aria-selected="true">
							<img src="{{asset('images/espace/list.png')}}">
							List des profs
						</a>
						
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							Mot de pass
						</a>
						
						<a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
							<i class="fa fa-bell text-center mr-1"></i> 
							Notification
						</a>
						<a class="nav-link " id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="false">
						<i class="fa fa-home text-center mr-1"></i> 
							Profil
						</a>
						
						<a class="nav-link" id="demandeinscri-tab" data-toggle="pill" href="#demandeinscri" role="tab" aria-controls="demandeinscri" aria-selected="false">
						<img src="{{asset('images/espace/list.png')}}">
							Demande insciption
						</a>
						<a class="nav-link" id="listprojet-tab" data-toggle="pill" href="#listprojet" role="tab" aria-controls="listprojet" aria-selected="false">
						<img src="{{asset('images/espace/list.png')}}">
							Les Projets
						</a>
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade " id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">Account Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Prénom</label>
								  	<input type="text" class="form-control" value="Kiran">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Nom</label>
								  	<input type="text" class="form-control" value="Acharya">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Email</label>
								  	<input type="email" class="form-control" value="kiranacharya287@gmail.com">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>N° de télephone</label>
								  	<input type="Number" class="form-control" value="0612345789">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Cne</label>
								  	<input type="text" class="form-control" value=" Jm-83050">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>cin</label>
								  	<input type="text" class="form-control" value="cin">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Encadrant</label>
								  	<input type="text" class="form-control" value="Nom d'encadrant">
								</div>
							</div>
							
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
					<div class="tab-pane fade show active" id="listeprof" role="tabpanel" aria-labelledby="listeprof-tab">
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
                <th>Nom</th>
                <th>Profs</th>
                <th>Voir plus</th>
            </tr>
           @if(count($projets)>0)

            @foreach($projets as $projet)
                        <tr>
                            <td>{{$projet->nom}}</td>
                            <td>{{$projet->profs}}</td>
                            <!--Nous alons mettre l'id de chaque employé dans ce lien -->
                            <td><a href=""><img src="{{asset('images/espace/eye.png')}}"></a></td>
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
					<div class="tab-pane fade " id="demandeinscri" role="tabpanel" aria-labelledby="demandeinscri-tab">
        
					<p class="Btn_add"> Demandes d'inscription</p>
        
        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Grade</th>
                <th>Numéro de téléphone</th>
                <th>Equipe</th>
                <th>Voir</th>
                
            </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <!--Nous alons mettre l'id de chaque employé dans ce lien -->
                            <td><a href=""><img src="{{asset('images/espace/eye.png')}}"></a></td>
                            
                        </tr>
               
            
      
         
        </table>
   
					</div>
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
					
						<h3 class="mb-4">Password Settings</h3>
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
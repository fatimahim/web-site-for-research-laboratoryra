<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="{{asset('cssfile/listeprof.css')}}">
</head>
<body>
   
    <div class="form">
        <a href="{{route('cheflabo.home')}}" class="back_btn"><img src="{{asset('images/espace/back.png')}}"> Retour</a>
        <h2>Modifier les informations:</h2>
        <p class="erreur_message">
            

        </p>
        <form action="{{route('equipe.update',$equipe->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label>Nom de l'Equipe</label>
            <input type="text" name="nom" value="{{$equipe->nom}}" required>
            <label>Acronyme de l'Equipe</label>
            <input type="text" name="achro" value="{{$equipe->achro}}" required>
            <label>Chéf de l'Equipe</label>
            <input type="text" name="chef" value="{{$equipe->chef}}" required>
            <label>Domaine de Recherche</label>
            <input type="text" name="domaine" value="{{$equipe->domaine}}" >
            <label>Spécialités</label>
            <input type="text" name="specialite" value="{{$equipe->specialite}}" required>
            <label>Image :</label>
            <input type="file" name="photo" value="{{$equipe->photo}}" >
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>
</html>
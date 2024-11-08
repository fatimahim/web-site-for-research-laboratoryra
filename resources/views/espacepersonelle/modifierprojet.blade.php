<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <link rel="stylesheet" href="{{asset('cssfile/listeprof.css')}}">
</head>
<body>
   
    <div class="form">
        <a href="{{route('cheflabo.home')}}" class="back_btn"><img src="{{asset('images/espace/back.png')}}"> Retour</a>
        <h2>Modifier les informations:</h2>
        <p class="erreur_message">
            

        </p>
        <form action="{{route('projet.update',$projet->id)}}" method="post">
            @csrf
            @method('PUT')
            <label>Titre</label>
            <input type="text" name="nom" value="{{$projet->nom}} ">
            <label>Année de projet :</label>
            <input type="text" name="annee" value="{{$projet->annee}} ">
            <label> Les Professeurs :</label>
            <input type="text" name="profs" value="{{$projet->profs}} ">
            <label> Intervenence :</label>
            <input type="text" name="interv" value="{{$projet->interv}}">
            
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>
</body>
</html>
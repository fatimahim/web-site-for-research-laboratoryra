<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voir</title>
    <link rel="stylesheet" href="{{asset('cssfile/listeprof.css')}}">
</head>
<body>
   
    <div class="form">
        <a href="{{route('espace.index')}}" class="back_btn"><img src="{{asset('images/espace/back.png')}}"> Retour</a>
        <h2> les informations :</h2>
        <p class="erreur_message">
            

        </p>
        <form action="" method="post">
            @csrf
            @method('PUT')
            <label>Nom</label>
            <input type="text" name="nom" value="{{$prof->nom}}">
            <label>Prénom</label>
            <input type="text" name="prenom" value="{{$prof->prenom}}">
            <label>email</label>
            <input type="email" name="email" value="{{$prof->email}}">
            <label>grade</label>
            <input type="text" name="grade" value="{{$prof->grade}}">
            <label>N° de téléphone</label>
            <input type="number" name="tele" value="{{$prof->tele}}">
            <label>Equipe</label>
            <input type="text" name="equipe" value="{{$prof->equipe}}">
            <input type="submit" value="Valider" name="button">
            <input type="submit" value="Supprimer" name="button">
        </form>
    </div>
</body>
</html>
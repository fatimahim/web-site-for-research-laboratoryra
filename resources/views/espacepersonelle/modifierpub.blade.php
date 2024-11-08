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
        <a href="{{route('home')}}" class="back_btn"><img src="{{asset('images/espace/back.png')}}"> Retour</a>
        <h2>Modifier les informations:</h2>
        <p class="erreur_message">
            

        </p>
        <form action="{{route('pub.update',$pub->id)}}" method="post">
            @csrf
            @method('PUT')
            <label>Titre</label>
            <input type="text" name="titre" value="{{$pub->titre}}">
            <label>Anné de publication</label>
            <input type="text" name="anne" value="{{$pub->anne}} ">
            <label>Auteur 1:</label>
            <input type="text" name="auteur1" value="{{$pub->auteur1}} ">
            <label>Auteur 2:</label>
            <input type="text" name="auteur2" value="{{$pub->auteur2}}">
            <label>Journal</label>
            <input type="text" name="journal" value="{{$pub->journal}}">
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>
</body>
</html>
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
        <h2>Ajouter un employé</h2>
        <p class="erreur_message">
            

        </p>
        <form action="{{route('espace.store')}}" method="post">
            @csrf
            <label>Nom</label>
            <input type="text" name="nom" required>
            <label>Prénom</label>
            <input type="text" name="prenom" required>
            <label>email</label>
            <input type="email" name="email" required>
            <label>grade</label>
            <input type="text" name="grade" required>
            <label>N° de téléphone</label>
            <input type="number" name="tele" required>
            <label>Equipe</label>
            <input type="text" name="equipe" required>
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>
</html>
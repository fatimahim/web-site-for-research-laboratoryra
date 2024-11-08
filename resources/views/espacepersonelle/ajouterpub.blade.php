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
        <a href="{{route('home')}}" class="back_btn"><img src="{{asset('images/espace/back.png')}}"> Retour</a>
        <h2>Ajouter un Publication</h2>
        <p class="erreur_message">
            

        </p>
        <form action="{{route('pub.store')}}" method="post">
            @csrf
            <label>Titre</label>
            <input type="text" name="titre" required>
            <label>Anné de publication</label>
            <input type="text" name="anne" required>
            <label>Auteur 1:</label>
            <input type="text" name="auteur1" required>
            <label>Auteur 2:</label>
            <input type="text" name="auteur2" >
            <label>Journal</label>
            <input type="text" name="journal" required>
        
            
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>
</html>
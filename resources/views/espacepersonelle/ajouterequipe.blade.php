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
        <h2>Ajouter un Equipe</h2>
        <p class="erreur_message">
            

        </p>
        <form action="{{route('equipe.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label>Nom de l'Equipe</label>
            <input type="text" name="nom" required>
            <label>Acronyme de l'Equipe</label>
            <input type="text" name="achro" required>
            <label>Chéf de l'Equipe</label>
            <input type="text" name="chef" required>
            <label>Domaine de Recherche</label>
            <input type="text" name="domaine" >
            <label>Spécialités</label>
            <input type="text" name="specialite" required>
            <label>Présentation du programme de recherche de l’Equipe </label>
            <input type="text" name="other" required>
            <label>Image :</label>
            <input type="file" name="photo" >
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>
</html>
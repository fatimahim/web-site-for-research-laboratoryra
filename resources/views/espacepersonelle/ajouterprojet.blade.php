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
        <h2>Ajouter un Projet</h2>
        <p class="erreur_message">
            

        </p>
        <form action="{{route('projet.store')}}" method="post">
            @csrf
            <label>Titre</label>
            <input type="text" name="nom" required>
            <label>Année</label>
            <input type="text" name="annee" required>
            <label>L'intervenence</label>
            <input type="text" name="interv" required>
            <legend>Choissez les profs participé au projet:</legend>
            <div class="check">
            <div>
            <input type="checkbox" id="scales" name="profs[]" value="Prof1" >
            <label for="profs">Prof1</label>
            </div>

            <div >
             <input type="checkbox" id="horns" name="profs[]" value="Prof2">
             <label for="profs">Prof2</label>
            </div>
            <div >
             <input type="checkbox" id="horns" name="profs[]" value="Prof3">
             <label for="profs">Prof3</label>
            </div>
            <div >
             <input type="checkbox" id="horns" name="profs[]" value="Prof4">
             <label for="profs">Prof4</label>
            </div>
            <div >
             <input type="checkbox" id="horns" name="profs[]" value="Prof5">
             <label for="profs">Prof5</label>
            </div>
            </div>
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>
</html>
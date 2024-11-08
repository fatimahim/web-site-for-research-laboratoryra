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
        <a href="{{route('Prof.home')}}" class="back_btn"><img src="{{asset('images/espace/back.png')}}"> Retour</a>
        <h2>Modifier les informations:</h2>
        <p class="erreur_message">
            

        </p>
        <form action="{{route('doc.update',$doc->id)}}" method="post">
            @csrf
            @method('PUT')
            <label>Nom</label>
            <input type="text" name="nom" value="{{$doc->nom}}">
            <label>Prénom</label>
            <input type="text" name="prenom" value="{{$doc->prenom}}">
            <label>email</label>
            <input type="email" name="email" value="{{$doc->email}}">
            <label>Cne</label>
            <input type="text" name="cne" value="{{$doc->cne}}">
            <label>N° de téléphone</label>
            <input type="number" name="tele" value="{{$doc->tele}}">
            <label>Cin</label>
            <input type="text" name="cin" value="{{$doc->cin}}">
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>
</body>
</html>
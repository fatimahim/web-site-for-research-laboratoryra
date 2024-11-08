<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Employés</title>
    <link rel="stylesheet" href="{{asset('cssfile/listeprof.css')}}">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <table>
            <tr id="items">
              <th>Photo D'auteur :</th>
              <th>Nom</th>
               <th>Titre</th>
                <th>Anneé de publication</th>
                <th>Auteurs</th>
                <th>Journal</th>
				
                </tr>
                @if(count($pubs)>0)
        
        @foreach($pubs as $projet)
                    <tr>
                    <td><img src="{{asset('/images/profs/'.$projet->image)}}" alt="Image" class="img-fluid rounded-start" style="border-radius: 50%;border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
"></td>
                        <td>{{$projet->nom}}</td>
                        <td>{{$projet->titre}}</td>
                        <td>{{$projet->anne}}</td>
                        <td>{{$projet->auteur1}} <br> {{$projet->auteur2}}</td>
                        <td>{{$projet->journal}}</td>
                        
                        <!--Nous alons mettre l'id de chaque employé dans ce lien -->
                        
                    </tr>
      @endforeach
       
       @else
       <tr>
        <td colspan="3">Aucune Publication Pour le moment</td>
     </tr>
    @endif
         
        </table>
   
   
   
   
    </div>
</body>
</html>
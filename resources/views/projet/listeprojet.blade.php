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
              <th>Titre</th>
               <th>Année</th>
                <th>Les Professeurs</th>
                <th>L'intervenence</th>
                
				
                </tr>
                @if(count($projets)>0)
        
        @foreach($projets as $projet)
                    <tr>
                        <td>{{$projet->nom}}</td>
                        <td>{{$projet->annee}}</td>
                        <td>@php
                           $profss=json_decode($projet->profs)
                           @endphp
                           @foreach($profss as $prof)
                             {{$prof}} <br>
                           @endforeach</td>
                        <td>{{$projet->interv}}</td>
                        
                        <!--Nous alons mettre l'id de chaque employé dans ce lien -->
                        
                    </tr>
      @endforeach
       
       @else
       <tr>
        <td colspan="3">Aucune Projet Pour le moment</td>
     </tr>
    @endif
         
        </table>
   
   
   
   
    </div>
</body>
</html>
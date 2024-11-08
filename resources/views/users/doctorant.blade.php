<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Les Membres</h1>
      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
           @foreach($users as $user)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="{{asset('/images/profs/'.$user->image)}}" >
              <div class="meta" style="display: flex; justify-content: center; align-items: center;">
                      <a href="{{ route('profile.show', $user->id) }}">
                          <span class="fa-solid fa-user"></span>
                       </a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$user->nom}} {{$user->Prénom}}</p>
              @if($user->type=='doctorant')
              <span class="text-sm text-grey">Doctorant</span>
              @endif
              @if($user->type=='cheflabo')
              <span class="text-sm text-grey">Chef de laboratoire</span>
              @endif
              @if($user->type=='chefEquipe')
              <span class="text-sm text-grey">Chef d'{{$user->Equipe}}</span>
              @endif
              @if($user->type=='Prof')
              <span class="text-sm text-grey">Professeur</span>
              @endif
              @if($user->type=='adjoint')
              <span class="text-sm text-grey">Adjoint</span>
              @endif
            </div>
          </div>
        </div>
        @endforeach
        
        
      </div>
    </div>
  </div>

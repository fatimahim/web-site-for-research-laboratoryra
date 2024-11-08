@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center"> 
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register doctorant') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                    <input id="Grade" type="hidden" name="Grade" value="no" >
                    <input id="Equipe" class="form-control @error('Grade') is-invalid @enderror" type="hidden" name="Equipe" value="no" >
                    @error('Grade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('Equipe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <input type="hidden" name="type" value="0" >
                        <div class="row mb-3">
                            <label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Prénom" class="col-md-4 col-form-label text-md-end">{{ __('Prénom') }}</label>

                            <div class="col-md-6">
                                <input id="Prénom" type="text" class="form-control @error('Prénom') is-invalid @enderror" name="Prénom" value="{{ old('Prénom') }}" required autocomplete="Prénom" autofocus>

                                @error('Prénom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                       
                        

                        <div class="row mb-3">
                            <label for="tél" class="col-md-4 col-form-label text-md-end">{{ __('tél') }}</label>

                            <div class="col-md-6">
                                <input id="tél" type="text " class="form-control @error('tél') is-invalid @enderror" name="tél" value="{{ old('tél') }}" required autocomplete="tél">

                                @error('tél')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="Cne" class="col-md-4 col-form-label text-md-end">{{ __('Cne') }}</label>

                            <div class="col-md-6">
                                <input id="Cne" type="text" class="form-control @error('Cne') is-invalid @enderror" name="Cne" value="{{ old('Cne') }}" required autocomplete="Cne">

                                @error('Cne')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Cin" class="col-md-4 col-form-label text-md-end">{{ __('Cin') }}</label>

                            <div class="col-md-6">
                                <input id="Cin" type="text" class="form-control @error('Cin') is-invalid @enderror" name="Cin" value="{{ old('Cin') }}" required autocomplete="Cin">

                                @error('Cin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    

                        <div class="row mb-3">
                            <label for="Encadrant" class="col-md-4 col-form-label text-md-end">{{ __('Encadrant') }}</label>

                            <div class="col-md-6">
                                <input id="Encadrant" type="text" class="form-control @error('Encadrant') is-invalid @enderror" name="Encadrant" value="{{ old('Encadrant') }}" required autocomplete="Encadrant">

                                @error('Encadrant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="co-Encadrant" class="col-md-4 col-form-label text-md-end">{{ __('co-Encadrant') }}</label>

                            <div class="col-md-6">
                                <input id="co-Encadrant" type="text" class="form-control @error('co-Encadrant') is-invalid @enderror" name="co-Encadrant" value="{{ old('co-Encadrant') }}" >

                                @error('co-Encadrant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       <dive class="row mb-3">
                       <label for="Etablissement" class="col-md-4 col-form-label text-md-end">{{ __('Etablissement') }}</label>
                       <div class="col-md-6">

                       <select  id="Etablissement" name="Etablissement" class="form-control @error('Etablissement') is-invalid @enderror"  value="{{ old('Etablissement') }}"  required autocomplete="Etablissement" autofocus >
                        <option value="Etablissement1">Etablissement1</option>
                        <option value="Etablissement2">Etablissement2</option>
                        <option value="Etablissement3">Etablissement3</option>
                        <option value="Etablissement4">Etablissement4</option>
                        <option value="Etablissement5">Etablissement5</option>
                     </select>
                     @error('Etablissement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                 </div>
           </div>



                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                         <div class="row mb-3">
                            <label for="image"  class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>
                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" autocomplete="image" autofocus>
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inscription de prof') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                     <input type="hidden" name="Cne" value="NULL" >
                    <input type="hidden" name="Cin" value="NULL">
                    <input type="hidden" name="Encadrant" value="NULL">
                    <input type="hidden" name=" co-Encadrant" value="NULL">
                    <input type="hidden" name="Etablissement" value="NULL">
                    <input type="hidden" name="type" value="3" >


                        <div class="row mb-3">
                            <label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Prénom" class="col-md-4 col-form-label text-md-end">{{ __('Prénom') }}</label>

                            <div class="col-md-6">
                                <input id="Prénom" type="text" class="form-control @error('Prénom') is-invalid @enderror" name="Prénom" value="{{ old('Prénom') }}" required autocomplete="Prénom" autofocus>

                                @error('Prénom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tél" class="col-md-4 col-form-label text-md-end">{{ __('tél') }}</label>

                            <div class="col-md-6">
                                <input id="tél" type="text " class="form-control @error('tél') is-invalid @enderror" name="tél" value="{{ old('tél') }}" required autocomplete="tél">

                                @error('tél')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Grade" class="col-md-4 col-form-label text-md-end">{{ __('Grade') }}</label>

                            <div class="col-md-6">
                                <input id="Grade" type="text" class="form-control @error('Grade') is-invalid @enderror" name="Grade" value="{{ old('Grade') }}" required autocomplete="Grade">

                                @error('Grade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="Equipe" class="col-md-4 col-form-label text-md-end">{{ __('Equipe') }}</label>

                            <div class="col-md-6">
                                <input id="Equipe" type="text" class="form-control @error('Equipe') is-invalid @enderror" name="Equipe" value="{{ old('Equipe') }}" required autocomplete="Equipe">

                                @error('Equipe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            
                       <div class="row mb-3">
                            <label for="image"  class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>
                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" autocomplete="image" autofocus>
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

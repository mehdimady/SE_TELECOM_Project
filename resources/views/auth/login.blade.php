@extends('layouts.front')

@section('content')
<div class="container margin-log">
    <div class="row justify-content-around m-1">
    
        <div class="col-12 col-md-5 d-flex text-center p-5 card card-log mt-3 form-log">
            <h2 class="white">Se Connecter</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <div class="form-group  form-group-log d-flex align-items-center mt-5">
                    <label for="name" class=" label-log mt-2 mr-3"><i class="  fas fa-envelope white"></i></label>
                  <div class="w-100"> 
                <input type="email" name="email" id="email" class="input-log bg-transparent @error('email') is-invalid @enderror" placeholder="E-mail" value="{{ old('email') }}" required autocomplete="email" autofocus>
                
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
            </div>


                <div class="form-group  form-group-log d-flex mt-3">
                    <label for="password" class=" label-log mt-2 mr-3"><i class="fas fa-lock white" ></i></label>
                 <div class="w-100">   
                     <input type="password" name="password" id="password" class="input-log bg-transparent @error('password') is-invalid @enderror" placeholder="Mot de Passe" required autocomplete="current-password">
                     @error('password')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror
                    </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-12 ">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            Se rappeler de moi
                        </label>
                    </div>
                </div>
            </div>
               
               
                <div class="form-group form-group-log  ">
                    <button type="submit" class="btn-log mt-4 btn btn-primary">Se connecter</button>
                </div>
                <div class="form-group form-group-log ">
                   
                 @if (Route::has('password.request'))
                    <a class="form-log-size" href="{{ route('password.request') }}">
                        Mot de passe Oublié ?
                    </a>
                @endif
                </div>
            </form>
            <hr>
            <p class="mt-3 text-center">Vous n'êtes pas membre ? <a href="{{route('register')}}">Inscrivez-vous</a></p>
        </div>
    </div>
    </div>

@endsection

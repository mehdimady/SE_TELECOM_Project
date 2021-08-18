@extends('layouts.front')

@section('content')
<div class="container" style="margin-top: 120px !important;">

                <div class="row justify-content-around ">
                    <div class="col-12 col-md-6 d-flex text-center pt-5 pb-4 pl-5 pr-5 card card-log mt-4 form-log">
                    <h2 class="white">S'inscrire</h2>
                    <form method="POST" class="mt-4" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group form-group-log d-flex">
                            <label for="name" class="label-log mt-2 "><i class="fas fa-user-alt" style="color:white"></i></label>
                           <div class="w-100"> <input value="{{ old('name') }}"  type="text" name="name" id="name" class="w-100 input-log bg-transparent actif @error('name') is-invalid @enderror" required autocomplete="name" autofocus placeholder="Nom"> 
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div> 
                        </div>
                        <div class="form-group form-group-log d-flex">
                            <label for="name" class="label-log mt-2 mr-3"><i class="fas fa-user-alt" style="color:white"></i></label>
                           <div class="w-100"> <input type="text" value="{{ old('name') }}" name="name" id="name" class="input-log bg-transparent @error('name') is-invalid @enderror" required autocomplete="name" autofocus placeholder="Prénom">
                           @error('name')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group form-group-log d-flex">
                            <label for="email" class="label-log mt-2 mr-3"><i class="  fas fa-envelope" style="color:white"></i></label>
                           <div class="w-100"> 
                               <input type="email" name="email" id="email" class="input-log bg-transparent @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">
                               @error('email')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                                @enderror
                            </div>
                         </div>  
                        
                         <div class="form-group form-group-log d-flex">
                            <label for="password" class="label-log mt-2 mr-3"><i class="fas fa-lock" style="color:white"></i></label>
                            <div class="w-100">
                                <input type="password" name="password" id="password" class="input-log bg-transparent @error('password') is-invalid @enderror" required autocomplete="new-password" placeholder="Mot de Passe">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-group-log d-flex">
                            <label for="password-confirm" class="label-log mt-2 mr-3"><i class="fas fa-lock white" ></i></label>
                            <div class="w-100"><input type="password" name="password_confirmation" class="input-log bg-transparent" required id="password-confirm" autocomplete="new-password"
                                placeholder="Confirmez votre Mot de Passe">
                            </div>
                        </div>
                        <div class="form-group form-group-log d-flex justify-content-center ">
                            <input type="checkbox" required name="agree-term" id="agree-term" class="input-log agree-term fixed-left" style="width: 4%;
                            position: relative;
                            margin-top: 5px;">
                            <label for="agree-term" class="label-log label-agree-term" style="position:sticky"><span><span></span></span>
                                J'accepte les
                                <a href="#" class="term-service">Conditions Générales</a></label>
                        </div>
                        <div class="form-group form-group-log">
                            <button type="submit" class="btn btn-log btn-primary">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.front')
@section('content')
<div class="container-fluid pb-5 mt-2 mt-md-3 p-5 mt-120 ">
    <div class="row">
        <div class="col-md-12 p-0">
            <h2 class="h6 d-flex flex-wrap justify-content-between align-items-center px-4 py-3 background-cordonees">
<span class="white">Coordonées</span><a class="font-size-sm orange" href="{{ route('cordonees') }}"><svg
    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
    class="feather feather-chevron-left" style="width: 1rem; height: 1rem;">
    <polyline points="15 18 9 12 15 6"></polyline>
</svg>Revenir aux coordonées</a></h2>
        </div></div></div>
<div class="container ">
    <div class="row d-flex justify-content-center ">
        <div class="col-sm-12">
            <div class="card card-paiement mx-auto">
                <p class="heading"> DETAILS DE PAIEMENT</p>
                <form class="card-details ">
                    <div class="form-group form-group-paiement">
                        <p class="text-warning-paiement mb-sm-3 mb-md-0  p-0">Numéro de la carte</p> <input class="input-paiement p-0" type="text" name="card-num" placeholder="1234 5678 9012 3457" size="17" id="cno" minlength="19" maxlength="19"> <img class="visaimg  p-0 "src="https://img.icons8.com/color/48/000000/visa.png" width="64px" height="60px" />
                    </div>
                    <div class="form-group form-group-paiement">
                        <p class="text-warning-paiement mb-0">Nom du Titulaire</p> <input class="input-paiement" type="text" name="name" placeholder="Name" size="17">
                    </div>
                    <div class="form-group form-group-paiement pt-2">
                        <div class="row d-flex">
                            <div class="col-sm-4 p-0">
                                <p class="text-warning-paiement mb-0">Expiration</p> <input class="input-paiement" type="text" name="exp" placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7">
                            </div>
                            <div class="col-sm-3 p-0">
                                <p class="text-warning-paiement mb-0">CVV</p> <input class="input-paiement" type="password" name="cvv" placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3">
                            </div>
                            <div class="col-sm-5 pt-0 justify-content-center d-flex"> <button type="button" class="btn btn-paiement btn-primary"><i class="fas fa-arrow-right px-3 py-2"></i></button> </div>
                        </div>
                    </div>
                </form>
            </div> 
        </div>
    </div>

</div>
    
@endsection
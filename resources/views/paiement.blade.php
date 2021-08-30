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
            {{-- @if (session()->has('error'))
        
            <div class="alert alert-danger">{{session()->get('error')}}</div>        
            @endif --}}
            
            <form action="{{route('paiement')}}" id="checkout-form" enctype="multipart/form-data" class="billing-form">
                @csrf
                <h3 class="mb-4 billing-heading">Billing Details</h3>
                <div class="row align-items-end">
                   
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="lastname">Name on Card</label>
                        <input type="text" class="form-control" id="card-name" name="card_name">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="lastname">Number</label>
                        <input type="text" class="form-control" id="card-number">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastname">Expiration Month</label>
                        <input type="text" id="card-expiry-month" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastname">Expiration Year</label>
                        <input type="text" id="card-expiry-year" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="lastname">CVC</label>
                        <input type="text" id="card-cvc" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Buy Now">
                        </div>
                    </div>
                </div>
          </form>






            {{-- <div class="card card-paiement mx-auto">
                <p class="heading"> DETAILS DE PAIEMENT</p>













                <form class="card-details " id="checkout-form" action="{{route('shop')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group form-group-paiement">
                        <p class="text-warning-paiement mb-sm-3 mb-md-0  p-0">Numéro de la carte</p> <input class="input-paiement p-0"  type="text" name="card-number" id="card-number" placeholder="1234 5678 9012 3457" size="17" id="cno"  maxlength="19"> <img class="visaimg  p-0 "src="https://img.icons8.com/color/48/000000/visa.png" width="64px" height="60px" />
                    </div>
                    <div class="form-group form-group-paiement">
                        <p class="text-warning-paiement mb-0">Nom du Titulaire</p> <input class="input-paiement" type="text" id="card-name" name="card_name" placeholder="Name" size="17">
                    </div>
                    <div class="form-group form-group-paiement pt-2">
                        <div class="row d-flex">
                            <div class="col-sm-4 p-0">
                                <p class="text-warning-paiement mb-0">Expiration</p> <input class="input-paiement" type="text" id="#card-expiry-month" name="card-expiry-month" placeholder="MM/YYYY" size="7" id="exp" maxlength="7">
                            </div>
                            <div class="col-sm-4 p-0">
                                <p class="text-warning-paiement mb-0">Expiration</p> <input class="input-paiement" type="text" id="#card-expiry-year" name="card-expiry-year" placeholder="MM/YYYY" size="7" id="exp" maxlength="7">
                            </div>
                            <div class="col-sm-3 p-0">
                                <p class="text-warning-paiement mb-0">CVV</p> <input class="input-paiement" type="text" name="card-cvc" id="card-cvc" placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3">
                            </div>
                            <div class="col-sm-5 pt-0 justify-content-center d-flex"> <button type="submit" name="submit" class="btn btn-paiement btn-primary"><i class="fas fa-arrow-right px-3 py-2"></i></button> </div>
                        </div>
                    </div>
                </form>
            </div> --}}
         
    </div>
    </div>

</div>
   
@endsection
@extends('layouts.front')

@section('content')

    <div class="container pb-5 mt-2 mt-md-3 p-5 mt-120">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h6 d-flex flex-wrap justify-content-between align-items-center px-4 py-3 background-cordonees">
                    <span class="white">Produits</span><a class="font-size-sm orange" href="{{ route('shop') }}"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-left" style="width: 1rem; height: 1rem;">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>Continuez votre shopping</a></h2>

        
                    @foreach ($products as $product)
                        <!-- Item-->
                        <div class="d-sm-flex justify-content-between my-4 pb-4 border-bottom">
                            <div class="media d-block d-sm-flex text-center text-sm-left">
                                <img src={{ asset("./storage/product_images/{$product['product_image']}") }}
                                    class="w-50 h-50" alt="Produit">
                                <div class="media-body">
                                    <h3 class="product-card-title text-center font-weight-semibold border-0 pb-0"><a
                                            >{{ $product['product_name'] }}</a></h3>

                                    <div class="font-size-lg text-primary pt-2 text-center">Prix
                                        Unitaire: {{ $product['product_price'] }} €</div>
                                </div>
                            </div>
                            <form action="{{ route('modify_quantity', $product['product_id']) }}" method="POST">
                                @csrf

                                <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left">
                                    <div class="form-group mb-2 text-center" >
                                        <label for="quantity1">Quantity</label>
                                        <input class="form-control form-control-sm text-center" name="quantity"
                                            type="number" id="quantity1" min="1" value="{{ $product['qty'] }}">

                                        <input type="submit" class="btn btn-success mt-3 " value="valider">
                                    </div>
                                
                            </form>
                            <div class=" mb-2 text-center">
                                Total produit: {{ $product['product_price'] * $product['qty'] }}</div>
                            <button class="btn btn-outline-danger btn-sm btn-block mb-2" type="button"
                                onclick="location.href='{{ route('removeItem', $product['product_id']) }}'">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-trash-2 mr-1">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                    </path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>Supprimer le produit</button>
                        </div>
                    </div>
 
                     @endforeach
                    @if (!$products )
                        <h1 class="text-center">Votre Panier est vide</h1>
                    @endif
  
    <div class="col-md-12  pt-3 pt-md-0 p-0">
        <h2 class="h6 px-4 py-3 background-cordonees orange text-center">TOTAL</h2>
        <div class="h3 font-weight-semibold text-center py-3">
            {{ session()->has('cart') ? session()->get('cart')->totalPrice : '0' }} €</div>
        <hr>   
        @if ($products)
        <a class="brandBtn btn  btnAccueil btn-block" href="{{ route('cordonees') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-credit-card mr-2">
                <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                <line x1="1" y1="10" x2="23" y2="10"></line>
            </svg>Proceder au paiement</a>
        @endif
        
     

    </div>
    </div>
        </div>
    </div>



@endsection

@extends('layouts.front')

@section('content')
<div class="container-fluid contenaire margin backcolor">
        
    <div class="row backcolor2">
        <div class="col-12 text-center mt-5 mb-5">
            <h1 class="text-color-white font-weight-bolder mt-5"> INDISPENSABLE POUR LE DOMAINE DE LA FIBRE OPTIQUE</h1>
        </div>
    </div>
    <div class="row ml-5 mr-5 ">
        <div class="col-12 col-md-6 "> 
            <div class="row mb-5 mt-5">
                <div class="col-12 d-flex align-items-center ">
                    <img src={{asset("/img/broken-cable.png")}} alt="" width="40" height="40">
                    <h4 class="ml-5">Soudeuse Fibre Optique</h4>

                </div>
            </div>
            <div class="row mb-5 mt-5">
                <div class="col-12 d-flex align-items-center">
                      <img src={{asset("/img/wire.png")}} alt="" width="40" height="40">
                      <h4 class="ml-5">Consommable</h4>
                    

                </div>
            </div>
            <div class="row mb-5 mt-5">
               <div class="col-12 d-flex align-items-center">
               <img src={{asset("/img/pistolet-a-colle-chaude.png")}} alt="" width="40" height="40">
               <h4 class="ml-5">Equipements</h4>


               </div>
            </div>

        </div>
        <div class="col-12 col-md-6 ">

            <div class="row  mb-5 mt-5 ml-md-5">
                <div class="col-12 d-flex ml-md-5 align-items-center">

                     <img src={{asset("/img/box.png")}} alt="" width="40" height="40">
                     <h4 class="ml-5 text-color-white">Pack Complet</h4>
                </div>
            </div>
            <div class="row mb-5 mt-5 ml-md-5 ">
               <div class="col-12 d-flex ml-md-5 align-items-center">

                   <img src={{asset("/img/helmet.png")}} alt="" width="40" height="40">
                   <h4 class="ml-5 text-color-white">Securité</h4>
               </div>
            </div>
            <div class="row mb-5 mt-5 ml-md-5">
               <div class="col-12 d-flex ml-md-5 align-items-center" >

                   <img src={{asset("/img/lifejacket.png")}} alt="" width="40" height="40">
                   <h4 id="scrollid" class="ml-5 text-color-white">Vêtements</h4>
               </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid d-md-block d-none p-0" >
    <div class="row d-flex ">
        <div class="col-12 col-md-3 p-0" style="    box-shadow: 1px 20px 20px 0px;">
            <div class="card card-shop" style="    border-radius: 0px;">
                <article class="filter-group">
                    <header class="card-header card-header-shop"> <a href="#" data-toggle="collapse" data-target="#collapse_aside1"
                            data-abc="true" aria-expanded="true" > <i
                                class="icon-control a-shop icon-control-shop fa fa-chevron-down"></i>
                            <h6 class="title ">Filtrer par Categorie </h6>
                        </a> </header>
                    <div class="filter-content shop-content collapse show" id="collapse_aside1">
                        <div class="card-body">
                            <ul class="list-menu list-menu-shop">
                                <li><a class="a-shop" href="{{url('/shop#scrollid')}}" data-abc="true">Tout les produits </a></li>

                                @foreach ($categories as $category)
                                <li><a class="a-shop" href="{{url('/select_par_cat/'.$category->category_name)}}" data-abc="true">{{$category->category_name}} </a></li>
                                @endforeach
                          
                            </ul>
                        </div>
                    </div>
                </article>
                <article class="filter-group">
                    <header class="card-header card-header-shop"> <a href="#" data-toggle="collapse" data-target="#collapse_aside3"
                            data-abc="true" aria-expanded="true" > <i
                                class="icon-control a-shop icon-control-shop fa fa-chevron-down"></i>
                            <h6 class="title ">Filtrer par Marque </h6>
                        </a> </header>
                    <div class="filter-content shop-content collapse show" id="collapse_aside3">
                        <div class="card-body">
                            <ul class="list-menu list-menu-shop">
                                <li><a class="a-shop" href="{{url('/shop#scrollid')}}" data-abc="true">Toutes les marques </a></li>

                        @foreach ($marques as $marque)
                        <li><a class="a-shop" href="{{url('/select_par_marque/'.$marque->marque_name)}}" data-abc="true">{{$marque->marque_name}} </a></li>
                        @endforeach
                            </div>
                    </div>
                </article>
                <article class="filter-group">
                    <header class="card-header card-header-shop  card-shop"> <a href="#" data-toggle="collapse" data-target="#collapse_aside2"
                            data-abc="true" aria-expanded="true" > <i
                                class="icon-control a-shop icon-control-shop fa fa-chevron-down"></i>
                            <h6 class="title">Filtrer par Prix </h6>
                        </a> </header>
                        
                    <div class="filter-content shop-content collapse show" id="collapse_aside2" style="">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group text-center col-md-6"> <label>Min</label> <input class="form-control"
                                        placeholder="0 €" type="number"> </div>
                                <div class="form-group text-center col-md-6"> <label>Max</label> <input
                                        class="form-control" placeholder="10.000 €" type="number" > </div>
                            </div> <a href="#" class="highlight-button h-b-shop btn-m-shop a-shop btn btn-medium button xs-margin-bottom-five"
                                data-abc="true">Apply Now</a>
                        </div>
                    </div>
                </article>
        
               
            </div>
        </div>
        <div class="col-md-9 col-12" >
        <div class=" row">
            @foreach ($products as $product)
            <div class="col-md-4 mt-3">
                <div class="card mb-4 shadow-sm">
                   <a href=""><img class="bd-placeholder-img p-5 card-img-top" src={{asset("./storage/product_images/{$product->product_image}")}} width="100%" height="225"></a> 
                       
                        
                <div class="py-3 pb-4 px-3 text-center"><h4><a href="">{{$product->product_name}}</a></h4></div>
   
                    <div class="card-body">
                        
                        <div class="d-flex justify-content-between ">
                            
                             <a  href="{{route('article',['product_name'=>$product->product_name])}}"><button type="button" class="btn btn-sm btn-outline-secondary hover"><img src={{asset("/img/008-loupe.png")}} width="25px"alt=""></button></a>   
                                <span>{{$product->product_price}}</span>
                                <button type="button" class="btn btn-sm btn-outline-secondary hover"><img src={{asset("/img/procurement.png")}} width="25px" alt=""></button>
                           
                            
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
       



    </div>
</div>


<div class="container-fluid d-block d-md-none p-0" >
    <div class="row d-flex ">
        <div class="col-12 col-md-3 p-0">
            <div class="card">
                <article class="filter-group">
                    <header class="card-header card-header-shop"> <a href="#" data-toggle="collapse" data-target="#collapse_aside1"
                            data-abc="true" aria-expanded="false" class="collapsed" > <i
                                class="icon-control fa a-shop icon-control-shop fa-chevron-down"></i>
                            <h6 class="title">Filtrer par Categorie </h6>
                        </a> </header>
                    <div class="filter-content collapse" id="collapse_aside1">
                        <div class="card-body">
                            <ul class="list-menu list-menu-shop">
                                
                                <li><a class="a-shop" href="{{url('/shop#scrollid')}}" data-abc="true">Tout les produits </a></li>
                                @foreach ($categories as $category)
                                <li><a class="a-shop" href="{{url('/select_par_cat/'.$category->category_name)}}" data-abc="true">{{$category->category_name}} </a></li>
                                @endforeach
                          
                    
                            </ul>
                        </div>
                    </div>
                </article>
                <article class="filter-group">
                    <header class="card-header card-header-shop "> <a href="#" data-toggle="collapse" data-target="#collapse_aside3"
                            data-abc="true" aria-expanded="false" class="collapsed" > <i
                                class="icon-control a-shop icon-control-shop fa fa-chevron-down"></i>
                            <h6 class="title">Filtrer par Marque </h6>
                        </a> </header>
              <div class="filter-content shop-content collapse" id="collapse_aside3">
                        <div class="card-body">
                            <ul class="list-menu list-menu-shop">
                                <li><a class="a-shop" href="{{url('/shop#scrollid')}}" data-abc="true">Toutes les marques </a></li>

                        @foreach ($marques as $marque)
                        <li><a class="a-shop" href="{{url('/select_par_marque/'.$marque->marque_name)}}" data-abc="true">{{$marque->marque_name}} </a></li>
                        @endforeach
                            </div>
                    </div>
                </article>
                <article class="filter-group">
                    <header class="card-header card-header-shop"> <a href="#" data-toggle="collapse" data-target="#collapse_aside2"
                            data-abc="true" aria-expanded="false" class="collapsed" > <i
                                class="icon-control a-shop icon-control-shop fa fa-chevron-down"></i>
                            <h6 class="title">Filtrer par Prix </h6>
                        </a> </header>
                    <div class="filter-content collapse" id="collapse_aside2" style="">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group text-center col-md-6"> <label>Min</label> <input class="form-control"
                                        placeholder="0 €" type="number"> </div>
                                <div class="form-group text-center col-md-6"> <label>Max</label> <input
                                        class="form-control" placeholder="10.000 €" type="number"> </div>
                            </div> <a href="#" class="highlight-button h-b-shop btn-m-shop a-shop btn btn-medium button xs-margin-bottom-five"
                                data-abc="true">Apply Now</a>
                        </div>
                    </div>
                </article>
          
               
            </div>
        </div>
        <div class="col-md-9 col-12">
        <div class=" row">
            @foreach ($products as $product)
            <div class="col-md-4 mt-3">
                <div class="card mb-4 shadow-sm">
                   <a href=""><img class="bd-placeholder-img card-img-top p-5" src={{asset("./storage/product_images/{$product->product_image}")}} width="100%" height="225"></a> 
                       
                        
                <div class="py-3 pb-4 px-3 text-center"><h4><a href="">{{$product->product_name}}</a></h4></div>
   
                    <div class="card-body">
                        
                        <div class="d-flex justify-content-between ">
                            
                              <a href="{{route('article',['product_name'=>$product->product_name])}}"><button type="button" class="btn btn-sm btn-outline-secondary hover"><a href=""></a><img src={{asset("/img/008-loupe.png")}} width="25px"alt=""></button></a>  
                                <span>{{$product->product_price}}</span>
                                <button type="button" class="btn btn-sm btn-outline-secondary hover"><img src={{asset("/img/procurement.png")}} width="25px" alt=""></button>
                           
                            
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
          
        </div>
    </div>
       



    </div>
</div>

@if ($by_category ?? null)
<script>
window.location.hash="#scrollid"

</script> 
@endif




@endsection
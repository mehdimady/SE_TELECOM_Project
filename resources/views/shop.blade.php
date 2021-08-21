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
               <div class="col-12 d-flex ml-md-5 align-items-center">

                   <img src={{asset("/img/lifejacket.png")}} alt="" width="40" height="40">
                   <h4 class="ml-5 text-color-white">Vêtements</h4>
               </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid d-md-block d-none p-0">
    <div class="row d-flex ">
        <div class="col-12 col-md-3 p-0" style="    box-shadow: 1px 20px 20px 0px;">
            <div class="card card-shop" style="    border-radius: 0px;">
                <article class="filter-group">
                    <header class="card-header card-header-shop"> <a href="#" data-toggle="collapse" data-target="#collapse_aside1"
                            data-abc="true" aria-expanded="true" > <i
                                class="icon-control a-shop icon-control-shop fa fa-chevron-down"></i>
                            <h6 class="title ">Categories </h6>
                        </a> </header>
                    <div class="filter-content shop-content collapse show" id="collapse_aside1">
                        <div class="card-body">
                            <ul class="list-menu list-menu-shop">
                                <li><a class="a-shop" href="#" data-abc="true">Electronics </a></li>
                                <li><a class="a-shop" href="#" data-abc="true">Watches </a></li>
                                <li><a class="a-shop" href="#" data-abc="true">Laptops </a></li>
                                <li><a class="a-shop" href="#" data-abc="true">Clothes </a></li>
                                <li><a class="a-shop" href="#" data-abc="true">Accessories </a></li>
                            </ul>
                        </div>
                    </div>
                </article>
                <article class="filter-group">
                    <header class="card-header card-header-shop  card-shop"> <a href="#" data-toggle="collapse" data-target="#collapse_aside2"
                            data-abc="true" aria-expanded="true" > <i
                                class="icon-control a-shop icon-control-shop fa fa-chevron-down"></i>
                            <h6 class="title">Price </h6>
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
                <article class="filter-group">
                    <header class="card-header card-header-shop"> <a href="#" class="a-shop"data-toggle="collapse" data-target="#collapse_aside3"
                            data-abc="true" aria-expanded="true" > <i
                                class="icon-control a-shop icon-control-shop fa fa-chevron-down"></i>
                            <h6 class="title">Size </h6>
                        </a> </header>
                    <div class="filter-content collapse show" id="collapse_aside3" style="">
                        <div class="card-body"> <label class="checkbox-btn checkbox-shop"> <input type="checkbox"> <span
                                    class="btn btn-light btn-shop"> XS </span> </label> <label class="checkbox-btn checkbox-shop"> <input
                                    type="checkbox"> <span class="btn btn-light btn-shop"> SM </span> </label> <label
                                class="checkbox-btn checkbox-shop"> <input type="checkbox"> <span class="btn btn-light btn-shop"> LG
                                </span> </label> <label class="checkbox-btn checkbox-shop "> <input type="checkbox"> <span
                                    class="btn btn-light btn-shop"> XXL </span> </label> <label class="checkbox-btn checkbox-shop"> <input
                                    type="checkbox"> <span class="btn btn-light btn-shop"> XXXL </span> </label> </div>
                    </div>
                </article>
               
            </div>
        </div>
        <div class="col-md-9 col-12">
        <div class=" row">
            <div class="col-md-4 mt-3">
                <div class="card mb-4 shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                            dy=".3em">Thumbnail</text>
                    </svg>
   
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between ">
                            
                                <button type="button"  class="btn btn-sm btn-outline-secondary hover"><img src={{asset("/img/008-loupe.png")}} width="25px"alt=""></button>
                                <button type="button" class="btn btn-sm btn-outline-secondary hover"><img src={{asset("/img/procurement.png")}} width="25px" alt=""></button>
                                
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
       



    </div>
</div>

<div class="container-fluid d-block d-md-none p-0">
    <div class="row d-flex ">
        <div class="col-12 col-md-3 p-0">
            <div class="card">
                <article class="filter-group">
                    <header class="card-header card-header-shop"> <a href="#" data-toggle="collapse" data-target="#collapse_aside1"
                            data-abc="true" aria-expanded="false" class="collapsed" > <i
                                class="icon-control fa a-shop icon-control-shop fa-chevron-down"></i>
                            <h6 class="title">Categories </h6>
                        </a> </header>
                    <div class="filter-content collapse" id="collapse_aside1">
                        <div class="card-body">
                            <ul class="list-menu list-menu-shop">
                                <li><a href="#" class="a-shop" data-abc="true">Electronics </a></li>
                                <li><a href="#" class="a-shop" data-abc="true">Watches </a></li>
                                <li><a href="#" class="a-shop" data-abc="true">Laptops </a></li>
                                <li><a href="#" class="a-shop" data-abc="true">Clothes </a></li>
                                <li><a href="#" class="a-shop" data-abc="true">Accessories </a></li>
                            </ul>
                        </div>
                    </div>
                </article>
                <article class="filter-group">
                    <header class="card-header card-header-shop"> <a href="#" data-toggle="collapse" data-target="#collapse_aside2"
                            data-abc="true" aria-expanded="false" class="collapsed" > <i
                                class="icon-control a-shop icon-control-shop fa fa-chevron-down"></i>
                            <h6 class="title">Price </h6>
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
                <article class="filter-group">
                    <header class="card-header card-header-shop "> <a href="#" data-toggle="collapse" data-target="#collapse_aside3"
                            data-abc="true" aria-expanded="false" class="collapsed" > <i
                                class="icon-control a-shop icon-control-shop fa fa-chevron-down"></i>
                            <h6 class="title">Size </h6>
                        </a> </header>
                    <div class="filter-content collapse" id="collapse_aside3" style="">
                        <div class="card-body"> <label class="checkbox-btn checkbox-shop"> <input type="checkbox"> <span
                                    class="btn btn-light btn-shop"> XS </span> </label> <label class="checkbox-btn checkbox-shop"> <input
                                    type="checkbox"> <span class="btn btn-light btn-shop"> SM </span> </label> <label
                                class="checkbox-btn checkbox-shop"> <input type="checkbox"> <span class="btn btn-light btn-shop"> LG
                                </span> </label> <label class="checkbox-btn checkbox-shop"> <input type="checkbox"> <span
                                    class="btn btn-light btn-shop"> XXL </span> </label> <label class="checkbox-btn checkbox-shop"> <input
                                    type="checkbox"> <span class="btn btn-light btn-shop"> XXXL </span> </label> </div>
                    </div>
                </article>
               
            </div>
        </div>
        <div class="col-md-9 col-12">
        <div class=" row">
            <div class="col-md-4 mt-3">
                <div class="card mb-4 shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                            dy=".3em">Thumbnail</text>
                    </svg>
   
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between ">
                            
                                <button type="button" class="btn btn-sm btn-outline-secondary hover"><img src={{asset("/img/008-loupe.png")}} width="25px"alt=""></button>
                                <button type="button" class="btn btn-sm btn-outline-secondary hover"><img src={{asset("/img/procurement.png")}} width="25px" alt=""></button>
                           
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
       



    </div>
</div>


@endsection
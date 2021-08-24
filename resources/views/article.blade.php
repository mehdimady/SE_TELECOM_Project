@extends('layouts.front')
@section('content')
<div class="container pt-5">
    <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

            <img src={{asset("./storage/product_images/{$product->product_image}")}} class="img-fluid w-50 h-50"
                alt="" >

        </div>
        <!--Grid column-->
        <!--Grid column-->


        <div class="col-md-6 mb-4">

            <!--Content-->
            <div class="p-4">

    

<div class="">{{$product->product_name}}</div>



                
                <div class="mb-3">

                    <a href="">
                        <span class="badge red mr-1">{{$product->product_marque}}</span>
                    </a>
                </div>

                <p class="prix">
                    <span>{{$product->product_price}} Eu</span>
                </p>
                
                <p class="lead font-weight-bold"></p>

                <p>{{$product->product_description}}</p>

                <form class="">
                    <!-- Default input -->
                    <div class="d-flex justify-content-between align-items-center"> <label for="number">Quantité</label>
                        <input type="number" value="1" aria-label="Search" class="form-control " style="width: 100px"></div>
                   
                        <div class="d-flex justify-content-end pt-3">  <button class="btn btn-primary btn-md my-0 text-center  p waves-effect waves-light" type="submit">Add to cart
                            <i class="fas fa-shopping-cart ml-1"></i>
                        </button></div>
                  

                </form>

            </div>
            <!--Content-->

        </div>
        <!--Grid column-->

    </div>
</div>

@endsection
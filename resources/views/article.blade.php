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

                        <div class=" pr-0 col-12 col-md-6 mt-3 d-flex justify-content-center"> <button onclick="location.href='{{ route('addtocart',$product->id) }}'"  type="button"class="btn btn-primary btn-md my-0  p waves-effect waves-light " type="submit" >Add to cart
                            <i class="fas fa-shopping-cart ml-1"></i>
                        </button>
                           
                    </div>
                    </div>  
                
                  


            </div>
            <!--Content-->

        </div>
        <!--Grid column-->

    </div>
</div>

<script>
    $(document).ready(function(){
        var quantity = 1;

        $('.quantity-right-plus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($('#quantity').val());
            $('#quantity').val(quantity + 1);
        });

        $('.quantity-left-minus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($('#quantity').val());
            if(quantity > 1){
                $('#quantity').val(quantity - 1);
            }
        });

    });
</script>
@endsection
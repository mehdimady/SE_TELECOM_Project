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
                    </svg>Revenir au shop</a></h2>
           
@if (session()->has('status'))
<div class="alert alert-success mt-5">
    {{session()->get('status')}}
</div>


@endif
</div></div> 
</div>
@endsection



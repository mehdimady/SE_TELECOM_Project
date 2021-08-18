@extends('layouts.front')
@section('content')
<div class="contact mb-5 mt-5 container nav-margin ">
    <div class="row mt-2 mb-2 ">
        <div class="col-12 col-sm-6  colorStyle">
            <h3 class="mt-2 pt-2 pl-5">Envoyez Nous Un Message</h3>
            @if(Session::has('message_sent'))
            <div class="alert alert-success" role="alert">
                {{Session::get('message_sent')}}
            </div>
            @endif
            <form class="mt-5" method="POST" action="{{route('contact.send')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 w-75 mx-auto">

                    <input type="text"
                        class="actif inputAccueil form-control bg-transparent p-0 rounded-0 border-bottom border-top-0 border-right-0 border-left-0  placeholdercolor "
                        required id="formGroupExampleInput" for="name" name="name" placeholder="Example input placeholder">
                </div>
                <div class="form-floating mb-3 w-75 mx-auto">
                    <input type="email" required for="email" name="email"
                        class="actif form-control bg-transparent inputAccueil p-0 rounded-0 border-bottom border-top-0 border-right-0 border-left-0 placeholdercolor"
                        id="floatingInput" placeholder="name@example.com">

                </div>
                <div class="mb-3 w-75 mx-auto">
                    <input type="text" required
                        class="actif form-control inputAccueil bg-transparent p-0 rounded-0 border-bottom border-top-0 border-right-0 border-left-0 placeholdercolor"
                        id="formGroupExampleInput" placeholder="Phone" for="phone"name="phone">
                </div>
                <div class="form-floating w-75 mx-auto">
                    <textarea
                    for="msg" name="msg"
                        class="actif txtArea form-control bg-transparent p-0 rounded-0 border-bottom border-top-0 border-right-0 border-left-0 placeholdercolor"
                        required placeholder="Ecrivez votre message ici" id="floatingTextarea2"
                        style="height: 100px"></textarea>

                </div>
                <div class="mb-3 mt-3 d-flex justify-content-center">
                    <button type="submit" class="btn btnAccueil w-50 btn-outline-info">Envoyez</button>
                </div>
            </form>
        </div>
        <div class="col-12 info-wrap col-sm-6  ">
            <h3 class="Contact mt-2 pl-4 pt-2 ">Contactez-nous</h3>
            <div class="Contact ml-3 mt-4 pl-5 ">On est ouvert à toute nouvelle suggestion.</div>
            <div class="dbox w-100 mt-4 d-flex align-items-start justify-content-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-map-marker"></span>
                </div>
                <div class="text pl-3 pt-2 ">
                    <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
            </div>
            <div class="dbox w-100 mt-2 d-flex align-items-start justify-content-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-phone"></span>
                </div>
                <div class="text pl-3 pt-2">
                    <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
            </div>
            <div class="dbox w-100 mt-2 d-flex align-items-start justify-content-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-paper-plane"></span>
                </div>
                <div class="text pl-3 pt-2">
                    <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
            </div>
            <div class="dbox w-100 mt-2 d-flex align-items-start justify-content-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-globe"></span>
                </div>
                <div class="text pl-3 pt-2">
                    <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
            </div>
        </div>

    </div>


</div>
    
@endsection
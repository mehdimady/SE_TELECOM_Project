@extends('layouts.front')

@section('content')
<div class="row brandAcceuil " >
    <div class="col-12 col-md-4 col-lg-4">
        <SPAN class="d-flex justify-content-center brandTitre font-weight-bolder mt-5 "> SE
            TELECOM</SPAN><br><br><br>
        <span class="d-flex justify-content-center brandSousTitre font-weight-bold mt-5 mb-4">Contruisons
            Ensemble</span>
        <span class="d-flex justify-content-center brandSousTitre font-weight-bold mb-4">Des</span><br>
        <span class="d-flex justify-content-center brandSousTitre font-weight-bold mb-5">Villes Plus
            Rapides</span>
        <span class="d-flex justify-content-center  "><button type="button"
                class="mt-5 brandBtn btn  btnAccueil btn-light" onclick="window.location.href ='#decouvrir'">
                Nous découvrir</button></span>

                
    </div>

    <div class="col-12 col-md-8 col-lg-8 p-0 d-none d-md-flex  justify-content-center imgAccueil">


        <span class="txtRight d-flex justify-content-center font-weight-bolder mt-5 ">LA FIBRE POUR TOUS</span>

    </div>

    <div class="col-12 col-md-6 p-0  brandTitre font-weight-bolder d-md-none d-flex justify-content-center">

        <span class="text-center "  > La Fibre Pour Tous</span>

    </div>

</div>

<div class="row " id="decouvrir" >

    <div class="colorStyle col-12 py-4 " ><span
            class="  titre d-flex justify-content-center text-center font-weight-bolder " >Qui est SE
            Telecom?</span></div>
</div>
<div class="row  align-items-center overflow-hidden colorStyle">
    <div class="col-12 col-md-6 p-0 ">
        <img class="w-100  h-100" src={{asset("img/50091090_l.jpg")}}>
    </div>
    <div class="col-12 px-5 col-md-6  colorStyle">
        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed praesentium exercitationem
            reiciendis
            maxime commodi minus, dolorum laudantium suscipit voluptates culpa, aut necessitatibus eius nesciunt
            eum repellendus non! Doloremque, quae? Deleniti accusamus, molestias voluptates, corrupti dolore
            consequatur expedita illum laudantium, saepe unde beatae possimus assumenda magnam. Maiores, labore.
            Eum atque vero eligendi eos asperiores fugiat quia, eius ipsa placeat minima blanditiis architecto
            est ut sed dolor, perferendis dicta repudiandae impedit doloribus commodi. Nam culpa optio hic cum

        </p>
        <p> cumque sunt debitis est beatae! Aut illo amet dolore officiis, minus voluptates ad tempora
            necessitatibus dicta numquam temporibus ipsam maiores obcaecati illum officia, explicabo possimus,
            Eum atque vero eligendi eos asperiores fugiat quia, eius ipsa placeat minima blanditiis architecto
            est ut sed dolor, perferendis dicta repudiandae impedit doloribus commodi. Nam culpa optio hic cum
            cumque sunt debitis est beatae! Aut illo amet dolore officiis, minus voluptates ad tempora
            necessitatibus dicta numquam temporibus ipsam maiores obcaecati illum officia, explicabo possimus,
        </p>
    </div>

</div>

<div class=""style="" id="prestations">
<div class="row " >

    <div class="headColor col-12 py-4 "><span
            class=" d-flex justify-content-center text-center font-weight-bolder ">Nos Prestations
        </span></div>
</div>
<div class="row  headColor mt-5" >
    <div class="col-12 col-md-4 mb-5">
        <div>
            <div class='card cardStyle'>
                <img class="cardImg" src={{asset("img/cable-reel.png")}} alt="">
                <div class='info'>
                    <h1 class='cardTitle text-center'>Transport (D1)</h1>
                    <p class='cardDescription text-center'>
                        <ul>
                            <li class="liStyle">Déploiement extérieur jusqu'au point de mutualisation de zone
                                (PMZ)</li>
                            <li class="liStyle">Tirage</li>
                            <li class="liStyle">Intervention NRO</li>
                            <li class="liStyle">Raccordement ferme optique</li>
                            <li class="liStyle">Pose de boitiers de piquage</li>
                            <li class="liStyle">Pose de points d'aboutement</li>
                            <li class="liStyle">Raccordement PMZ avec préparation des différents câbles</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4 mb-5">
        <div>
            <div class='card cardStyle'>
                <img class="cardImg cardImgReseau" src={{asset("img/reseau.png")}} alt="">
                <div class='info'>
                    <h1 class='cardTitle text-center'>Distribution (D2)</h1>
                    <p class='cardDescription text-center'>
                        <ul>
                            <li class="liStyle">Déploiement du PMZ jusqu'au point de branchement (PB)</li>
                            <li class="liStyle">Raccordement du PMZ au point d'aboutement (PA)</li>
                            <li class="liStyle">Raccordement du PA au point de branchement (PB)</li>
                            <li class="liStyle">Contrôle du signal PMZ au PB</li>

                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4 mb-5">
        <div>
            <div class='card cardStyle'>
                <img class="cardImg cardImgWifi" src={{asset("/img/wifi.png")}} alt="">
                <div class='info'>
                    <h1 class='cardTitle text-center'>Raccordement (D3)</h1>
                    <p class='cardDescription text-center'>
                        <ul>
                            <li class="liStyle">Installation et contrôle de la fibre optique chez l'abonné</li>
                            <li class="liStyle">Installation de la prise optique</li>
                            <li class="liStyle">Installation du boitier fibre optique</li>
                            <li class="liStyle">Tests de bon fonctionnement</li>

                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="row ">

    <div class="colorStyle col-12 py-4 "><span
            class="  titre d-flex justify-content-center text-center font-weight-bolder ">Contactez-Nous</span>
    </div>
</div>

<div class="contact mb-5 mt-5 container-fluid d-flex justify-content-center">
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

                    <input type="text" for="name" name="name"
                        class="actif inputAccueil form-control bg-transparent p-0 rounded-0 border-bottom border-top-0 border-right-0 border-left-0  placeholdercolor "
                        required id="formGroupExampleInput" placeholder="Nom">
                </div>
                <div class="form-floating mb-3 w-75 mx-auto">
                    <input type="email" required for="email" name="email"
                        class="actif form-control bg-transparent inputAccueil p-0 rounded-0 border-bottom border-top-0 border-right-0 border-left-0 placeholdercolor"
                        id="floatingInput" placeholder="name@example.com">

                </div>
                <div class="mb-3 w-75 mx-auto">
                    <input type="text" required for="phone"name="phone"
                        class="actif form-control inputAccueil bg-transparent p-0 rounded-0 border-bottom border-top-0 border-right-0 border-left-0 placeholdercolor"
                        id="formGroupExampleInput" placeholder="Phone">
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
            <h3 class="Contact mt-2 pl-5 pt-2 ">Contactez-nous</h3>
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

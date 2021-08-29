         
         <header>
         <div class="row fixed-top justify-content-between">
            <nav class="navbar navbar-expand-md navigation col-12 navbar-dark  px-5">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src={{asset("img/IMG-20200910-WA0002.png")}} alt="" width="150" height="84">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    
                    <ul class="navbar-nav ml-auto">
                        <li class=" liStyle nav-item">
                            <a class="nav-link white mr-md-3 d-flex justify-content-center" href="{{ url('/') }}">Accueil</a>
                        </li>
                        <li class=" liStyle nav-item">
                            <a class="nav-link white mr-md-3 d-flex justify-content-center"
                                href="{{route('contact-us')}}">Contactez-nous</a>
                        </li>
                        <li class=" liStyle nav-item">
                            <a class="nav-link orange mr-md-3 font-weight-bolder d-flex justify-content-center"
                                href="{{route('shop')}}">Shop</a>
                        </li>
                       
                        
                        <li class=" liStyle nav-item">
                            <a class="nav-link white mr-md-3 d-flex justify-content-center" href="{{route('cart')}}">Panier <span class="ml-1 spancolor" >[{{session()->has('cart') ? session()->get('cart')->totalQty :0}}]</span></a>
                        </li>
                    
                       
                    
                        @if (!Auth::check())
                        <li class=" liStyle nav-item">
                            <a class="nav-link white mr-md-3 d-flex justify-content-center" href="{{ route('register') }}">Inscription</a>
                        </li>
                        <li class=" liStyle nav-item">
                            <a class="nav-link white mr-md-3 d-flex justify-content-center" href="{{ route('login') }}">Connexion</a>
                        </li>
                       
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
        
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Se deconnecter
                                </a>
        
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li> 
                        @endif
                    </ul>
                   
                </div>
            </nav>
        </div>
    </header>
        
    

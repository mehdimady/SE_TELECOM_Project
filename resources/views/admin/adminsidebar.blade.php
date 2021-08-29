<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin')}}" class="brand-link">
      <img src="{{asset('backend/dist/img/IMG-20200910-WA0002.png')}}" alt="Setelcom Logo" class="brand-image  elevation-3" style="opacity:1">
      <span class="brand-text font-weight-light"> SE TELECOM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend/dist/img/profil.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{route('admin')}}" class="d-block">OUKIDJA Yacine</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview {{request()->is('admin') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{request()->is('admin') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tableau de bord
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin')}}" class="nav-link {{request()->is('admin') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tableau de bord 1</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview {{request()->is('addcategory') ? 'menu-open' : ''}} 
            {{request()->is('categories') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{request()->is('addcategory') ? 'active' : ''}} 
                {{request()->is('categories') ? 'active' : ''}}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Categories
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('addcategory')}}" class="nav-link {{request()->is('addcategory') ? 'active' : ''}} ">
                  <i class="far fa-file nav-icon"></i>
                  <p>Ajouter une catégories</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('categories')}}" class="nav-link {{request()->is('categories') ? 'active' : ''}} ">
                  <i class="far fa-file nav-icon"></i>
                  <p>Toutes les Categories</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{request()->is('addmarque') ? 'menu-open' : ''}} 
            {{request()->is('marque') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{request()->is('addmarque') ? 'active' : ''}} 
                {{request()->is('marque') ? 'active' : ''}}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Marques
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('addmarque')}}" class="nav-link {{request()->is('addcategory') ? 'active' : ''}} ">
                  <i class="far fa-file nav-icon"></i>
                  <p>Ajouter une marque</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('marque')}}" class="nav-link {{request()->is('categories') ? 'active' : ''}} ">
                  <i class="far fa-file nav-icon"></i>
                  <p>Toutes les marques</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{request()->is('addslider') ? 'menu-open' : ''}} 
            {{request()->is('sliders') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{request()->is('addslider') ? 'active' : ''}} 
                {{request()->is('sliders') ? 'active' : ''}}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Sliders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('addslider')}}" class="nav-link {{request()->is('addslider') ? 'active' : ''}} ">
                  <i class="far fa-file nav-icon"></i>
                  <p>Ajouter un slider</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('sliders')}}" class="nav-link {{request()->is('sliders') ? 'active' : ''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Tout les sliders</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{request()->is('addproduct') ? 'menu-open' : ''}} 
            {{request()->is('products') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{request()->is('addproduct') ? 'active' : ''}} 
                {{request()->is('products') ? 'active' : ''}}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Produits
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('addproduct')}}" class="nav-link {{request()->is('addproduct') ? 'active' : ''}} ">
                  <i class="far fa-file nav-icon"></i>
                  <p>Ajouter les produits</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('products')}}" class="nav-link {{request()->is('products') ? 'active' : ''}} ">
                  <i class="far fa-file nav-icon"></i>
                  <p>Tout les produits</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{request()->is('orders') ? 'menu-open' : ''}} ">
            <a href="#" class="nav-link {{request()->is('orders') ? 'active' : ''}} ">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Commandes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('orders')}}" class="nav-link {{request()->is('orders') ? 'active' : ''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Toutes les commandes</p>
                </a>
              </li>
            </ul>
          </li>
        

     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
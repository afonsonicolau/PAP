<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Olfaire - Administração</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico" />
  </head>

  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <!-- Header Photo -->
            <a class="navbar-brand brand-logo" href="#"><img src="assets/images/logo.svg" alt="logo" /> </a>
          </div>
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  {{-- Profile Image --}}
                  <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  {{-- Username --}}
                  @auth
                    {{ Auth::user()->name }}
                  @endauth
                  <p class="designation">Administrador</p>
                </div>
              </a>
              {{-- Logout --}}
              <div class="ml-auto">
                <a class="btn btn-secondary" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </div>
            </li>
            
            <li class="nav-item nav-category">Menu</li>
            {{-- About us --}}
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#about_us" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Sobre nós</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="about_us">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Editar Texto</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Editar Imagem</a>
                  </li>
                </ul>
              </div>
            </li>
            {{-- Why us --}}
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#why_us" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Porquê nós</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="why_us">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Editar Texto</a>
                  </li>
                </ul>
              </div>
            </li>
            {{-- Produtos --}}
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#products" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Produtos</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="products">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('read_products') }}">Produtos Expostos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Adicionar Produtos</a>
                  </li>
                </ul>
              </div>
            </li>
            {{-- Equipa --}}
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#team" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Equipa</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="team">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Editar Texto</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Editar Imagem</a>
                  </li>
                </ul>
              </div>
            </li>
            {{-- Contactos --}}
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#contacts" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Contactos</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="contacts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Editar Texto</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Editar Informações Gerais</a>
                  </li>
                </ul>
              </div>
            </li>
            {{-- Administradores --}}
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Administradores</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Editar Texto</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Editar Informações Gerais</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
  @yield('content')
          </div>
        </div>
          <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Olfaire MENDES&NICOLAU 2021</span>
          </div>
        </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="/assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="/assets/js/shared/off-canvas.js"></script>
    <script src="/assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/assets/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page-->
    <script src="/assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
  </body>
</html>
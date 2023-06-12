<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/css/owl.theme.default.min.css') }}">
    <link href="{{ asset('assets/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    
  </head>

  <body>
  
      <!--*******************
          Preloader start
      ********************-->
      <div id="preloader">
          <div class="sk-three-bounce">
              <div class="sk-child sk-bounce1"></div>
              <div class="sk-child sk-bounce2"></div>
              <div class="sk-child sk-bounce3"></div>
          </div>
      </div>
      <!--*******************
          Preloader end
      ********************-->
  
  
      <!--**********************************
          Main wrapper start
      ***********************************-->
      <div id="main-wrapper">
  
          <!--**********************************
              Nav header start
          ***********************************-->
          <div class="nav-header">
              <a href="{{ route('dashboard') }}" class="brand-logo bg-light">
                  <img class="logo-abbr" src="{{ asset('assets/images/logo.png') }}"  alt="">
              </a>
  
              <div class="nav-control">
                  <div class="hamburger">
                      <span class="line"></span><span class="line"></span><span class="line"></span>
                  </div>
              </div>
          </div>
          <!--**********************************
              Nav header end
          ***********************************-->
  
          <!--**********************************
              Header start
          ***********************************-->
          <div class="header">
              <div class="header-content">
                  <nav class="navbar navbar-expand">
                      <div class="collapse navbar-collapse justify-content-between">
  
                          <ul class="navbar-nav header-right ml-auto">
                              <li class="nav-item dropdown header-profile">
                                  <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                      <i class="mdi mdi-account"></i> <small>{{Auth::user()->name}}</small>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right">
                                      <a href="./app-profile.html" class="dropdown-item">
                                          <i class="icon-user"></i>
                                          <span class="ml-2">Profile </span>
                                      </a>
                                      <a href="./page-login.html" class="dropdown-item">
                                          <i class="icon-key"></i>
                                          <span class="ml-2">Logout </span>
                                      </a>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </nav>
              </div>
          </div>
          <!--**********************************
              Header end ti-comment-alt
          ***********************************-->
  
          <!--**********************************
              Sidebar start
          ***********************************-->
          <div class="quixnav">
              <div class="quixnav-scroll">
                  <ul class="metismenu" id="menu">
                      <li class="nav-label first">Main Menu</li>
                      <li>
                          <a href="{{ route('dashboard') }}" aria-expanded="false"><i class="icon icon-app-store"></i>
                              <span  class="nav-text">Dashboard</span>
                          </a>
                      </li>
                      <li>
                          <a href="{{ route('agency') }}" aria-expanded="false"><i class="icon icon-globe-2"></i>
                              <span  class="nav-text">Instansi</span>
                          </a>
                      </li>
                      <li>
                          <a href="{{ route('sender') }}" aria-expanded="false"><i class="icon icon-layout-25"></i>
                              <span  class="nav-text">Pengirim</span>
                          </a>
                      </li>
                      <li>
                          <a href="{{ route('letter_in') }}" aria-expanded="false"><i class="icon icon-form"></i>
                              <span  class="nav-text">Surat Masuk</span>
                          </a>
                      </li>
                      <li>
                          <a href="{{ route('letter_out') }}" aria-expanded="false"><i class="icon icon-form"></i>
                              <span  class="nav-text">Surat Keluar</span>
                          </a>
                      </li>
                      <li>
                          <a href="widget-basic.html" aria-expanded="false"><i class="icon icon-single-copy-06"></i>
                              <span  class="nav-text">Disposisi</span>
                          </a>
                      </li>
                      <li>
                          <a href="{{ route('user') }}" aria-expanded="false"><i class="icon icon-single-04"></i>
                              <span  class="nav-text">User</span>
                          </a>
                      </li>
  
                  </ul>
              </div>
  
  
          </div>
          <!--**********************************
              Sidebar end
          ***********************************-->
  
          <!--**********************************
              Content body start
          ***********************************-->
          <div class="content-body">

          @yield('content')

          @if()

          @endif


        </div>
        <!--**********************************
            Content body end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('assets/') }}/vendor/global/global.min.js"></script>
    <script src="{{ asset('assets/') }}/js/quixnav-init.js"></script>
    <script src="{{ asset('assets/') }}/js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="{{ asset('assets/') }}/vendor/raphael/raphael.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/morris/morris.min.js"></script>


    <script src="{{ asset('assets/') }}/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="{{ asset('assets/') }}/vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="{{ asset('assets/') }}/vendor/flot/jquery.flot.js"></script>
    <script src="{{ asset('assets/') }}/vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset('assets/') }}/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="{{ asset('assets/') }}/vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="{{ asset('assets/') }}/vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="{{ asset('assets/') }}/js/dashboard/dashboard-1.js"></script>

</body>

</html>
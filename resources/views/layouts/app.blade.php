<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io/product/free-bootstrap-admin-template/
* Copyright (c) 2023 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
-->
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Survey all. Your home survey.">
    <meta name="author" content="Survey-all">
    <meta name="keyword" content="Surveyors, Survey-all">
    <title>SurveyAll</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset ('resources/assets/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset ('resources/assets/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset ('resources/assets/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset ('resources/assets/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset ('resources/assets/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset ('resources/assets/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset ('resources/assets/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset ('resources/assets/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset ('resources/assets/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset ('resources/assets/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset ('resources/assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset ('resources/assets/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset ('resources/assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{asset ('resources/assets/favicon/manifest.json') }}">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset ('resources/assets/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{asset ('resources/vendors/simplebar/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{asset ('resources/css/vendors/simplebar.css') }}">
    <!-- Main styles for this application-->
    <link href="{{asset ('resources/css/style.css') }}" rel="stylesheet">
  </head>
  <body>
    @include('partials.sidebar')
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
        <div class="container-fluid">
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
              <use xlink:href="{{ asset('resources/vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
            </svg>
          </button>
            <a class="header-brand d-md-none" href="#">
                <img class="sidebar-brand-narrow" width="118" height="46" src="{{ asset('img/logo/logo-icon-only-colored.svg') }}" alt="brand-logo" >
            </a>
          
          <ul class="header-nav ms-3">
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md">
                    {{-- <img class="avatar-img" src="resources/assets/img/avatars/8.jpg" alt="user@email.com"> --}}
                    <img class="avatar-img" src="{{ asset('img/logo/logo-icon-only-colored.svg') }}" alt="user@email.com" >
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Account</div>
                </div>
                <a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{ asset('resources/vendors/@coreui/icons/svg/free.svg#cil-bell') }}"></use>
                  </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a>
                 
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Settings</div>
                </div>

                <a class="dropdown-item" href="{{ route('admin.profile')}}">
                  <svg class="icon me-2">
                    <use xlink:href="{{ asset('resources/vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                  </svg> Profile
                </a>

                <a class="dropdown-item" href="{{ route('admin.settings')}}">
                    <svg class="icon me-2">
                        <use xlink:href="{{ asset('resources/vendors/@coreui/icons/svg/free.svg#cil-settings') }}"></use>
                    </svg> Settings
                </a>
                  
                <div class="dropdown-divider"></div>
                
                  <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                  <svg class="icon me-2">
                    <use xlink:href="{{ asset('resources/vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}"></use>
                  </svg> Logout</a>
                  
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </div>
            </li>
          </ul>
        </div>
        {{-- <div class="header-divider"></div>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                <span>Home</span>
              </li>
              <li class="breadcrumb-item active"><span>Dashboard</span></li>
            </ol>
          </nav>
        </div> --}}
      </header>
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            @yield('content')
        </div>
      </div>
      <footer class="footer">
        <div><a href="/"><strong>SurveyAll<span style="font-size:1rem;"> &#174;</span></strong>
        </div>
        {{-- <div class="ms-auto">Developed by &nbsp;<a href="https://zettabyte.com/">Zettabyte</a></div> --}}
      </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{asset ('resources/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
    <script src="{{asset ('resources/vendors/simplebar/js/simplebar.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>

    @yield('scripts')

  </body>
</html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- fontawesome -->
  <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
  <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item {{ request()->getPathInfo() === "/about" ? "active" : "" }}">
            <a class="nav-link" href="{{ url('/about') }}">About Us</a>
          </li>
          <li class="nav-item {{ request()->getPathInfo() === "/services" ? "active" : "" }}">
            <a class="nav-link" href="{{ url('/services') }}">Services</a>
          </li>
          <li class="nav-item {{ request()->getPathInfo() === "/research" ? "active" : "" }}">
            <a class="nav-link" href="{{ url('/research') }}">Research</a>
          </li>
          <li class="nav-item {{ request()->getPathInfo() === "/team" ? "active" : "" }}">
            <a class="nav-link" href="{{ url('/team') }}">Team</a>
          </li>
          <li class="nav-item {{ request()->getPathInfo() === "/contact" ? "active" : "" }}">
            <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
          </li>

        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            {{-- @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
            @endif --}}
          @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>

  <main class="py-4 bg-dark pt-5 mt-5 text-light">
    @yield('content')
  </main>

  <footer class="contact-section bg-dark">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100 bg-secondary">
            <div class="card-body text-center text-warning">
{{--              <i class="fas fa-map-marked-alt text-primary mb-2"></i>--}}
              <img src="{{ asset('img/address.png') }}" width="25px" alt="Address icon">
              <h4 class="text-uppercase m-0">Address</h4>
              <hr class="my-4">
              <div class="small">Lorem ipsum dolor sit amet</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100 bg-secondary">
            <div class="card-body text-center text-warning">
{{--              <i class="fas fa-envelope text-primary mb-2"></i>--}}
              <img src="{{ asset('img/email.png') }}" width="25px" alt="email icon">
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small">
                <a href="#" class="text-warning">hello@yourdomain.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100 bg-secondary">
            <div class="card-body text-center text-warning">
{{--              <i class="fas fa-mobile-alt text-primary mb-2"></i>--}}
              <img src="{{ asset('img/phone.png') }}" width="25px" alt="phone icon">
              <h4 class="text-uppercase m-0">Phone</h4>
              <hr class="my-4">
              <div class="small">+44 (0) 2920-1234</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
        <a href="#" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-github"></i>
        </a>
      </div>

    </div>
  </footer>
</div>
</body>
</html>

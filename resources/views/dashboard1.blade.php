<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>BitStream</title>
        
      
      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
      <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
      <link href="{{asset('css/features_boxed.css')}}" rel="stylesheet"/>
      <link href="{{asset('css/navigation_button.css')}}" rel="stylesheet"/>
      <link href="{{asset('css/styles.css')}}" rel="stylesheet"/>
      <script src="{{asset('js/jquery.min.js')}}" async defer></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">  
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aubrey">
      
      
      
      <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
      
          <!-- CSRF Token -->
          <meta name="csrf-token" content="{{ csrf_token() }}">
      
          <title>{{ config('app.name', 'Laravel') }}</title>
      
          <!-- Scripts -->
          <script src="{{ asset('js/app.js') }}" defer></script>
      
          <!-- Fonts -->
          <link rel="dns-prefetch" href="https://fonts.gstatic.com">
          <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
      
          <!-- Styles -->
          <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      
        
      </head>

<body style="text-align:center">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container" id="cont">
            <a class="navbar-brand" href="{{ url('/') }}">
            BitStream
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
    <div class="features-boxed" style="background-color:rgb(5,32,45);">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="color:#f9efc1;">Dashboard</h2>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box" style="background-color:rgba(170,170,170,0.15);"> style="width:80px;height:80px;">
                        <h3 class="name" style="color:#c5eae7;">C++</h3>
                        <p class="description" style="color:#c5eae7;">C++ is a general-purpose programming language. It has imperative, object-oriented and generic programming features, while also providing facilities for low-level memory manipulation</p>
                        <a href ="{{ route('cplussection') }}" class="btn btn-primary" type="button"
                            style="background-color:#f96302;margin:5px;">Practice</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box" style="background-color:rgba(170,170,170,0.15);"> style="width:80px;height:80px;">
                        <h3 class="name" style="color:#c5eae7;">Java</h3>
                        <p class="description" style="color:#c5eae7;">Java is a general-purpose computer-programming language that is concurrent &amp; object-oriented, and specifically designed to have as few implementation dependencies as possible.</p>
                        <a href="{{ route('javasection') }}" class="btn btn-primary" type="button"
                            style="background-color:#f96302;margin:5px;">Practice</a></div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box" style="background-color:rgba(170,170,170,0.15);color:#c5eae7;">
                        <h3 class="name" style="color:#c5eae7;">Python</h3>
                        <p class="description" style="color:#c5eae7;"><strong>Python is an interpreted high-level programming language for general-purpose programming. Python has a design philosophy that emphasizes code readability, notably using significant whitespace</p>
                        <a href="{{ route('pythonsection') }}"
                            class="btn btn-primary" type="button" style="background-color:#f96302;margin:5px;">Practice</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-basic" style="background-color:rgb(5,32,45);">
        <footer>
            <div class="social" style="color:#f9ddd6;"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline"
                style="color:#f9efc1;">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright" style="color:#f9efc1;">Bitstream© 2018</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
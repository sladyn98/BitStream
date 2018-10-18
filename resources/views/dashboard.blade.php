<!DOCTYPE html>
<html lang="en" >
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

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-color:rgb(17,1,1);">
            <div class="container"><a class="navbar-brand" href="#" style="color:#108c76;font-family:'Alfa Slab One', cursive;">BitStream</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="font-family:ABeeZee, sans-serif;color:#f9efc1;">Practice</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color:#f9efc1;font-family:ABeeZee, sans-serif;">Compete</a></li> 
                    </ul>
               
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
                    
                    <span class="navbar-text actions"> </span></div>
    </div>
    </nav>
    </div>
    <div class="features-boxed"><div class="container">
    <div class="intro">
        <h2 class="text-center">Dashboard</h2>
    </div>
    <div class="row justify-content-center features">
        <div class="col-sm-6 col-md-5 col-lg-4 item">
            <div class="box"><img />
                <h3 class="name">C++</h3>
                <p class="description"><br />C++ is a general-purpose programming language. It has imperative, object-oriented and generic programming features, while also providing facilities for low-level memory manipulation<br /><br /></p><button class="btn btn-primary"
                    type="button">Practice</button></div>
        </div>
        <div class="col-sm-6 col-md-5 col-lg-4 item">
            <div class="box"><img />
                <h3 class="name">Java</h3>
                <p class="description"><br />Java is a general-purpose computer-programming language that is concurrent &amp; object-oriented, and specifically designed to have as few implementation dependencies as possible.<br /><br /></p><button class="btn btn-primary" type="button">Practice</button></div>
        </div>
        <div class="col-sm-6 col-md-5 col-lg-4 item">
            <div class="box"><img />
                <h3 class="name">Algorithms</h3>
                <p class="description"><br /><strong>Algorithms </strong>can perform calculation, data processing and automated reasoning tasks.<strong>Algorithm </strong>can be expressed within a finite amount of space and time .<br /><br /><br/></p><button class="btn btn-primary"
                    type="button">Practice</button></div>
        </div>
    </div>
</div></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
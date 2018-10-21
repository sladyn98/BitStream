<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home_final</title>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
<link href="{{asset('css/home1.css')}}" rel="stylesheet"/>
<link href="{{asset('css/home2.css')}}" rel="stylesheet"/>
<link href="{{asset('css/home3.css')}}" rel="stylesheet"/>
<script src="{{asset('js/jquery.min.js')}}" async defer></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aubrey">
</head>

<body style="background-color:rgb(5,32,45);">
   
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel"  style="background-color:rgb(255,255,255);">
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

    <h1 style="color:#108c76;font-size:90px;margin:180px 420px; text-align:center">Bitstream</h1>
    <div class="footer-basic" style="background-color:rgb(5,32,45);">
        <footer>
            <ul class="list-inline" style="color:#f9efc1; text-align:center">
                <li class="list-inline-item " style="text-align:center"></li>
                <li class="list-inline-item"></li>
                <li class="list-inline-item"><a href="#">About us&nbsp;</a></li>
                <li class="list-inline-item"><a href="#">Terms &amp; Policies</a></li>
                <li class="list-inline-item"></li>
            </ul>
            <p class="copyright">Bitstream © 2018</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
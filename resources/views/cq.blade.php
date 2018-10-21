<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home_final</title>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
<link href="{{asset('css/javaq.css')}}" rel="stylesheet"/>
<script src="{{asset('js/jquery.min.js')}}" async defer></script>
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

<body style="background-color:rgb(5,32,45);">
    
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-color:rgb(5,32,45);">
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
                                <a id="navbarDropdown"  style="color:#f9efc1" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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


    <div class="jumbotron" style="padding:10px;background-color:rgb(5,32,45);">
        <h1 style="color:#f9efc1;"><strong>Welcome to C++!</strong><br></h1>
        <p style="font-size:20px;color:#f9efc1;"><br>Welcome to the world of C++! In this challenge, we practice printing to stdout.<br>Complete the&nbsp;<em>main</em>&nbsp;method by copying the two lines of code below and pasting them inside the body of your&nbsp;<em>main</em>&nbsp;method.<br><br>printf("Hello world");<br>printf("Hello world");<br><br><br></p>
        <p style="text-align: center">
            <a class="btn btn-primary" role="button" href="{{route('code_editor',['id'=>"C01",'lang'=>"C"])}}" style="background-color:#f96302;color:#f9efc1;">Solve</a></p>
    </div>
    <div class="footer-basic" style="background-color:rgb(5,32,45);">
        <footer>
            <ul class="list-inline" style="color:#f9efc1;">
                <li class="list-inline-item"></li>
                <li class="list-inline-item"></li>
                <li class="list-inline-item"><a href="#">About Us</a></li>
                <li class="list-inline-item"><a href="#">Terms &amp; Policies</a></li>
                <li class="list-inline-item"></li>
            </ul>
            <p class="copyright" style="color:#f9efc1;">Bitstream© 2018</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
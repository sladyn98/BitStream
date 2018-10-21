<head>

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
  
</head>



<link href="{{asset('css/wrong_style.css')}}" rel="stylesheet"/>
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
  <circle class="path circle" fill="none" stroke="#D06079" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
  <line class="path line" fill="none" stroke="#D06079" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="34.4" y1="37.9" x2="95.8" y2="92.3"/>
  <line class="path line" fill="none" stroke="#D06079" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="95.8" y1="38" x2="34.4" y2="92.2"/>
</svg>
<p class="error">Sorry, Wrong Answer, Please try again!</p>


{{-- <button id="run" class="btn orange" href="{{route('/dashboard')}}" type="button"><span>Return Home</span></button> --}}

<a href="{{ route('dashboard') }}" id = "wrong" class="btn orange"> Return Home </a>
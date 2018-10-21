

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Editor</title>

  <style type="text/css" media="screen">
    body {
        overflow: hidden;
            }

    #editor {
        position: absolute;
        top: 7%;
        bottom: 12px;
        left: 0;
        right: 0;
    }

    
   .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background:rgb(5, 35, 42);
    color: white;
    text-align: center;
    
}


.btn {
 

  display: block;
  padding: 0;
  width: 400px;
  overflow: hidden;

  border-width: 0;
  outline: none;
  border-radius: 2px;
  box-shadow: 0 1px 4px rgba(0, 0, 0, .6);
  
  background-color: #2ecc71;
  color: #ecf0f1;
  
  transition: background-color .3s;
}


  </style>


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
<body>

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









<pre id="editor">
</pre>

<script src="{{ URL::asset('src-noconflict/ace.js') }}" type="text/javascript" ></script>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}

<script >

   var link = window.location.href;
   var url = new URL(link);
   var x = url.toString();
   var code_lang = url.toString().split('/')[5];
   var problem_code = url.toString().split('/')[4];
   console.log(url.toString().split('/')[5]);
   console.log(url.toString().split('/')[4]);

    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.getSession().setMode("ace/mode/c_cpp");
    editor.setHighlightActiveLine(false);


    $(document).ready(function(){
        $('#compile').click(function() {

        var x = editor.getValue();
        $.ajax({
        url: '/runner',
        type: 'GET',
        async: false,
        data :{'value' : x,
               'language': code_lang
        },
        success: function(result){
         //console.log(result);
          var link = window.location.href;
           var url = new URL(link);
           console.log("we have success");
           console.log(result);
         
        var answer;


        $.ajax({
    type: "Get",
    url: "/data1.json",
    dataType: "json",
    success: function(data) {
      console.log(data);


      


 for(var i =0;i<data.length;i++){
               if(data[i].id==problem_code){
                answer = data[i].test;
                
                answer1 = result.trim();
            
                

                console.log("result"+result.trim().length);
                 console.log("answer"+answer.length);
                 var x = answer1.localeCompare(answer);
                 if(x==0)
                  window.location.href = "http://localhost:8000/output";

                  else
                  window.location.href = "http://localhost:8000/wrong";
                 


               }
           }
    },
    error: function(){
        alert("json not found");
    }
});


    //      $.getJSON('data1.json', function(json) {

    //        console.log("Entering json");
    //        for(var i =0;i<json.length;i++){
    //            if(json[i].id=="C01"){
    //             answer = json[i].test;
                
    //             answer1 = result.trim();
            
                

    //             console.log("result"+result.trim().length);
    //              console.log("answer"+answer.length);
    //              var x = answer1.localeCompare(answer);
    //              if(x==0)
    //               window.location.href = "output";

    //               else
    //               window.location.href = "wrong";
                 


    //            }
    //        }
    //        //console.log(json); // this will show the info it in firebug console
    //   });


        
         var aaa = JSON.stringify(answer);
         console.log("answer"+aaa);
         if(result===answer){
          console.log("WOW");
         // window.location.href = "output";
          
        }
    
        },
        error:function(){
            window.location.href = "http://localhost:8000/wrong";
        }
        
        
        });




    });
    });
    
</script>

  
</body>


      <div class="footer">
       <!-- <a   type="button" class="btn btn-default">Run</a>-->
       <button id = "compile">Compile and Run</button>
       {{-- <button type="button">Click Me</button> --}}
      </div>




</html>


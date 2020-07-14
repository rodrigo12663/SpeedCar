<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Speed Car</title>
        <link rel="shortcut icon" href="assets/css/imagens/logos.ico" >
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style
            .links > #login {
                
            }
            #login{
                display: inline-block;
                color:black;
                list-style: none;
                outline: none;
                text-decoration: none;
                padding: 6px 36px;
                margin: 10px ;
                border-radius: 40px;
                text-transform: uppercase;
                letter-spacing: 2px;
                border: 1px solid  #f8a736;
                -webkit-transition: 0.5s ease-in;
                -moz-transition: 0.5s ease-in;
                -o-transition: 0.5s ease-in;
                transition: 0.5s !important;

            }
            #logins{
                display: inline-block;
                color:white;    
                list-style: none;
                outline: none;
                text-decoration: none;
                padding: 6px 36px;
                margin: 10px ;
                border-radius: 40px;
                text-transform: uppercase;
                letter-spacing: 2px;
                background:#f8a736 ;
                -webkit-transition: 0.5s ease-in !important;
                -moz-transition: 0.5s ease-in !important;
                -o-transition: 0.5s ease-in !important;
                transition: 0.5s !important ;

            }
           
            #logins:hover{
                transition: 0.5s  !important;
                color: white;
                -webkit-transition: 0.5s ease-in !important;
                -moz-transition: 0.5s ease-in !important; 
                -o-transition: 0.5s ease-in !important;
                
            }
            
            
            #login:hover{
                transition: 0.5s  !important;
               
                background:#f8a736 ;
                color: white;
                -webkit-transition: 0.5s ease-in !important;
                -moz-transition: 0.5s ease-in !important; 
                -o-transition: 0.5s ease-in !important;
                
            }
            nav{
                height:60px;
                background: white;
            
            }

            
        </style>
    </head>
    <body>
        
        @include('includes.include_header')

        @include('includes.include_ofertas')
        
      

        <div id="teste" class="d-flex justify-content-end fixed-top ">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                                    <li class="nav-item d-flex justify-content-center ">
                                        @if (Route::has('login'))
                                        <div class="links">
                                            @auth
                                            
                                            <a id="login"class="nav-link" style="cursor: pointer;" onclick="event.preventDefault(); document.querySelector('form.logout').submit()">Sair</a>
                                            <form action="{{route('logout')}}" class="logout" style="display: none;" method="POST">
                                                @csrf
                                            </form>
                                            @else
                                          
                            
                                                 @if (Route::has('register'))
                                                <a class="nav-link" id="login" href="{{ route('register') }}">Register</a>
                                                @endif
                                                <a class="nav-link" id="logins" href="{{ route('login') }}">Login</a>
                                 
                                            @endauth

                                            
                                          
                                        </div>
                                    @endif
                                    </li>
                                </li>      
                </div>
              </nav>
        </div>
    </body>
</html>



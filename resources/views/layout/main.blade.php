
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>
             {{config('app.name', 'SLASHED')}} 
            {{--  @yield('title', 'SLASHED')  --}}
        </title>

        <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}"/>
        <link rel="stylesheet" href="{{asset('/css/bootstrap-theme.css')}}"/>
        <link rel="stylesheet" href="{{asset('/css/foundation.css')}}"/>
        <link rel="stylesheet" href="{{asset('/css/style.css')}}"/> 
        <link rel="stylesheet" href="{{asset('/fonts/font-awesome.css')}}"/>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Knewave" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
        {{--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>  --}}

    </head>
    
    <body>
        <!-- container for the whole page minus background -->
        <div class="container img-responsive bg">
            <!-- header/navigator -->
            <header class="row header" style="background: #dc7d09;">

                <nav class= "col-sm-10 col-sm-offset-1">

                    <div style="color:white" class="top-bar-left">
                        <h4 class="brand-title" style="font-family:'Caveat',cursive; margin-bottom:0px !important; color: #4b5054; text-decoration: none">
                        <a href="{{url('/')}}"><i class="fa fa-home fa-lg" aria-hidden="true" style="font-size:1em"></i>
                            #SLASHED <small style="color:#6f6868;">by Cybill</small>
                        </a>
                        </h4>
                    </div>

                    <div class="top-bar-right">

                        <ul class="list-inline menu">
                            {{--  <li><a href="{{route('home')}}" class="header-nav" style="color: #4b5054; font-size: 12px; text-decoration: none">HOME</a></li>  --}}
                            <li><a href="{{route('hairs')}}" class="header-nav" style="color: #4b5054; font-size: 12px; text-decoration: none">HAIRS</a></li>
                            
                            <li><a href="{{url('/garments')}}" class="header-nav" style="color: #4b5054; font-size: 12px; text-decoration: none">GARMENTS</a></li>
                            
                            <li><a href="#" class="header-nav" style="color: #4b5054; font-size: 12px; text-decoration: none">CONTACT</a></li>
                            
                            <li><a href="#" class="header-nav" style="color: #4b5054; font-size: 12px; text-decoration: none"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>CART<span class="alert badge">8</span></a></li>
                        </ul>
                    </div>
                </nav>
            </header>

            @yield('content')
            
        <footer class="row footer">
                <div class="col-sm-6 col-sm-offset-3 text-center" style="display: inline-flex;padding-top: 6px;">
                    <span class="connectWithUs">Connect With Us</span>	
                    <div class="connect"><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
                    <div class="connect"><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
                    <div class="connect"><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></div>
                    <div class="connect"><a href="javascript:void(0)" target="_blank"><i class="fa fa-facebook" aria-hidden="true" style= "font-size:22px;"></i></a></div>
                    <div class="connect"><a href="javascript:void(0)" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a></div>
                    <div class="connect"><a href="javascript:void(0)" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></div>
                </div>
            </footer>   
        </div> <!-- end: container for the whole page -->
        <script src="{{asset('/js/jquery.js')}}"></script>
    <script src="{{asset('/js/myApp.js')}}"></script>
    </body>
</html>
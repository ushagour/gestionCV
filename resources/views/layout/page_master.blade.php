<!DOCTYPE html>
<html lang="en">
<head>
  <title>GESTION CVs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" >
  <link href="{{ URL::asset('css/MyCustomCSS.css') }}" rel="stylesheet" type="text/css" >

  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="{{ URL::asset('js/Myjs.js') }}"></script>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <b class="navbar-brand" >Logo</b>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ url('/')}}">{{__('home.home')}}</a></li>
        <li><a href="#band">{{__('home.band')}}</a></li>
      @guest
    

         <!-- Authentication Links -->
   
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('home.login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('home.Register') }}</a>
                                </li>
                            @endif
                        @else
                                <!-- <li><a href="#tour">TOUR</a></li>
 -->
        <!-- <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Merchandise</a></li>
            <li><a href="#">Extras</a></li>
            <li><a href="#">Media</a></li> 
          </ul>
        </li> -->
    
        <li><a href="{{ url('/mesCV') }}">{{__('home.mycvs')}}</a></li>


        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
          <!-- {{__('home.welcome_sess')}} -->

          <span class="date"></span>
          {{ Auth::user()->name }}
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('home.logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>

          </ul>
        </li>
                          
                        @endguest
        <!-- <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li> -->
        <li><a href="{{ url('locale/en') }}" ><i class="fa fa-language"></i> EN</a></li>

<li><a href="{{ url('locale/fr') }}" ><i class="fa fa-language"></i> FR</a></li>

        <!-- <li><a href="{{ url('/', config('app.locale') == 'en' ? 'fr' : 'en') }}">{{ config('app.locale') == 'en' ? 'fr' : 'en' }}</a></li> -->
      </ul>
    </div>
  </div>
</nav>


@yield("content")


<!-- Footer -->
<footer class="footer text-center">
  <p> {{__('home.footer')}} <a href="https://www.site.com" data-toggle="tooltip" title="Visit w3schools"> Cvs-app</a></p> 
</footer>



</body>
</html>

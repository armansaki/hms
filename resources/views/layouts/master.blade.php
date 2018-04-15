<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Teacher Course Distribution System') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
        <nav class="navbar navbar-default navbar-static-top panel-head-color">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                       <b style="color: white"> {{ config('app.name', 'Teacher Course Distribution System') }} </b>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-left">
                    @auth
                      @if(Auth::user()->role==1)
                  			@include('layouts.admin_navbar')
                      @else


                      @endif
                     @else
                     &nbsp;
                    @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
												<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
												<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    <b style="color: white"> {{ Auth::user()->name }} </b> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                              @if(Auth::user()->role==1)
                                    <li>
                                       <a href="">
                                         Settings
                                        </a>
                                    </li>
                              @endif
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
 		   @if (session('success'))
       		      <div class="col-md-8 col-md-offset-2">
                  <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                        {{ session('success') }}
            		  </div>
		           </div>
      @elseif (session('failed'))
       		      <div class="col-md-8 col-md-offset-2">
    			          <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            {{ session('failed') }}
                  </div>
		            </div>
                    @endif
				  @yield('content')

     <nav class="navbar navbar-default navbar-fixed-bottom" style="background-color:#245269;text-align: center; padding-top: 10px;color:white;">
		<footer ><?php echo '&copy  Arman Saki   ' . date('Y'); ?></footer>
    </nav>
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="{{ asset('js/gmaps.js') }}"></script>
		<script src="{{ asset('js/smoothscroll.js') }}"></script>
		<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>

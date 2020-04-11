<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="{{ asset('css/lib/slick/slick.css') }}">
  	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  	<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">


</head>
<body ondblclick="dbClicked()">
    <div id="app">
      <header>
  			<div class="container">
  				<div class="header-data">
  					<div class="logo">
  						<a href="index.html" title=""><img src="images/logo.png" alt=""></a>
  					</div><!--logo end-->
  					<div class="search-bar">
  						<form>
  							<input type="text" name="search" placeholder="Search...">
  							<button type="submit"><i class="fa fa-search"></i></button>
  						</form>
  					</div><!--search-bar end-->
  					<nav >
  						<ul>
  							<li>
  								<a href="{{ Route('login') }}" title="">Login</a>
  							</li>
  							<li>
  								<a href="{{ Route('register') }}" title="">Signup</a>
  							</li>



  						</ul>
  					</nav><!--nav end-->

  						</div><!--user-account-settingss end-->
  					</div>
  				</div><!--header-data end-->
  			</div>
  		</header><!--header end-->



      @yield('content')

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.mCustomScrollbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/lib/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

    <script type="text/javascript">
    function dbClicked() {
      var selObj = window.getSelection();
      alert(selObj);
    }
    </script>
</body>
</html>

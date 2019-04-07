<!DOCTYPE html>
<html>

<head>

	<title>@yield('title', 'Millkaiser')</title>

	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/theme.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>

    <div class="container">
      <div class="starter-template">
		    <nav class="navbar navbar-inverse navbar-fixed-top">
		      <div class="container">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand" href="#"><img src="{{URL::asset('/images/logo_white.png')}}" alt="logo" height="30" width="30"></a>
		          {{-- <a href="#" class="navbar-left"><img src="/path/to/image.png"></a> --}}
		        </div>
		        <div id="navbar" class="collapse navbar-collapse">
		          <ul class="nav navbar-nav">
		            <li class="active"><a href="/">Home</a></li>
		            <li><a href="/projects">Projects</a></li>
		            <li><a href="/about">About Us</a></li>
		            <li><a href="/contact">Contact</a></li>
		            <li><a href="/muehlen">Mühlen</a></li>
		            <li><a href="/waagen">Waagen</a></li>
		            <li><a href="/favmills">Lieblingsmühlen</a></li>
		            <li><a href="/login">Login</a></li>
		          </ul>
		        </div><!--/.nav-collapse -->
		      </div>
		    </nav>





			<ul>
				@yield('content')
			</ul>



		</div>
	</div>
	

	<script src="/js/app.js"></script>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>
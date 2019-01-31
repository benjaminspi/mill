<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Millkaiser')</title>
</head>
<body>
	Menu:
	<ul>
		<a href="/">Home</a>
		<a href="/contact">Contact</a>
		<a href="/about">About Us</a>
	</ul>

	<ul>
		@yield('content')
	</ul>

</body>
</html>
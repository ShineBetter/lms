<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>404 HTML Template by Colorlib</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Kanit:200" rel="stylesheet">

	<!-- Font Awesome Icon -->
	<link type="text/css" rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('css/404-style.css')}}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>403</h1>
			</div>
			<h2>دسترسی غیر مجاز</h2>
			<p> فقط دسترسی معلمان به این صفحه مجاز می باشد <a href="{{route('index')}}">برگشت به صفحه اصلی</a></p>
			<div class="notfound-social">
				<a href="#"><i class="fas fa-facebook"></i></a>
				<a href="#"><i class="fas fa-twitter"></i></a>
				<a href="#"><i class="fas fa-pinterest"></i></a>
				<a href="#"><i class="fas fa-google-plus"></i></a>
			</div>
		</div>
	</div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>آموزشگاه || @section('title') میربلند@show</title>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/all.min.css')}}"/>
    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="/images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/line-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/fancybox.css')}}">
    <link rel="stylesheet" href="{{ asset('css/tooltipster.bundle.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link href='https://cdn.fontcdn.ir/Font/Persian/Vazir/Vazir.css' rel='stylesheet' type='text/css'>

    <!-- end inject -->
</head>
<body>
@includeWhen(empty($loader),'webSit.layout.loader')
@includeWhen(empty($header),'webSit.layout.header')
@yield('cnt')
@includeWhen(empty($header),'webSit.layout.footer')
@includeIf('layout.js')
</body>
</html>

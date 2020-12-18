<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>پنل کاربری || @section('title')آموزشگاه@show</title>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset("template_sit/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("template_sit/css/font-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("template_sit/css/line-awesome.css") }}">
    <link rel="stylesheet" href="{{ asset("template_sit/css/animate.min.css") }}">
    <link rel="stylesheet" href="{{ asset("template_sit/css/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("template_sit/css/owl.theme.default.min.css") }}">
    <link rel="stylesheet" href="{{ asset("template_sit/css/bootstrap-select.min.css") }}">
    <link rel="stylesheet" href="{{ asset("template_sit/css/magnific-popup.css") }}">
    <link rel="stylesheet" href="{{ asset("template_sit/css/fancybox.css") }}">
    <link rel="stylesheet" href="{{ asset("template_sit/css/jquery.filer.css") }}">
    <link rel="stylesheet" href="{{ asset("template_sit/css/tooltipster.bundle.css") }}">
    <link rel="stylesheet" href="{{ asset("template_sit/css/jqvmap.css") }}">
    <link rel="stylesheet" href="{{ asset("template_sit/css/style.css") }}">
    <link href='https://cdn.fontcdn.ir/Font/Persian/Vazir/Vazir.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!-- end inject -->
    <style>

        .dashboard-sidebar .dashboard-nav-container .side-menu-ul .sidenav__item a{
            border-radius: 10px !important;
        }
        .dashboard-sidebar .dashboard-nav-container .side-menu-ul .sidenav__item.page-active, .dashboard-sidebar .dashboard-nav-container .side-menu-ul .sidenav__item.active{
            border-radius: 10px;
            width: 95%;
            margin: auto;
        }
        .dashboard-content-wrap{
            direction: rtl;
            text-align: right;
        }

    </style>
    @yield('css')
</head>
<body>
@includeWhen(empty($loader),'backend.admin.partial.loader')
@includeWhen(empty($header),'backend.admin.partial._header')
@section('cntd')
    <section class="dashboard-area">
    @includeWhen(empty($sidebar),'backend.admin.partial._dashboardSidebar')
    </section>
@show
@includeWhen(empty($footer),'backend.admin.partial._footer')


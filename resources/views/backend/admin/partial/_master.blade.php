<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
        .question{
            height: 22.5rem;
            border: 1px solid #0002;
            overflow: auto;
            background-color: #ddfde9!important;
            border-radius: 0px 0px 8px 8px;
        }
        .circle{
            color: #0c0c0c;
            border-radius: 50%;
            height: 28px;
            width: 28px;
            display: inherit;
            padding: 0px;
            margin-top: 8px;
            box-shadow: 0px 1px 6px 4px #1111;
            background-color: #f9f3f3!important;
            padding-top: 1px;
            margin-bottom: 6px;
        }
        .time-space{
            border-radius: 8px 8px 1px 1px;
            background: #8fd5a8!important;
            padding: 1rem;
        }
        .que{
            direction: rtl;text-align: right;
        }
        .que-header{
            border-radius: 4px 4px 0 0;
            background: #8fd5a8!important;
        }
        @media only screen and (max-width: 600px) {

            .question{
                height: 12rem;
            }

        }
        @yield('css')
    </style>
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


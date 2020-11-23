
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
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
    <!-- template js files -->
{{--    <script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>--}}
{{--    <script src="{{ asset('js/popper.min.js')}}"></script>--}}
{{--    <script src="{{ asset('js/bootstrap.min.js')}}"></script>--}}
{{--    <script src="{{ asset('js/bootstrap-select.min.js')}}"></script>--}}
{{--    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>--}}
{{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>--}}
{{--    <script src="{{ asset('js/isotope.js')}}"></script>--}}
{{--    <script src="{{ asset('js/waypoint.min.js')}}"></script>--}}
{{--    <script src="{{ asset('js/jquery.counterup.min.js')}}"></script>--}}
{{--    <script src="{{ asset('js/particles.min.js')}}"></script>--}}
{{--    <script src="{{ asset('js/particlesRun.js')}}"></script>--}}
{{--    <script src="{{ asset('js/fancybox.js')}}"></script>--}}
{{--    <script src="{{ asset('js/wow.js')}}"></script>--}}
{{--    <script src="{{ asset('js/date-time-picker.js')}}"></script>--}}
{{--    <script src="{{ asset('js/jquery.filer.min.js')}}"></script>--}}
{{--    <script src="{{ asset('js/emojionearea.min.js')}}"></script>--}}
{{--    <script src="{{ asset('js/smooth-scrolling.js')}}"></script>--}}
{{--    <script src="{{ asset('js/tooltipster.bundle.min.js')}}"></script>--}}
{{--    <script src="{{ asset('js/main-rtl.js')}}"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js" integrity="sha512-/DXTXr6nQodMUiq+IUJYCt2PPOUjrHJ9wFrqpJ3XkgPNOZVfMok7cRw6CSxyCQxXn6ozlESsSh1/sMCTF1rL/g==" crossorigin="anonymous"></script>--}}


    <!-- end inject -->
</head>
<body>
@includeWhen(empty($loader),'webSit.layout.loader')
@includeWhen(empty($header),'webSit.layout.header')
@yield('cnt')
@includeWhen(empty($footer),'webSit.layout.footer')

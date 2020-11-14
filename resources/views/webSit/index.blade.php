@include('webSit.partial._preloader')
<div class="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
@include('webSit.partial._header')<!-- end header-menu-area -->
<!--======================================
        END HEADER AREA
======================================-->
@include('webSit.partial._slider',['banner',$banner])
<!-- ================================
        END HEADER AREA
======================================-->
{{--@yield('main.content')--}}
<!--================================
         START SLIDER AREA
=================================-->


@include('webSit.partial._footer')



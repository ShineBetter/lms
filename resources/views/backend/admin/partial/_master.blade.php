@include('backend.admin.partial._preloader')
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
@include('backend.admin.partial._header')<!-- end header-menu-area -->
<!--======================================
        END HEADER AREA
======================================-->

<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
@include('backend.admin.partial._dashboardSidebar') <!-- end dashboard-sidebar -->
    <div class="dashboard-content-wrap">
        <div class="container-fluid">
        @include('backend.admin.partial._userProfile')
        <!-- end row -->

        @yield('main.content')
        <!-- end modal-form -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-content mt-0 pt-0 pb-4 border-top-0 text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="copy__desc">&copy; طراحی  و توسعه توسط تیم شاین بتر . 2020
                                                                    </p>
                                <p class="copy__desc"><a href="https://shinebetter.ir">shinebetter.ir</a></p>
                            </div><!-- end col-lg-12 -->
                        </div><!-- end row -->
                    </div><!-- end copyright-content -->
                </div><!-- end col-lg-12 -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-content-wrap -->
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->
<!-- template js files -->
@include('backend.admin.partial._footer')

@extends('layout.head')
@section('cnt')
    @php
        $loader="dont";


    @endphp
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<!-- end header-menu-area -->
<!--======================================
        END HEADER AREA
======================================-->

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <div class="section-heading">
                        <h2 class="section__title">Pricing Table</h2>
                    </div>
                    <ul class="breadcrumb__list">
                        <li class="active__list-item"><a href="../index.blade.php">home</a></li>
                        <li class="active__list-item">pages</li>
                        <li>Pricing Table</li>
                    </ul>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!--======================================
        START PACKAGE AREA
======================================-->
<section class="package-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 column-td-half">
                <div class="package-item">
                    <div class="package-title">
                        <h3 class="package__price"><span>$</span>219</h3>
                        <h3 class="package__title">Starter Plan</h3>
                    </div><!-- end package-title -->
                    <ul class="list-items margin-bottom-35px">
                        <li><i class="la la-check"></i> 3 Full Courses</li>
                        <li><i class="la la-check"></i> Limited Features</li>
                        <li><i class="la la-check"></i> Limited User Support</li>
                        <li><i class="la la-check"></i> Discount Available</li>
                        <li><i class="la la-check"></i> Lifetime free access</li>
                        <li><i class="la la-close text-danger"></i> Limited Period Offer</li>
                        <li><i class="la la-close text-danger"></i> Upgrade Options</li>
                        <li><i class="la la-close text-danger"></i> 9 Days Time</li>
                    </ul>
                    <div class="btn-box">
                        <a href="pricing-table.html#" class="theme-btn">choose plan</a>
                        <p class="package__meta">no hidden charges!</p>
                    </div>
                </div><!-- end package-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 column-td-half">
                <div class="package-item package-item-active">
                    <div class="package-tooltip">
                        <span class="package__tooltip">Recommended</span>
                    </div><!-- end package-tooltip -->
                    <div class="package-title">
                        <h3 class="package__price"><span>$</span>319</h3>
                        <h3 class="package__title">Business Plan</h3>
                    </div><!-- end package-title -->
                    <ul class="list-items margin-bottom-35px">
                        <li><i class="la la-check"></i> 12 Full Courses</li>
                        <li><i class="la la-check"></i> Limited Features</li>
                        <li><i class="la la-check"></i> Limited User Support</li>
                        <li><i class="la la-check"></i> Discount Available</li>
                        <li><i class="la la-check"></i> Lifetime free access</li>
                        <li><i class="la la-check"></i> Limited Period Offer</li>
                        <li><i class="la la-close text-danger"></i> Upgrade Options</li>
                        <li><i class="la la-close text-danger"></i> 18 Days Time</li>
                    </ul>
                    <div class="btn-box">
                        <a href="pricing-table.html#" class="theme-btn">choose plan</a>
                        <p class="package__meta">no hidden charges!</p>
                    </div>
                </div><!-- end package-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 column-td-half">
                <div class="package-item">
                    <div class="package-title">
                        <h3 class="package__price"><span>$</span>519</h3>
                        <h3 class="package__title">Premium Plan</h3>
                    </div><!-- end package-title -->
                    <ul class="list-items margin-bottom-35px">
                        <li><i class="la la-check"></i> 30 Full Courses</li>
                        <li><i class="la la-check"></i> Unlimited Features</li>
                        <li><i class="la la-check"></i> Limited User Support</li>
                        <li><i class="la la-check"></i> Discount Available</li>
                        <li><i class="la la-check"></i> Lifetime free access</li>
                        <li><i class="la la-check"></i> Limited Period Offer</li>
                        <li><i class="la la-check"></i> Upgrade Options</li>
                        <li><i class="la la-check"></i> 30 Days Time</li>
                    </ul>
                    <div class="btn-box">
                        <a href="pricing-table.html#" class="theme-btn">choose plan</a>
                        <p class="package__meta">no hidden charges!</p>
                    </div>
                </div><!-- end package-item -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end package-area -->
<!--======================================
        END PACKAGE AREA
======================================-->

<!-- ================================
         END FOOTER AREA
================================= -->

<!-- end scroll top -->

<!-- template js files -->
<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap-select.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/isotope.js"></script>
<script src="/js/waypoint.min.js"></script>
<script src="/js/jquery.counterup.min.js"></script>
<script src="/js/fancybox.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/smooth-scrolling.js"></script>
<script src="/js/date-time-picker.js"></script>
<script src="/js/jquery.filer.min.js"></script>
<script src="/js/tooltipster.bundle.min.js"></script>
<script src="/js/main.js"></script>
@endsection

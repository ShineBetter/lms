@extends('webSit.layout.head')
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
                        <h2 class="section__title">همایشات</h2>
                    </div>
                    <ul class="breadcrumb__list">
                        <li class="active__list-item"><a href="../index.blade.php">خانـه<i class="fas fa-angle-left mr-2"></i></a></li>
                        <li class="active__list-item">صفحه ها<i class="fas fa-angle-left mr-2"></i></li>
                        <li>همایشات</li>
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
                        <h3 class="package__price">519<span>تومان</span></h3>
                        <h3 class="package__title">قیمت کل</h3>
                    </div><!-- end package-title -->
                    <ul class="list-items margin-bottom-35px text-right">
                        <li><i class="la la-check"></i>  2آزمون</li>
                        <li><i class="la la-check"></i>   جزوه کامل</li>
                        <li><i class="la la-check"></i> نمونه سوالات </li>
                        <li><i class="la la-check"></i> حل تمرینات </li>
                        <li><i class="la la-check"></i> حل مشکلات درسی </li>
                        <li><i class="la la-check"></i> دبیر: رهنما </li>
                        <li><i class="la la-check"></i>  زمان: 22/2/99</li>
                        <li><i class="la la-check"></i> 6روز</li>
                    </ul>
                    <div class="btn-box">
                        <a href="pricing-table.html#" class="theme-btn">خرید همایش</a>
                        {{--                        <p class="package__meta">no hidden charges!</p>--}}
                    </div>
                </div><!-- end package-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 column-td-half">
                <div class="package-item package-item-active">
                    <div class="package-tooltip">
                        <span class="package__tooltip">شگفت انگیز</span>
                    </div><!-- end package-tooltip -->
                    <div class="package-title">
                        <h3 class="package__price">519<span>تومان</span></h3>
                        <h3 class="package__title">قیمت کل</h3>
                    </div><!-- end package-title -->
                    <ul class="list-items margin-bottom-35px text-right">
                        <li><i class="la la-check"></i>  2آزمون</li>
                        <li><i class="la la-check"></i>   جزوه کامل</li>
                        <li><i class="la la-check"></i> نمونه سوالات </li>
                        <li><i class="la la-check"></i> حل تمرینات </li>
                        <li><i class="la la-check"></i> حل مشکلات درسی </li>
                        <li><i class="la la-check"></i> دبیر: رهنما </li>
                        <li><i class="la la-check"></i>  زمان: 22/2/99</li>
                        <li><i class="la la-check"></i> 6روز</li>
                    </ul>
                    <div class="btn-box">
                        <a href="pricing-table.html#" class="theme-btn">خرید همایش</a>
{{--                        <p class="package__meta">no hidden charges!</p>--}}
                    </div>
                </div><!-- end package-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 column-td-half">
                <div class="package-item">
                    <div class="package-title">
                        <h3 class="package__price">519<span>تومان</span></h3>
                        <h3 class="package__title">قیمت کل</h3>
                    </div><!-- end package-title -->
                    <ul class="list-items margin-bottom-35px text-right">
                        <li><i class="la la-check"></i>  2آزمون</li>
                        <li><i class="la la-check"></i>   جزوه کامل</li>
                        <li><i class="la la-check"></i> نمونه سوالات </li>
                        <li><i class="la la-check"></i> حل تمرینات </li>
                        <li><i class="la la-check"></i> حل مشکلات درسی </li>
                        <li><i class="la la-check"></i> دبیر: رهنما </li>
                        <li><i class="la la-check"></i>  زمان: 22/2/99</li>
                        <li><i class="la la-check"></i> 6روز</li>
                    </ul>
                    <div class="btn-box">
                        <a href="pricing-table.html#" class="theme-btn">خرید همایش</a>
{{--                        <p class="package__meta">no hidden charges!</p>--}}
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

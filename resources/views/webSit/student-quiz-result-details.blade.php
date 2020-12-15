@extends('webSit.layout.head')
@section('cnt')
    @php
        $loader="dont";
        $header="dont";

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
    START QUIZ AREA
================================= -->
<section class="quiz-wrap">
    <div class="breadcrumb-nav bg-white border-top py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="quiz-nav d-flex align-items-center">
                        <li>
                            <div class="d-flex align-items-center">
                                {{--                                <a href="course-details.blade.php">--}}
                                {{--                                    <img src="/images/angular.png" alt="">--}}
                                {{--                                </a>--}}
                                <p>
                                    <a href="#">ریاضی</a><span class="d-block font-size-13">استاد رهنما</span>
                                </p>
                            </div>
                        </li>
                        <li><a href="/"><i class="la la-arrow-left mr-2"></i>برگشت به خانه</a></li>

                    </ul>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-nav -->
    <div class="quiz-content-wrap bg-black padding-top-60px padding-bottom-60px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="quiz-content text-center">
                        <p class="lead font-weight-regular font-size-18 text-color-rgba mb-0 pb-2">شما در تاریخ 2/2/99 ارسال کردید</p>
                        <h2 class="section__title text-white padding-bottom-30px">امتیاز شما: 100</h2>
                        <div class="btn-box">
                            <a href="student-quiz.html" class="theme-btn theme-btn-light mr-2">آزمون جدید</a>
                            <a href="student-quiz-results.html" class="theme-btn theme-btn-light">جواب آزمون</a>
                        </div>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end quiz-content-wrap -->
    <div class="quiz-action-nav bg-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="quiz-action-content d-flex align-items-center justify-content-between">
                        <ul class="quiz-nav d-flex align-items-center">
                            <li><i class="la la-check-circle font-size-20 mr-2"></i>نمره شما 100/100</li>
                            <li><i class="la la-clock-o font-size-20 mr-2"></i>16دقیقه</li>
                            <li><i class="la la-bar-chart font-size-20 mr-2"></i>صحیح</li>
                        </ul>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end quiz-action-nav -->
    <div class="quiz-ans-wrap padding-top-80px padding-bottom-80px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="quiz-ans-content text-right">
                        <div class="d-flex align-items-center">
                            <span class="quiz-count icon-element icon--element bg-color-1 text-white mr-2">2</span>
                            <h3 class="widget-title font-weight-semi-bold">جواب 2 از 5 </h3>
                        </div>
                        <p class="pt-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                        <ul class="quiz-result-list pt-4 pl-3">
                            <li class="primary-color mb-2">
                                <span class="icon-element icon--element mr-2">الف</span>
                                اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            </li>
                            <li class="primary-color mb-2">
                                <span class="icon-element icon--element icon-success mr-2">
                                    <i class="fas fa-check"></i>
                                </span>
                                علی الخصوص طراحان خلاقی
                            </li>
                            <li class="primary-color mb-2">
                                <span class="icon-element icon--element icon-error mr-2">ج</span>
                                در این صورت می توان امید داشت که تمام و دشواری موجود
                            </li>
                            <li class="primary-color mb-2">
                                <span class="icon-element icon--element icon-error mr-2">د</span>
                                ان امید داشت که تمام و دشواری موجود
                            </li>
                        </ul>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end quiz-ans-wrap -->
</section><!-- end quiz-wrap -->
<!-- ================================
    END QUIZ AREA
================================= -->


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
<script src="/js/date-time-picker.js"></script>
<script src="/js/jquery.filer.min.js"></script>
<script src="/js/emojionearea.min.js"></script>
<script src="/js/smooth-scrolling.js"></script>
<script src="/js/tooltipster.bundle.min.js"></script>
<script src="/js/main.js"></script>
@endsection

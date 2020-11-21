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
<section class="breadcrumb-nav bg-white border-top py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="quiz-nav d-flex align-items-center">
                    <li>
                        <div class="d-flex align-items-center">
                            <p>
                                <a href="course-details.blade.php">ریاضی</a><span class="d-block font-size-13">استاد رهنما</span>
                            </p>
                        </div>
                    </li>
                    <li><a href="course-details.blade.php"><i class="la la-arrow-left mr-2"></i>برو به صفحه آزمون</a></li>

                </ul>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-nav -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START QUIZ AREA
================================= -->
<section class="quiz-wrap">
    <div class="quiz-content-wrap bg-black padding-top-60px padding-bottom-60px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="quiz-course-nav d-flex align-items-center justify-content-between">
                        <li>
                            <a href="student-quiz.html" class="icon-element primary-color-2 d-block" data-toggle="tooltip" data-placement="bottom" title="پایان آزمون">
                                <i class="fas fa-hourglass-end"></i>
                            </a>
                        </li>
                        <li>
                            <a href="course-details.blade.php" class="icon-element d-block" data-toggle="tooltip" data-placement="bottom" title="نام دانش آموز">
                                <i class="fas fa-user-check"></i>
                            </a>

                        </li>
                        <li>
                            <a href="course-details.blade.php" class="icon-element d-block" data-toggle="tooltip" data-placement="bottom" title="شروع آزمون">
                                <i class="fas fa-hourglass-start"></i>
                            </a>
                        </li>
                        <li>
                            <a href="course-details.blade.php" class="icon-element d-block" data-toggle="tooltip" data-placement="bottom" title="زمان آزمون">
                                <i class="fas fa-user-clock"></i>
                            </a>
                        </li>
                    </ul>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="quiz-content padding-top-40px">
                        <div class="d-flex align-items-center justify-content-between">
                            <h2 class="section__title text-white">1از 5 سوال</h2>
                            <p class="lead text-white font-size-25 font-weight-medium mb-0">00:16</p>
                        </div>
                        <p class="section__desc quiz-desc text-color-rgba mb-0 pt-3 text-right">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است

                        </p>
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

                            <li><i class="la la-sliders font-size-20 mr-2"></i>پاسخ صحیح زیر را انتخاب کنید</li>
                        </ul>
                        <div class="quiz-nav-btns">
{{--                            <a href="student-quiz-result-details.html" class="theme-btn theme-btn-light mr-2">Skip Quiz</a>--}}
{{--                            <a href="course-details.blade.php" class="theme-btn theme-btn-light mr-2">Review Video</a>--}}
                            <a href="student-quiz-result-details.html" class="theme-btn theme-btn-light bg-color-1 text-white">سوال بعدی<i class="la la-angle-right ml-1"></i></a>
                        </div>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end quiz-action-nav -->
     <div class="quiz-ans-wrap padding-top-80px padding-bottom-80px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="quiz-ans-content">
                        <h3 class="widget-title">جواب شما</h3>
                        <ul class="py-3">
                            <li>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="chb1">
                                    <label for="chb1">گزینه الف: لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </label>
                                </div>
                            </li>
                             <li>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="chb2" checked="checked">
                                    <label for="chb2">گزینه ب: لورم ایپسوم متن ساختگی با تولید سادگی</label>
                                </div>
                            </li>
                            <li>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="chb3">
                                    <label for="chb3">گزینه ج: لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از</label>
                                </div>
                            </li>
                            <li>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="chb3">
                                    <label for="chb3">گزینه د: لورم ایپسوم نامفهوم </label>
                                </div>
                            </li>
                        </ul>
                        <p class="font-size-15"><strong class="primary-color">توجه:</strong> این سوال چند گزینه صحیح دارد.</p>
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

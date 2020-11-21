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
                    <li><a href="course-details.blade.php"><i class="la la-arrow-left mr-2"></i>Back to Path</a></li>
                    <li>
                        <div class="d-flex align-items-center">
                            <a href="course-details.blade.php">
                                <img src="/images/angular.png" alt="">
                            </a>
                            <p>
                                <a href="course-details.blade.php">Learn Angular 2</a><span class="d-block font-size-13">20 Courses</span>
                            </p>
                        </div>
                    </li>
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
                    <div class="quiz-content text-center">
                        <h2 class="section__title text-white">Skill Assessment</h2>
                        <p class="section__desc text-color-rgba mb-0 pt-2">Measure your skill to find out where to start.</p>
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
                            <li><i class="la la-question-circle font-size-20 mr-2"></i>20 Questions</li>
                            <li><i class="la la-clock-o font-size-20 mr-2"></i>1m 20s</li>
                        </ul>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end quiz-action-nav -->
    <div class="quiz-ans-wrap padding-top-80px padding-bottom-80px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="quiz-ans-content">
                        <div class="d-flex align-items-center">
                            <span class="quiz-count icon-element icon--element bg-color-1 text-white mr-2">2</span>
                            <h3 class="widget-title font-weight-semi-bold">Question 2 of 20</h3>
                        </div>
                        <p class="pt-3 pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam debitis dolorem enim eos esse et fuga, iusto labore saepe ut. A aut consequatur delectus error illum impedit maiores nam, numquam pariatur perferendis possimus provident</p>
                        <div class="btn-box">
                            <a href="student-path-assessment.html#" class="theme-btn theme-btn-light mr-2">Previous Question</a>
                            <a href="student-path-assessment.html#" class="theme-btn theme-btn-light bg-color-1 text-white">Next Question</a>
                        </div>
                    </div>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="quiz-ans-content">
                        <h3 class="widget-title">Your Answer:</h3>
                        <ul class="py-3">
                            <li>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="chb1">
                                    <label for="chb1">Ability to use newer syntax and offers reliability</label>
                                </div>
                            </li>
                            <li>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="chb2" checked="checked">
                                    <label for="chb2">Compatibility</label>
                                </div>
                            </li>
                            <li>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="chb3">
                                    <label for="chb3">Usage of missing features</label>
                                </div>
                            </li>
                        </ul>
                        <p class="font-size-15"><strong class="primary-color">Note:</strong> There can be multiple correct answers to this question.</p>
                    </div>
                </div><!-- end col-lg-6 -->

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

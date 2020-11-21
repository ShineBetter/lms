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
                        <h2 class="section__title">مشاوره</h2>
                    </div>
                    <ul class="breadcrumb__list">
                        <li class="active__list-item"><a href="../index.blade.php">خانـه<i class="fas fa-angle-left mr-2"></i></a></li>
                        <li class="active__list-item">صفحه ها<i class="fas fa-angle-left mr-2"></i></li>
                        <li>مشاوره</li>
                    </ul>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START GOOGLE MAP
================================= -->
<div class="map-container section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="map" class="radius-round"></div><!-- end map -->
            </div>
        </div>
    </div>
</div>
<!-- ================================
       END GOOGLE MAP
================================= -->

<!-- ================================
       START CONTACT AREA
================================= -->
<section class="contact-area padding-bottom-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 column-td-half">
                <div class="info-box info-box-color-1 text-center">
                    <div class="hover-overlay"></div>
                    <div class="icon-element mx-auto">
                        <i class="fas fa-thumbtack"></i>
                    </div>
                    <h3 class="info__title">ادرس ما</h3>
                    <p class="info__text mb-0">کرج-برج اموت</p>
                </div><!-- end info-box -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 column-td-half">
                <div class="info-box info-box-color-2 text-center">
                    <div class="hover-overlay"></div>
                    <div class="icon-element mx-auto">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3 class="info__title">ایمیل ما</h3>
                    <p class="info__text mb-0">
                        <span class="d-block">info123@example.com</span>
                        <span class="d-block">info123@example.com</span>
                    </p>
                </div><!-- end info-box -->
            </div><!-- end col-lg-4 -->
             <div class="col-lg-4 column-td-half">
                <div class="info-box info-box-color-3 text-center">
                    <div class="hover-overlay"></div>
                    <div class="icon-element mx-auto">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3 class="info__title">شماره تماس</h3>
                    <p class="info__text mb-0">
                        <span class="d-block">+163 123 7884</span>
                        <span class="d-block">+163 123 7884</span>
                    </p>
                </div><!-- end info-box -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
        <div class="contact-form-wrap pt-5">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-heading">
                        <p class="section__meta">راه ارتباطی</p>
                        <h2 class="section__title">ارتباط با ما</h2>
                        <span class="section-divider"></span>
                        <p class="section__desc">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                        </p>
                        <ul class="social-profile">
                            <li><a href="home-rtl.html#"><i class="fas fa-phone"></i></a></li>
                            <li><a href="home-rtl.html#"><i class="fab fa-telegram-plane"></i></a></li>
                            <li><a href="home-rtl.html#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="home-rtl.html#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="home-rtl.html#"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-5 -->
                <div class="col-lg-7">
                    <div class="contact-form-action">
                        <form method="POST" name="contactform" action="/php/contact.htm">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-box">
                                        <label class="label-text">نام و نام خانوادگی<span class="primary-color-2 ml-1">*</span></label>
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="name" placeholder="نام و نام خانوادگی">
                                            <span class="la la-user input-icon"></span>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="input-box">
                                        <label class="label-text">ایمیل شما<span class="primary-color-2 ml-1">*</span></label>
                                        <div class="form-group">
                                            <input class="form-control" type="email" name="email" placeholder="ایمیل">
                                            <span class="la la-envelope input-icon"></span>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="input-box">
                                        <label class="label-text">شماره تماس<span class="primary-color-2 ml-1">*</span></label>
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="phone" placeholder="شماره">
                                            <span class="la la-phone input-icon"></span>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="input-box">
                                        <label class="label-text">پایه تحصیلی<span class="primary-color-2 ml-1">*</span></label>
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="subject" placeholder="پایه">
                                            <span class="la la-book input-icon"></span>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-12">
                                    <div class="input-box">
                                        <label class="label-text">پیام<span class="primary-color-2 ml-1">*</span></label>
                                        <div class="form-group">
                                            <textarea class="message-control form-control" name="message" placeholder="نوشتن پیام"></textarea>
                                            <span class="la la-pencil input-icon"></span>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-12 -->
                                <div class="col-lg-12">
                                    <button class="theme-btn" type="submit">ارسال پیام</button>
                                </div><!-- end col-md-12 -->
                            </div><!-- end row -->
                        </form>
                    </div><!-- end contact-form-action -->
                </div><!-- end col-md-7 -->
            </div><!-- end row -->
        </div>
    </div><!-- end container -->
</section><!-- end contact-area -->
<!-- ================================
       START CONTACT AREA
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
<script src="/js/magnific-popup.min.js"></script>
<script src="/js/isotope.js"></script>
<script src="/js/waypoint.min.js"></script>
<script src="/js/jquery.counterup.min.js"></script>
<script src="/js/fancybox.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/gmap-script.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYzby4yYDVaXPmtu4jZAGR258K6IYwjIY&libraries"></script>
<script src="/js/form-validator.js"></script>
<script src="/js/form-validate-script.js"></script>
<script src="/js/date-time-picker.js"></script>
<script src="/js/jquery.filer.min.js"></script>
<script src="/js/emojionearea.min.js"></script>
<script src="/js/tooltipster.bundle.min.js"></script>
<script src="/js/smooth-scrolling.js"></script>
<script src="/js/main.js"></script>
@endsection

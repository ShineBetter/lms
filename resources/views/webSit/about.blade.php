@extends('webSit.layout.head')
@section('cnt')
@php
    $loader="dont";


@endphp

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
<section class="breadcrumb-area about-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content about-breadcrumb-content">
                    <div class="section-heading">
                        <p class="section__meta section__metalight">به اموزشگاه .. خوش امدید</p>
                        <h2 class="section__title">نگاهی کوتاه <br>مجموعه ما</h2>
                    </div>
                    <div class="btn-box">
                        <a href="about.blade.php#" class="btn-text video-play-btn ml-4" data-fancybox="video" data-src="https://www.youtube.com/watch?v=VqIp_sO8OVQ" data-speed="700">
                            <span class="watch-video-btn"><i class="fas fa-play"></i></span> دیدن ویدیو
                        </a>
                    </div><!-- end btn-box -->
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!--======================================
        START ABOUT AREA
 ======================================-->
<section class="about-area padding-top-120px padding-bottom-110px">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content-box pt-0 text-right">
                    <div class="section-heading">
                        <h5 class="section__meta">درباره ما</h5>
                        <h2 class="section__title line-height-50">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</h2>
                        <span class="section-divider"></span>
                        <p class="section__desc mb-4">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد
                        </p>
                    </div><!-- end section-heading -->
                    <ul class="list-items">
                        <li><i class="la la-check-circle"></i> تمام و دشواری موجود در ارائه راهکارها و شرایط سخت .</li>
                        <li><i class="la la-check-circle"></i> تمام و دشواری موجود در ارائه راهکارها و شرایط سخت .</li>
                        <li><i class="la la-check-circle"></i>  تمام و دشواری موجود در ارائه راهکارها و شرایط سخت .</li>
                    </ul>
                </div>
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <div class="about-img-wrap mt-3">
                    <div class="row">
                        <div class="col-lg-6 column-td-half">
                            <div class="img-box img-box-3">
                                <div class="img-content">
                                    <img src="/images/img15.jpg" alt="">
                                    <div class="img-content-inner">
                                        <div class="img-content-inner__inner">
                                            <h3 class="widget-title">6,900</h3>
                                            <span>آزمون</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col-lg-6 -->
                        <div class="col-lg-6 column-td-half">
                            <div class="img-box img-box-3">
                                <div class="img-content">
                                    <img src="/images/img16.jpg" alt="">
                                    <div class="img-content-inner">
                                        <div class="img-content-inner__inner">
                                            <h3 class="widget-title">550</h3>
                                            <span>دانش آموز</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col-lg-6 -->
                        <div class="col-lg-12">
                            <div class="img-box img-box-3">
                                <div class="img-content mx-auto">
                                    <img src="/images/img22.jpg" alt="">
                                    <div class="img-content-inner">
                                        <div class="img-content-inner__inner">
                                            <h3 class="widget-title">40</h3>
                                            <span>همایش</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col-lg-12 -->
                    </div><!-- end row -->
                </div>
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
        <div class="about-widget-wrap choose-area margin-top-120px text-center">
            <div class="row">
                <div class="col-lg-4 column-td-half">
                    <div class="post-card post-card-layout-2">
                        <div class="post-card-content">
                            <img src="/images/img33.jpg" alt="" class="img-fluid">
                            <h2 class="widget-title mt-4 mb-2">برترین دبیران</h2>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        </div><!-- end post-card-content -->
                    </div>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-td-half">
                    <div class="post-card post-card-layout-2">
                        <div class="post-card-content">
                            <img src="/images/img34.jpg" alt="" class="img-fluid">
                            <h2 class="widget-title mt-4 mb-2">پیشرفته ترین آزمونها</h2>
                            <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        </div><!-- end post-card-content -->
                    </div>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-td-half">
                    <div class="post-card post-card-layout-2 mb-3">
                        <div class="post-card-content">
                            <img src="/images/img35.jpg" alt="" class="img-fluid">
                            <h2 class="widget-title mt-4 mb-2">کامل ترین همایشات</h2>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.n</p>
                        </div><!-- end post-card-content -->
                    </div>
                </div><!-- end col-lg-4 -->
{{--                <div class="col-lg-12">--}}
{{--                    <p>Want to join with us? See our<a href="about.blade.php#" class="primary-color-2"> open positions</a></p>--}}
{{--                </div>--}}
            </div><!-- end row -->
        </div><!-- end about-widget-wrap -->
    </div><!-- end container -->
</section><!-- end about-area -->
<!--======================================
        END ABOUT AREA
======================================-->

<!--======================================
        START MISSION AREA
 ======================================-->
<section class="mission-area section-bg padding-top-120px padding-bottom-110px">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-img-wrap about-img-wrap-2">
                    <div class="row">
                        <div class="col-lg-6 column-td-half">
                            <div class="img-box img-box-4">
                                <img src="/images/img8.jpg" alt="">
                            </div>
                        </div><!-- end col-lg-6 -->
                        <div class="col-lg-6 column-td-half">
                            <div class="img-box img-box-4">
                                <img src="/images/img10.jpg" alt="">
                            </div>
                        </div><!-- end col-lg-6 -->
                        <div class="col-lg-6 column-td-half">
                            <div class="img-box img-box-4">
                                <img src="/images/img11.jpg" alt="">
                            </div>
                        </div><!-- end col-lg-6 -->
                        <div class="col-lg-6 column-td-half">
                            <div class="img-box img-box-4">
                                <img src="/images/img12.jpg" alt="">
                            </div>
                        </div><!-- end col-lg-6 -->
                    </div><!-- end row -->
                </div>
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <div class="about-content-box padding-left-60px">
                    <div class="section-heading">
                        <h5 class="section__meta">هدف ما</h5>
                        <h2 class="section__title">ماموریت ما</h2>
                        <span class="section-divider"></span>
                        <p class="section__desc mb-3">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                        <h3 class="widget-title font-weight-medium font-size-18">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        </h3>
                    </div><!-- end section-heading -->
                </div>
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end mission-area -->
<!--======================================
        END MISSION AREA
======================================-->

<!--======================================
        START STORY AREA
 ======================================-->
<section class="story-area section--padding text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-content-box">
                    <div class="section-heading">
                        <h5 class="section__meta">ماجرای اموزشگاه...</h5>
                        <h2 class="section__title">داستان ما</h2>
                        <span class="section-divider"></span>
                        <p class="section__desc">
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                    </div><!-- end section-heading -->
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="story-img-wrap mt-4">
            <div class="row">
                <div class="col-lg-4 column-td-half">
                    <div class="story-img-item">
                        <img src="/images/img37.jpg" alt="">
                    </div>
                </div><!-- end col-lg-4 -->
                 <div class="col-lg-4 column-td-half">
                    <div class="story-img-item">
                        <img src="/images/img38.jpg" alt="">
                        <div class="story-video">
                            <a href="about.blade.php#" class="btn-text video-play-btn" data-fancybox="video" data-src="https://www.youtube.com/watch?v=VqIp_sO8OVQ" data-speed="700">
                                <i class="fas fa-play icon-btn"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- end col-lg-4 -->
                 <div class="col-lg-4 column-td-half">
                    <div class="story-img-item">
                        <img src="/images/img39.jpg" alt="">
                    </div>
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div>
    </div><!-- end container -->
</section><!-- end story-area -->
<!--======================================
        END STORY AREA
======================================-->

<div class="section-block"></div>

<!--======================================
        START TEAM AREA
======================================-->
<section class="team-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h5 class="section__meta">مدیریت</h5>
                    <h2 class="section__title">مدیریت مجموعه</h2>
                    <span class="section-divider"></span>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="team-member-wrap margin-top-30px">
            <div class="row">
                <div class="col-lg-3 column-td-half">
                    <div class="team-item team-layout-2">
                        <div class="team-img-box">
                            <img src="/images/team.jpg" alt="">
                        </div>
                        <div class="team-detail">
                            <h3 class="team__title">استاد رهنما</h3>
                            <p class="team__meta">ریاضی</p>
                            <a href="javascript:void(0)" class="theme-btn theme-btn-light" data-toggle="modal" data-target=".team-modal-form" data-whatever="Alex Smith">read his bio</a>
                        </div>
                    </div><!-- end team-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 column-td-half">
                    <div class="team-item team-layout-2">
                        <div class="team-img-box">
                            <img src="/images/team2.jpg" alt="">
                        </div>
                        <div class="team-detail">
                            <h3 class="team__title">استاد ربیع</h3>
                            <p class="team__meta">شیمی</p>
                            <a href="javascript:void(0)" class="theme-btn theme-btn-light" data-toggle="modal" data-target=".team-modal-form" data-whatever="Rose Taylor">read his bio</a>
                        </div>
                    </div><!-- end team-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 column-td-half">
                    <div class="team-item team-layout-2">
                        <div class="team-img-box">
                            <img src="/images/team3.jpg" alt="">
                        </div>
                        <div class="team-detail">
                            <h3 class="team__title">استاد ربیع</h3>
                            <p class="team__meta">شیمی</p>
                            <a href="javascript:void(0)" class="theme-btn theme-btn-light" data-toggle="modal" data-target=".team-modal-form" data-whatever="Jef Collin">read his bio</a>
                        </div>
                    </div><!-- end team-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 column-td-half">
                    <div class="team-item team-layout-2">
                        <div class="team-img-box">
                            <img src="/images/team4.jpg" alt="">
                        </div>
                        <div class="team-detail">
                            <h3 class="team__title">استاد ربیع</h3>
                            <p class="team__meta">شیمی</p>
                            <a href="javascript:void(0)" class="theme-btn theme-btn-light" data-toggle="modal" data-target=".team-modal-form" data-whatever="Alper Doein">اطلاعات بیشتر</a>
                        </div>
                    </div><!-- end team-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 column-td-half">
                    <div class="team-item team-layout-2">
                        <div class="team-img-box">
                            <img src="/images/team5.jpg" alt="">
                        </div>
                        <div class="team-detail">
                            <h3 class="team__title">استاد ربیع</h3>
                            <p class="team__meta">شیمی</p>
                            <a href="javascript:void(0)" class="theme-btn theme-btn-light" data-toggle="modal" data-target=".team-modal-form" data-whatever="Alper Doein">اطلاعات بیشتر</a>
                        </div>
                    </div><!-- end team-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 column-td-half">
                    <div class="team-item team-layout-2">
                        <div class="team-img-box">
                            <img src="/images/team6.jpg" alt="">
                        </div>
                        <div class="team-detail">
                            <h3 class="team__title">استاد ربیع</h3>
                            <p class="team__meta">شیمی</p>
                            <a href="javascript:void(0)" class="theme-btn theme-btn-light" data-toggle="modal" data-target=".team-modal-form" data-whatever="Kevin Martin">read his bio</a>
                        </div>
                    </div><!-- end team-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 column-td-half">
                    <div class="team-item team-layout-2">
                        <div class="team-img-box">
                            <img src="/images/team7.jpg" alt="">
                        </div>
                        <div class="team-detail">
                            <h3 class="team__title">استاد ربیع</h3>
                            <p class="team__meta">شیمی</p>
                            <a href="javascript:void(0)" class="theme-btn theme-btn-light" data-toggle="modal" data-target=".team-modal-form" data-whatever="Alper Doein">اطلاعات بیشتر</a>
                        </div>
                    </div><!-- end team-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 column-td-half">
                    <div class="team-item team-layout-2">
                        <div class="team-img-box">
                            <img src="/images/team8.jpg" alt="">
                        </div>
                        <div class="team-detail">
                            <h3 class="team__title">استاد ربیع</h3>
                            <p class="team__meta">شیمی</p>
                            <a href="javascript:void(0)" class="theme-btn theme-btn-light" data-toggle="modal" data-target=".team-modal-form" data-whatever="Alper Doein">اطلاعات بیشتر</a>
                        </div>
                    </div><!-- end team-item -->
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
        </div>
    </div><!-- end container -->
</section><!-- end team-area -->
<!--======================================
        END TEAM AREA
======================================-->

<div class="section-block"></div>

<!--================================
         START TESTIMONIAL AREA
=================================-->
<section class="testimonial-area padding-top-120px padding-bottom-110px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h5 class="section__meta">گواهی نامه</h5>
                    <h2 class="section__title">از اموزشگا ...</h2>
                    <span class="section-divider"></span>
                    <p class="section__desc">
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </p>
                </div><!-- end section-heading -->
                <div class="btn-box">
{{--                    <a href="about.blade.php" class="theme-btn">explore all</a>--}}
                </div>
            </div><!-- end col-lg-4 -->
            <div class="col-lg-8">
                <div class="testimonial-subtitle pb-3">
                    <h3 class="widget-title font-weight-medium">بیش از 500 دانش اموز در اموزشگاه ما در حال یادگیری هستند</h3>
                </div>
                <div class="testimonial-carousel-2 ltr">
                    <div class="testimonial-item testimonial-item-layout-2 ltr">
                        <div class="testimonial__desc">
                            <p class="testimonial__desc-desc">
                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            </p>
                        </div><!-- end testimonial__desc -->
                        <div class="testimonial-header">
                            <img src="/images/testi-img.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">عادلی</h3>
                                <span class="testimonial__name-meta">دانش اموز</span>
                                <ul class="review-stars d-inline-block">
                                    <li><span class="la la-star"></span></li>
                                    <li><span class="la la-star"></span></li>
                                    <li><span class="la la-star"></span></li>
                                    <li><span class="la la-star"></span></li>
                                    <li><span class="la la-star-o"></span></li>
                                </ul>
                            </div>
                        </div><!-- end testimonial-header -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item testimonial-item-layout-2">
                        <div class="testimonial__desc">
                            <p class="testimonial__desc-desc">
                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            </p>
                        </div><!-- end testimonial__desc -->
                        <div class="testimonial-header">
                            <img src="/images/testi-img2.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">عادلی</h3>
                                <span class="testimonial__name-meta">دانش اموز</span>
                                <ul class="review-stars d-inline-block">
                                    <li><span class="la la-star"></span></li>
                                    <li><span class="la la-star"></span></li>
                                    <li><span class="la la-star"></span></li>
                                    <li><span class="la la-star"></span></li>
                                    <li><span class="la la-star-o"></span></li>
                                </ul>
                            </div>
                        </div><!-- end testimonial-header -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item testimonial-item-layout-2">
                        <div class="testimonial__desc">
                            <p class="testimonial__desc-desc">
                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            </p>
                        </div><!-- end testimonial__desc -->
                        <div class="testimonial-header">
                            <img src="/images/testi-img3.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">عادلی</h3>
                                <span class="testimonial__name-meta">دانش اموز</span>
                                <ul class="review-stars d-inline-block">
                                    <li><span class="la la-star"></span></li>
                                    <li><span class="la la-star"></span></li>
                                    <li><span class="la la-star"></span></li>
                                    <li><span class="la la-star"></span></li>
                                    <li><span class="la la-star-o"></span></li>
                                </ul>
                            </div>
                        </div><!-- end testimonial-header -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item testimonial-item-layout-2">
                        <div class="testimonial__desc">
                            <p class="testimonial__desc-desc">
                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            </p>
                        </div><!-- end testimonial__desc -->
                        <div class="testimonial-header">
                            <img src="/images/testi-img4.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">عادلی</h3>
                                <span class="testimonial__name-meta">دانش اموز</span>
                                <ul class="review-stars d-inline-block">
                                    <li><span class="la la-star"></span></li>
                                    <li><span class="la la-star"></span></li>
                                    <li><span class="la la-star"></span></li>
                                    <li><span class="la la-star"></span></li>
                                    <li><span class="la la-star-o"></span></li>
                                </ul>
                            </div>
                        </div><!-- end testimonial-header -->
                    </div><!-- end testimonial-item -->
                </div><!-- end testimonial-carousel-2 -->
            </div><!-- end col-lg-8 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end testimonial-area -->
<!--================================
        END TESTIMONIAL AREA
=================================-->

<!--================================
        START GET STAR AREA
=================================-->
{{--<div class="subscriber-area call-to-action padding-top-40px padding-bottom-40px">--}}
{{--    <div class="container">--}}
{{--        <div class="row align-items-center">--}}
{{--            <div class="col-lg-7">--}}
{{--                <div class="call-to-action-heading d-flex align-items-center">--}}
{{--                    <div class="call-to-action-icon">--}}
{{--                        <svg viewBox="0 -48 496 496" xmlns="http://www.w3.org/2000/svg"><path d="m472 0h-448c-13.230469 0-24 10.769531-24 24v352c0 13.230469 10.769531 24 24 24h448c13.230469 0 24-10.769531 24-24v-352c0-13.230469-10.769531-24-24-24zm8 376c0 4.414062-3.59375 8-8 8h-448c-4.40625 0-8-3.585938-8-8v-352c0-4.40625 3.59375-8 8-8h448c4.40625 0 8 3.59375 8 8zm0 0"/><path d="m448 32h-400v240h400zm-16 224h-368v-208h368zm0 0"/><path d="m328 200.136719c0-17.761719-11.929688-33.578125-29.007812-38.464844l-26.992188-7.703125v-2.128906c9.96875-7.511719 16-19.328125 16-31.832032v-14.335937c0-21.503906-16.007812-39.726563-36.449219-41.503906-11.183593-.96875-22.34375 2.800781-30.574219 10.351562-8.25 7.550781-12.976562 18.304688-12.976562 29.480469v16c0 12.503906 6.03125 24.328125 16 31.832031v2.128907l-26.992188 7.710937c-17.078124 4.886719-29.007812 20.703125-29.007812 38.464844v39.863281h160zm-16 23.863281h-128v-23.863281c0-10.664063 7.160156-20.152344 17.40625-23.082031l38.59375-11.023438v-23.070312l-3.976562-2.3125c-7.527344-4.382813-12.023438-12.105469-12.023438-20.648438v-16c0-6.703125 2.839844-13.160156 7.792969-17.695312 5.007812-4.601563 11.496093-6.832032 18.382812-6.207032 12.230469 1.0625 21.824219 12.285156 21.824219 25.566406v14.335938c0 8.542969-4.496094 16.265625-12.023438 20.648438l-3.976562 2.3125v23.070312l38.59375 11.023438c10.246094 2.9375 17.40625 12.425781 17.40625 23.082031zm0 0"/><path d="m32 364.945312 73.886719-36.945312-73.886719-36.945312zm16-48 22.113281 11.054688-22.113281 11.054688zm0 0"/><path d="m152 288h16v80h-16zm0 0"/><path d="m120 288h16v80h-16zm0 0"/><path d="m336 288h-48v32h-104v16h104v32h48v-32h128v-16h-128zm-16 64h-16v-48h16zm0 0"/></svg>--}}
{{--                    </div>--}}
{{--                    <div class="section-heading">--}}
{{--                        <h2 class="section__title font-size-20 pb-1">Teach the world online</h2>--}}
{{--                        <p class="section__desc mb-0 ">Create an online video course, reach students across the globe, and earn money</p>--}}
{{--                    </div><!-- end section-heading -->--}}
{{--                </div>--}}
{{--            </div><!-- end col-lg-7 -->--}}
{{--            <div class="col-lg-5">--}}
{{--                <div class="btn-box text-right">--}}
{{--                    <a href="about.blade.php#" class="theme-btn float-left">Tech on aduca</a>--}}
{{--                </div><!-- end btn-box-->--}}
{{--            </div><!-- end col-lg-5 -->--}}
{{--        </div><!-- end row -->--}}
{{--    </div><!-- end container -->--}}
{{--</div><!-- end subscriber-area -->--}}
<!--================================
        END GET STAR AREA
=================================-->

<!--======================================
        START ABOUT AREA
 ======================================-->
{{--<section class="about-area about-area2 padding-top-120px padding-bottom-110px overflow-hidden">--}}
{{--    <div class="container">--}}
{{--        <div class="row align-items-center">--}}
{{--            <div class="col-lg-6">--}}
{{--                <div class="about-content-box padding-right-50px">--}}
{{--                    <div class="section-heading">--}}
{{--                        <h5 class="section__meta">join with us</h5>--}}
{{--                        <h2 class="section__title">A great place to grow</h2>--}}
{{--                        <span class="section-divider"></span>--}}
{{--                        <p class="section__desc mb-3">--}}
{{--                            Nemo enim ipsam,voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed--}}
{{--                            quia,consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.--}}
{{--                            Neque porro quisquam est, qui dolorem ipsum--}}
{{--                            quia dolor sit amet, adipisci velit, sed quia non numquam eius modi tempora--}}
{{--                        </p>--}}
{{--                        <p class="section__desc">--}}
{{--                            Neque porro quisquam est, qui dolorem ipsum--}}
{{--                            quia dolor sit amet, adipisci velit, sed quia non numquam eius modi tempora--}}
{{--                        </p>--}}
{{--                    </div><!-- end section-heading -->--}}
{{--                    <div class="btn-box">--}}
{{--                        <a href="about.blade.php#" class="theme-btn">join with our team</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!-- end col-lg-6 -->--}}
{{--            <div class="col-lg-6">--}}
{{--                <div class="about-img-wrap about-img-wrap-3">--}}
{{--                    <div class="img-box img-box-5">--}}
{{--                        <img src="/images/img17.jpg" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!-- end col-lg-6 -->--}}
{{--        </div><!-- end row -->--}}
{{--    </div><!-- end container -->--}}
{{--</section><!-- end about-area -->--}}
<!--======================================
        END ABOUT AREA
======================================-->

<div class="section-block"></div>

<!-- ================================
       START CLIENTLOGO AREA
================================= -->
{{--<section class="clientlogo-area overflow-hidden padding-top-120px padding-bottom-100px text-center">--}}
{{--    <div class="stroke-line">--}}
{{--        <span class="stroke__line"></span>--}}
{{--        <span class="stroke__line"></span>--}}
{{--        <span class="stroke__line"></span>--}}
{{--    </div>--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="section-heading">--}}
{{--                    <h5 class="section__meta">our partners</h5>--}}
{{--                    <h2 class="section__title">Trusted by companies of all sizes</h2>--}}
{{--                    <span class="section-divider"></span>--}}
{{--                    <p class="section__desc">--}}
{{--                        Get access to high quality learning wherever you are, with online courses,--}}
{{--                        programs <br> and degrees created by leading universities, business schools--}}
{{--                    </p>--}}
{{--                </div><!-- end section-heading -->--}}
{{--            </div><!-- end col-md-12 -->--}}
{{--        </div><!-- end row -->--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="client-logo">--}}
{{--                    <div class="client-logo-item">--}}
{{--                        <a href="about.blade.php#"><img src="/images/sponsor-img.png" alt="brand image"></a>--}}
{{--                    </div><!-- end client-logo-item -->--}}
{{--                    <div class="client-logo-item">--}}
{{--                        <a href="about.blade.php#"><img src="/images/sponsor-img2.png" alt="brand image"></a>--}}
{{--                    </div><!-- end client-logo-item -->--}}
{{--                    <div class="client-logo-item">--}}
{{--                        <a href="about.blade.php#"><img src="/images/sponsor-img3.png" alt="brand image"></a>--}}
{{--                    </div><!-- end client-logo-item -->--}}
{{--                    <div class="client-logo-item">--}}
{{--                        <a href="about.blade.php#"><img src="/images/sponsor-img4.png" alt="brand image"></a>--}}
{{--                    </div><!-- end client-logo-item -->--}}
{{--                    <div class="client-logo-item">--}}
{{--                        <a href="about.blade.php#"><img src="/images/sponsor-img5.png" alt="brand image"></a>--}}
{{--                    </div><!-- end client-logo-item -->--}}
{{--                </div><!-- end client-logo -->--}}
{{--            </div><!-- end col-lg-12 -->--}}
{{--        </div><!-- end row -->--}}
{{--    </div><!-- end container -->--}}
{{--    <div class="stroke-line2">--}}
{{--        <span class="stroke__line"></span>--}}
{{--        <span class="stroke__line"></span>--}}
{{--        <span class="stroke__line"></span>--}}
{{--    </div>--}}
{{--</section><!-- end clientlogo-area -->--}}
<!-- ================================
       START CLIENTLOGO AREA
================================= -->

<!--======================================
        START SUBSCRIBER AREA
======================================-->
<section class="subscriber-area padding-top-80px padding-bottom-75px">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-heading">
                    <h5 class="section__meta section__metalight">اخبار ما</h5>
                    <h2 class="section__title text-white">ایا میخواهید از زمان برگذاری ازمونها با خبر شوی؟</h2>
                    <span class="section-divider section-divider-light"></span>
                    <p class="section__desc mb-0 text-color-rgba">
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    </p>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-5 -->
            <div class="col-lg-6 ml-auto">
                <div class="subscriber-form">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="form-label text-white text-right">ایمیل</label>
                                <div class="form-group d-flex align-items-center">
                                    <input class="form-control" type="email" name="email" placeholder="ایمیل" required>
                                    <span class="la la-envelope-o input-icon"></span>
                                    <button class="theme-btn theme-btn-hover-light" type="submit">اسال</button>
                                </div>
{{--                                <p class="text-color-rgba font-size-14 mt-1">--}}
{{--                                    <i class="la la-lock mr-1"></i>Your information is safe with us! unsubscribe anytime.--}}
{{--                                </p>--}}
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div><!-- end subscriber-form-->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end subscriber-area -->
<!--======================================
        END SUBSCRIBER AREA
======================================-->

<!-- ================================
         END FOOTER AREA
================================= -->

<!-- end scroll top -->
<div class="modal-form">
    <div class="modal fade team-modal-form" id="teamModal" tabindex="-1" role="dialog" aria-labelledby="teamModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-top mb-0">
                    <h3 class="modal-title widget-title font-size-20">New message</h3>
                    <button type="button" class="close close-arrow" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close mb-0"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-text">
                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                    </div>
                    <div class="section-block"></div>
                    <h3 class="widget-title font-size-16 pt-3">Connect me on</h3>
                    <ul class="social-profile pt-3">
                        <li><a href="about.blade.php#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="about.blade.php#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="about.blade.php#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="about.blade.php#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="about.blade.php#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- template js files -->

@endsection

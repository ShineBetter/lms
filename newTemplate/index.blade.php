@extends('layout.head')
@section('title','صفحه ی اصلی')
@section('cnt')
    @php
        $loader="dont";


    @endphp
<!--======================================
        START HEADER AREA
    ======================================-->
{{--        header is included in layout--}}
    <!-- end header-menu-area -->
<!--======================================
        END HEADER AREA
======================================-->

<!--================================
         START SLIDER AREA
=================================-->
<section class="slider-area">
    <div class="hero-slide owl-dot-and-nav">
        <div class="single-slide-item slide-bg1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2 class="section__title text-white">سلام به اموزشگاه میربلند <br> خوش امدید</h2>
                            <p class="section__desc">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                <br>اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            </p>
                        </div>
                        <div class="btn-box d-flex align-items-center">
{{--                            <a href="/admission" class="theme-btn theme-btn-hover-light">برای عضویت در سایت ما</a>--}}
{{--                            <a href="home-rtl#" class="btn-text video-play-btn ml-4" data-fancybox="video" data-src="https://www.youtube.com/watch?v=cRXm1p-CNyk" data-speed="700">--}}
{{--                                Watch Preview<i class="la la-play icon-btn ml-2"></i>--}}
{{--                            </a>--}}
                        </div>
                    </div><!-- col-lg-12 -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- end single-slide-item -->
        <div class="single-slide-item slide-bg2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading text-center">
                            <h2 class="section__title text-white">مجموعه ما بهترین استاتید را دربردارد <br> دوره های بسیار متفاوت</h2>
                            <p class="section__desc"> چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                <br>زمان مورد نیاز شامل حروفچینی
                            </p>
                        </div>
                        <div class="btn-box d-flex align-items-center justify-content-center">
                            <a href="../admission.blade.php" class="theme-btn theme-btn-hover-light">شروع کن</a>
{{--                            <a href="home-rtl#" class="btn-text video-play-btn ml-4" data-fancybox="video" data-src="https://www.youtube.com/watch?v=cRXm1p-CNyk" data-speed="700">--}}
{{--                                Watch Preview<i class="la la-play icon-btn ml-2"></i>--}}
{{--                            </a>--}}
                        </div>
                    </div><!-- col-lg-12 -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- end single-slide-item -->
        <div class="single-slide-item slide-bg3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading text-right">
                            <h2 class="section__title text-white">مجموعه ما بهترین استاتید را دربردارد <br> دوره های بسیار متفاوت</h2>
                            <p class="section__desc"> چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                <br>زمان مورد نیاز شامل حروفچینی
                            </p>
                        </div>
                        <div class="btn-box hero-btn-right d-flex align-items-center justify-content-end">
{{--                            <a href="home-rtl#" class="btn-text video-play-btn mr-4" data-fancybox="video" data-src="https://www.youtube.com/watch?v=cRXm1p-CNyk" data-speed="700">--}}
{{--                                <i class="la la-play icon-btn mr-2"></i>Watch Preview--}}
{{--                            </a>--}}
                            <a href="/admission" class="theme-btn theme-btn-hover-light">عصویت</a>
                        </div>
                    </div><!-- col-lg-12 -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- end single-slide-item -->
    </div><!-- end hero-slide -->
</section><!-- end slider-area -->
<!--================================
        END SLIDER AREA
=================================-->

<!--======================================
        START FEATURE AREA
 ======================================-->
<section class="feature-area text-center padding-bottom-90px">
    <div class="container">
        <div class="feature-content-wrap">
            <div class="row">
                <div class="col-lg-4 column-td-half">
                    <div class="info-box info-box-color-1">
                        <div class="hover-overlay"></div>
                        <div class="icon-element mx-auto">
                            <i class="fas fa-edit"></i>
                        </div>
                        <h3 class="info__title"> دریافت گواهینامه ها</h3>
                        <p class="info__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
{{--                        <a href="home-rtl#" class="text-btn">read more</a>--}}
                    </div><!-- end info-box -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-4 column-td-half">
                    <div class="info-box info-box-color-2">
                        <div class="hover-overlay"></div>
                        <div class="icon-element mx-auto">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="info__title">معلمان خبره</h3>
                        <p class="info__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
{{--                        <a href="home-rtl#" class="text-btn">read more</a>--}}
                    </div><!-- end info-box -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-4 column-td-half">
                    <div class="info-box info-box-color-3">
                        <div class="hover-overlay"></div>
                        <div class="icon-element mx-auto">
                            <i class="fas fa-paper-plane"></i>
                        </div>
                        <h3 class="info__title">ارتباط آسان</h3>
                        <p class="info__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
{{--                        <a href="home-rtl#" class="text-btn">read more</a>--}}
                    </div><!-- end info-box -->
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->
        </div>
    </div><!-- end container -->
</section><!-- end feature-area -->
<!--======================================
        END FEATURE AREA
    ======================================-->

<!--======================================
        START CATEGORY AREA
======================================-->
<section class="category-area padding-bottom-90px">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="section-heading">
                    <h5 class="section__meta">دسته بندی</h5>
                    <h2 class="section__title">دسته های محبوب</h2>
                    <span class="section-divider"></span>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-9 -->
            <div class="col-lg-3">
                <div class="btn-box h-100 d-flex align-items-center justify-content-end">
                    <a href="home-rtl#" class="theme-btn">همه دسته بندی ها</a>
                </div><!-- end btn-box-->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
        <div class="category-wrapper margin-top-28px">
            <div class="row">
                <div class="col-lg-4 column-td-half">
                    <div class="category-item">
                        <img src="/images/img1.jpg" alt="">
                        <div class="category-content">
                            <div class="category-inner">
                                <h3 class="cat__title"><a href="home-rtl#">دوره ها</a></h3>
                                <p class="cat__meta">9 دوره</p>
                                <a href="home-rtl#" class="theme-btn">نمونه</a>
                            </div>
                        </div><!-- end category-content -->
                    </div><!-- end category-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-td-half">
                    <div class="category-item">
                        <img src="/images/img2.jpg" alt="">
                        <div class="category-content">
                            <div class="category-inner">
                                <h3 class="cat__title"><a href="home-rtl#">همایشات</a></h3>
                                <p class="cat__meta">7 همایش</p>
                                <a href="home-rtl#" class="theme-btn">نمونه</a>
                            </div>
                        </div><!-- end category-content -->
                    </div><!-- end category-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-td-half">
                    <div class="category-item">
                        <img src="/images/img3.jpg" alt="">
                        <div class="category-content">
                            <div class="category-inner">
                                <h3 class="cat__title"><a href="home-rtl#">ازمون ها</a></h3>
                                <p class="cat__meta">8 ازمون</p>
                                <a href="home-rtl#" class="theme-btn">نمونه</a>
                            </div>
                        </div><!-- end category-content -->
                    </div><!-- end category-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-td-half">
                    <div class="category-item">
                        <img src="/images/img4.jpg" alt="">
                        <div class="category-content">
                            <div class="category-inner">
                                <h3 class="cat__title"><a href="home-rtl#">فیلم اموزشی</a></h3>
                                <p class="cat__meta">6 فیلم</p>
                                <a href="home-rtl#" class="theme-btn"> نمونه</a>
                            </div>
                        </div><!-- end category-content -->
                    </div><!-- end category-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-td-half">
                    <div class="category-item">
                        <img src="/images/img5.jpg" alt="">
                        <div class="category-content">
                            <div class="category-inner">
                                <h3 class="cat__title"><a href="home-rtl#">پادکست</a></h3>
                                <p class="cat__meta">7 پادکست</p>
                                <a href="home-rtl#" class="theme-btn">نمونه</a>
                            </div>
                        </div><!-- end category-content -->
                    </div><!-- end category-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-td-half">
                    <div class="category-item">
                        <img src="/images/img6.jpg" alt="">
                        <div class="category-content">
                            <div class="category-inner">
                                <h3 class="cat__title"><a href="home-rtl#">فایل اموزشی</a></h3>
                                <p class="cat__meta">8 فایل</p>
                                <a href="home-rtl#" class="theme-btn">نمونه</a>
                            </div>
                        </div><!-- end category-content -->
                    </div><!-- end category-item -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
        </div><!-- end category-wrapper -->
    </div><!-- end container -->
</section><!-- end category-area -->
<!--======================================
        END CATEGORY AREA
======================================-->

<!--======================================
        START COURSE AREA
======================================-->
<section class="course-area">
    <div class="course-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h5 class="section__meta">دوره مناسب را انتخاب کنید</h5>
                        <h2 class="section__title">دوره های برتر ما را مرور کنید</h2>
                        <span class="section-divider"></span>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tab margin-top-28px margin-bottom-55px">
                        <ul class="nav nav-tabs justify-content-center text-center" role="tablist" id="review">
                            <li role="presentation">
                                <a href="home-rtl#tab5" role="tab" data-toggle="tab" class="theme-btn" aria-selected="false">
                                    هشتم
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="home-rtl#tab1" role="tab" data-toggle="tab" class="theme-btn active" aria-selected="true">
                                    نهم
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="home-rtl#tab2" role="tab" data-toggle="tab" class="theme-btn" aria-selected="false">
                                    دهم
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="home-rtl#tab3" role="tab" data-toggle="tab" class="theme-btn" aria-selected="false">
                                    یازدهم
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="home-rtl#tab4" role="tab" data-toggle="tab" class="theme-btn" aria-selected="false">
                                    دوازدهم
                                </a>
                            </li>

                        </ul>
                    </div><!-- end section-tab -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end course-wrapper -->
    <div class="card-content-wrapper section-bg padding-top-60px padding-bottom-110px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="tab1">
                            <div class="row">
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>
                                            <div class="card-badge">
                                                <span class="badge-label">جدید</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">استاندارد</span>
                                                <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">استاد سماواتی</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 کلاس
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">58.00تومان</span>
                                                <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_2">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">استاندارد</span>
                                                <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">استاد سماواتی</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 کلاس
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">58.00تومان</span>
                                                <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_3">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img10.jpg" alt=""></a>
                                            <div class="card-badge">
                                                <span class="badge-label">highest rated</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">استاندارد</span>
                                                <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">استاد سماواتی</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 کلاس
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">58.00تومان</span>
                                                <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_4">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img11.jpg" alt=""></a>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">استاندارد</span>
                                                <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">استاد سماواتی</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 کلاس
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">58.00تومان</span>
                                                <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img12.jpg" alt=""></a>
                                            <div class="card-badge">
                                                <span class="badge-label">bestseller</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">استاندارد</span>
                                                <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">استاد سماواتی</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 کلاس
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">58.00تومان</span>
                                                <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_6">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img13.jpg" alt=""></a>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">استاندارد</span>
                                                <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">استاد سماواتی</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 کلاس
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">58.00تومان</span>
                                                <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                            </div><!-- end course-block -->
                        </div><!-- end tab-pane -->
                        <div role="tabpanel" class="tab-pane fade" id="tab2">
                            <div class="row">
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img13.jpg" alt=""></a>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">استاندارد</span>
                                                <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">استاد سماواتی</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 کلاس
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">58.00تومان</span>
                                                <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_2">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img12.jpg" alt=""></a>
                                            <div class="card-badge">
                                                <span class="badge-label">bestseller</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">استاندارد</span>
                                                <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">استاد سماواتی</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 کلاس
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">58.00تومان</span>
                                                <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_3">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img11.jpg" alt=""></a>
                                            <div class="card-badge">
                                                <span class="badge-label">highest rated</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">استاندارد</span>
                                                <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">استاد سماواتی</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 کلاس
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">58.00تومان</span>
                                                <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_4">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img10.jpg" alt=""></a>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">all levels</span>
                                                <a href="home-rtl#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">User Experience Design - Adobe XD UI UX Design</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">kamran paul</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">Free</span>
                                                <a href="home-rtl#" class="text-btn">Get Enrolled</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                                            <div class="card-badge">
                                                <span class="badge-label">bestseller</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">استاندارد</span>
                                                <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">استاد سماواتی</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 کلاس
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">58.00تومان</span>
                                                <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_6">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">استاندارد</span>
                                                <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">استاد سماواتی</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 کلاس
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">58.00تومان</span>
                                                <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                            </div><!-- end course-block -->
                        </div><!-- end tab-pane -->
                        <div role="tabpanel" class="tab-pane fade" id="tab3">
                            <div class="row">
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img11.jpg" alt=""></a>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">beginner</span>
                                                <a href="home-rtl#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">WordPress for Beginners – Master WordPress</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">alex smith</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">$58.00</span>
                                                <a href="home-rtl#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_2">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img12.jpg" alt=""></a>
                                            <div class="card-badge">
                                                <span class="badge-label">bestseller</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">beginner</span>
                                                <a href="home-rtl#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">Learn Ethical Hacking from Scratch Your Stepping</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">brad travesy</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.2</span>
                                                    <span class="star__count">(30)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">Free</span>
                                                <a href="home-rtl#" class="text-btn">Get Enrolled</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_3">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                                            <div class="card-badge">
                                                <span class="badge-label">highest rated</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">all levels</span>
                                                <a href="home-rtl#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">Microsoft SQL Server 2019 for Everyone</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">mark hardson</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.5</span>
                                                    <span class="star__count">(40)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">$68.00</span>
                                                <a href="home-rtl#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_4">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">all levels</span>
                                                <a href="home-rtl#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">User Experience Design - Adobe XD UI UX Design</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">kamran paul</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">$58.00</span>
                                                <a href="home-rtl#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img12.jpg" alt=""></a>
                                            <div class="card-badge">
                                                <span class="badge-label">bestseller</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">all levels</span>
                                                <a href="home-rtl#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">The Complete Digital finance Marketing Course</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">jose purtila</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.2</span>
                                                    <span class="star__count">(30)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price"><span class="before-price">$189.00</span> $119.00</span>
                                                <a href="home-rtl#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_6">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img13.jpg" alt=""></a>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">all levels</span>
                                                <a href="home-rtl#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">Complete Python Bootcamp: Go from zero to hero</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">noelle travesy</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.5</span>
                                                    <span class="star__count">(40)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">Free</span>
                                                <a href="home-rtl#" class="text-btn">Get Enrolled</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                            </div><!-- end course-block -->
                        </div><!-- end tab-pane -->
                        <div role="tabpanel" class="tab-pane fade" id="tab4">
                            <div class="row">
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>
                                            <div class="card-badge">
                                                <span class="badge-label">bestseller</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">beginner</span>
                                                <a href="home-rtl#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">WordPress for Beginners – Master WordPress</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">alex smith</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">$58.00</span>
                                                <a href="home-rtl#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_2">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">beginner</span>
                                                <a href="home-rtl#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">Learn Ethical Hacking from Scratch Your Stepping</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">brad travesy</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.2</span>
                                                    <span class="star__count">(30)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">$33.00</span>
                                                <a href="home-rtl#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_3">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img10.jpg" alt=""></a>
                                            <div class="card-badge">
                                                <span class="badge-label">highest rated</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">all levels</span>
                                                <a href="home-rtl#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">Microsoft SQL Server 2019 for Everyone</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">mark hardson</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.5</span>
                                                    <span class="star__count">(40)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">$68.00</span>
                                                <a href="home-rtl#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_4">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img11.jpg" alt=""></a>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">all levels</span>
                                                <a href="home-rtl#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">User Experience Design - Adobe XD UI UX Design</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">kamran paul</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">Free</span>
                                                <a href="home-rtl#" class="text-btn">Get Enrolled</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img12.jpg" alt=""></a>
                                            <div class="card-badge">
                                                <span class="badge-label">bestseller</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">all levels</span>
                                                <a href="home-rtl#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">The Complete Digital finance Marketing Course</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">jose purtila</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.2</span>
                                                    <span class="star__count">(30)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price"><span class="before-price">$189.00</span> $119.00</span>
                                                <a href="home-rtl#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_6">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img13.jpg" alt=""></a>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">all levels</span>
                                                <a href="home-rtl#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">Complete Python Bootcamp: Go from zero to hero</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">noelle travesy</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.5</span>
                                                    <span class="star__count">(40)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">$68.00</span>
                                                <a href="home-rtl#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                            </div><!-- end course-block -->
                        </div><!-- end tab-pane -->
                        <div role="tabpanel" class="tab-pane fade" id="tab5">
                            <div class="row">
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img
                                                    src="/images/img13.jpg" alt=""></a>
                                            <div class="card-badge">
                                                <span class="badge-label">bestseller</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">beginner</span>
                                                <a href="home-rtl#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">WordPress for Beginners – Master WordPress</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">alex smith</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">$58.00</span>
                                                <a href="home-rtl#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_2">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img12.jpg" alt=""></a>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">beginner</span>
                                                <a href="home-rtl#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">Learn Ethical Hacking from Scratch Your Stepping</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">brad travesy</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.2</span>
                                                    <span class="star__count">(30)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">Free</span>
                                                <a href="home-rtl#" class="text-btn">Get Enrolled</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_3">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img11.jpg" alt=""></a>
                                            <div class="card-badge">
                                                <span class="badge-label">highest rated</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">all levels</span>
                                                <a href="home-rtl#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">Microsoft SQL Server 2019 for Everyone</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">mark hardson</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.5</span>
                                                    <span class="star__count">(40)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">$68.00</span>
                                                <a href="home-rtl#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_4">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img10.jpg" alt=""></a>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">all levels</span>
                                                <a href="home-rtl#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">User Experience Design - Adobe XD UI UX Design</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">kamran paul</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">$58.00</span>
                                                <a href="home-rtl#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                                            <div class="card-badge">
                                                <span class="badge-label">bestseller</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">all levels</span>
                                                <a href="home-rtl#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">The Complete Digital finance Marketing Course</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">jose purtila</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.2</span>
                                                    <span class="star__count">(30)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price"><span class="before-price">$189.00</span> $119.00</span>
                                                <a href="home-rtl#" class="text-btn">Add to cart</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 column-td-half">
                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_6">
                                        <div class="card-image">
                                            <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">all levels</span>
                                                <a href="home-rtl#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">Complete Python Bootcamp: Go from zero to hero</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail">noelle travesy</a>
                                            </p>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating">4.5</span>
                                                    <span class="star__count">(40)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-action">
                                                <ul class="card-duration d-flex justify-content-between align-items-center">
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 Classes
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 hours 20 min
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end card-action -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">Free</span>
                                                <a href="home-rtl#" class="text-btn">Get Enrolled</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                </div><!-- end col-lg-4 -->
                            </div><!-- end course-block -->
                        </div><!-- end tab-pane -->
                    </div><!-- end tab-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="btn-box mt-4 text-center">
                        <a href="/course-grid" class="theme-btn">تمام دوره ها</a>
                    </div><!-- end btn-box -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end card-content-wrapper -->
</section><!-- end courses-area -->
<!--======================================
        END COURSE AREA
======================================-->

<!--======================================
        START COURSE AREA
======================================-->
<section class="course-area padding-top-120px">
    <div class="course-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h5 class="section__meta">پر فروش ترین </h5>
                        <h2 class="section__title">پر فروش ترین محصولات</h2>
                        <span class="section-divider"></span>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row margin-top-28px ltr">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div class="course-carousel owl-dot-and-nav">
                            <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                <div class="card-image">
                                    <a href="course-details.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                                </div><!-- end card-image -->
                                <div class="card-content">
                                    <p class="card__label">
                                        <span class="card__label-text">استاندارد</span>
                                        <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                    </p>
                                    <h3 class="card__title">
                                        <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>
                                    </h3>
                                    <p class="card__author">
                                        <a href="teacher-detail">استاد سماواتی</a>
                                    </p>
                                    <div class="rating-wrap d-flex mt-2 mb-3">
                                        <ul class="review-stars">
                                            <li><span class="la la-star"></span></li>
                                            <li><span class="la la-star"></span></li>
                                            <li><span class="la la-star"></span></li>
                                            <li><span class="la la-star"></span></li>
                                            <li><span class="la la-star-o"></span></li>
                                        </ul>
                                        <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                    </div><!-- end rating-wrap -->
                                    <div class="card-action">
                                        <ul class="card-duration d-flex justify-content-between align-items-center">
                                            <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 کلاس
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه
                                                        </span>
                                            </li>
                                        </ul>
                                    </div><!-- end card-action -->
                                    <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                        <span class="card__price">58.00تومان</span>
                                        <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>
                                    </div><!-- end card-price-wrap -->
                                </div><!-- end card-content -->
                            </div><!-- end card-item -->
                            <div class="card-item card-preview" data-tooltip-content="#tooltip_content_2">
                                <div class="card-image">
                                    <a href="course-details.blade.php" class="card__img"><img src="/images/img11.jpg" alt=""></a>
                                    <div class="card-badge">
                                        <span class="badge-label">bestseller</span>
                                    </div>
                                </div><!-- end card-image -->
                                <div class="card-content">
                                    <p class="card__label">
                                        <span class="card__label-text">استاندارد</span>
                                        <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                    </p>
                                    <h3 class="card__title">
                                        <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>
                                    </h3>
                                    <p class="card__author">
                                        <a href="teacher-detail">استاد سماواتی</a>
                                    </p>
                                    <div class="rating-wrap d-flex mt-2 mb-3">
                                        <ul class="review-stars">
                                            <li><span class="la la-star"></span></li>
                                            <li><span class="la la-star"></span></li>
                                            <li><span class="la la-star"></span></li>
                                            <li><span class="la la-star"></span></li>
                                            <li><span class="la la-star-o"></span></li>
                                        </ul>
                                        <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                    </div><!-- end rating-wrap -->
                                    <div class="card-action">
                                        <ul class="card-duration d-flex justify-content-between align-items-center">
                                            <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 کلاس
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه
                                                        </span>
                                            </li>
                                        </ul>
                                    </div><!-- end card-action -->
                                    <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                        <span class="card__price">58.00تومان</span>
                                        <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>
                                    </div><!-- end card-price-wrap -->
                                </div><!-- end card-content -->
                            </div><!-- end card-item -->
                            <div class="card-item card-preview" data-tooltip-content="#tooltip_content_3">
                                <div class="card-image">
                                    <a href="course-details.blade.php" class="card__img"><img src="/images/img12.jpg" alt=""></a>
                                </div><!-- end card-image -->
                                <div class="card-content">
                                    <p class="card__label">
                                        <span class="card__label-text">استاندارد</span>
                                        <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                    </p>
                                    <h3 class="card__title">
                                        <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>
                                    </h3>
                                    <p class="card__author">
                                        <a href="teacher-detail">استاد سماواتی</a>
                                    </p>
                                    <div class="rating-wrap d-flex mt-2 mb-3">
                                        <ul class="review-stars">
                                            <li><span class="la la-star"></span></li>
                                            <li><span class="la la-star"></span></li>
                                            <li><span class="la la-star"></span></li>
                                            <li><span class="la la-star"></span></li>
                                            <li><span class="la la-star-o"></span></li>
                                        </ul>
                                        <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                    </div><!-- end rating-wrap -->
                                    <div class="card-action">
                                        <ul class="card-duration d-flex justify-content-between align-items-center">
                                            <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 کلاس
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه
                                                        </span>
                                            </li>
                                        </ul>
                                    </div><!-- end card-action -->
                                    <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                        <span class="card__price">58.00تومان</span>
                                        <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>
                                    </div><!-- end card-price-wrap -->
                                </div><!-- end card-content -->
                            </div><!-- end card-item -->
                            <div class="card-item card-preview" data-tooltip-content="#tooltip_content_4">
                                <div class="card-image">
                                    <a href="course-details.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                                </div><!-- end card-image -->
                                <div class="card-content">
                                    <p class="card__label">
                                        <span class="card__label-text">استاندارد</span>
                                        <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                    </p>
                                    <h3 class="card__title">
                                        <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>
                                    </h3>
                                    <p class="card__author">
                                        <a href="teacher-detail">استاد سماواتی</a>
                                    </p>
                                    <div class="rating-wrap d-flex mt-2 mb-3">
                                        <ul class="review-stars">
                                            <li><span class="la la-star"></span></li>
                                            <li><span class="la la-star"></span></li>
                                            <li><span class="la la-star"></span></li>
                                            <li><span class="la la-star"></span></li>
                                            <li><span class="la la-star-o"></span></li>
                                        </ul>
                                        <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                    </div><!-- end rating-wrap -->
                                    <div class="card-action">
                                        <ul class="card-duration d-flex justify-content-between align-items-center">
                                            <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 کلاس
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه
                                                        </span>
                                            </li>
                                        </ul>
                                    </div><!-- end card-action -->
                                    <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                        <span class="card__price">58.00تومان</span>
                                        <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>
                                    </div><!-- end card-price-wrap -->
                                </div><!-- end card-content -->
                            </div><!-- end card-item -->
                            <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                <div class="card-image">
                                    <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>
                                    <div class="card-badge">
                                        <span class="badge-label">highest rated</span>
                                    </div>
                                </div><!-- end card-image -->
                                <div class="card-content">
                                    <p class="card__label">
                                        <span class="card__label-text">استاندارد</span>
                                        <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                    </p>
                                    <h3 class="card__title">
                                        <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>
                                    </h3>
                                    <p class="card__author">
                                        <a href="teacher-detail">استاد سماواتی</a>
                                    </p>
                                    <div class="rating-wrap d-flex mt-2 mb-3">
                                        <ul class="review-stars">
                                            <li><span class="la la-star"></span></li>
                                            <li><span class="la la-star"></span></li>
                                            <li><span class="la la-star"></span></li>
                                            <li><span class="la la-star"></span></li>
                                            <li><span class="la la-star-o"></span></li>
                                        </ul>
                                        <span class="star-rating-wrap">
                                                    <span class="star__rating">4.4</span>
                                                    <span class="star__count">(20)</span>
                                                </span>
                                    </div><!-- end rating-wrap -->
                                    <div class="card-action">
                                        <ul class="card-duration d-flex justify-content-between align-items-center">
                                            <li>
                                                        <span class="meta__date">
                                                            <i class="la la-play-circle"></i> 45 کلاس
                                                        </span>
                                            </li>
                                            <li>
                                                        <span class="meta__date">
                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه
                                                        </span>
                                            </li>
                                        </ul>
                                    </div><!-- end card-action -->
                                    <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                        <span class="card__price">58.00تومان</span>
                                        <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>
                                    </div><!-- end card-price-wrap -->
                                </div><!-- end card-content -->
                            </div><!-- end card-item -->
                        </div><!-- end course-carousel -->
                    </div><!-- end tab-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end course-wrapper -->
</section><!-- end courses-area -->
<!--======================================
        END COURSE AREA
======================================-->

<!-- ================================
       START FUNFACT AREA
================================= -->
<section class="funfact-area text-center overflow-hidden padding-top-85px padding-bottom-85px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 column-td-half">
                <div class="counter-item">
                    <span class="la la-bullhorn count__icon"></span>
                    <h4 class="count__title counter">520</h4>
                    <p class="count__meta">دانش اموز</p>
                </div><!-- end counter-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-half">
                <div class="counter-item">
                    <span class="la la-globe count__icon"></span>
                    <h4 class="count__title counter text-color">552</h4>
                    <p class="count__meta">دوره اموزشی</p>
                </div><!-- end counter-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-half">
                <div class="counter-item">
                    <span class="la la-users count__icon"></span>
                    <h4 class="count__title counter text-color-2">97</h4>
                    <p class="count__meta">دبیر</p>
                </div><!-- end counter-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-half">
                <div class="counter-item">
                    <span class="la la-certificate count__icon"></span>
                    <h4 class="count__title counter text-color-3">20</h4>
                    <p class="count__meta">سال سابقه درخشان</p>
                </div><!-- end counter-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end funfact-area -->
<!-- ================================
       START FUNFACT AREA
================================= -->

<div class="section-block"></div>

<!--======================================
        START TEAM AREA
======================================-->
<section class="team-area padding-top-120px padding-bottom-110px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h5 class="section__meta">دبیران</h5>
                    <h2 class="section__title">برترین دبیران</h2>
                    <span class="section-divider"></span>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row margin-top-28px ltr">
            <div class="col-lg-4 column-td-half">
                <div class="team-item">
                    <div class="team-img-box">
                        <img src="/images/team.jpg" alt="">
                        <ul class="social-profile">
                            <li><a href="home-rtl#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="home-rtl#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="home-rtl#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="home-rtl#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-detail">
                        <h3 class="team__title"><a href="teacher-detail">مرادی</a></h3>
                        <p class="team__meta">شیمی</p>
                        <p class="team__text">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپلورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.
                        </p>
                        <a href="teacher-detail" class="theme-btn">دیدن پروفایل</a>
                    </div>
                </div><!-- end team-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 column-td-half">
                <div class="team-item">
                    <div class="team-img-box">
                        <img src="/images/team2.jpg" alt="">
                        <ul class="social-profile">
                            <li><a href="home-rtl#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="home-rtl#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="home-rtl#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="home-rtl#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-detail">
                        <h3 class="team__title"><a href="teacher-detail">مرادی</a></h3>
                        <p class="team__meta">شیمی</p>
                        <p class="team__text">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپلورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.
                        </p>
                        <a href="teacher-detail" class="theme-btn">دیدن پروفایل</a>
                    </div>
                </div><!-- end team-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 column-td-half">
                <div class="team-item">
                    <div class="team-img-box">
                        <img src="/images/team3.jpg" alt="">
                        <ul class="social-profile">
                            <li><a href="home-rtl#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="home-rtl#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="home-rtl#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="home-rtl#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-detail">
                        <h3 class="team__title"><a href="teacher-detail">مرادی</a></h3>
                        <p class="team__meta">شیمی</p>
                        <p class="team__text">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپلورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.
                        </p>
                        <a href="teacher-detail" class="theme-btn">دیدن پروفایل</a>
                    </div>
                </div><!-- end team-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 column-td-half">
                <div class="team-item">
                    <div class="team-img-box">
                        <img src="/images/team4.jpg" alt="">
                        <ul class="social-profile">
                            <li><a href="home-rtl#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="home-rtl#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="home-rtl#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="home-rtl#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-detail">
                        <h3 class="team__title"><a href="teacher-detail">مرادی</a></h3>
                        <p class="team__meta">شیمی</p>
                        <p class="team__text">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپلورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.
                        </p>
                        <a href="teacher-detail" class="theme-btn">دیدن پروفایل</a>
                    </div>
                </div><!-- end team-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 column-td-half">
                <div class="team-item">
                    <div class="team-img-box">
                        <img src="/images/team5.jpg" alt="">
                        <ul class="social-profile">
                            <li><a href="home-rtl#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="home-rtl#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="home-rtl#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="home-rtl#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-detail">
                        <h3 class="team__title"><a href="teacher-detail">مرادی</a></h3>
                        <p class="team__meta">شیمی</p>
                        <p class="team__text">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپلورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.
                        </p>
                        <a href="teacher-detail" class="theme-btn">دیدن پروفایل</a>
                    </div>
                </div><!-- end team-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 column-td-half">
                <div class="team-item">
                    <div class="team-img-box">
                        <img src="/images/team6.jpg" alt="">
                        <ul class="social-profile">
                            <li><a href="home-rtl#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="home-rtl#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="home-rtl#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="home-rtl#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-detail">
                        <h3 class="team__title"><a href="teacher-detail">مرادی</a></h3>
                        <p class="team__meta">شیمی</p>
                        <p class="team__text">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپلورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.
                        </p>
                        <a href="teacher-detail" class="theme-btn">دیدن پروفایل</a>
                    </div>
                </div><!-- end team-item -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-box text-center">
                    <a href="/teachers" class="theme-btn">تمام دبیران</a>
                </div><!-- end btn-box -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end team-area -->
<!--======================================
        END TEAM AREA
======================================-->

<!--================================
         START TESTIMONIAL AREA
=================================-->
<section class="testimonial-area section-bg padding-top-120px padding-bottom-110px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h5 class="section__meta">نظرات</h5>
                    <h2 class="section__title">نظرات شما <br> درباره ما</h2>
                    <span class="section-divider"></span>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="container-fluid">
        <div class="row margin-top-28px ltr">
            <div class="col-lg-12">
                <div class="testimonial-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>
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
                        <div class="testimonial__desc">
                            <p class="testimonial__desc-desc">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img2.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>
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
                        <div class="testimonial__desc">
                            <p class="testimonial__desc-desc">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img3.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>
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
                        <div class="testimonial__desc">
                            <p class="testimonial__desc-desc">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img4.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>
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
                        <div class="testimonial__desc">
                            <p class="testimonial__desc-desc">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>
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
                        <div class="testimonial__desc">
                            <p class="testimonial__desc-desc">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img5.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>
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
                        <div class="testimonial__desc">
                            <p class="testimonial__desc-desc">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img6.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>
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
                        <div class="testimonial__desc">
                            <p class="testimonial__desc-desc">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img2.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>
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
                        <div class="testimonial__desc">
                            <p class="testimonial__desc-desc">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img3.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>
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
                        <div class="testimonial__desc">
                            <p class="testimonial__desc-desc">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img4.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>
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
                        <div class="testimonial__desc">
                            <p class="testimonial__desc-desc">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>
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
                        <div class="testimonial__desc">
                            <p class="testimonial__desc-desc">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img5.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>
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
                        <div class="testimonial__desc">
                            <p class="testimonial__desc-desc">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img6.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>
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
                        <div class="testimonial__desc">
                            <p class="testimonial__desc-desc">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img2.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>
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
                        <div class="testimonial__desc">
                            <p class="testimonial__desc-desc">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img3.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>
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
                        <div class="testimonial__desc">
                            <p class="testimonial__desc-desc">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                </div><!-- end testimonial-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- container-fluid -->
</section><!-- end testimonial-area -->
<!--================================
        END TESTIMONIAL AREA
=================================-->

<!--======================================
        START GET-START AREA
======================================-->
<section class="get-start-area text-center padding-top-120px padding-bottom-110px overflow-hidden">
    <div id="perticles-js"></div>
    <div class="box-icons">
        <div class="box-one"></div>
        <div class="box-two"></div>
        <div class="box-three"></div>
        <div class="box-four"></div>
    </div><!-- end box-icons -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="get-start-content">
                    <div class="section-heading text-center">
                        <h5 class="section__meta section__metalight">برترین اموزشگاه در...</h5>
                        <h2 class="section__title text-white">نمره های درخشان <br> رتبه های برتر</h2>
                        <span class="section-divider section-divider-light"></span>
                    </div><!-- end section-heading -->
                    <div class="btn-box margin-top-20px">
                        <a href="home-rtl#" class="theme-btn theme-btn-hover-light">ثبت نام</a>
                    </div>
                </div><!-- end get-start-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="box-icons2">
        <div class="box-one"></div>
        <div class="box-two"></div>
        <div class="box-three"></div>
        <div class="box-four"></div>
        <div class="box-five"></div>
    </div><!-- end box-icons2 -->
</section><!-- end get-start-area -->
<!--======================================
        END GET-START AREA
======================================-->

<!--======================================
        START BENEFIT AREA
======================================-->
<section class="benefit-area padding-bottom-180px overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="benefit-heading padding-top-120px">
                    <div class="section-heading">
                        <h5 class="section__meta">شرو کن</h5>
                        <h2 class="section__title">با اموزشگاه ... شروع کن</h2>
                        <span class="section-divider"></span>
                        <p class="section__desc">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم استلورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                        </p>
                    </div><!-- end section-heading -->
                    <div class="row">
                        <div class="col-lg-4 column-td-half">
                            <div class="info-icon-box">
                                <span class="la la-mouse-pointer icon-element icon-bg-1">
                                    <i class="far fa-copy"></i>
                                </span>
                                <h4 class="widget-title">100,000 دوره</h4>
                            </div><!-- end info-icon-box -->
                        </div><!-- end col-lg-4 -->
                        <div class="col-lg-4 column-td-half">
                            <div class="info-icon-box">
                                <span class="la la-bolt icon-element icon-bg-2">
                                    <i class="fas fa-user-graduate"></i>
                                </span>
                                <h4 class="widget-title">450دانش اموز</h4>
                            </div><!-- end info-icon-box -->
                        </div><!-- end col-lg-4 -->
                        <div class="col-lg-4 column-td-half">
                            <div class="info-icon-box">
                                <span class="la la-users icon-element icon-bg-3">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                </span>
                                <h4 class="widget-title">دبیران</h4>
                            </div><!-- end info-icon-box -->
                        </div><!-- end col-lg-4 -->
                    </div><!-- end row -->
                    <div class="btn-box">
                        <a href="/about" class="theme-btn">بیشتر بخوانید</a>
                    </div>
                </div><!-- end benefit-heading -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <div class="img-box">
                    <img src="/images/img13.jpg" alt="">
                    <img src="/images/img14.jpg" alt="">
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end benefit-area -->
<!--======================================
        END BENEFIT AREA
======================================-->

<div class="section-block"></div>

<!--======================================
        START REGISTER AREA
======================================-->
<section class="register-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="register-form">
                    <div class="contact-form-action">
                        <h3 class="widget-title">با خبر شدن از دوره های رایگان</h3>
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">نام<span class="primary-color-2 ml-1">*</span></label>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="name" placeholder=" نام">
                                    <span class="la la-user input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">ایمیل<span class="primary-color-2 ml-1">*</span></label>
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder=" ایمیل">
                                    <span class="la la-envelope input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text"> شماره تلفن<span class="primary-color-2 ml-1">*</span></label>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="phone" placeholder="شماره تلفن">
                                    <span class="la la-phone input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">پایه<span class="primary-color-2 ml-1">*</span></label>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="subject" placeholder="پایه">
                                    <span class="la la-book input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box">
                                <button class="theme-btn" type="submit">شروع کن</button>
                            </div><!-- end btn-box -->
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div><!-- end col-lg-5 -->
            <div class="col-lg-7">
                <div class="register-heading">
                    <div class="section-heading">
                        <h5 class="section__meta">ثبت نام</h5>
                        <h2 class="section__title">ثبت نام در مجموعه ی ما</h2>
                        <span class="section-divider"></span>
                        <p class="section__desc mb-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                        <p class="section__desc">
                            در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                    </div><!-- end section-heading -->
                    <div class="btn-box">
                        <a href="home-rtl#" class="theme-btn">get started</a>
                    </div>
                </div><!-- end register-heading -->
            </div><!-- end col-lg-7 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end register-area -->
<!--======================================
        END REGISTER AREA
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
{{--                    <h2 class="section__title">Top companies choose <a href="home-rtl#" class="primary-color-2">Aduca for Business</a> to build--}}
{{--                        <br> in-demand career skills</h2>--}}
{{--                    <span class="section-divider"></span>--}}
{{--                </div><!-- end section-heading -->--}}
{{--            </div><!-- end col-md-12 -->--}}
{{--        </div><!-- end row -->--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="client-logo margin-top-30px">--}}
{{--                    <div class="client-logo-item">--}}
{{--                        <a href="home-rtl#"><img src="/images/sponsor-img.png" alt="brand image"></a>--}}
{{--                    </div><!-- end client-logo-item -->--}}
{{--                    <div class="client-logo-item">--}}
{{--                        <a href="home-rtl#"><img src="/images/sponsor-img2.png" alt="brand image"></a>--}}
{{--                    </div><!-- end client-logo-item -->--}}
{{--                    <div class="client-logo-item">--}}
{{--                        <a href="home-rtl#"><img src="/images/sponsor-img3.png" alt="brand image"></a>--}}
{{--                    </div><!-- end client-logo-item -->--}}
{{--                    <div class="client-logo-item">--}}
{{--                        <a href="home-rtl#"><img src="/images/sponsor-img4.png" alt="brand image"></a>--}}
{{--                    </div><!-- end client-logo-item -->--}}
{{--                    <div class="client-logo-item">--}}
{{--                        <a href="home-rtl#"><img src="/images/sponsor-img5.png" alt="brand image"></a>--}}
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

<!-- ================================
       START BLOG AREA
================================= -->
<section class="blog-area padding-top-120px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h5 class="section__meta section__metalight">جدید ترین</h5>
                    <h2 class="section__title text-white">جدیدترین محصولات</h2>
                    <span class="section-divider section-divider-light"></span>
                </div><!-- end section-heading -->
            </div><!-- end col-md-12 -->
        </div><!-- end row -->
        <div class="row margin-top-30px ltr">
            <div class="col-lg-12">
                <div class="blog-post-carousel owl-dot-and-nav">
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 ابان</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="../blog-single.blade.php">همایش زیست دهم</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="home-rtl#" class="blog-admin-name">دبیر: یوسفی</a></li>
{{--                                    <li><span class="blog__panel-comment">4 Comments</span></li>--}}
                                    <li><span class="blog__panel-likes">ظرفیت محدود</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 ابان</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="../blog-single.blade.php">همایش زیست دهم</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="home-rtl#" class="blog-admin-name">دبیر: یوسفی</a></li>
                                    {{--                                    <li><span class="blog__panel-comment">4 Comments</span></li>--}}
                                    <li><span class="blog__panel-likes">ظرفیت محدود</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 ابان</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="../blog-single.blade.php">همایش زیست دهم</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="home-rtl#" class="blog-admin-name">دبیر: یوسفی</a></li>
                                    {{--                                    <li><span class="blog__panel-comment">4 Comments</span></li>--}}
                                    <li><span class="blog__panel-likes">ظرفیت محدود</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 ابان</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="../blog-single.blade.php">همایش زیست دهم</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="home-rtl#" class="blog-admin-name">دبیر: یوسفی</a></li>
                                    {{--                                    <li><span class="blog__panel-comment">4 Comments</span></li>--}}
                                    <li><span class="blog__panel-likes">ظرفیت محدود</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 ابان</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="../blog-single.blade.php">همایش زیست دهم</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="home-rtl#" class="blog-admin-name">دبیر: یوسفی</a></li>
                                    {{--                                    <li><span class="blog__panel-comment">4 Comments</span></li>--}}
                                    <li><span class="blog__panel-likes">ظرفیت محدود</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 ابان</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="../blog-single.blade.php">همایش زیست دهم</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="home-rtl#" class="blog-admin-name">دبیر: یوسفی</a></li>
                                    {{--                                    <li><span class="blog__panel-comment">4 Comments</span></li>--}}
                                    <li><span class="blog__panel-likes">ظرفیت محدود</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 ابان</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="../blog-single.blade.php">همایش زیست دهم</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="home-rtl#" class="blog-admin-name">دبیر: یوسفی</a></li>
                                    {{--                                    <li><span class="blog__panel-comment">4 Comments</span></li>--}}
                                    <li><span class="blog__panel-likes">ظرفیت محدود</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 ابان</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="../blog-single.blade.php">همایش زیست دهم</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="home-rtl#" class="blog-admin-name">دبیر: یوسفی</a></li>
                                    {{--                                    <li><span class="blog__panel-comment">4 Comments</span></li>--}}
                                    <li><span class="blog__panel-likes">ظرفیت محدود</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 ابان</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="../blog-single.blade.php">همایش زیست دهم</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="home-rtl#" class="blog-admin-name">دبیر: یوسفی</a></li>
                                    {{--                                    <li><span class="blog__panel-comment">4 Comments</span></li>--}}
                                    <li><span class="blog__panel-likes">ظرفیت محدود</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 ابان</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="../blog-single.blade.php">همایش زیست دهم</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="home-rtl#" class="blog-admin-name">دبیر: یوسفی</a></li>
                                    {{--                                    <li><span class="blog__panel-comment">4 Comments</span></li>--}}
                                    <li><span class="blog__panel-likes">ظرفیت محدود</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->


                </div><!-- end blog-post-carousel -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end blog-area -->
<!-- ================================
       START BLOG AREA
================================= -->

<!--======================================
        START CTA AREA
======================================-->
{{--<section class="cta-area padding-top-115px padding-bottom-90px text-center">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-4 column-td-half">--}}
{{--                <div class="post-card">--}}
{{--                    <div class="post-card-content">--}}
{{--                        <img src="/images/img33.jpg" alt="" class="img-fluid">--}}
{{--                        <h2 class="widget-title mt-4 mb-2">Become Instructor</h2>--}}
{{--                        <p>Teach what you love. Aduca gives you the tools to create a course.</p>--}}
{{--                    </div><!-- end post-card-content -->--}}
{{--                    <div class="btn-box margin-top-30px">--}}
{{--                        <a href="home-rtl#" class="theme-btn">Start Teaching</a>--}}
{{--                    </div><!-- end btn-box -->--}}
{{--                </div>--}}
{{--            </div><!-- end col-lg-4 -->--}}
{{--            <div class="col-lg-4 column-td-half">--}}
{{--                <div class="post-card">--}}
{{--                    <div class="post-card-content">--}}
{{--                        <img src="/images/img34.jpg" alt="" class="img-fluid">--}}
{{--                        <h2 class="widget-title mt-4 mb-2">Become a Learner</h2>--}}
{{--                        <p>Learn what you love! transform your life through education</p>--}}
{{--                    </div><!-- end post-card-content -->--}}
{{--                    <div class="btn-box margin-top-30px">--}}
{{--                        <a href="home-rtl#" class="theme-btn">Start Learning</a>--}}
{{--                    </div><!-- end btn-box -->--}}
{{--                </div>--}}
{{--            </div><!-- end col-lg-4 -->--}}
{{--            <div class="col-lg-4 column-td-half">--}}
{{--                <div class="post-card">--}}
{{--                    <div class="post-card-content">--}}
{{--                        <img src="/images/img35.jpg" alt="" class="img-fluid">--}}
{{--                        <h2 class="widget-title mt-4 mb-2">Aduca for Business</h2>--}}
{{--                        <p>Get unlimited access to 5,000+ of Aduca's top courses for your team</p>--}}
{{--                    </div><!-- end post-card-content -->--}}
{{--                    <div class="btn-box margin-top-30px">--}}
{{--                        <a href="home-rtl#" class="theme-btn">Get aduca for business</a>--}}
{{--                    </div><!-- end btn-box -->--}}
{{--                </div>--}}
{{--            </div><!-- end col-lg-4 -->--}}
{{--        </div><!-- end row -->--}}
{{--    </div><!-- end container -->--}}
{{--</section>--}}
<!-- ================================
       START CTA AREA
================================= -->

<!--======================================
        START SUBSCRIBER AREA
======================================-->
<section class="subscriber-area padding-top-80px padding-bottom-75px mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-heading">
                    <h5 class="section__meta section__metalight">جدیدترین خبرها</h5>
                    <h2 class="section__title text-white">مطلع شدن از جدید ترین خبر ها</h2>
                    <span class="section-divider section-divider-light"></span>
                    <p class="section__desc mb-0 text-color-rgba">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-5 -->
            <div class="col-lg-6 ml-auto">
                <div class="subscriber-form">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="form-label text-white text-right">ایمیل خود را وارد کنید</label>
                                <div class="form-group d-flex align-items-center">
                                    <input class="form-control" type="email" name="email" placeholder="ایمیل" required>
                                    <span class="la la-envelope-o input-icon"></span>
                                    <button class="theme-btn theme-btn-hover-light" type="submit">ارسال</button>
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

{{--<div class="tooltip_templates">--}}
{{--    <div id="tooltip_content_1">--}}
{{--        <div class="card-item">--}}
{{--            <div class="card-content">--}}
{{--                <p class="card__author">--}}
{{--                    By <a href="teacher-detail">alex smith</a>--}}
{{--                </p>--}}
{{--                <h3 class="card__title">--}}
{{--                    <a href="course-details.blade.php">WordPress for Beginners – Master WordPress</a>--}}
{{--                </h3>--}}
{{--                <p class="card__label">--}}
{{--                    <span class="card__label-text mr-1">BESTSELLER</span>--}}
{{--                    <span class="mr-1">in</span><a href="home-rtl#" class="mr-1">WordPress</a> <span>| Development</span>--}}
{{--                </p>--}}
{{--                <div class="rating-wrap d-flex mt-2 mb-3">--}}
{{--                    <ul class="review-stars">--}}
{{--                        <li><span class="la la-star"></span></li>--}}
{{--                        <li><span class="la la-star"></span></li>--}}
{{--                        <li><span class="la la-star"></span></li>--}}
{{--                        <li><span class="la la-star"></span></li>--}}
{{--                        <li><span class="la la-star-o"></span></li>--}}
{{--                    </ul>--}}
{{--                    <span class="star-rating-wrap">--}}
{{--                        <span class="star__rating">4.4</span>--}}
{{--                        <span class="star__count">(20)</span>--}}
{{--                    </span>--}}
{{--                </div><!-- end rating-wrap -->--}}
{{--                <div class="card-para mb-3">--}}
{{--                    <p class="font-size-14 line-height-24">--}}
{{--                        Learn WordPress like a Professional! Start from the basics and go all the way to creating your own applications and website!--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <ul class="list-items mb-3 font-size-14">--}}
{{--                    <li>There are many variations of passages</li>--}}
{{--                    <li>Lorem Ipsum available</li>--}}
{{--                    <li>Suffered alteration in some form</li>--}}
{{--                </ul>--}}
{{--                <div class="card-action">--}}
{{--                    <ul class="card-duration d-flex justify-content-between align-items-center">--}}
{{--                        <li><span class="meta__date"><i class="fas fa-play"></i> 45 Classes</span></li>--}}
{{--                        <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>--}}
{{--                    </ul>--}}
{{--                </div><!-- end card-action -->--}}
{{--                <div class="btn-box w-100 text-center mb-3">--}}
{{--                    <a href="course-details.blade.php" class="theme-btn d-block">Preview this course</a>--}}
{{--                </div>--}}
{{--                <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
{{--                    <span class="card__price">$58.00</span>--}}
{{--                    <a href="home-rtl#" class="text-btn">Add to cart</a>--}}
{{--                </div><!-- end card-price-wrap -->--}}
{{--            </div><!-- end card-content -->--}}
{{--        </div><!-- end card-item -->--}}
{{--    </div>--}}
{{--</div><!-- end tooltip_templates -->--}}
{{--<div class="tooltip_templates">--}}
{{--    <div id="tooltip_content_2">--}}
{{--        <div class="card-item">--}}
{{--            <div class="card-content">--}}
{{--                <p class="card__author">--}}
{{--                    By <a href="teacher-detail">brad travesy</a>--}}
{{--                </p>--}}
{{--                <h3 class="card__title">--}}
{{--                    <a href="course-details.blade.php">Learn Ethical Hacking from Scratch Your Stepping</a>--}}
{{--                </h3>--}}
{{--                <p class="card__label">--}}
{{--                    <span class="card__label-text mr-1">BESTSELLER</span>--}}
{{--                    <span class="mr-1">in</span><a href="home-rtl#" class="mr-1">Hacking</a> <span>| Development</span>--}}
{{--                </p>--}}
{{--                <div class="rating-wrap d-flex mt-2 mb-3">--}}
{{--                    <ul class="review-stars">--}}
{{--                        <li><span class="la la-star"></span></li>--}}
{{--                        <li><span class="la la-star"></span></li>--}}
{{--                        <li><span class="la la-star"></span></li>--}}
{{--                        <li><span class="la la-star"></span></li>--}}
{{--                        <li><span class="la la-star-o"></span></li>--}}
{{--                    </ul>--}}
{{--                    <span class="star-rating-wrap">--}}
{{--                        <span class="star__rating">4.4</span>--}}
{{--                        <span class="star__count">(20)</span>--}}
{{--                    </span>--}}
{{--                </div><!-- end rating-wrap -->--}}
{{--                <div class="card-para mb-3">--}}
{{--                    <p class="font-size-14 line-height-24">--}}
{{--                        Learn WordPress like a Professional! Start from the basics and go all the way to creating your own applications and website!--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <ul class="list-items mb-3 font-size-14">--}}
{{--                    <li>There are many variations of passages</li>--}}
{{--                    <li>Lorem Ipsum available</li>--}}
{{--                    <li>Suffered alteration in some form</li>--}}
{{--                </ul>--}}
{{--                <div class="card-action">--}}
{{--                    <ul class="card-duration d-flex justify-content-between align-items-center">--}}
{{--                        <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>--}}
{{--                        <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>--}}
{{--                    </ul>--}}
{{--                </div><!-- end card-action -->--}}
{{--                <div class="btn-box w-100 text-center mb-3">--}}
{{--                    <a href="course-details.blade.php" class="theme-btn d-block">Preview this course</a>--}}
{{--                </div>--}}
{{--                <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
{{--                    <span class="card__price">Free</span>--}}
{{--                    <a href="home-rtl#" class="text-btn">get enrolled</a>--}}
{{--                </div><!-- end card-price-wrap -->--}}
{{--            </div><!-- end card-content -->--}}
{{--        </div><!-- end card-item -->--}}
{{--    </div>--}}
{{--</div><!-- end tooltip_templates -->--}}
{{--<div class="tooltip_templates">--}}
{{--    <div id="tooltip_content_3">--}}
{{--        <div class="card-item">--}}
{{--            <div class="card-content">--}}
{{--                <p class="card__author">--}}
{{--                    By <a href="teacher-detail">mark hardson</a>--}}
{{--                </p>--}}
{{--                <h3 class="card__title">--}}
{{--                    <a href="course-details.blade.php">Microsoft SQL Server 2019 for Everyone</a>--}}
{{--                </h3>--}}
{{--                <p class="card__label">--}}
{{--                    <span class="card__label-text mr-1">BESTSELLER</span>--}}
{{--                    <span class="mr-1">in</span><a href="home-rtl#" class="mr-1">SQL</a> <span>| Development</span>--}}
{{--                </p>--}}
{{--                <div class="rating-wrap d-flex mt-2 mb-3">--}}
{{--                    <ul class="review-stars">--}}
{{--                        <li><span class="la la-star"></span></li>--}}
{{--                        <li><span class="la la-star"></span></li>--}}
{{--                        <li><span class="la la-star"></span></li>--}}
{{--                        <li><span class="la la-star"></span></li>--}}
{{--                        <li><span class="la la-star-o"></span></li>--}}
{{--                    </ul>--}}
{{--                    <span class="star-rating-wrap">--}}
{{--                        <span class="star__rating">4.4</span>--}}
{{--                        <span class="star__count">(20)</span>--}}
{{--                    </span>--}}
{{--                </div><!-- end rating-wrap -->--}}
{{--                <div class="card-para mb-3">--}}
{{--                    <p class="font-size-14 line-height-24">--}}
{{--                        Learn WordPress like a Professional! Start from the basics and go all the way to creating your own applications and website!--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <ul class="list-items mb-3 font-size-14">--}}
{{--                    <li>There are many variations of passages</li>--}}
{{--                    <li>Lorem Ipsum available</li>--}}
{{--                    <li>Suffered alteration in some form</li>--}}
{{--                </ul>--}}
{{--                <div class="card-action">--}}
{{--                    <ul class="card-duration d-flex justify-content-between align-items-center">--}}
{{--                        <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>--}}
{{--                        <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>--}}
{{--                    </ul>--}}
{{--                </div><!-- end card-action -->--}}
{{--                <div class="btn-box w-100 text-center mb-3">--}}
{{--                    <a href="course-details.blade.php" class="theme-btn d-block">Preview this course</a>--}}
{{--                </div>--}}
{{--                <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
{{--                    <span class="card__price">$68.00</span>--}}
{{--                    <a href="home-rtl#" class="text-btn">add to cart</a>--}}
{{--                </div><!-- end card-price-wrap -->--}}
{{--            </div><!-- end card-content -->--}}
{{--        </div><!-- end card-item -->--}}
{{--    </div>--}}
{{--</div><!-- end tooltip_templates -->--}}
{{--<div class="tooltip_templates">--}}
{{--    <div id="tooltip_content_4">--}}
{{--        <div class="card-item">--}}
{{--            <div class="card-content">--}}
{{--                <p class="card__author">--}}
{{--                    By <a href="teacher-detail">Kamran Paul</a>--}}
{{--                </p>--}}
{{--                <h3 class="card__title">--}}
{{--                    <a href="course-details.blade.php">User Experience Design - Adobe XD UI UX Design</a>--}}
{{--                </h3>--}}
{{--                <p class="card__label">--}}
{{--                    <span class="card__label-text mr-1">BESTSELLER</span>--}}
{{--                    <span class="mr-1">in</span><a href="home-rtl#" class="mr-1">Design</a> <span>| Development</span>--}}
{{--                </p>--}}
{{--                <div class="rating-wrap d-flex mt-2 mb-3">--}}
{{--                    <ul class="review-stars">--}}
{{--                        <li><span class="la la-star"></span></li>--}}
{{--                        <li><span class="la la-star"></span></li>--}}
{{--                        <li><span class="la la-star"></span></li>--}}
{{--                        <li><span class="la la-star"></span></li>--}}
{{--                        <li><span class="la la-star-o"></span></li>--}}
{{--                    </ul>--}}
{{--                    <span class="star-rating-wrap">--}}
{{--                        <span class="star__rating">4.4</span>--}}
{{--                        <span class="star__count">(20)</span>--}}
{{--                    </span>--}}
{{--                </div><!-- end rating-wrap -->--}}
{{--                <div class="card-para mb-3">--}}
{{--                    <p class="font-size-14 line-height-24">--}}
{{--                        Learn WordPress like a Professional! Start from the basics and go all the way to creating your own applications and website!--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <ul class="list-items mb-3 font-size-14">--}}
{{--                    <li>There are many variations of passages</li>--}}
{{--                    <li>Lorem Ipsum available</li>--}}
{{--                    <li>Suffered alteration in some form</li>--}}
{{--                </ul>--}}
{{--                <div class="card-action">--}}
{{--                    <ul class="card-duration d-flex justify-content-between align-items-center">--}}
{{--                        <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>--}}
{{--                        <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>--}}
{{--                    </ul>--}}
{{--                </div><!-- end card-action -->--}}
{{--                <div class="btn-box w-100 text-center mb-3">--}}
{{--                    <a href="course-details.blade.php" class="theme-btn d-block">Preview this course</a>--}}
{{--                </div>--}}
{{--                <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
{{--                    <span class="card__price">Free</span>--}}
{{--                    <a href="home-rtl#" class="text-btn">Get Enrolled</a>--}}
{{--                </div><!-- end card-price-wrap -->--}}
{{--            </div><!-- end card-content -->--}}
{{--        </div><!-- end card-item -->--}}
{{--    </div>--}}
{{--</div><!-- end tooltip_templates -->--}}
{{--<div class="tooltip_templates">--}}
{{--    <div id="tooltip_content_5">--}}
{{--        <div class="card-item">--}}
{{--            <div class="card-content">--}}
{{--                <p class="card__author">--}}
{{--                    By <a href="teacher-detail">Jose Purtila</a>--}}
{{--                </p>--}}
{{--                <h3 class="card__title">--}}
{{--                    <a href="course-details.blade.php">The Complete Digital finance Marketing Course</a>--}}
{{--                </h3>--}}
{{--                <p class="card__label">--}}
{{--                    <span class="card__label-text mr-1">BESTSELLER</span>--}}
{{--                    <span class="mr-1">in</span><a href="home-rtl#" class="mr-1">Marketing</a> <span>| Development</span>--}}
{{--                </p>--}}
{{--                <div class="rating-wrap d-flex mt-2 mb-3">--}}
{{--                    <ul class="review-stars">--}}
{{--                        <li><span class="la la-star"></span></li>--}}
{{--                        <li><span class="la la-star"></span></li>--}}
{{--                        <li><span class="la la-star"></span></li>--}}
{{--                        <li><span class="la la-star"></span></li>--}}
{{--                        <li><span class="la la-star-o"></span></li>--}}
{{--                    </ul>--}}
{{--                    <span class="star-rating-wrap">--}}
{{--                        <span class="star__rating">4.4</span>--}}
{{--                        <span class="star__count">(20)</span>--}}
{{--                    </span>--}}
{{--                </div><!-- end rating-wrap -->--}}
{{--                <div class="card-para mb-3">--}}
{{--                    <p class="font-size-14 line-height-24">--}}
{{--                        Learn WordPress like a Professional! Start from the basics and go all the way to creating your own applications and website!--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <ul class="list-items mb-3 font-size-14">--}}
{{--                    <li>There are many variations of passages</li>--}}
{{--                    <li>Lorem Ipsum available</li>--}}
{{--                    <li>Suffered alteration in some form</li>--}}
{{--                </ul>--}}
{{--                <div class="card-action">--}}
{{--                    <ul class="card-duration d-flex justify-content-between align-items-center">--}}
{{--                        <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>--}}
{{--                        <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>--}}
{{--                    </ul>--}}
{{--                </div><!-- end card-action -->--}}
{{--                <div class="btn-box w-100 text-center mb-3">--}}
{{--                    <a href="course-details.blade.php" class="theme-btn d-block">Preview this course</a>--}}
{{--                </div>--}}
{{--                <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
{{--                    <span class="card__price"><span class="before-price">$189.00</span> $119.00</span>--}}
{{--                    <a href="home-rtl#" class="text-btn">Add to cart</a>--}}
{{--                </div><!-- end card-price-wrap -->--}}
{{--            </div><!-- end card-content -->--}}
{{--        </div><!-- end card-item -->--}}
{{--    </div>--}}
{{--</div><!-- end tooltip_templates -->--}}
{{--<div class="tooltip_templates">--}}
{{--    <div id="tooltip_content_6">--}}
{{--        <div class="card-item">--}}
{{--            <div class="card-content">--}}
{{--                <p class="card__author">--}}
{{--                    By <a href="teacher-detail">Noelle Travesy</a>--}}
{{--                </p>--}}
{{--                <h3 class="card__title">--}}
{{--                    <a href="course-details.blade.php">Complete Python Bootcamp: Go from zero to hero</a>--}}
{{--                </h3>--}}
{{--                <p class="card__label">--}}
{{--                    <span class="card__label-text mr-1">BESTSELLER</span>--}}
{{--                    <span class="mr-1">in</span><a href="home-rtl#" class="mr-1">Python</a> <span>| Development</span>--}}
{{--                </p>--}}
{{--                <div class="rating-wrap d-flex mt-2 mb-3">--}}
{{--                    <ul class="review-stars">--}}
{{--                        <li><span class="la la-star"></span></li>--}}
{{--                        <li><span class="la la-star"></span></li>--}}
{{--                        <li><span class="la la-star"></span></li>--}}
{{--                        <li><span class="la la-star"></span></li>--}}
{{--                        <li><span class="la la-star-o"></span></li>--}}
{{--                    </ul>--}}
{{--                    <span class="star-rating-wrap">--}}
{{--                        <span class="star__rating">4.4</span>--}}
{{--                        <span class="star__count">(20)</span>--}}
{{--                    </span>--}}
{{--                </div><!-- end rating-wrap -->--}}
{{--                <div class="card-para mb-3">--}}
{{--                    <p class="font-size-14 line-height-24">--}}
{{--                        Learn WordPress like a Professional! Start from the basics and go all the way to creating your own applications and website!--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <ul class="list-items mb-3 font-size-14">--}}
{{--                    <li>There are many variations of passages</li>--}}
{{--                    <li>Lorem Ipsum available</li>--}}
{{--                    <li>Suffered alteration in some form</li>--}}
{{--                </ul>--}}
{{--                <div class="card-action">--}}
{{--                    <ul class="card-duration d-flex justify-content-between align-items-center">--}}
{{--                        <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>--}}
{{--                        <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>--}}
{{--                    </ul>--}}
{{--                </div><!-- end card-action -->--}}
{{--                <div class="btn-box w-100 text-center mb-3">--}}
{{--                    <a href="course-details.blade.php" class="theme-btn d-block">Preview this course</a>--}}
{{--                </div>--}}
{{--                <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
{{--                    <span class="card__price">$68.00</span>--}}
{{--                    <a href="home-rtl#" class="text-btn">add to cart</a>--}}
{{--                </div><!-- end card-price-wrap -->--}}
{{--            </div><!-- end card-content -->--}}
{{--        </div><!-- end card-item -->--}}
{{--    </div>--}}
{{--</div><!-- end tooltip_templates -->--}}


<!-- template js files -->
{{--<script src="/js/jquery-3.4.1.min.js"></script>--}}
<script src="/js/popper.min.js"></script>
{{--<script src="/js/bootstrap.min.js"></script>--}}
<script src="/js/bootstrap-select.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="/js/isotope.js"></script>
<script src="/js/waypoint.min.js"></script>
<script src="/js/jquery.counterup.min.js"></script>
<script src="/js/particles.min.js"></script>
<script src="/js/particlesRun.js"></script>
<script src="/js/fancybox.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/date-time-picker.js"></script>
<script src="/js/jquery.filer.min.js"></script>
<script src="/js/emojionearea.min.js"></script>
<script src="/js/smooth-scrolling.js"></script>
<script src="/js/tooltipster.bundle.min.js"></script>
<script src="/js/main-rtl.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js" integrity="sha512-/DXTXr6nQodMUiq+IUJYCt2PPOUjrHJ9wFrqpJ3XkgPNOZVfMok7cRw6CSxyCQxXn6ozlESsSh1/sMCTF1rL/g==" crossorigin="anonymous"></script>
@endsection

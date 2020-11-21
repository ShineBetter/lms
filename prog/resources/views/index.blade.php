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
                            <h2 class="section__title text-white">We Help You Learn <br> What You Love</h2>
                            <p class="section__desc">Emply dummy text of the printing and typesetting industry orem Ipsum has been the
                                <br>industry's standard dummy text ever sinceprinting and typesetting industry.
                            </p>
                        </div>
                        <div class="btn-box d-flex align-items-center">
                            <a href="../admission.blade.php" class="theme-btn theme-btn-hover-light">let's join</a>
                            <a href="home-rtl.html#" class="btn-text video-play-btn ml-4" data-fancybox="video" data-src="https://www.youtube.com/watch?v=cRXm1p-CNyk" data-speed="700">
                                Watch Preview<i class="la la-play icon-btn ml-2"></i>
                            </a>
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
                            <h2 class="section__title text-white">Join Aduca & Get <br> Your Free Courses!</h2>
                            <p class="section__desc">Emply dummy text of the printing and typesetting industry orem Ipsum has been the
                                <br>industry's standard dummy text ever sinceprinting and typesetting industry.
                            </p>
                        </div>
                        <div class="btn-box d-flex align-items-center justify-content-center">
                            <a href="../admission.blade.php" class="theme-btn theme-btn-hover-light">get started</a>
                            <a href="home-rtl.html#" class="btn-text video-play-btn ml-4" data-fancybox="video" data-src="https://www.youtube.com/watch?v=cRXm1p-CNyk" data-speed="700">
                                Watch Preview<i class="la la-play icon-btn ml-2"></i>
                            </a>
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
                            <h2 class="section__title text-white">Learn Anything <br> Anytime, Anywhere</h2>
                            <p class="section__desc">Emply dummy text of the printing and typesetting industry orem Ipsum has been the
                                <br>industry's standard dummy text ever sinceprinting and typesetting industry.
                            </p>
                        </div>
                        <div class="btn-box hero-btn-right d-flex align-items-center justify-content-end">
                            <a href="home-rtl.html#" class="btn-text video-play-btn mr-4" data-fancybox="video" data-src="https://www.youtube.com/watch?v=cRXm1p-CNyk" data-speed="700">
                                <i class="la la-play icon-btn mr-2"></i>Watch Preview
                            </a>
                            <a href="../admission.blade.php" class="theme-btn theme-btn-hover-light">get enrolled</a>
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
                            <i class="la la-user"></i>
                        </div>
                        <h3 class="info__title">Expert Teachers</h3>
                        <p class="info__text">Tmply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                        <a href="home-rtl.html#" class="text-btn">read more</a>
                    </div><!-- end info-box -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-4 column-td-half">
                    <div class="info-box info-box-color-2">
                        <div class="hover-overlay"></div>
                        <div class="icon-element mx-auto">
                            <i class="la la-paper-plane-o"></i>
                        </div>
                        <h3 class="info__title">Easy Communication</h3>
                        <p class="info__text">Tmply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                        <a href="home-rtl.html#" class="text-btn">read more</a>
                    </div><!-- end info-box -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-4 column-td-half">
                    <div class="info-box info-box-color-3">
                        <div class="hover-overlay"></div>
                        <div class="icon-element mx-auto">
                            <i class="la la-graduation-cap"></i>
                        </div>
                        <h3 class="info__title">Get Certificates</h3>
                        <p class="info__text">Tmply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                        <a href="home-rtl.html#" class="text-btn">read more</a>
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
                    <h5 class="section__meta">Categories</h5>
                    <h2 class="section__title">Popular Categories</h2>
                    <span class="section-divider"></span>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-9 -->
            <div class="col-lg-3">
                <div class="btn-box h-100 d-flex align-items-center justify-content-end">
                    <a href="home-rtl.html#" class="theme-btn">all Categories</a>
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
                                <h3 class="cat__title"><a href="home-rtl.html#">Business Study</a></h3>
                                <p class="cat__meta">9 courses</p>
                                <a href="home-rtl.html#" class="theme-btn">explore now</a>
                            </div>
                        </div><!-- end category-content -->
                    </div><!-- end category-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-td-half">
                    <div class="category-item">
                        <img src="/images/img2.jpg" alt="">
                        <div class="category-content">
                            <div class="category-inner">
                                <h3 class="cat__title"><a href="home-rtl.html#">Art & Design</a></h3>
                                <p class="cat__meta">7 courses</p>
                                <a href="home-rtl.html#" class="theme-btn">explore now</a>
                            </div>
                        </div><!-- end category-content -->
                    </div><!-- end category-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-td-half">
                    <div class="category-item">
                        <img src="/images/img3.jpg" alt="">
                        <div class="category-content">
                            <div class="category-inner">
                                <h3 class="cat__title"><a href="home-rtl.html#">Web development</a></h3>
                                <p class="cat__meta">8 courses</p>
                                <a href="home-rtl.html#" class="theme-btn">explore now</a>
                            </div>
                        </div><!-- end category-content -->
                    </div><!-- end category-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-td-half">
                    <div class="category-item">
                        <img src="/images/img4.jpg" alt="">
                        <div class="category-content">
                            <div class="category-inner">
                                <h3 class="cat__title"><a href="home-rtl.html#">health & fitness</a></h3>
                                <p class="cat__meta">6 courses</p>
                                <a href="home-rtl.html#" class="theme-btn">explore now</a>
                            </div>
                        </div><!-- end category-content -->
                    </div><!-- end category-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-td-half">
                    <div class="category-item">
                        <img src="/images/img5.jpg" alt="">
                        <div class="category-content">
                            <div class="category-inner">
                                <h3 class="cat__title"><a href="home-rtl.html#">photography</a></h3>
                                <p class="cat__meta">7 courses</p>
                                <a href="home-rtl.html#" class="theme-btn">explore now</a>
                            </div>
                        </div><!-- end category-content -->
                    </div><!-- end category-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-td-half">
                    <div class="category-item">
                        <img src="/images/img6.jpg" alt="">
                        <div class="category-content">
                            <div class="category-inner">
                                <h3 class="cat__title"><a href="home-rtl.html#">Mathematics</a></h3>
                                <p class="cat__meta">8 courses</p>
                                <a href="home-rtl.html#" class="theme-btn">explore now</a>
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
                        <h5 class="section__meta">choose your desired courses</h5>
                        <h2 class="section__title">Browse Our Top Courses</h2>
                        <span class="section-divider"></span>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tab margin-top-28px margin-bottom-55px">
                        <ul class="nav nav-tabs justify-content-center text-center" role="tablist" id="review">
                            <li role="presentation">
                                <a href="home-rtl.html#tab1" role="tab" data-toggle="tab" class="theme-btn active" aria-selected="true">
                                    business
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="home-rtl.html#tab2" role="tab" data-toggle="tab" class="theme-btn" aria-selected="false">
                                    design
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="home-rtl.html#tab3" role="tab" data-toggle="tab" class="theme-btn" aria-selected="false">
                                    development
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="home-rtl.html#tab4" role="tab" data-toggle="tab" class="theme-btn" aria-selected="false">
                                    web
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="home-rtl.html#tab5" role="tab" data-toggle="tab" class="theme-btn" aria-selected="false">
                                    marketing
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
                                                <span class="badge-label">bestseller</span>
                                            </div>
                                        </div><!-- end card-image -->
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text">beginner</span>
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">WordPress for Beginners – Master WordPress</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">alex smith</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Add to cart</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">Learn Ethical Hacking from Scratch Your Stepping</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">brad travesy</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Get Enrolled</a>
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
                                                <span class="card__label-text">advanced</span>
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">Microsoft SQL Server 2019 for Everyone</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">mark hardson</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Add to cart</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">User Experience Design - Adobe XD UI UX Design</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">kamran paul</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Get Enrolled</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">The Complete Digital finance Marketing Course</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">jose purtila</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Add to cart</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">Complete Python Bootcamp: Go from zero to hero</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">noelle travesy</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Add to cart</a>
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
                                                <span class="card__label-text">beginner</span>
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">WordPress for Beginners – Master WordPress</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">alex smith</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Get Enrolled</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">Learn Ethical Hacking from Scratch Your Stepping</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">brad travesy</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Add to cart</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">Microsoft SQL Server 2019 for Everyone</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">mark hardson</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Add to cart</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">User Experience Design - Adobe XD UI UX Design</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">kamran paul</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Get Enrolled</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">The Complete Digital finance Marketing Course</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">jose purtila</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Add to cart</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">Complete Python Bootcamp: Go from zero to hero</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">noelle travesy</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Add to cart</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">WordPress for Beginners – Master WordPress</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">alex smith</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Add to cart</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">Learn Ethical Hacking from Scratch Your Stepping</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">brad travesy</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Get Enrolled</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">Microsoft SQL Server 2019 for Everyone</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">mark hardson</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Add to cart</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">User Experience Design - Adobe XD UI UX Design</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">kamran paul</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Add to cart</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">The Complete Digital finance Marketing Course</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">jose purtila</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Add to cart</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">Complete Python Bootcamp: Go from zero to hero</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">noelle travesy</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Get Enrolled</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">WordPress for Beginners – Master WordPress</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">alex smith</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Add to cart</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">Learn Ethical Hacking from Scratch Your Stepping</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">brad travesy</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Add to cart</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">Microsoft SQL Server 2019 for Everyone</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">mark hardson</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Add to cart</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">User Experience Design - Adobe XD UI UX Design</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">kamran paul</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Get Enrolled</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">The Complete Digital finance Marketing Course</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">jose purtila</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Add to cart</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">Complete Python Bootcamp: Go from zero to hero</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">noelle travesy</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Add to cart</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">WordPress for Beginners – Master WordPress</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">alex smith</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Add to cart</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">Learn Ethical Hacking from Scratch Your Stepping</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">brad travesy</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Get Enrolled</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">Microsoft SQL Server 2019 for Everyone</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">mark hardson</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Add to cart</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">User Experience Design - Adobe XD UI UX Design</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">kamran paul</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Add to cart</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">The Complete Digital finance Marketing Course</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">jose purtila</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Add to cart</a>
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
                                                <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="course-details.blade.php">Complete Python Bootcamp: Go from zero to hero</a>
                                            </h3>
                                            <p class="card__author">
                                                <a href="teacher-detail.html">noelle travesy</a>
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
                                                <a href="home-rtl.html#" class="text-btn">Get Enrolled</a>
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
                        <a href="course-grid.html" class="theme-btn">browse all Courses</a>
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
                        <h5 class="section__meta">Learn on your schedule</h5>
                        <h2 class="section__title">Trending Courses</h2>
                        <span class="section-divider"></span>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row margin-top-28px">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div class="course-carousel owl-dot-and-nav">
                            <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                <div class="card-image">
                                    <a href="course-details.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                                </div><!-- end card-image -->
                                <div class="card-content">
                                    <p class="card__label">
                                        <span class="card__label-text">all levels</span>
                                        <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                    </p>
                                    <h3 class="card__title">
                                        <a href="course-details.blade.php">User Experience Design - Adobe XD UI UX Design</a>
                                    </h3>
                                    <p class="card__author">
                                        <a href="teacher-detail.html">kamran paul</a>
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
                                            <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>
                                            <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>
                                        </ul>
                                    </div><!-- end card-action -->
                                    <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                        <span class="card__price">Free</span>
                                        <a href="home-rtl.html#" class="text-btn">Get Enrolled</a>
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
                                        <span class="card__label-text">all levels</span>
                                        <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                    </p>
                                    <h3 class="card__title">
                                        <a href="course-details.blade.php">The Complete Digital finance Marketing Course</a>
                                    </h3>
                                    <p class="card__author">
                                        <a href="teacher-detail.html">jose purtila</a>
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
                                            <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>
                                            <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>
                                        </ul>
                                    </div><!-- end card-action -->
                                    <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                        <span class="card__price"><span class="before-price">$189.00</span> $119.00</span>
                                        <a href="home-rtl.html#" class="text-btn">Add to cart</a>
                                    </div><!-- end card-price-wrap -->
                                </div><!-- end card-content -->
                            </div><!-- end card-item -->
                            <div class="card-item card-preview" data-tooltip-content="#tooltip_content_3">
                                <div class="card-image">
                                    <a href="course-details.blade.php" class="card__img"><img src="/images/img12.jpg" alt=""></a>
                                </div><!-- end card-image -->
                                <div class="card-content">
                                    <p class="card__label">
                                        <span class="card__label-text">all levels</span>
                                        <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                    </p>
                                    <h3 class="card__title">
                                        <a href="course-details.blade.php">Complete Python Bootcamp: Go from zero to hero</a>
                                    </h3>
                                    <p class="card__author">
                                        <a href="teacher-detail.html">noelle travesy</a>
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
                                            <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>
                                            <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>
                                        </ul>
                                    </div><!-- end card-action -->
                                    <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                        <span class="card__price">$68.00</span>
                                        <a href="home-rtl.html#" class="text-btn">Add to cart</a>
                                    </div><!-- end card-price-wrap -->
                                </div><!-- end card-content -->
                            </div><!-- end card-item -->
                            <div class="card-item card-preview" data-tooltip-content="#tooltip_content_4">
                                <div class="card-image">
                                    <a href="course-details.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                                </div><!-- end card-image -->
                                <div class="card-content">
                                    <p class="card__label">
                                        <span class="card__label-text">all levels</span>
                                        <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                    </p>
                                    <h3 class="card__title">
                                        <a href="course-details.blade.php">Complete Python Bootcamp: Go from zero to hero</a>
                                    </h3>
                                    <p class="card__author">
                                        <a href="teacher-detail.html">noelle travesy</a>
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
                                            <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>
                                            <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>
                                        </ul>
                                    </div><!-- end card-action -->
                                    <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                        <span class="card__price">$68.00</span>
                                        <a href="home-rtl.html#" class="text-btn">Add to cart</a>
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
                                        <span class="card__label-text">all levels</span>
                                        <a href="home-rtl.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                    </p>
                                    <h3 class="card__title">
                                        <a href="course-details.blade.php">Complete Python Bootcamp: Go from zero to hero</a>
                                    </h3>
                                    <p class="card__author">
                                        <a href="teacher-detail.html">noelle travesy</a>
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
                                            <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>
                                            <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>
                                        </ul>
                                    </div><!-- end card-action -->
                                    <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                        <span class="card__price">$68.00</span>
                                        <a href="home-rtl.html#" class="text-btn">Add to cart</a>
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
                    <h4 class="count__title counter">4520</h4>
                    <p class="count__meta">expert instructors</p>
                </div><!-- end counter-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-half">
                <div class="counter-item">
                    <span class="la la-globe count__icon"></span>
                    <h4 class="count__title counter text-color">5452</h4>
                    <p class="count__meta">foreign followers</p>
                </div><!-- end counter-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-half">
                <div class="counter-item">
                    <span class="la la-users count__icon"></span>
                    <h4 class="count__title counter text-color-2">9720</h4>
                    <p class="count__meta">students enrolled</p>
                </div><!-- end counter-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-half">
                <div class="counter-item">
                    <span class="la la-certificate count__icon"></span>
                    <h4 class="count__title counter text-color-3">20</h4>
                    <p class="count__meta">years of experience</p>
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
                    <h5 class="section__meta">expert people</h5>
                    <h2 class="section__title">Meet Our Expert Instructors</h2>
                    <span class="section-divider"></span>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row margin-top-28px">
            <div class="col-lg-4 column-td-half">
                <div class="team-item">
                    <div class="team-img-box">
                        <img src="/images/team.jpg" alt="">
                        <ul class="social-profile">
                            <li><a href="home-rtl.html#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="home-rtl.html#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="home-rtl.html#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="home-rtl.html#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-detail">
                        <h3 class="team__title"><a href="teacher-detail.html">alex smith</a></h3>
                        <p class="team__meta">Teacher</p>
                        <p class="team__text">
                            Pellentesque tellus arcu, laoreet volutpavenenatis molest
                            commodo lorem lectus pretium vehicula.
                        </p>
                        <a href="teacher-detail.html" class="theme-btn">view profile</a>
                    </div>
                </div><!-- end team-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 column-td-half">
                <div class="team-item">
                    <div class="team-img-box">
                        <img src="/images/team2.jpg" alt="">
                        <ul class="social-profile">
                            <li><a href="home-rtl.html#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="home-rtl.html#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="home-rtl.html#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="home-rtl.html#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-detail">
                        <h3 class="team__title"><a href="teacher-detail.html">rose taylor</a></h3>
                        <p class="team__meta">Teacher</p>
                        <p class="team__text">
                            Pellentesque tellus arcu, laoreet volutpavenenatis molest
                            commodo lorem lectus pretium vehicula.
                        </p>
                        <a href="teacher-detail.html" class="theme-btn">view profile</a>
                    </div>
                </div><!-- end team-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 column-td-half">
                <div class="team-item">
                    <div class="team-img-box">
                        <img src="/images/team3.jpg" alt="">
                        <ul class="social-profile">
                            <li><a href="home-rtl.html#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="home-rtl.html#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="home-rtl.html#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="home-rtl.html#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-detail">
                        <h3 class="team__title"><a href="teacher-detail.html">jef collin</a></h3>
                        <p class="team__meta">Teacher</p>
                        <p class="team__text">
                            Pellentesque tellus arcu, laoreet volutpavenenatis molest
                            commodo lorem lectus pretium vehicula.
                        </p>
                        <a href="teacher-detail.html" class="theme-btn">view profile</a>
                    </div>
                </div><!-- end team-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 column-td-half">
                <div class="team-item">
                    <div class="team-img-box">
                        <img src="/images/team4.jpg" alt="">
                        <ul class="social-profile">
                            <li><a href="home-rtl.html#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="home-rtl.html#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="home-rtl.html#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="home-rtl.html#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-detail">
                        <h3 class="team__title"><a href="teacher-detail.html">mike hardson</a></h3>
                        <p class="team__meta">Teacher</p>
                        <p class="team__text">
                            Pellentesque tellus arcu, laoreet volutpavenenatis molest
                            commodo lorem lectus pretium vehicula.
                        </p>
                        <a href="teacher-detail.html" class="theme-btn">view profile</a>
                    </div>
                </div><!-- end team-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 column-td-half">
                <div class="team-item">
                    <div class="team-img-box">
                        <img src="/images/team5.jpg" alt="">
                        <ul class="social-profile">
                            <li><a href="home-rtl.html#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="home-rtl.html#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="home-rtl.html#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="home-rtl.html#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-detail">
                        <h3 class="team__title"><a href="teacher-detail.html">john smith</a></h3>
                        <p class="team__meta">Teacher</p>
                        <p class="team__text">
                            Pellentesque tellus arcu, laoreet volutpavenenatis molest
                            commodo lorem lectus pretium vehicula.
                        </p>
                        <a href="teacher-detail.html" class="theme-btn">view profile</a>
                    </div>
                </div><!-- end team-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 column-td-half">
                <div class="team-item">
                    <div class="team-img-box">
                        <img src="/images/team6.jpg" alt="">
                        <ul class="social-profile">
                            <li><a href="home-rtl.html#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="home-rtl.html#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="home-rtl.html#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="home-rtl.html#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-detail">
                        <h3 class="team__title"><a href="teacher-detail.html">kevin martin</a></h3>
                        <p class="team__meta">Teacher</p>
                        <p class="team__text">
                            Pellentesque tellus arcu, laoreet volutpavenenatis molest
                            commodo lorem lectus pretium vehicula.
                        </p>
                        <a href="teacher-detail.html" class="theme-btn">view profile</a>
                    </div>
                </div><!-- end team-item -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-box text-center">
                    <a href="teachers.html" class="theme-btn">view all teachers</a>
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
                    <h5 class="section__meta">testimonials</h5>
                    <h2 class="section__title">See What Our Lovely <br> Students Said</h2>
                    <span class="section-divider"></span>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="container-fluid">
        <div class="row margin-top-28px">
            <div class="col-lg-12">
                <div class="testimonial-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">Kevin Martin</h3>
                                <span class="testimonial__name-meta">student</span>
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
                                My children and I LOVE Aduca! The courses are fantastic and the
                                instructors are so fun and knowledgeable.
                                I only wish we found it sooner.
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img2.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">Jessica Brown</h3>
                                <span class="testimonial__name-meta">student</span>
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
                                No matter what you want to learn, you’ll find an
                                amazing selection of courses here.
                                The instructors are so knowledgable while
                                being fun and interesting. Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Ad blanditiis consectetur
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img3.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">Mike Hardson</h3>
                                <span class="testimonial__name-meta">student</span>
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
                                I really recommend this site to all my friends and anyone who’s willing to
                                learn real skills. This platform gives
                                you the opportunity to learn from experts at a convenient time.
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img4.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">Bernice Pease</h3>
                                <span class="testimonial__name-meta">student</span>
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
                                Thank you Aduca! You've renewed my passion for
                                learning and my dream of becoming a web developer.
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">Daniel Ward</h3>
                                <span class="testimonial__name-meta">student</span>
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
                                I came across this site when I had no funds to pay for a college education.
                                This site has literally been a lifesaver as
                                I can now earn from freelance working using the skills
                                I learned from here.
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img5.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">Kevin Martin</h3>
                                <span class="testimonial__name-meta">student</span>
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
                                This site has helped me with all the resources I need to become a
                                freelance web developer. I have a renewed passion
                                for learning more thanks to all the helpful
                                and amazing instructors
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img6.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">Jessica Brown</h3>
                                <span class="testimonial__name-meta">student</span>
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
                                Thank you Aduca! You've renewed my passion for
                                learning and my dream of becoming a web developer.
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img2.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">Mike Hardson</h3>
                                <span class="testimonial__name-meta">student</span>
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
                                I work in project management and joined Aduca because I get great courses
                                for less. The instructors are fantastic,
                                interesting, and helpful. Thank you Aduca
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img3.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">Bernice Pease</h3>
                                <span class="testimonial__name-meta">student</span>
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
                                No matter what you want to learn, you’ll find an amazing selection of courses here.
                                The instructors are so knowledgable while being fun and interesting.
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img4.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">Daniel Ward</h3>
                                <span class="testimonial__name-meta">student</span>
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
                                The best part about Aduca is the selection.
                                You can find a course for anything you want to learn!
                                really Aduca i closed with you.
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">Kevin Martin</h3>
                                <span class="testimonial__name-meta">student</span>
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
                                I came across this site when I had no funds to pay for a college education.
                                This site has literally been a lifesaver as I can
                                now earn from freelance working using the skills I learned from here.
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img5.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">Jessica Brown</h3>
                                <span class="testimonial__name-meta">student</span>
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
                                Studying free courses in the privacy of my home allows me to be a
                                role model for my children. My children know my goals are to complete courses
                                to help fill in the gaps I have in my learning to improve my chances of
                                getting a job in my field. Having the opportunity
                                to change my life by studying without having to pay is awesome.
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img6.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">Mike Hardson</h3>
                                <span class="testimonial__name-meta">student</span>
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
                                Aduca opens the doors for new opportunities. The concept of continued
                                learning has really improved my mental acuity and has given me a sense of personal fulfilment.
                                I’ve also gained more confidence and so have a much better lifestyle.
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img2.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">Bernice Pease</h3>
                                <span class="testimonial__name-meta">student</span>
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
                                Esther is an enthusiastic Aduca student from Nigeria.
                                Esther first learned to speak Spanish with Aduca. She thinks Aduca i...
                            </p>
                        </div><!-- end testimonial__desc -->
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testimonial-header">
                            <img src="/images/testi-img3.jpg" alt="small-avatar">
                            <div class="testimonial__name">
                                <h3 class="testimonial__name-title">Daniel Ward</h3>
                                <span class="testimonial__name-meta">student</span>
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
                                I really recommend this site to all my friends and anyone who’s
                                willing to learn real skills. This platform
                                gives you the opportunity to learn
                                from experts at a convenient time.
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
                    <div class="section-heading">
                        <h5 class="section__meta section__metalight">start online learning</h5>
                        <h2 class="section__title text-white">Enhance Your Skills with <br> Best Online Courses</h2>
                        <span class="section-divider section-divider-light"></span>
                    </div><!-- end section-heading -->
                    <div class="btn-box margin-top-20px">
                        <a href="home-rtl.html#" class="theme-btn theme-btn-hover-light">get started now</a>
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
                        <h5 class="section__meta">get start with aduca</h5>
                        <h2 class="section__title">Benefits of Learning With Aduca</h2>
                        <span class="section-divider"></span>
                        <p class="section__desc">
                            Smply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry’s when an unknown printerit to make a type specimen book
                            Pellentesque tellus arcu
                        </p>
                    </div><!-- end section-heading -->
                    <div class="row">
                        <div class="col-lg-4 column-td-half">
                            <div class="info-icon-box">
                                <span class="la la-mouse-pointer icon-element icon-bg-1"></span>
                                <h4 class="widget-title">100,000 Courses</h4>
                            </div><!-- end info-icon-box -->
                        </div><!-- end col-lg-4 -->
                        <div class="col-lg-4 column-td-half">
                            <div class="info-icon-box">
                                <span class="la la-bolt icon-element icon-bg-2"></span>
                                <h4 class="widget-title">Live Learning</h4>
                            </div><!-- end info-icon-box -->
                        </div><!-- end col-lg-4 -->
                        <div class="col-lg-4 column-td-half">
                            <div class="info-icon-box">
                                <span class="la la-users icon-element icon-bg-3"></span>
                                <h4 class="widget-title">Expert Teachers</h4>
                            </div><!-- end info-icon-box -->
                        </div><!-- end col-lg-4 -->
                    </div><!-- end row -->
                    <div class="btn-box">
                        <a href="about.blade.php" class="theme-btn">learn more</a>
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
                        <h3 class="widget-title">Receive Free Courses</h3>
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Name<span class="primary-color-2 ml-1">*</span></label>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="name" placeholder="Your Name">
                                    <span class="la la-user input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Email<span class="primary-color-2 ml-1">*</span></label>
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="Email Address">
                                    <span class="la la-envelope input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Phone Number<span class="primary-color-2 ml-1">*</span></label>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="phone" placeholder="Phone Number">
                                    <span class="la la-phone input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Subject<span class="primary-color-2 ml-1">*</span></label>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="subject" placeholder="Subject">
                                    <span class="la la-book input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box">
                                <button class="theme-btn" type="submit">apply now</button>
                            </div><!-- end btn-box -->
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div><!-- end col-lg-5 -->
            <div class="col-lg-7">
                <div class="register-heading">
                    <div class="section-heading">
                        <h5 class="section__meta">register</h5>
                        <h2 class="section__title">Get ahead with Learning Paths. Stay Sharp.</h2>
                        <span class="section-divider"></span>
                        <p class="section__desc mb-2">Education is the process of acquiring the body of knowledge and skills that people are expected have in your society. A education develops a critical thought process in addition to learning. Bimply dummy text of the printing and typesetting istryrem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid architecto aspernatur, facilis perspiciatis rerum saepe vel vitae? Alias culpa dicta facere maiores quam quas, quis sapiente voluptatem? Nulla, voluptatem.</p>
                        <p class="section__desc">
                            tryrem Ipsum has been the industry’s standard dummy text ever since the 1500s,
                            when an unknown printer.
                        </p>
                    </div><!-- end section-heading -->
                    <div class="btn-box">
                        <a href="home-rtl.html#" class="theme-btn">get started</a>
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
<section class="clientlogo-area overflow-hidden padding-top-120px padding-bottom-100px text-center">
    <div class="stroke-line">
        <span class="stroke__line"></span>
        <span class="stroke__line"></span>
        <span class="stroke__line"></span>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h5 class="section__meta">our partners</h5>
                    <h2 class="section__title">Top companies choose <a href="home-rtl.html#" class="primary-color-2">Aduca for Business</a> to build
                        <br> in-demand career skills</h2>
                    <span class="section-divider"></span>
                </div><!-- end section-heading -->
            </div><!-- end col-md-12 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="client-logo margin-top-30px">
                    <div class="client-logo-item">
                        <a href="home-rtl.html#"><img src="/images/sponsor-img.png" alt="brand image"></a>
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <a href="home-rtl.html#"><img src="/images/sponsor-img2.png" alt="brand image"></a>
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <a href="home-rtl.html#"><img src="/images/sponsor-img3.png" alt="brand image"></a>
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <a href="home-rtl.html#"><img src="/images/sponsor-img4.png" alt="brand image"></a>
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <a href="home-rtl.html#"><img src="/images/sponsor-img5.png" alt="brand image"></a>
                    </div><!-- end client-logo-item -->
                </div><!-- end client-logo -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="stroke-line2">
        <span class="stroke__line"></span>
        <span class="stroke__line"></span>
        <span class="stroke__line"></span>
    </div>
</section><!-- end clientlogo-area -->
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
                    <h5 class="section__meta section__metalight">news feeds</h5>
                    <h2 class="section__title text-white">Latest News & Articles</h2>
                    <span class="section-divider section-divider-light"></span>
                </div><!-- end section-heading -->
            </div><!-- end col-md-12 -->
        </div><!-- end row -->
        <div class="row margin-top-30px">
            <div class="col-lg-12">
                <div class="blog-post-carousel owl-dot-and-nav">
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 Jan</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="../blog-single.blade.php">User Experience Design Essentials</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="home-rtl.html#" class="blog-admin-name">TechyDevs</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img10.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 Jan</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="../blog-single.blade.php">Ultimate Photoshop Training: From Beginner</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="home-rtl.html#" class="blog-admin-name">TechyDevs</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img11.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 Jan</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="../blog-single.blade.php">Sales Training: Practical Techniques</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="home-rtl.html#" class="blog-admin-name">TechyDevs</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img12.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 Jan</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="../blog-single.blade.php">Complete Financial Analyst Course</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="home-rtl.html#" class="blog-admin-name">TechyDevs</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img13.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 Jan</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="../blog-single.blade.php">User Experience Design Essentials</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="home-rtl.html#" class="blog-admin-name">TechyDevs</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img14.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 Jan</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="../blog-single.blade.php">Ultimate Photoshop Training: From Beginner</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="home-rtl.html#" class="blog-admin-name">TechyDevs</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img10.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 Jan</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="../blog-single.blade.php">User Experience Design Essentials</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="home-rtl.html#" class="blog-admin-name">TechyDevs</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 Jan</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="../blog-single.blade.php">Ultimate Photoshop Training: From Beginner</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="home-rtl.html#" class="blog-admin-name">TechyDevs</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">24 Jan</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="../blog-single.blade.php">Ultimate Photoshop Training: From Beginner</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li>By<a href="home-rtl.html#" class="blog-admin-name">TechyDevs</a></li>
                                    <li><span class="blog__panel-comment">4 Comments</span></li>
                                    <li><span class="blog__panel-likes">130 Likes</span></li>
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
<section class="cta-area padding-top-115px padding-bottom-90px text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 column-td-half">
                <div class="post-card">
                    <div class="post-card-content">
                        <img src="/images/img33.jpg" alt="" class="img-fluid">
                        <h2 class="widget-title mt-4 mb-2">Become Instructor</h2>
                        <p>Teach what you love. Aduca gives you the tools to create a course.</p>
                    </div><!-- end post-card-content -->
                    <div class="btn-box margin-top-30px">
                        <a href="home-rtl.html#" class="theme-btn">Start Teaching</a>
                    </div><!-- end btn-box -->
                </div>
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 column-td-half">
                <div class="post-card">
                    <div class="post-card-content">
                        <img src="/images/img34.jpg" alt="" class="img-fluid">
                        <h2 class="widget-title mt-4 mb-2">Become a Learner</h2>
                        <p>Learn what you love! transform your life through education</p>
                    </div><!-- end post-card-content -->
                    <div class="btn-box margin-top-30px">
                        <a href="home-rtl.html#" class="theme-btn">Start Learning</a>
                    </div><!-- end btn-box -->
                </div>
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 column-td-half">
                <div class="post-card">
                    <div class="post-card-content">
                        <img src="/images/img35.jpg" alt="" class="img-fluid">
                        <h2 class="widget-title mt-4 mb-2">Aduca for Business</h2>
                        <p>Get unlimited access to 5,000+ of Aduca's top courses for your team</p>
                    </div><!-- end post-card-content -->
                    <div class="btn-box margin-top-30px">
                        <a href="home-rtl.html#" class="theme-btn">Get aduca for business</a>
                    </div><!-- end btn-box -->
                </div>
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- ================================
       START CTA AREA
================================= -->

<!--======================================
        START SUBSCRIBER AREA
======================================-->
<section class="subscriber-area padding-top-80px padding-bottom-75px">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-heading">
                    <h5 class="section__meta section__metalight">newsletter</h5>
                    <h2 class="section__title text-white">Subscribe our newsletter</h2>
                    <span class="section-divider section-divider-light"></span>
                    <p class="section__desc mb-0 text-color-rgba">There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-5 -->
            <div class="col-lg-6 ml-auto">
                <div class="subscriber-form">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="form-label text-white">Your email address</label>
                                <div class="form-group d-flex align-items-center">
                                    <input class="form-control" type="email" name="email" placeholder="Enter your email" required>
                                    <span class="la la-envelope-o input-icon"></span>
                                    <button class="theme-btn theme-btn-hover-light" type="submit">Subscribe</button>
                                </div>
                                <p class="text-color-rgba font-size-14 mt-1">
                                    <i class="la la-lock mr-1"></i>Your information is safe with us! unsubscribe anytime.
                                </p>
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

<div class="tooltip_templates">
    <div id="tooltip_content_1">
        <div class="card-item">
            <div class="card-content">
                <p class="card__author">
                    By <a href="teacher-detail.html">alex smith</a>
                </p>
                <h3 class="card__title">
                    <a href="course-details.blade.php">WordPress for Beginners – Master WordPress</a>
                </h3>
                <p class="card__label">
                    <span class="card__label-text mr-1">BESTSELLER</span>
                    <span class="mr-1">in</span><a href="home-rtl.html#" class="mr-1">WordPress</a> <span>| Development</span>
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
                <div class="card-para mb-3">
                    <p class="font-size-14 line-height-24">
                        Learn WordPress like a Professional! Start from the basics and go all the way to creating your own applications and website!
                    </p>
                </div>
                <ul class="list-items mb-3 font-size-14">
                    <li>There are many variations of passages</li>
                    <li>Lorem Ipsum available</li>
                    <li>Suffered alteration in some form</li>
                </ul>
                <div class="card-action">
                    <ul class="card-duration d-flex justify-content-between align-items-center">
                        <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>
                        <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>
                    </ul>
                </div><!-- end card-action -->
                <div class="btn-box w-100 text-center mb-3">
                    <a href="course-details.blade.php" class="theme-btn d-block">Preview this course</a>
                </div>
                <div class="card-price-wrap d-flex justify-content-between align-items-center">
                    <span class="card__price">$58.00</span>
                    <a href="home-rtl.html#" class="text-btn">Add to cart</a>
                </div><!-- end card-price-wrap -->
            </div><!-- end card-content -->
        </div><!-- end card-item -->
    </div>
</div><!-- end tooltip_templates -->
<div class="tooltip_templates">
    <div id="tooltip_content_2">
        <div class="card-item">
            <div class="card-content">
                <p class="card__author">
                    By <a href="teacher-detail.html">brad travesy</a>
                </p>
                <h3 class="card__title">
                    <a href="course-details.blade.php">Learn Ethical Hacking from Scratch Your Stepping</a>
                </h3>
                <p class="card__label">
                    <span class="card__label-text mr-1">BESTSELLER</span>
                    <span class="mr-1">in</span><a href="home-rtl.html#" class="mr-1">Hacking</a> <span>| Development</span>
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
                <div class="card-para mb-3">
                    <p class="font-size-14 line-height-24">
                        Learn WordPress like a Professional! Start from the basics and go all the way to creating your own applications and website!
                    </p>
                </div>
                <ul class="list-items mb-3 font-size-14">
                    <li>There are many variations of passages</li>
                    <li>Lorem Ipsum available</li>
                    <li>Suffered alteration in some form</li>
                </ul>
                <div class="card-action">
                    <ul class="card-duration d-flex justify-content-between align-items-center">
                        <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>
                        <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>
                    </ul>
                </div><!-- end card-action -->
                <div class="btn-box w-100 text-center mb-3">
                    <a href="course-details.blade.php" class="theme-btn d-block">Preview this course</a>
                </div>
                <div class="card-price-wrap d-flex justify-content-between align-items-center">
                    <span class="card__price">Free</span>
                    <a href="home-rtl.html#" class="text-btn">get enrolled</a>
                </div><!-- end card-price-wrap -->
            </div><!-- end card-content -->
        </div><!-- end card-item -->
    </div>
</div><!-- end tooltip_templates -->
<div class="tooltip_templates">
    <div id="tooltip_content_3">
        <div class="card-item">
            <div class="card-content">
                <p class="card__author">
                    By <a href="teacher-detail.html">mark hardson</a>
                </p>
                <h3 class="card__title">
                    <a href="course-details.blade.php">Microsoft SQL Server 2019 for Everyone</a>
                </h3>
                <p class="card__label">
                    <span class="card__label-text mr-1">BESTSELLER</span>
                    <span class="mr-1">in</span><a href="home-rtl.html#" class="mr-1">SQL</a> <span>| Development</span>
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
                <div class="card-para mb-3">
                    <p class="font-size-14 line-height-24">
                        Learn WordPress like a Professional! Start from the basics and go all the way to creating your own applications and website!
                    </p>
                </div>
                <ul class="list-items mb-3 font-size-14">
                    <li>There are many variations of passages</li>
                    <li>Lorem Ipsum available</li>
                    <li>Suffered alteration in some form</li>
                </ul>
                <div class="card-action">
                    <ul class="card-duration d-flex justify-content-between align-items-center">
                        <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>
                        <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>
                    </ul>
                </div><!-- end card-action -->
                <div class="btn-box w-100 text-center mb-3">
                    <a href="course-details.blade.php" class="theme-btn d-block">Preview this course</a>
                </div>
                <div class="card-price-wrap d-flex justify-content-between align-items-center">
                    <span class="card__price">$68.00</span>
                    <a href="home-rtl.html#" class="text-btn">add to cart</a>
                </div><!-- end card-price-wrap -->
            </div><!-- end card-content -->
        </div><!-- end card-item -->
    </div>
</div><!-- end tooltip_templates -->
<div class="tooltip_templates">
    <div id="tooltip_content_4">
        <div class="card-item">
            <div class="card-content">
                <p class="card__author">
                    By <a href="teacher-detail.html">Kamran Paul</a>
                </p>
                <h3 class="card__title">
                    <a href="course-details.blade.php">User Experience Design - Adobe XD UI UX Design</a>
                </h3>
                <p class="card__label">
                    <span class="card__label-text mr-1">BESTSELLER</span>
                    <span class="mr-1">in</span><a href="home-rtl.html#" class="mr-1">Design</a> <span>| Development</span>
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
                <div class="card-para mb-3">
                    <p class="font-size-14 line-height-24">
                        Learn WordPress like a Professional! Start from the basics and go all the way to creating your own applications and website!
                    </p>
                </div>
                <ul class="list-items mb-3 font-size-14">
                    <li>There are many variations of passages</li>
                    <li>Lorem Ipsum available</li>
                    <li>Suffered alteration in some form</li>
                </ul>
                <div class="card-action">
                    <ul class="card-duration d-flex justify-content-between align-items-center">
                        <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>
                        <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>
                    </ul>
                </div><!-- end card-action -->
                <div class="btn-box w-100 text-center mb-3">
                    <a href="course-details.blade.php" class="theme-btn d-block">Preview this course</a>
                </div>
                <div class="card-price-wrap d-flex justify-content-between align-items-center">
                    <span class="card__price">Free</span>
                    <a href="home-rtl.html#" class="text-btn">Get Enrolled</a>
                </div><!-- end card-price-wrap -->
            </div><!-- end card-content -->
        </div><!-- end card-item -->
    </div>
</div><!-- end tooltip_templates -->
<div class="tooltip_templates">
    <div id="tooltip_content_5">
        <div class="card-item">
            <div class="card-content">
                <p class="card__author">
                    By <a href="teacher-detail.html">Jose Purtila</a>
                </p>
                <h3 class="card__title">
                    <a href="course-details.blade.php">The Complete Digital finance Marketing Course</a>
                </h3>
                <p class="card__label">
                    <span class="card__label-text mr-1">BESTSELLER</span>
                    <span class="mr-1">in</span><a href="home-rtl.html#" class="mr-1">Marketing</a> <span>| Development</span>
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
                <div class="card-para mb-3">
                    <p class="font-size-14 line-height-24">
                        Learn WordPress like a Professional! Start from the basics and go all the way to creating your own applications and website!
                    </p>
                </div>
                <ul class="list-items mb-3 font-size-14">
                    <li>There are many variations of passages</li>
                    <li>Lorem Ipsum available</li>
                    <li>Suffered alteration in some form</li>
                </ul>
                <div class="card-action">
                    <ul class="card-duration d-flex justify-content-between align-items-center">
                        <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>
                        <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>
                    </ul>
                </div><!-- end card-action -->
                <div class="btn-box w-100 text-center mb-3">
                    <a href="course-details.blade.php" class="theme-btn d-block">Preview this course</a>
                </div>
                <div class="card-price-wrap d-flex justify-content-between align-items-center">
                    <span class="card__price"><span class="before-price">$189.00</span> $119.00</span>
                    <a href="home-rtl.html#" class="text-btn">Add to cart</a>
                </div><!-- end card-price-wrap -->
            </div><!-- end card-content -->
        </div><!-- end card-item -->
    </div>
</div><!-- end tooltip_templates -->
<div class="tooltip_templates">
    <div id="tooltip_content_6">
        <div class="card-item">
            <div class="card-content">
                <p class="card__author">
                    By <a href="teacher-detail.html">Noelle Travesy</a>
                </p>
                <h3 class="card__title">
                    <a href="course-details.blade.php">Complete Python Bootcamp: Go from zero to hero</a>
                </h3>
                <p class="card__label">
                    <span class="card__label-text mr-1">BESTSELLER</span>
                    <span class="mr-1">in</span><a href="home-rtl.html#" class="mr-1">Python</a> <span>| Development</span>
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
                <div class="card-para mb-3">
                    <p class="font-size-14 line-height-24">
                        Learn WordPress like a Professional! Start from the basics and go all the way to creating your own applications and website!
                    </p>
                </div>
                <ul class="list-items mb-3 font-size-14">
                    <li>There are many variations of passages</li>
                    <li>Lorem Ipsum available</li>
                    <li>Suffered alteration in some form</li>
                </ul>
                <div class="card-action">
                    <ul class="card-duration d-flex justify-content-between align-items-center">
                        <li><span class="meta__date"><i class="la la-play-circle"></i> 45 Classes</span></li>
                        <li><span class="meta__date"><i class="la la-clock-o"></i> 3 hours 20 min</span></li>
                    </ul>
                </div><!-- end card-action -->
                <div class="btn-box w-100 text-center mb-3">
                    <a href="course-details.blade.php" class="theme-btn d-block">Preview this course</a>
                </div>
                <div class="card-price-wrap d-flex justify-content-between align-items-center">
                    <span class="card__price">$68.00</span>
                    <a href="home-rtl.html#" class="text-btn">add to cart</a>
                </div><!-- end card-price-wrap -->
            </div><!-- end card-content -->
        </div><!-- end card-item -->
    </div>
</div><!-- end tooltip_templates -->


<!-- template js files -->
<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap-select.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
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
@endsection

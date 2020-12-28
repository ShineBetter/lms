@extends('webSit.layout.head')
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
{{--    <div class="hero-slide owl-dot-and-nav">--}}
{{--        <div class="single-slide-item slide-bg1">--}}
{{--            <div class="container">--}}
                <div class="row">
                    @php
                    $slider1=\Illuminate\Support\Facades\DB::table('main_sliders')->where("id",1)->first();
                    $slider2=\Illuminate\Support\Facades\DB::table('main_sliders')->where("id",2)->first();
                    $slider3=\Illuminate\Support\Facades\DB::table('main_sliders')->where("id",3)->first();
                    @endphp
                    <div class="col-lg-12">
{{--                        <div class="w3-content w3-display-container">--}}
{{--                    <div class="w3-display-container">--}}
{{--                        <img class="mySlides w3-animate-fading" src="{{asset($slider1->picture)}}" style="width:100%">--}}
{{--                        <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black text-slider">--}}
{{--                            <h2>--}}
{{--                                {{$slider1->header}}--}}
{{--                            </h2>--}}
{{--                            <p>--}}
{{--                                {{$slider1->text}}--}}
{{--                            </p>--}}
{{--                        </div>                    </div>--}}
{{--                    <div class="w3-display-container">--}}
{{--                        <img class="mySlides w3-animate-fading" src="{{asset($slider2->picture)}}" style="width:100%">--}}
{{--                        <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black text-slider">--}}
{{--                          <h2>--}}
{{--                              {{$slider2->header}}--}}
{{--                          </h2>--}}
{{--                            <p>--}}
{{--                                {{$slider2->text}}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="w3-display-container">--}}
{{--                        <img class="mySlides w3-animate-fading" src="{{asset($slider3->picture)}}" style="width:100%">--}}
{{--                        <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black text-slider">--}}
{{--                            <h2>--}}
{{--                                {{$slider3->header}}--}}
{{--                            </h2>--}}
{{--                            <p>--}}
{{--                                {{$slider3->text}}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>--}}
{{--                        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>--}}
{{--                    </div>--}}
@include('websit.slider.slider');
                    </div>
                    {{--                    </div><!-- col-lg-12 -->--}}
                </div><!-- row -->

</section><!-- end slider-area -->
    <script>

    </script>
<!--================================
        END SLIDER AREA
=================================-->

<!--======================================
        START FEATURE AREA
 ======================================-->
<section class="feature-area text-center padding-bottom-90px">
    <div class="container">
        @php
        $col1=\Illuminate\Support\Facades\DB::table('mainpage3cols')->where("id",1)->first();
        $col2=\Illuminate\Support\Facades\DB::table('mainpage3cols')->where("id",2)->first();
        $col3=\Illuminate\Support\Facades\DB::table('mainpage3cols')->where("id",3)->first();
        @endphp
        <div class="feature-content-wrap">
            <div class="row">
                <div class="col-lg-4 column-td-half">
                    <div class="info-box info-box-color-1">
                        <div class="hover-overlay"></div>
                        <div class="icon-element mx-auto">
                            <i class="{{$col1->icon}}"></i>
                        </div>
                        <h3 class="info__title">{{$col1->header}}</h3>
                        <p class="info__text">{{$col1->text}}</p>
{{--                        <a href="home-rtl#" class="text-btn">read more</a>--}}
                    </div><!-- end info-box -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-4 column-td-half">
                    <div class="info-box info-box-color-2">
                        <div class="hover-overlay"></div>
                        <div class="icon-element mx-auto">
                            <i class="{{$col2->icon}}"></i>
                        </div>
                        <h3 class="info__title">{{$col2->header}}</h3>
                        <p class="info__text">{{$col2->text}}</p>
{{--                        <a href="home-rtl#" class="text-btn">read more</a>--}}
                    </div><!-- end info-box -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-4 column-td-half">
                    <div class="info-box info-box-color-3">
                        <div class="hover-overlay"></div>
                        <div class="icon-element mx-auto">
                            <i class="{{$col3->icon}}"></i>
                        </div>
                        <h3 class="info__title">{{$col3->header}}</h3>
                        <p class="info__text">{{$col3->text}}</p>
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
            <div class="col-lg-12 ">
                <div class="section-heading text-center">
                    <h5 class="section__meta">خدمات</h5>
                    <h2 class="section__title">دسته بندی خدمات ما</h2>
                    <span class="section-divider"></span>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-9 -->
{{--            <div class="col-lg-3">--}}
{{--                <div class="btn-box h-100 d-flex align-items-center justify-content-end">--}}
{{--                    <a href="home-rtl#" class="theme-btn">همه دسته بندی ها</a>--}}
{{--                </div><!-- end btn-box-->--}}
{{--            </div><!-- end col-lg-3 -->--}}
        </div><!-- end row -->
        <div class="category-wrapper margin-top-28px">
            <div class="row">
                @php
                    $cat1=\Illuminate\Support\Facades\DB::table('cat_mainpages')->where("id",1)->first();
                    $cat2=\Illuminate\Support\Facades\DB::table('cat_mainpages')->where("id",2)->first();
                    $cat3=\Illuminate\Support\Facades\DB::table('cat_mainpages')->where("id",3)->first();

                @endphp
                <div class="col-lg-4 column-td-half">
                    <div class="category-item">
                        <img src="{{asset($cat1->picture)}}" style="height:17rem;">
                        <div class="category-content">
                            <div class="category-inner">
                                <h3 class="cat__title"><a href="home-rtl#">{{$cat1->header}}</a></h3>
                                <p class="cat__meta">{{$cat1->count}}</p>
                                <a href="/course-grid" class="theme-btn"> نمونه</a>
                            </div>
                        </div><!-- end category-content -->
                    </div><!-- end category-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-td-half">
                    <div class="category-item">
                        <img src="{{asset($cat2->picture)}}" style="height:17rem;">
                        <div class="category-content">
                            <div class="category-inner">
                                <h3 class="cat__title"><a href="home-rtl#">{{$cat2->header}}</a></h3>
                                <p class="cat__meta">{{$cat2->count}}</p>
                                <a href="/course-grid" class="theme-btn"> نمونه</a>
                            </div>
                        </div><!-- end category-content -->
                    </div><!-- end category-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-td-half">
                    <div class="category-item">
                        <img src="{{asset($cat3->picture)}}" style="height:17rem;">
                        <div class="category-content">
                            <div class="category-inner">
                                <h3 class="cat__title"><a href="home-rtl#">{{$cat3->header}}</a></h3>
                                <p class="cat__meta">{{$cat3->count}}</p>
                                <a href="/pricing-table" class="theme-btn"> نمونه</a>
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
                                                <span class="badge-label">پر فروش ترین</span>
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
            <div class="container-fluid">
                <div role="tabpanel" class="tab-pane fade show active" id="tab1">
                    <div class="row">
                        <div class="col-lg-4 column-td-half">
                            <div class="card-item card-preview tooltipstered" data-tooltip-content="#tooltip_content_1">
                                <div class="card-image">
                                    <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>
                                    <div class="card-badge">
                                        <span class="badge-label">پرفروش ترین</span>
                                    </div>
                                </div><!-- end card-image -->
                                <div class="card-content">
                                    <p class="card__label">
                                        <span class="card__label-text">استاندارد</span>
                                        <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist"><span class="la la-heart-o"></span></a>
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
                            <div class="card-item card-preview tooltipstered" data-tooltip-content="#tooltip_content_2">
                                <div class="card-image">
                                    <a href="course-details.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                                    <div class="card-badge">
                                        <span class="badge-label">پرفروش ترین</span>
                                    </div>
                                </div><!-- end card-image -->
                                <div class="card-content">
                                    <p class="card__label">
                                        <span class="card__label-text">استاندارد</span>
                                        <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist"><span class="la la-heart-o"></span></a>
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
                            <div class="card-item card-preview tooltipstered" data-tooltip-content="#tooltip_content_6">
                                <div class="card-image">
                                    <a href="course-details.blade.php" class="card__img"><img src="/images/img13.jpg" alt=""></a>
                                    <div class="card-badge">
                                        <span class="badge-label">پرفروش ترین</span>
                                    </div>
                                </div><!-- end card-image -->
                                <div class="card-content">
                                    <p class="card__label">
                                        <span class="card__label-text">استاندارد</span>
                                        <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist"><span class="la la-heart-o"></span></a>
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
                </div>
{{--                <h1 class="text-center mb-3">Bootstrap Multi-Card Carousel</h1>--}}
{{--                <div id="myCarousel" class="carousel slide" data-ride="carousel">--}}
{{--                    <div class="carousel-inner row w-100 mx-auto">--}}
{{--                        <div class="carousel-item col-md-4 active">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card">--}}
{{--                                    <!--                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">-->--}}
{{--                                    <div class="card-image">--}}
{{--                                        <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>--}}
{{--                                        <div class="card-badge">--}}
{{--                                            <span class="badge-label">highest rated</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">--}}
{{--                                            <!-- end card-image -->--}}
{{--                                            <div class="card-content">--}}
{{--                                                <p class="card__label">--}}
{{--                                                    <span class="card__label-text">استاندارد</span>--}}
{{--                                                    <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>--}}
{{--                                                </p>--}}
{{--                                                <h3 class="card__title">--}}
{{--                                                    <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>--}}
{{--                                                </h3>--}}
{{--                                                <p class="card__author">--}}
{{--                                                    <a href="teacher-detail">استاد سماواتی</a>--}}
{{--                                                </p>--}}
{{--                                                <div class="rating-wrap d-flex mt-2 mb-3">--}}
{{--                                                    <ul class="review-stars">--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star-o"></span></li>--}}
{{--                                                    </ul>--}}
{{--                                                    <span class="star-rating-wrap">--}}
{{--                                                    <span class="star__rating">4.4</span>--}}
{{--                                                    <span class="star__count">(20)</span>--}}
{{--                                                </span>--}}
{{--                                                </div><!-- end rating-wrap -->--}}
{{--                                                <div class="card-action">--}}
{{--                                                    <ul class="card-duration d-flex justify-content-between align-items-center">--}}
{{--                                                        <li>--}}
{{--                                                        <span class="meta__date">--}}
{{--                                                            <i class="la la-play-circle"></i> 45 کلاس--}}
{{--                                                        </span>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                        <span class="meta__date">--}}
{{--                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه--}}
{{--                                                        </span>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div><!-- end card-action -->--}}
{{--                                                <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
{{--                                                    <span class="card__price">58.00تومان</span>--}}
{{--                                                    <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>--}}
{{--                                                </div><!-- end card-price-wrap -->--}}
{{--                                            </div><!-- end card-content -->--}}
{{--                                        </div><!-- end card-item -->--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="carousel-item col-md-4">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card">--}}
{{--                                    <!--                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">-->--}}
{{--                                    <div class="card-image">--}}
{{--                                        <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>--}}
{{--                                        <div class="card-badge">--}}
{{--                                            <span class="badge-label">highest rated</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">--}}
{{--                                            <!-- end card-image -->--}}
{{--                                            <div class="card-content">--}}
{{--                                                <p class="card__label">--}}
{{--                                                    <span class="card__label-text">استاندارد</span>--}}
{{--                                                    <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>--}}
{{--                                                </p>--}}
{{--                                                <h3 class="card__title">--}}
{{--                                                    <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>--}}
{{--                                                </h3>--}}
{{--                                                <p class="card__author">--}}
{{--                                                    <a href="teacher-detail">استاد سماواتی</a>--}}
{{--                                                </p>--}}
{{--                                                <div class="rating-wrap d-flex mt-2 mb-3">--}}
{{--                                                    <ul class="review-stars">--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star-o"></span></li>--}}
{{--                                                    </ul>--}}
{{--                                                    <span class="star-rating-wrap">--}}
{{--                                                    <span class="star__rating">4.4</span>--}}
{{--                                                    <span class="star__count">(20)</span>--}}
{{--                                                </span>--}}
{{--                                                </div><!-- end rating-wrap -->--}}
{{--                                                <div class="card-action">--}}
{{--                                                    <ul class="card-duration d-flex justify-content-between align-items-center">--}}
{{--                                                        <li>--}}
{{--                                                        <span class="meta__date">--}}
{{--                                                            <i class="la la-play-circle"></i> 45 کلاس--}}
{{--                                                        </span>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                        <span class="meta__date">--}}
{{--                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه--}}
{{--                                                        </span>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div><!-- end card-action -->--}}
{{--                                                <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
{{--                                                    <span class="card__price">58.00تومان</span>--}}
{{--                                                    <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>--}}
{{--                                                </div><!-- end card-price-wrap -->--}}
{{--                                            </div><!-- end card-content -->--}}
{{--                                        </div><!-- end card-item -->--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="carousel-item col-md-4">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card">--}}
{{--                                    <!--                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">-->--}}
{{--                                    <div class="card-image">--}}
{{--                                        <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>--}}
{{--                                        <div class="card-badge">--}}
{{--                                            <span class="badge-label">highest rated</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">--}}
{{--                                            <!-- end card-image -->--}}
{{--                                            <div class="card-content">--}}
{{--                                                <p class="card__label">--}}
{{--                                                    <span class="card__label-text">استاندارد</span>--}}
{{--                                                    <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>--}}
{{--                                                </p>--}}
{{--                                                <h3 class="card__title">--}}
{{--                                                    <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>--}}
{{--                                                </h3>--}}
{{--                                                <p class="card__author">--}}
{{--                                                    <a href="teacher-detail">استاد سماواتی</a>--}}
{{--                                                </p>--}}
{{--                                                <div class="rating-wrap d-flex mt-2 mb-3">--}}
{{--                                                    <ul class="review-stars">--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star-o"></span></li>--}}
{{--                                                    </ul>--}}
{{--                                                    <span class="star-rating-wrap">--}}
{{--                                                    <span class="star__rating">4.4</span>--}}
{{--                                                    <span class="star__count">(20)</span>--}}
{{--                                                </span>--}}
{{--                                                </div><!-- end rating-wrap -->--}}
{{--                                                <div class="card-action">--}}
{{--                                                    <ul class="card-duration d-flex justify-content-between align-items-center">--}}
{{--                                                        <li>--}}
{{--                                                        <span class="meta__date">--}}
{{--                                                            <i class="la la-play-circle"></i> 45 کلاس--}}
{{--                                                        </span>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                        <span class="meta__date">--}}
{{--                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه--}}
{{--                                                        </span>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div><!-- end card-action -->--}}
{{--                                                <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
{{--                                                    <span class="card__price">58.00تومان</span>--}}
{{--                                                    <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>--}}
{{--                                                </div><!-- end card-price-wrap -->--}}
{{--                                            </div><!-- end card-content -->--}}
{{--                                        </div><!-- end card-item -->--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="carousel-item col-md-4">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card">--}}
{{--                                    <!--                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">-->--}}
{{--                                    <div class="card-image">--}}
{{--                                        <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>--}}
{{--                                        <div class="card-badge">--}}
{{--                                            <span class="badge-label">highest rated</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">--}}
{{--                                            <!-- end card-image -->--}}
{{--                                            <div class="card-content">--}}
{{--                                                <p class="card__label">--}}
{{--                                                    <span class="card__label-text">استاندارد</span>--}}
{{--                                                    <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>--}}
{{--                                                </p>--}}
{{--                                                <h3 class="card__title">--}}
{{--                                                    <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>--}}
{{--                                                </h3>--}}
{{--                                                <p class="card__author">--}}
{{--                                                    <a href="teacher-detail">استاد سماواتی</a>--}}
{{--                                                </p>--}}
{{--                                                <div class="rating-wrap d-flex mt-2 mb-3">--}}
{{--                                                    <ul class="review-stars">--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star-o"></span></li>--}}
{{--                                                    </ul>--}}
{{--                                                    <span class="star-rating-wrap">--}}
{{--                                                    <span class="star__rating">4.4</span>--}}
{{--                                                    <span class="star__count">(20)</span>--}}
{{--                                                </span>--}}
{{--                                                </div><!-- end rating-wrap -->--}}
{{--                                                <div class="card-action">--}}
{{--                                                    <ul class="card-duration d-flex justify-content-between align-items-center">--}}
{{--                                                        <li>--}}
{{--                                                        <span class="meta__date">--}}
{{--                                                            <i class="la la-play-circle"></i> 45 کلاس--}}
{{--                                                        </span>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                        <span class="meta__date">--}}
{{--                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه--}}
{{--                                                        </span>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div><!-- end card-action -->--}}
{{--                                                <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
{{--                                                    <span class="card__price">58.00تومان</span>--}}
{{--                                                    <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>--}}
{{--                                                </div><!-- end card-price-wrap -->--}}
{{--                                            </div><!-- end card-content -->--}}
{{--                                        </div><!-- end card-item -->--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="carousel-item col-md-4">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card">--}}
{{--                                    <!--                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">-->--}}
{{--                                    <div class="card-image">--}}
{{--                                        <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>--}}
{{--                                        <div class="card-badge">--}}
{{--                                            <span class="badge-label">highest rated</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">--}}
{{--                                            <!-- end card-image -->--}}
{{--                                            <div class="card-content">--}}
{{--                                                <p class="card__label">--}}
{{--                                                    <span class="card__label-text">استاندارد</span>--}}
{{--                                                    <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>--}}
{{--                                                </p>--}}
{{--                                                <h3 class="card__title">--}}
{{--                                                    <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>--}}
{{--                                                </h3>--}}
{{--                                                <p class="card__author">--}}
{{--                                                    <a href="teacher-detail">استاد سماواتی</a>--}}
{{--                                                </p>--}}
{{--                                                <div class="rating-wrap d-flex mt-2 mb-3">--}}
{{--                                                    <ul class="review-stars">--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star-o"></span></li>--}}
{{--                                                    </ul>--}}
{{--                                                    <span class="star-rating-wrap">--}}
{{--                                                    <span class="star__rating">4.4</span>--}}
{{--                                                    <span class="star__count">(20)</span>--}}
{{--                                                </span>--}}
{{--                                                </div><!-- end rating-wrap -->--}}
{{--                                                <div class="card-action">--}}
{{--                                                    <ul class="card-duration d-flex justify-content-between align-items-center">--}}
{{--                                                        <li>--}}
{{--                                                        <span class="meta__date">--}}
{{--                                                            <i class="la la-play-circle"></i> 45 کلاس--}}
{{--                                                        </span>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                        <span class="meta__date">--}}
{{--                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه--}}
{{--                                                        </span>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div><!-- end card-action -->--}}
{{--                                                <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
{{--                                                    <span class="card__price">58.00تومان</span>--}}
{{--                                                    <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>--}}
{{--                                                </div><!-- end card-price-wrap -->--}}
{{--                                            </div><!-- end card-content -->--}}
{{--                                        </div><!-- end card-item -->--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="carousel-item col-md-4">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card">--}}
{{--                                    <!--                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">-->--}}
{{--                                    <div class="card-image">--}}
{{--                                        <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>--}}
{{--                                        <div class="card-badge">--}}
{{--                                            <span class="badge-label">highest rated</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">--}}
{{--                                            <!-- end card-image -->--}}
{{--                                            <div class="card-content">--}}
{{--                                                <p class="card__label">--}}
{{--                                                    <span class="card__label-text">استاندارد</span>--}}
{{--                                                    <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>--}}
{{--                                                </p>--}}
{{--                                                <h3 class="card__title">--}}
{{--                                                    <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>--}}
{{--                                                </h3>--}}
{{--                                                <p class="card__author">--}}
{{--                                                    <a href="teacher-detail">استاد سماواتی</a>--}}
{{--                                                </p>--}}
{{--                                                <div class="rating-wrap d-flex mt-2 mb-3">--}}
{{--                                                    <ul class="review-stars">--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star-o"></span></li>--}}
{{--                                                    </ul>--}}
{{--                                                    <span class="star-rating-wrap">--}}
{{--                                                    <span class="star__rating">4.4</span>--}}
{{--                                                    <span class="star__count">(20)</span>--}}
{{--                                                </span>--}}
{{--                                                </div><!-- end rating-wrap -->--}}
{{--                                                <div class="card-action">--}}
{{--                                                    <ul class="card-duration d-flex justify-content-between align-items-center">--}}
{{--                                                        <li>--}}
{{--                                                        <span class="meta__date">--}}
{{--                                                            <i class="la la-play-circle"></i> 45 کلاس--}}
{{--                                                        </span>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                        <span class="meta__date">--}}
{{--                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه--}}
{{--                                                        </span>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div><!-- end card-action -->--}}
{{--                                                <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
{{--                                                    <span class="card__price">58.00تومان</span>--}}
{{--                                                    <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>--}}
{{--                                                </div><!-- end card-price-wrap -->--}}
{{--                                            </div><!-- end card-content -->--}}
{{--                                        </div><!-- end card-item -->--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="carousel-item col-md-4">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card">--}}
{{--                                    <!--                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">-->--}}
{{--                                    <div class="card-image">--}}
{{--                                        <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>--}}
{{--                                        <div class="card-badge">--}}
{{--                                            <span class="badge-label">highest rated</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">--}}
{{--                                            <!-- end card-image -->--}}
{{--                                            <div class="card-content">--}}
{{--                                                <p class="card__label">--}}
{{--                                                    <span class="card__label-text">استاندارد</span>--}}
{{--                                                    <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>--}}
{{--                                                </p>--}}
{{--                                                <h3 class="card__title">--}}
{{--                                                    <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>--}}
{{--                                                </h3>--}}
{{--                                                <p class="card__author">--}}
{{--                                                    <a href="teacher-detail">استاد سماواتی</a>--}}
{{--                                                </p>--}}
{{--                                                <div class="rating-wrap d-flex mt-2 mb-3">--}}
{{--                                                    <ul class="review-stars">--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star-o"></span></li>--}}
{{--                                                    </ul>--}}
{{--                                                    <span class="star-rating-wrap">--}}
{{--                                                    <span class="star__rating">4.4</span>--}}
{{--                                                    <span class="star__count">(20)</span>--}}
{{--                                                </span>--}}
{{--                                                </div><!-- end rating-wrap -->--}}
{{--                                                <div class="card-action">--}}
{{--                                                    <ul class="card-duration d-flex justify-content-between align-items-center">--}}
{{--                                                        <li>--}}
{{--                                                        <span class="meta__date">--}}
{{--                                                            <i class="la la-play-circle"></i> 45 کلاس--}}
{{--                                                        </span>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                        <span class="meta__date">--}}
{{--                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه--}}
{{--                                                        </span>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div><!-- end card-action -->--}}
{{--                                                <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
{{--                                                    <span class="card__price">58.00تومان</span>--}}
{{--                                                    <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>--}}
{{--                                                </div><!-- end card-price-wrap -->--}}
{{--                                            </div><!-- end card-content -->--}}
{{--                                        </div><!-- end card-item -->--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="carousel-item col-md-4">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card">--}}
{{--                                    <!--                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">-->--}}
{{--                                    <div class="card-image">--}}
{{--                                        <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>--}}
{{--                                        <div class="card-badge">--}}
{{--                                            <span class="badge-label">highest rated</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">--}}
{{--                                            <!-- end card-image -->--}}
{{--                                            <div class="card-content">--}}
{{--                                                <p class="card__label">--}}
{{--                                                    <span class="card__label-text">استاندارد</span>--}}
{{--                                                    <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>--}}
{{--                                                </p>--}}
{{--                                                <h3 class="card__title">--}}
{{--                                                    <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>--}}
{{--                                                </h3>--}}
{{--                                                <p class="card__author">--}}
{{--                                                    <a href="teacher-detail">استاد سماواتی</a>--}}
{{--                                                </p>--}}
{{--                                                <div class="rating-wrap d-flex mt-2 mb-3">--}}
{{--                                                    <ul class="review-stars">--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star"></span></li>--}}
{{--                                                        <li><span class="la la-star-o"></span></li>--}}
{{--                                                    </ul>--}}
{{--                                                    <span class="star-rating-wrap">--}}
{{--                                                    <span class="star__rating">4.4</span>--}}
{{--                                                    <span class="star__count">(20)</span>--}}
{{--                                                </span>--}}
{{--                                                </div><!-- end rating-wrap -->--}}
{{--                                                <div class="card-action">--}}
{{--                                                    <ul class="card-duration d-flex justify-content-between align-items-center">--}}
{{--                                                        <li>--}}
{{--                                                        <span class="meta__date">--}}
{{--                                                            <i class="la la-play-circle"></i> 45 کلاس--}}
{{--                                                        </span>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                        <span class="meta__date">--}}
{{--                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه--}}
{{--                                                        </span>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                </div><!-- end card-action -->--}}
{{--                                                <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
{{--                                                    <span class="card__price">58.00تومان</span>--}}
{{--                                                    <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>--}}
{{--                                                </div><!-- end card-price-wrap -->--}}
{{--                                            </div><!-- end card-content -->--}}
{{--                                        </div><!-- end card-item -->--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="carousel-item col-md-4">--}}
{{--                            <div class="card">--}}
{{--                                <!--                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">-->--}}
{{--                                <div class="card-image">--}}
{{--                                    <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>--}}
{{--                                    <div class="card-badge">--}}
{{--                                        <span class="badge-label">highest rated</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">--}}
{{--                                        <!-- end card-image -->--}}
{{--                                        <div class="card-content">--}}
{{--                                            <p class="card__label">--}}
{{--                                                <span class="card__label-text">استاندارد</span>--}}
{{--                                                <a href="/" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>--}}
{{--                                            </p>--}}
{{--                                            <h3 class="card__title">--}}
{{--                                                <a href="course-details.blade.php">ریاضی پایه دوازدهم</a>--}}
{{--                                            </h3>--}}
{{--                                            <p class="card__author">--}}
{{--                                                <a href="teacher-detail">استاد سماواتی</a>--}}
{{--                                            </p>--}}
{{--                                            <div class="rating-wrap d-flex mt-2 mb-3">--}}
{{--                                                <ul class="review-stars">--}}
{{--                                                    <li><span class="la la-star"></span></li>--}}
{{--                                                    <li><span class="la la-star"></span></li>--}}
{{--                                                    <li><span class="la la-star"></span></li>--}}
{{--                                                    <li><span class="la la-star"></span></li>--}}
{{--                                                    <li><span class="la la-star-o"></span></li>--}}
{{--                                                </ul>--}}
{{--                                                <span class="star-rating-wrap">--}}
{{--                                                    <span class="star__rating">4.4</span>--}}
{{--                                                    <span class="star__count">(20)</span>--}}
{{--                                                </span>--}}
{{--                                            </div><!-- end rating-wrap -->--}}
{{--                                            <div class="card-action">--}}
{{--                                                <ul class="card-duration d-flex justify-content-between align-items-center">--}}
{{--                                                    <li>--}}
{{--                                                        <span class="meta__date">--}}
{{--                                                            <i class="la la-play-circle"></i> 45 کلاس--}}
{{--                                                        </span>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <span class="meta__date">--}}
{{--                                                            <i class="la la-clock-o"></i> 3 ساعت 20 دقیقه--}}
{{--                                                        </span>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div><!-- end card-action -->--}}
{{--                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
{{--                                                <span class="card__price">58.00تومان</span>--}}
{{--                                                <a href="home-rtl#" class="text-btn">افزودن به سبر خرید</a>--}}
{{--                                            </div><!-- end card-price-wrap -->--}}
{{--                                        </div><!-- end card-content -->--}}
{{--                                    </div><!-- end card-item -->--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">--}}
{{--                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                        <span class="sr-only">Previous</span>--}}
{{--                    </a>--}}
{{--                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">--}}
{{--                        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                        <span class="sr-only">Next</span>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                @include('webSit.slider.slider')--}}
            </div>
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
            @php
    $count1=\Illuminate\Support\Facades\DB::table('main_counts')->where("id",1)->first();
    $count2=\Illuminate\Support\Facades\DB::table('main_counts')->where("id",2)->first();
    $count3=\Illuminate\Support\Facades\DB::table('main_counts')->where("id",3)->first();
    $count4=\Illuminate\Support\Facades\DB::table('main_counts')->where("id",4)->first();
            @endphp
            <div class="col-lg-3 column-td-half">
                <div class="counter-item">
                    <span class="la la-bullhorn count__icon"></span>
                    <h4 class="count__title counter">{{$count4->count}}</h4>
                    <p class="count__meta">{{$count4->text}}</p>
                </div><!-- end counter-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-half">
                <div class="counter-item">
                    <span class="la la-globe count__icon"></span>
                    <h4 class="count__title counter text-color">{{$count3->count}}</h4>
                    <p class="count__meta">{{$count3->text}}</p>
                </div><!-- end counter-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-half">
                <div class="counter-item">
                    <span class="la la-users count__icon"></span>
                    <h4 class="count__title counter text-color-2">{{$count2->count}}</h4>
                    <p class="count__meta">{{$count2->text}}</p>
                </div><!-- end counter-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-half">
                <div class="counter-item">
                    <span class="la la-certificate count__icon"></span>
                    <h4 class="count__title counter text-color-3">{{$count1->count}}</h4>
                    <p class="count__meta">{{$count1->text}}</p>
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
                    <h2 class="section__title">اساتید کجموعه</h2>
                    <span class="section-divider"></span>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row margin-top-28px ltr">
            @php
                $aboutTeachers=\Illuminate\Support\Facades\DB::table('about_teachers')->limit(6)->get();
            @endphp
            @foreach($aboutTeachers as $aboutTeacher)
                <div class="col-lg-4 column-td-half">
                    <div class="team-item">
                        <div class="team-img-box">
                            <img src="{{asset($aboutTeacher->picture)}}" alt="">
                            <ul class="social-profile">
                                <li class="text-white">{{$aboutTeacher->filed}}</li>
                            </ul>
                        </div>
                        <div class="team-detail">
                            <h3 class="team__title"><a href="teacher-detail.html">{{$aboutTeacher->header}}</a></h3>
                            <p class="team__meta">{{$aboutTeacher->filed}}</p>
                            {{--                            <a href="{{route('teacher-detail',$aboutTeacher->id)}}" class="theme-btn theme-btn-light" >--}}
                            <a href="{{route('teacher-detail',$aboutTeacher->id)}}" class="theme-btn">پروفایل</a>
                        </div>
                    </div><!-- end team-item -->
                </div>
            @endforeach
            <div class="row w-100">
                <div class="col-lg-12">
                    <div class="btn-box text-center">
                        <a href="/teachers" class="theme-btn">تمام دبیران</a>
                    </div><!-- end btn-box -->
                </div><!-- end col-lg-12 -->
            </div>
           <!-- end row -->
    </div><!-- end container -->
</section><!-- end team-area -->
<!--======================================
        END TEAM AREA
======================================-->

<!--================================
         START TESTIMONIAL AREA
=================================-->

{{--     نظرات --}}
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




{{--    <div class="container-fluid">--}}
{{--        <div class="row margin-top-28px ltr">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="testimonial-carousel">--}}
{{--                    <div class="testimonial-item">--}}
{{--                        <div class="testimonial-header">--}}
{{--                            <img src="/images/testi-img.jpg" alt="small-avatar">--}}
{{--                            <div class="testimonial__name">--}}
{{--                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>--}}
{{--                                <span class="testimonial__name-meta">دانش اموز</span>--}}
{{--                                <ul class="review-stars d-inline-block">--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star-o"></span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div><!-- end testimonial-header -->--}}
{{--                        <div class="testimonial__desc">--}}
{{--                            <p class="testimonial__desc-desc">--}}
{{--                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است--}}
{{--                            </p>--}}
{{--                        </div><!-- end testimonial__desc -->--}}
{{--                    </div><!-- end testimonial-item -->--}}
{{--                    <div class="testimonial-item">--}}
{{--                        <div class="testimonial-header">--}}
{{--                            <img src="/images/testi-img2.jpg" alt="small-avatar">--}}
{{--                            <div class="testimonial__name">--}}
{{--                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>--}}
{{--                                <span class="testimonial__name-meta">دانش اموز</span>--}}
{{--                                <ul class="review-stars d-inline-block">--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star-o"></span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div><!-- end testimonial-header -->--}}
{{--                        <div class="testimonial__desc">--}}
{{--                            <p class="testimonial__desc-desc">--}}
{{--                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است--}}
{{--                            </p>--}}
{{--                        </div><!-- end testimonial__desc -->--}}
{{--                    </div><!-- end testimonial-item -->--}}
{{--                    <div class="testimonial-item">--}}
{{--                        <div class="testimonial-header">--}}
{{--                            <img src="/images/testi-img3.jpg" alt="small-avatar">--}}
{{--                            <div class="testimonial__name">--}}
{{--                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>--}}
{{--                                <span class="testimonial__name-meta">دانش اموز</span>--}}
{{--                                <ul class="review-stars d-inline-block">--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star-o"></span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div><!-- end testimonial-header -->--}}
{{--                        <div class="testimonial__desc">--}}
{{--                            <p class="testimonial__desc-desc">--}}
{{--                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است--}}
{{--                            </p>--}}
{{--                        </div><!-- end testimonial__desc -->--}}
{{--                    </div><!-- end testimonial-item -->--}}
{{--                    <div class="testimonial-item">--}}
{{--                        <div class="testimonial-header">--}}
{{--                            <img src="/images/testi-img4.jpg" alt="small-avatar">--}}
{{--                            <div class="testimonial__name">--}}
{{--                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>--}}
{{--                                <span class="testimonial__name-meta">دانش اموز</span>--}}
{{--                                <ul class="review-stars d-inline-block">--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star-o"></span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div><!-- end testimonial-header -->--}}
{{--                        <div class="testimonial__desc">--}}
{{--                            <p class="testimonial__desc-desc">--}}
{{--                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است--}}
{{--                            </p>--}}
{{--                        </div><!-- end testimonial__desc -->--}}
{{--                    </div><!-- end testimonial-item -->--}}
{{--                    <div class="testimonial-item">--}}
{{--                        <div class="testimonial-header">--}}
{{--                            <img src="/images/testi-img.jpg" alt="small-avatar">--}}
{{--                            <div class="testimonial__name">--}}
{{--                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>--}}
{{--                                <span class="testimonial__name-meta">دانش اموز</span>--}}
{{--                                <ul class="review-stars d-inline-block">--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star-o"></span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div><!-- end testimonial-header -->--}}
{{--                        <div class="testimonial__desc">--}}
{{--                            <p class="testimonial__desc-desc">--}}
{{--                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است--}}
{{--                            </p>--}}
{{--                        </div><!-- end testimonial__desc -->--}}
{{--                    </div><!-- end testimonial-item -->--}}
{{--                    <div class="testimonial-item">--}}
{{--                        <div class="testimonial-header">--}}
{{--                            <img src="/images/testi-img5.jpg" alt="small-avatar">--}}
{{--                            <div class="testimonial__name">--}}
{{--                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>--}}
{{--                                <span class="testimonial__name-meta">دانش اموز</span>--}}
{{--                                <ul class="review-stars d-inline-block">--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star-o"></span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div><!-- end testimonial-header -->--}}
{{--                        <div class="testimonial__desc">--}}
{{--                            <p class="testimonial__desc-desc">--}}
{{--                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است--}}
{{--                            </p>--}}
{{--                        </div><!-- end testimonial__desc -->--}}
{{--                    </div><!-- end testimonial-item -->--}}
{{--                    <div class="testimonial-item">--}}
{{--                        <div class="testimonial-header">--}}
{{--                            <img src="/images/testi-img6.jpg" alt="small-avatar">--}}
{{--                            <div class="testimonial__name">--}}
{{--                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>--}}
{{--                                <span class="testimonial__name-meta">دانش اموز</span>--}}
{{--                                <ul class="review-stars d-inline-block">--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star-o"></span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div><!-- end testimonial-header -->--}}
{{--                        <div class="testimonial__desc">--}}
{{--                            <p class="testimonial__desc-desc">--}}
{{--                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است--}}
{{--                            </p>--}}
{{--                        </div><!-- end testimonial__desc -->--}}
{{--                    </div><!-- end testimonial-item -->--}}
{{--                    <div class="testimonial-item">--}}
{{--                        <div class="testimonial-header">--}}
{{--                            <img src="/images/testi-img2.jpg" alt="small-avatar">--}}
{{--                            <div class="testimonial__name">--}}
{{--                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>--}}
{{--                                <span class="testimonial__name-meta">دانش اموز</span>--}}
{{--                                <ul class="review-stars d-inline-block">--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star-o"></span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div><!-- end testimonial-header -->--}}
{{--                        <div class="testimonial__desc">--}}
{{--                            <p class="testimonial__desc-desc">--}}
{{--                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است--}}
{{--                            </p>--}}
{{--                        </div><!-- end testimonial__desc -->--}}
{{--                    </div><!-- end testimonial-item -->--}}
{{--                    <div class="testimonial-item">--}}
{{--                        <div class="testimonial-header">--}}
{{--                            <img src="/images/testi-img3.jpg" alt="small-avatar">--}}
{{--                            <div class="testimonial__name">--}}
{{--                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>--}}
{{--                                <span class="testimonial__name-meta">دانش اموز</span>--}}
{{--                                <ul class="review-stars d-inline-block">--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star-o"></span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div><!-- end testimonial-header -->--}}
{{--                        <div class="testimonial__desc">--}}
{{--                            <p class="testimonial__desc-desc">--}}
{{--                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است--}}
{{--                            </p>--}}
{{--                        </div><!-- end testimonial__desc -->--}}
{{--                    </div><!-- end testimonial-item -->--}}
{{--                    <div class="testimonial-item">--}}
{{--                        <div class="testimonial-header">--}}
{{--                            <img src="/images/testi-img4.jpg" alt="small-avatar">--}}
{{--                            <div class="testimonial__name">--}}
{{--                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>--}}
{{--                                <span class="testimonial__name-meta">دانش اموز</span>--}}
{{--                                <ul class="review-stars d-inline-block">--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star-o"></span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div><!-- end testimonial-header -->--}}
{{--                        <div class="testimonial__desc">--}}
{{--                            <p class="testimonial__desc-desc">--}}
{{--                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است--}}
{{--                            </p>--}}
{{--                        </div><!-- end testimonial__desc -->--}}
{{--                    </div><!-- end testimonial-item -->--}}
{{--                    <div class="testimonial-item">--}}
{{--                        <div class="testimonial-header">--}}
{{--                            <img src="/images/testi-img.jpg" alt="small-avatar">--}}
{{--                            <div class="testimonial__name">--}}
{{--                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>--}}
{{--                                <span class="testimonial__name-meta">دانش اموز</span>--}}
{{--                                <ul class="review-stars d-inline-block">--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star-o"></span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div><!-- end testimonial-header -->--}}
{{--                        <div class="testimonial__desc">--}}
{{--                            <p class="testimonial__desc-desc">--}}
{{--                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است--}}
{{--                            </p>--}}
{{--                        </div><!-- end testimonial__desc -->--}}
{{--                    </div><!-- end testimonial-item -->--}}
{{--                    <div class="testimonial-item">--}}
{{--                        <div class="testimonial-header">--}}
{{--                            <img src="/images/testi-img5.jpg" alt="small-avatar">--}}
{{--                            <div class="testimonial__name">--}}
{{--                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>--}}
{{--                                <span class="testimonial__name-meta">دانش اموز</span>--}}
{{--                                <ul class="review-stars d-inline-block">--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star-o"></span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div><!-- end testimonial-header -->--}}
{{--                        <div class="testimonial__desc">--}}
{{--                            <p class="testimonial__desc-desc">--}}
{{--                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است--}}
{{--                            </p>--}}
{{--                        </div><!-- end testimonial__desc -->--}}
{{--                    </div><!-- end testimonial-item -->--}}
{{--                    <div class="testimonial-item">--}}
{{--                        <div class="testimonial-header">--}}
{{--                            <img src="/images/testi-img6.jpg" alt="small-avatar">--}}
{{--                            <div class="testimonial__name">--}}
{{--                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>--}}
{{--                                <span class="testimonial__name-meta">دانش اموز</span>--}}
{{--                                <ul class="review-stars d-inline-block">--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star-o"></span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div><!-- end testimonial-header -->--}}
{{--                        <div class="testimonial__desc">--}}
{{--                            <p class="testimonial__desc-desc">--}}
{{--                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است--}}
{{--                            </p>--}}
{{--                        </div><!-- end testimonial__desc -->--}}
{{--                    </div><!-- end testimonial-item -->--}}
{{--                    <div class="testimonial-item">--}}
{{--                        <div class="testimonial-header">--}}
{{--                            <img src="/images/testi-img2.jpg" alt="small-avatar">--}}
{{--                            <div class="testimonial__name">--}}
{{--                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>--}}
{{--                                <span class="testimonial__name-meta">دانش اموز</span>--}}
{{--                                <ul class="review-stars d-inline-block">--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star-o"></span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div><!-- end testimonial-header -->--}}
{{--                        <div class="testimonial__desc">--}}
{{--                            <p class="testimonial__desc-desc">--}}
{{--                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است--}}
{{--                            </p>--}}
{{--                        </div><!-- end testimonial__desc -->--}}
{{--                    </div><!-- end testimonial-item -->--}}
{{--                    <div class="testimonial-item">--}}
{{--                        <div class="testimonial-header">--}}
{{--                            <img src="/images/testi-img3.jpg" alt="small-avatar">--}}
{{--                            <div class="testimonial__name">--}}
{{--                                <h3 class="testimonial__name-title">کیوان معتمدی</h3>--}}
{{--                                <span class="testimonial__name-meta">دانش اموز</span>--}}
{{--                                <ul class="review-stars d-inline-block">--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star"></span></li>--}}
{{--                                    <li><span class="la la-star-o"></span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div><!-- end testimonial-header -->--}}
{{--                        <div class="testimonial__desc">--}}
{{--                            <p class="testimonial__desc-desc">--}}
{{--                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است--}}
{{--                            </p>--}}
{{--                        </div><!-- end testimonial__desc -->--}}
{{--                    </div><!-- end testimonial-item -->--}}
{{--                </div><!-- end testimonial-wrap -->--}}
{{--            </div><!-- end col-lg-12 -->--}}
{{--        </div><!-- end row -->--}}
{{--    </div><!-- container-fluid -->--}}
</section><!-- end testimonial-area -->
{{--    پایان نظرات--}}
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
                        <h5 class="section__meta section__metalight">برترین اموزشگاه در میربلند</h5>
                        <h2 class="section__title text-white">نمره های درخشان <br> رتبه های برتر</h2>
                        <span class="section-divider section-divider-light"></span>
                    </div><!-- end section-heading -->
                    <div class="btn-box margin-top-20px">
                        <a href="user/login" class="theme-btn theme-btn-hover-light">ثبت نام</a>
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
                @php
             $text4=\Illuminate\Support\Facades\DB::table('about_texts')->where("id",4)->first();
             $text5=\Illuminate\Support\Facades\DB::table('about_texts')->where("id",5)->first();

                @endphp
                <div class="benefit-heading padding-top-120px">
                    <div class="section-heading">
                        <h5 class="section__meta">{{$text4->heading}}</h5>
                        <h2 class="section__title">{{$text4->header}}</h2>
                        <span class="section-divider"></span>
                        <p class="section__desc">
                            {{$text4->text}}
                        </p>
                    </div><!-- end section-heading -->
                    <div class="row">
                        <div class="col-lg-4 column-td-half">
                            <div class="info-icon-box">
                                <span class="la la-mouse-pointer icon-element icon-bg-1">
                                    <i class="far fa-copy"></i>
                                </span>
                                <h4 class="widget-title">دوره های حرفه ای</h4>
                            </div><!-- end info-icon-box -->
                        </div><!-- end col-lg-4 -->
                        <div class="col-lg-4 column-td-half">
                            <div class="info-icon-box">
                                <span class="la la-bolt icon-element icon-bg-2">
                                    <i class="fas fa-user-graduate"></i>
                                </span>
                                <h4 class="widget-title">نتایج برتر</h4>
                            </div><!-- end info-icon-box -->
                        </div><!-- end col-lg-4 -->
                        <div class="col-lg-4 column-td-half">
                            <div class="info-icon-box">
                                <span class="la la-users icon-element icon-bg-3">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                </span>
                                <h4 class="widget-title">دبیران متخصص</h4>
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
        @if(\Illuminate\Support\Facades\Session::has('status'))
            <x-alert type="success" text="{{\Illuminate\Support\Facades\Session::get('status')}}"/>
        @endif
        <div class="row">
            <div class="col-lg-5">
                <div class="register-form">
                    <div class="contact-form-action">
                        <h3 class="widget-title">با خبر شدن از دوره های رایگان</h3>
                        <form method="get" action="{{route("formFree.store")}}">
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
                                    <input class="form-control" type="text" name="level" placeholder="پایه">
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
                        <h5 class="section__meta">{{$text5->heading}}</h5>
                        <h2 class="section__title">{{$text5->header}}</h2>
                        <span class="section-divider"></span>
                        <p class="section__desc mb-2">
                            {{$text5->text}}
                        </p>
                    </div><!-- end section-heading -->
                    <div class="btn-box">
                        <a href="{{route('login.form')}}" class="theme-btn">ثبت نام</a>
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



{{--    جدیدترین محصولات--}}
{{--<section class="blog-area padding-top-120px">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="section-heading text-center">--}}
{{--                    <h5 class="section__meta section__metalight">جدید ترین</h5>--}}
{{--                    <h2 class="section__title text-white">جدیدترین محصولات</h2>--}}
{{--                    <span class="section-divider section-divider-light"></span>--}}
{{--                </div><!-- end section-heading -->--}}
{{--            </div><!-- end col-md-12 -->--}}
{{--        </div><!-- end row -->--}}
{{--        <div class="row margin-top-30px ltr">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="blog-post-carousel owl-dot-and-nav">--}}
{{--                    <div class="card-item blog-card">--}}
{{--                        <div class="card-image">--}}
{{--                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>--}}
{{--                            <div class="card-badge">--}}
{{--                                <span class="badge-label">24 ابان</span>--}}
{{--                            </div>--}}
{{--                        </div><!-- end card-image -->--}}
{{--                        <div class="card-content">--}}
{{--                            <h3 class="card__title mt-0">--}}
{{--                                <a href="../blog-single.blade.php">همایش زیست دهم</a>--}}
{{--                            </h3>--}}
{{--                            <div class="card-action">--}}
{{--                                <ul class="card-duration d-flex align-items-center">--}}
{{--                                    <li>By<a href="home-rtl#" class="blog-admin-name">دبیر: یوسفی</a></li>--}}
{{--                                    <li><span class="blog__panel-comment">4 Comments</span></li>--}}
{{--                                    <li><span class="blog__panel-likes">ظرفیت محدود</span></li>--}}
{{--                                </ul>--}}
{{--                            </div><!-- end card-action -->--}}
{{--                        </div><!-- end card-content -->--}}
{{--                    </div><!-- end card-item -->--}}
{{--                    <div class="card-item blog-card">--}}
{{--                        <div class="card-image">--}}
{{--                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>--}}
{{--                            <div class="card-badge">--}}
{{--                                <span class="badge-label">24 ابان</span>--}}
{{--                            </div>--}}
{{--                        </div><!-- end card-image -->--}}
{{--                        <div class="card-content">--}}
{{--                            <h3 class="card__title mt-0">--}}
{{--                                <a href="../blog-single.blade.php">همایش زیست دهم</a>--}}
{{--                            </h3>--}}
{{--                            <div class="card-action">--}}
{{--                                <ul class="card-duration d-flex align-items-center">--}}
{{--                                    <li>By<a href="home-rtl#" class="blog-admin-name">دبیر: یوسفی</a></li>--}}
{{--                                    --}}{{--                                    <li><span class="blog__panel-comment">4 Comments</span></li>--}}
{{--                                    <li><span class="blog__panel-likes">ظرفیت محدود</span></li>--}}
{{--                                </ul>--}}
{{--                            </div><!-- end card-action -->--}}
{{--                        </div><!-- end card-content -->--}}
{{--                    </div><!-- end card-item -->--}}
{{--                    <div class="card-item blog-card">--}}
{{--                        <div class="card-image">--}}
{{--                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>--}}
{{--                            <div class="card-badge">--}}
{{--                                <span class="badge-label">24 ابان</span>--}}
{{--                            </div>--}}
{{--                        </div><!-- end card-image -->--}}
{{--                        <div class="card-content">--}}
{{--                            <h3 class="card__title mt-0">--}}
{{--                                <a href="../blog-single.blade.php">همایش زیست دهم</a>--}}
{{--                            </h3>--}}
{{--                            <div class="card-action">--}}
{{--                                <ul class="card-duration d-flex align-items-center">--}}
{{--                                    <li>By<a href="home-rtl#" class="blog-admin-name">دبیر: یوسفی</a></li>--}}
{{--                                    --}}{{--                                    <li><span class="blog__panel-comment">4 Comments</span></li>--}}
{{--                                    <li><span class="blog__panel-likes">ظرفیت محدود</span></li>--}}
{{--                                </ul>--}}
{{--                            </div><!-- end card-action -->--}}
{{--                        </div><!-- end card-content -->--}}
{{--                    </div><!-- end card-item -->--}}
{{--                    <div class="card-item blog-card">--}}
{{--                        <div class="card-image">--}}
{{--                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>--}}
{{--                            <div class="card-badge">--}}
{{--                                <span class="badge-label">24 ابان</span>--}}
{{--                            </div>--}}
{{--                        </div><!-- end card-image -->--}}
{{--                        <div class="card-content">--}}
{{--                            <h3 class="card__title mt-0">--}}
{{--                                <a href="../blog-single.blade.php">همایش زیست دهم</a>--}}
{{--                            </h3>--}}
{{--                            <div class="card-action">--}}
{{--                                <ul class="card-duration d-flex align-items-center">--}}
{{--                                    <li>By<a href="home-rtl#" class="blog-admin-name">دبیر: یوسفی</a></li>--}}
{{--                                    --}}{{--                                    <li><span class="blog__panel-comment">4 Comments</span></li>--}}
{{--                                    <li><span class="blog__panel-likes">ظرفیت محدود</span></li>--}}
{{--                                </ul>--}}
{{--                            </div><!-- end card-action -->--}}
{{--                        </div><!-- end card-content -->--}}
{{--                    </div><!-- end card-item -->--}}
{{--                    <div class="card-item blog-card">--}}
{{--                        <div class="card-image">--}}
{{--                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>--}}
{{--                            <div class="card-badge">--}}
{{--                                <span class="badge-label">24 ابان</span>--}}
{{--                            </div>--}}
{{--                        </div><!-- end card-image -->--}}
{{--                        <div class="card-content">--}}
{{--                            <h3 class="card__title mt-0">--}}
{{--                                <a href="../blog-single.blade.php">همایش زیست دهم</a>--}}
{{--                            </h3>--}}
{{--                            <div class="card-action">--}}
{{--                                <ul class="card-duration d-flex align-items-center">--}}
{{--                                    <li>By<a href="home-rtl#" class="blog-admin-name">دبیر: یوسفی</a></li>--}}
{{--                                    --}}{{--                                    <li><span class="blog__panel-comment">4 Comments</span></li>--}}
{{--                                    <li><span class="blog__panel-likes">ظرفیت محدود</span></li>--}}
{{--                                </ul>--}}
{{--                            </div><!-- end card-action -->--}}
{{--                        </div><!-- end card-content -->--}}
{{--                    </div><!-- end card-item -->--}}
{{--                    <div class="card-item blog-card">--}}
{{--                        <div class="card-image">--}}
{{--                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>--}}
{{--                            <div class="card-badge">--}}
{{--                                <span class="badge-label">24 ابان</span>--}}
{{--                            </div>--}}
{{--                        </div><!-- end card-image -->--}}
{{--                        <div class="card-content">--}}
{{--                            <h3 class="card__title mt-0">--}}
{{--                                <a href="../blog-single.blade.php">همایش زیست دهم</a>--}}
{{--                            </h3>--}}
{{--                            <div class="card-action">--}}
{{--                                <ul class="card-duration d-flex align-items-center">--}}
{{--                                    <li>By<a href="home-rtl#" class="blog-admin-name">دبیر: یوسفی</a></li>--}}
{{--                                    --}}{{--                                    <li><span class="blog__panel-comment">4 Comments</span></li>--}}
{{--                                    <li><span class="blog__panel-likes">ظرفیت محدود</span></li>--}}
{{--                                </ul>--}}
{{--                            </div><!-- end card-action -->--}}
{{--                        </div><!-- end card-content -->--}}
{{--                    </div><!-- end card-item -->--}}
{{--                    <div class="card-item blog-card">--}}
{{--                        <div class="card-image">--}}
{{--                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>--}}
{{--                            <div class="card-badge">--}}
{{--                                <span class="badge-label">24 ابان</span>--}}
{{--                            </div>--}}
{{--                        </div><!-- end card-image -->--}}
{{--                        <div class="card-content">--}}
{{--                            <h3 class="card__title mt-0">--}}
{{--                                <a href="../blog-single.blade.php">همایش زیست دهم</a>--}}
{{--                            </h3>--}}
{{--                            <div class="card-action">--}}
{{--                                <ul class="card-duration d-flex align-items-center">--}}
{{--                                    <li>By<a href="home-rtl#" class="blog-admin-name">دبیر: یوسفی</a></li>--}}
{{--                                    --}}{{--                                    <li><span class="blog__panel-comment">4 Comments</span></li>--}}
{{--                                    <li><span class="blog__panel-likes">ظرفیت محدود</span></li>--}}
{{--                                </ul>--}}
{{--                            </div><!-- end card-action -->--}}
{{--                        </div><!-- end card-content -->--}}
{{--                    </div><!-- end card-item -->--}}
{{--                    <div class="card-item blog-card">--}}
{{--                        <div class="card-image">--}}
{{--                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>--}}
{{--                            <div class="card-badge">--}}
{{--                                <span class="badge-label">24 ابان</span>--}}
{{--                            </div>--}}
{{--                        </div><!-- end card-image -->--}}
{{--                        <div class="card-content">--}}
{{--                            <h3 class="card__title mt-0">--}}
{{--                                <a href="../blog-single.blade.php">همایش زیست دهم</a>--}}
{{--                            </h3>--}}
{{--                            <div class="card-action">--}}
{{--                                <ul class="card-duration d-flex align-items-center">--}}
{{--                                    <li>By<a href="home-rtl#" class="blog-admin-name">دبیر: یوسفی</a></li>--}}
{{--                                    --}}{{--                                    <li><span class="blog__panel-comment">4 Comments</span></li>--}}
{{--                                    <li><span class="blog__panel-likes">ظرفیت محدود</span></li>--}}
{{--                                </ul>--}}
{{--                            </div><!-- end card-action -->--}}
{{--                        </div><!-- end card-content -->--}}
{{--                    </div><!-- end card-item -->--}}
{{--                    <div class="card-item blog-card">--}}
{{--                        <div class="card-image">--}}
{{--                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>--}}
{{--                            <div class="card-badge">--}}
{{--                                <span class="badge-label">24 ابان</span>--}}
{{--                            </div>--}}
{{--                        </div><!-- end card-image -->--}}
{{--                        <div class="card-content">--}}
{{--                            <h3 class="card__title mt-0">--}}
{{--                                <a href="../blog-single.blade.php">همایش زیست دهم</a>--}}
{{--                            </h3>--}}
{{--                            <div class="card-action">--}}
{{--                                <ul class="card-duration d-flex align-items-center">--}}
{{--                                    <li>By<a href="home-rtl#" class="blog-admin-name">دبیر: یوسفی</a></li>--}}
{{--                                    --}}{{--                                    <li><span class="blog__panel-comment">4 Comments</span></li>--}}
{{--                                    <li><span class="blog__panel-likes">ظرفیت محدود</span></li>--}}
{{--                                </ul>--}}
{{--                            </div><!-- end card-action -->--}}
{{--                        </div><!-- end card-content -->--}}
{{--                    </div><!-- end card-item -->--}}
{{--                    <div class="card-item blog-card">--}}
{{--                        <div class="card-image">--}}
{{--                            <a href="../blog-single.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>--}}
{{--                            <div class="card-badge">--}}
{{--                                <span class="badge-label">24 ابان</span>--}}
{{--                            </div>--}}
{{--                        </div><!-- end card-image -->--}}
{{--                        <div class="card-content">--}}
{{--                            <h3 class="card__title mt-0">--}}
{{--                                <a href="../blog-single.blade.php">همایش زیست دهم</a>--}}
{{--                            </h3>--}}
{{--                            <div class="card-action">--}}
{{--                                <ul class="card-duration d-flex align-items-center">--}}
{{--                                    <li>By<a href="home-rtl#" class="blog-admin-name">دبیر: یوسفی</a></li>--}}
{{--                                    --}}{{--                                    <li><span class="blog__panel-comment">4 Comments</span></li>--}}
{{--                                    <li><span class="blog__panel-likes">ظرفیت محدود</span></li>--}}
{{--                                </ul>--}}
{{--                            </div><!-- end card-action -->--}}
{{--                        </div><!-- end card-content -->--}}
{{--                    </div><!-- end card-item -->--}}


{{--                </div><!-- end blog-post-carousel -->--}}
{{--            </div><!-- end col-lg-12 -->--}}
{{--        </div><!-- end row -->--}}
{{--    </div><!-- end container -->--}}
{{--</section><!-- end blog-area -->--}}
{{--    پایان جدید ترین محصولات--}}


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
                        <form method="get" action="{{route("formNews.store")}}">
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
<script src="https://code.jquery.com/jquery-1.12.4.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>--}}
{{-- <script src="https://code.jquery.com/jquery-1.12.4.min.js" crossorigin="anonymous"></script>--}}
{{--<script src="/js/jquery-3.4.1.min.js"></script>--}}
<script src="{{asset('js/popper.min.js')}}"></script>
{{--<script src="/js/bootstrap.min.js"></script>--}}
<script src="{{asset('js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>--}}
<script src="{{asset('js/isotope.js')}}"></script>
<script src="{{asset('js/waypoint.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/particles.min.js')}}"></script>
<script src="{{asset('js/particlesRun.js')}}"></script>
<script src="{{asset('js/fancybox.js')}}"></script>
<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/date-time-picker.js')}}"></script>
<script src="{{asset('js/jquery.filer.min.js')}}"></script>
<script src="{{asset('js/emojionearea.min.js')}}"></script>
<script src="{{asset('js/smooth-scrolling.js')}}"></script>
<script src="{{asset('js/tooltipster.bundle.min.js')}}"></script>
<script src="{{asset('js/main-rtl.js')}}"></script>

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js" integrity="sha512-/DXTXr6nQodMUiq+IUJYCt2PPOUjrHJ9wFrqpJ3XkgPNOZVfMok7cRw6CSxyCQxXn6ozlESsSh1/sMCTF1rL/g==" crossorigin="anonymous"></script>--}}

    <script>
        $(document).ready(function() {
            $("#myCarousel").on("slide.bs.carousel", function(e) {
                var $e = $(e.relatedTarget);
                var idx = $e.index();
                var itemsPerSlide = 3;
                var totalItems = $(".carousel-item").length;

                if (idx >= totalItems - (itemsPerSlide - 1)) {
                    var it = itemsPerSlide - (totalItems - idx);
                    for (var i = 0; i < it; i++) {
                        // append slides to end
                        if (e.direction == "left") {
                            $(".carousel-item")
                                .eq(i)
                                .appendTo(".carousel-inner");
                        } else {
                            $(".carousel-item")
                                .eq(0)
                                .appendTo($(this).find(".carousel-inner"));
                        }
                    }
                }
            });
        });

    </script>
@endsection

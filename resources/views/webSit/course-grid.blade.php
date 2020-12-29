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
                        <h2 class="section__title">فروشگاه</h2>
                    </div>
                    <ul class="breadcrumb__list">
                        <li class="active__list-item"><a href="../index.blade.php">خانـه<i class="fas fa-angle-left mr-2"></i></a></li>
                        <li class="active__list-item">صفحه ها<i class="fas fa-angle-left mr-2"></i></li>
                        <li>فروشگاه</li>
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
        START COURSE AREA
======================================-->
<section class="course-area padding-top-120px padding-bottom-120px text-right">
    <div class="course-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-bar d-flex justify-content-between align-items-center">
                        <ul class="filter-bar-tab nav nav-tabs align-items-center" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active icon-element" id="grid-view-tab" data-toggle="tab" href="course-grid.html#grid-view" role="tab" aria-controls="grid-view" aria-selected="true">
                                    <span data-toggle="tooltip" data-placement="top" title="Grid View">
                                        <i class="la la-th-large"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link icon-element" id="list-view-tab" data-toggle="tab" href="course-grid.html#list-view" role="tab" aria-controls="list-view" aria-selected="false">
                                   <span data-toggle="tooltip" data-placement="top" title="List View">
                                        <i class="la la-th-list"></i>
                                   </span>
                                </a>
                            </li>
                            <li class="nav-item font-size-15">نمایش 1 از 8</li>
                        </ul>
{{--                        <div class="sort-ordering">--}}
{{--                            <select class="sort-ordering-select">--}}
{{--                                <option value="all-category">All Category</option>--}}
{{--                                <option value="newest">Newest courses</option>--}}
{{--                                <option value="oldest">Oldest courses</option>--}}
{{--                                <option value="high-rated">Highest rated</option>--}}
{{--                                <option value="popular-courses">Popular courses</option>--}}
{{--                                <option value="high-to-low">Price: high to low</option>--}}
{{--                                <option value="low-to-high">Price: low to high</option>--}}
{{--                            </select>--}}
{{--                        </div><!-- end sort-ordering -->--}}
                    </div><!-- end filter-bar -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="course-content-wrapper mt-4">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="grid-view" aria-labelledby="grid-view-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                            <div class="card-image">
                                                <a href="course-details" class="card__img"><img src="/images/img8.jpg" alt=""></a>
                                                <div class="card-badge">
                                                    <span class="badge-label">bestseller</span>
                                                </div>
                                            </div><!-- end card-image -->
                                            <div class="card-content">
                                                <p class="card__label">
                                                    <span class="card__label-text">پشرفته</span>
                                                    <a href="course-grid.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="card__title">
                                                    <a href="course-details">شیمی پایه هستم</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="teacher-detail.html">دبیر: استاد قاسمی</a>
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
                                                    <span class="card__price">تومان58.00</span>
                                                    <a href="course-grid.html#" class="text-btn">افزودن به سبد خرید</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="card-item card-preview" data-tooltip-content="#tooltip_content_2">
                                            <div class="card-image">
                                                <a href="course-details" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                                            </div><!-- end card-image -->
                                            <div class="card-content">
                                                <p class="card__label">
                                                    <span class="card__label-text">پشرفته</span>
                                                    <a href="course-grid.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="card__title">
                                                    <a href="course-details">شیمی پایه هستم</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="teacher-detail.html">دبیر: استاد قاسمی</a>
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
                                                    <span class="card__price">تومان58.00</span>
                                                    <a href="course-grid.html#" class="text-btn">افزودن به سبد خرید</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="card-item card-preview" data-tooltip-content="#tooltip_content_3">
                                            <div class="card-image">
                                                <a href="course-details" class="card__img"><img src="/images/img10.jpg" alt=""></a>
                                                <div class="card-badge">
                                                    <span class="badge-label">highest rated</span>
                                                </div>
                                            </div><!-- end card-image -->
                                            <div class="card-content">
                                                <p class="card__label">
                                                    <span class="card__label-text">پشرفته</span>
                                                    <a href="course-grid.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="card__title">
                                                    <a href="course-details">شیمی پایه هستم</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="teacher-detail.html">دبیر: استاد قاسمی</a>
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
                                                    <span class="card__price">تومان58.00</span>
                                                    <a href="course-grid.html#" class="text-btn">افزودن به سبد خرید</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="card-item card-preview" data-tooltip-content="#tooltip_content_4">
                                            <div class="card-image">
                                                <a href="course-details" class="card__img"><img src="/images/img11.jpg" alt=""></a>
                                            </div><!-- end card-image -->
                                            <div class="card-content">
                                                <p class="card__label">
                                                    <span class="card__label-text">پشرفته</span>
                                                    <a href="course-grid.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="card__title">
                                                    <a href="course-details">شیمی پایه هستم</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="teacher-detail.html">دبیر: استاد قاسمی</a>
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
                                                    <span class="card__price">تومان58.00</span>
                                                    <a href="course-grid.html#" class="text-btn">افزودن به سبد خرید</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                            <div class="card-image">
                                                <a href="course-details" class="card__img"><img src="/images/img12.jpg" alt=""></a>
                                                <div class="card-badge">
                                                    <span class="badge-label">bestseller</span>
                                                </div>
                                            </div><!-- end card-image -->
                                            <div class="card-content">
                                                <p class="card__label">
                                                    <span class="card__label-text">پشرفته</span>
                                                    <a href="course-grid.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="card__title">
                                                    <a href="course-details">شیمی پایه هستم</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="teacher-detail.html">دبیر: استاد قاسمی</a>
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
                                                    <span class="card__price">تومان58.00</span>
                                                    <a href="course-grid.html#" class="text-btn">افزودن به سبد خرید</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="card-item card-preview" data-tooltip-content="#tooltip_content_6">
                                            <div class="card-image">
                                                <a href="course-details" class="card__img"><img src="/images/img13.jpg" alt=""></a>
                                            </div><!-- end card-image -->
                                            <div class="card-content">
                                                <p class="card__label">
                                                    <span class="card__label-text">پشرفته</span>
                                                    <a href="course-grid.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="card__title">
                                                    <a href="course-details">شیمی پایه هستم</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="teacher-detail.html">دبیر: استاد قاسمی</a>
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
                                                    <span class="card__price">تومان58.00</span>
                                                    <a href="course-grid.html#" class="text-btn">افزودن به سبد خرید</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                            <div class="card-image">
                                                <a href="course-details" class="card__img"><img src="/images/img12.jpg" alt=""></a>
                                                <div class="card-badge">
                                                    <span class="badge-label">bestseller</span>
                                                </div>
                                            </div><!-- end card-image -->
                                            <div class="card-content">
                                                <p class="card__label">
                                                    <span class="card__label-text">پشرفته</span>
                                                    <a href="course-grid.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="card__title">
                                                    <a href="course-details">شیمی پایه هستم</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="teacher-detail.html">دبیر: استاد قاسمی</a>
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
                                                    <span class="card__price">تومان58.00</span>
                                                    <a href="course-grid.html#" class="text-btn">افزودن به سبد خرید</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="card-item card-preview" data-tooltip-content="#tooltip_content_6">
                                            <div class="card-image">
                                                <a href="course-details" class="card__img"><img src="/images/img13.jpg" alt=""></a>
                                            </div><!-- end card-image -->
                                            <div class="card-content">
                                                <p class="card__label">
                                                    <span class="card__label-text">پشرفته</span>
                                                    <a href="course-grid.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="card__title">
                                                    <a href="course-details">شیمی پایه هستم</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="teacher-detail.html">دبیر: استاد قاسمی</a>
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
                                                    <span class="card__price">تومان58.00</span>
                                                    <a href="course-grid.html#" class="text-btn">افزودن به سبد خرید</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                            <div class="card-image">
                                                <a href="course-details" class="card__img"><img src="/images/img12.jpg" alt=""></a>
                                                <div class="card-badge">
                                                    <span class="badge-label">bestseller</span>
                                                </div>
                                            </div><!-- end card-image -->
                                            <div class="card-content">
                                                <p class="card__label">
                                                    <span class="card__label-text">پشرفته</span>
                                                    <a href="course-grid.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="card__title">
                                                    <a href="course-details">شیمی پایه هستم</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="teacher-detail.html">دبیر: استاد قاسمی</a>
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
                                                    <span class="card__price">تومان58.00</span>
                                                    <a href="course-grid.html#" class="text-btn">افزودن به سبد خرید</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="card-item card-preview" data-tooltip-content="#tooltip_content_6">
                                            <div class="card-image">
                                                <a href="course-details" class="card__img"><img src="/images/img13.jpg" alt=""></a>
                                            </div><!-- end card-image -->
                                            <div class="card-content">
                                                <p class="card__label">
                                                    <span class="card__label-text">پشرفته</span>
                                                    <a href="course-grid.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="card__title">
                                                    <a href="course-details">شیمی پایه هستم</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="teacher-detail.html">دبیر: استاد قاسمی</a>
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
                                                    <span class="card__price">تومان58.00</span>
                                                    <a href="course-grid.html#" class="text-btn">افزودن به سبد خرید</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-6 -->
                                </div><!-- end course-block -->
                            </div><!-- end tab-pane -->
                            <div role="tabpanel" class="tab-pane fade" id="list-view" aria-labelledby="list-view-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-item card-list-layout card-preview" data-tooltip-content="#tooltip_content_1">
                                            <div class="card-image">
                                                <a href="course-details" class="card__img"><img src="/images/img13.jpg" alt=""></a>
                                            </div><!-- end card-image -->
                                            <div class="card-content">
                                                <p class="card__label">
                                                    <span class="card__label-text">پشرفته</span>
                                                    <a href="course-grid.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="card__title">
                                                    <a href="course-details">شیمی پایه هستم</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="teacher-detail.html">دبیر: استاد قاسمی</a>
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
                                                    <span class="card__price">تومان58.00</span>
                                                    <a href="course-grid.html#" class="text-btn">افزودن به سبد خرید</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-12">
                                        <div class="card-item card-list-layout card-preview" data-tooltip-content="#tooltip_content_2">
                                            <div class="card-image">
                                                <a href="course-details" class="card__img"><img src="/images/img12.jpg" alt=""></a>
                                                <div class="card-badge">
                                                    <span class="badge-label">bestseller</span>
                                                </div>
                                            </div><!-- end card-image -->
                                            <div class="card-content">
                                                <p class="card__label">
                                                    <span class="card__label-text">پشرفته</span>
                                                    <a href="course-grid.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="card__title">
                                                    <a href="course-details">شیمی پایه هستم</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="teacher-detail.html">دبیر: استاد قاسمی</a>
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
                                                    <span class="card__price">تومان58.00</span>
                                                    <a href="course-grid.html#" class="text-btn">افزودن به سبد خرید</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-12">
                                        <div class="card-item card-list-layout card-preview" data-tooltip-content="#tooltip_content_3">
                                            <div class="card-image">
                                                <a href="course-details" class="card__img"><img src="/images/img11.jpg" alt=""></a>
                                                <div class="card-badge">
                                                    <span class="badge-label">highest rated</span>
                                                </div>
                                            </div><!-- end card-image -->
                                            <div class="card-content">
                                                <p class="card__label">
                                                    <span class="card__label-text">پشرفته</span>
                                                    <a href="course-grid.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="card__title">
                                                    <a href="course-details">شیمی پایه هستم</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="teacher-detail.html">دبیر: استاد قاسمی</a>
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
                                                    <span class="card__price">تومان58.00</span>
                                                    <a href="course-grid.html#" class="text-btn">افزودن به سبد خرید</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-12">
                                        <div class="card-item card-list-layout card-preview" data-tooltip-content="#tooltip_content_4">
                                            <div class="card-image">
                                                <a href="course-details" class="card__img"><img src="/images/img10.jpg" alt=""></a>
                                            </div><!-- end card-image -->
                                            <div class="card-content">
                                                <p class="card__label">
                                                    <span class="card__label-text">پشرفته</span>
                                                    <a href="course-grid.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="card__title">
                                                    <a href="course-details">شیمی پایه هستم</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="teacher-detail.html">دبیر: استاد قاسمی</a>
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
                                                    <span class="card__price">تومان58.00</span>
                                                    <a href="course-grid.html#" class="text-btn">افزودن به سبد خرید</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-12">
                                        <div class="card-item card-list-layout card-preview" data-tooltip-content="#tooltip_content_5">
                                            <div class="card-image">
                                                <a href="course-details" class="card__img"><img src="/images/img9.jpg" alt=""></a>
                                                <div class="card-badge">
                                                    <span class="badge-label">bestseller</span>
                                                </div>
                                            </div><!-- end card-image -->
                                            <div class="card-content">
                                                <p class="card__label">
                                                    <span class="card__label-text">پشرفته</span>
                                                    <a href="course-grid.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="card__title">
                                                    <a href="course-details">شیمی پایه هستم</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="teacher-detail.html">دبیر: استاد قاسمی</a>
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
                                                    <span class="card__price">تومان58.00</span>
                                                    <a href="course-grid.html#" class="text-btn">افزودن به سبد خرید</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-12">
                                        <div class="card-item card-list-layout card-preview" data-tooltip-content="#tooltip_content_6">
                                            <div class="card-image">
                                                <a href="course-details" class="card__img"><img src="/images/img8.jpg" alt=""></a>
                                            </div><!-- end card-image -->
                                            <div class="card-content">
                                                <p class="card__label">
                                                    <span class="card__label-text">پشرفته</span>
                                                    <a href="course-grid.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="card__title">
                                                    <a href="course-details">شیمی پایه هستم</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="teacher-detail.html">دبیر: استاد قاسمی</a>
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
                                                    <span class="card__price">تومان58.00</span>
                                                    <a href="course-grid.html#" class="text-btn">افزودن به سبد خرید</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-12">
                                        <div class="card-item card-list-layout card-preview" data-tooltip-content="#tooltip_content_6">
                                            <div class="card-image">
                                                <a href="course-details" class="card__img"><img src="/images/img8.jpg" alt=""></a>
                                            </div><!-- end card-image -->
                                            <div class="card-content">
                                                <p class="card__label">
                                                    <span class="card__label-text">پشرفته</span>
                                                    <a href="course-grid.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="card__title">
                                                    <a href="course-details">شیمی پایه هستم</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="teacher-detail.html">دبیر: استاد قاسمی</a>
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
                                                    <span class="card__price">تومان58.00</span>
                                                    <a href="course-grid.html#" class="text-btn">افزودن به سبد خرید</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-12">
                                        <div class="card-item card-list-layout card-preview" data-tooltip-content="#tooltip_content_6">
                                            <div class="card-image">
                                                <a href="course-details" class="card__img"><img src="/images/img8.jpg" alt=""></a>
                                            </div><!-- end card-image -->
                                            <div class="card-content">
                                                <p class="card__label">
                                                    <span class="card__label-text">پشرفته</span>
                                                    <a href="course-grid.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="card__title">
                                                    <a href="course-details">شیمی پایه هستم</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="teacher-detail.html">دبیر: استاد قاسمی</a>
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
                                                    <span class="card__price">تومان58.00</span>
                                                    <a href="course-grid.html#" class="text-btn">افزودن به سبد خرید</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-12">
                                        <div class="card-item card-list-layout card-preview" data-tooltip-content="#tooltip_content_6">
                                            <div class="card-image">
                                                <a href="course-details" class="card__img"><img src="/images/img8.jpg" alt=""></a>
                                            </div><!-- end card-image -->
                                            <div class="card-content">
                                                <p class="card__label">
                                                    <span class="card__label-text">پشرفته</span>
                                                    <a href="course-grid.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
                                                </p>
                                                <h3 class="card__title">
                                                    <a href="course-details">شیمی پایه هستم</a>
                                                </h3>
                                                <p class="card__author">
                                                    <a href="teacher-detail.html">دبیر: استاد قاسمی</a>
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
                                                    <span class="card__price">تومان58.00</span>
                                                    <a href="course-grid.html#" class="text-btn">افزودن به سبد خرید</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-12 -->
                                </div><!-- end course-block -->
                            </div><!-- end tab-pane -->
                        </div><!-- end tab-content -->
                    </div><!-- end col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <h3 class="widget-title">جستجوی محصول</h3>
                                <span class="section-divider"></span>
                                <div class="contact-form-action">
                                    <form method="post">
                                        <div class="form-group">
                                            <input class="form-control" type="search" name="search" placeholder="جستجو...">
                                            <button type="button" class="search-icon"><span class="la la-search"></span></button>
                                        </div>
                                    </form>
                                </div><!-- end contact-form-action -->
                            </div><!-- end sidebar-widget -->
                            <div class="sidebar-widget">

                                <h3 class="widget-title">فیلتر قیمت</h3>


                                <div class="box-reng">

{{--                                    <h3>Price <span>Range</span></h3>--}}
                                    <div class="values">
                                        <div><span id="first"></span>هزار تومان</div> - <div><span id="second"></span>هزار تومان</div>
                                    </div>
                                    <small>
                                        محدوده فعلی:
                                        <div><span id="third"></span>هزار تومان</div>
                                    </small>

                                    <div class="slider-reng" data-value-0="#first" data-value-1="#second" data-range="#third"></div>

                                </div>

                                <!-- dribbble -->
                                <a class="dribbble" href="https://dribbble.com/shots/7268454-Rubber-Slider" target="_blank">
                                    <img src="https://cdn.dribbble.com/assets/dribbble-ball-mark-2bd45f09c2fb58dbbfb44766d5d1d07c5a12972d602ef8b32204d28fa3dda554.svg" alt="">
                                </a>


{{--                                <input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14"/>                            </div>--}}
{{--                                    <input type="range">--}}
{{--                                <p class="range-value">--}}
{{--                                    <input type="text" id="amount" readonly>--}}
{{--                                </p>--}}
{{--                                <div id="slider-range" class="range-bar"></div>--}}
{{--                                </div>--}}
                            </div>
                            <div class="sidebar-widget">
                                <h3 class="widget-title">دسته بندی ها</h3>
                                <span class="section-divider"></span>
                                <ul class="filter-by-category">

                                    <li>
                                        <input type="checkbox" id="chb2">
                                        <label for="chb2" class="primary-color">دوره ها</label>
                                    </li>
                                    <li>

                                            <input type="checkbox" id="chb2">
                                            <label for="chb2" class="primary-color">همایشات</label>

                                    </li>
                                    <li>
                                            <input type="checkbox" id="chb3">
                                            <label for="chb3" class="primary-color">آزمون ها</label>
                                    </li>
                                    <li>
                                            <input type="checkbox" id="chb4">
                                            <label for="chb4" class="primary-color">فیلم آموزشی</label>
                                    </li>
                                     <li>
                                            <input type="checkbox" id="chb5">
                                            <label for="chb5" class="primary-color">نمونه سوالات</label>
                                    </li>

                                </ul>

                            </div><!-- end sidebar-widget -->

                            <div class="sidebar-widget">
                                <h3 class="widget-title">سطح</h3>
                                <span class="section-divider"></span>
                                <ul class="filter-by-rating filter-by-rating-2">
                                    <li>
                                        <span>
                                            <span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span>
                                        </span>
                                        <span class="ml-1">
                                            <span class="mr-1 primary-color">پیشرفته</span>
{{--                                            <span>(13,000)</span>--}}
                                        </span>
                                        <label class="review-label">
                                            <input type="radio" checked="checked" name="review-radio">
                                            <span class="review-mark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <span>
                                           <span class="la la-star"></span> <span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star-o"></span>
                                        </span>
                                        <span class="ml-1">
                                            <span class="mr-1 primary-color">متوسط</span>
{{--                                            <span>(5,000)</span>--}}
                                        </span>
                                        <label class="review-label">
                                            <input type="radio" name="review-radio">
                                            <span class="review-mark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <span>
                                            <span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star-o"></span><span class="la la-star-o"></span>
                                        </span>
                                        <span class="ml-1">
                                            <span class="mr-1 primary-color">استاندارد</span>
{{--                                            <span>(3,000)</span>--}}
                                        </span>
                                        <label class="review-label">
                                            <input type="radio" name="review-radio">
                                            <span class="review-mark"></span>
                                        </label>
                                    </li>
                                    <li>
                                         <span>
                                            <span class="la la-star"></span><span class="la la-star"></span><span class="la la-star-o"></span><span class="la la-star-o"></span><span class="la la-star-o"></span>
                                        </span>
                                        <span class="ml-1">
                                            <span class="mr-1 primary-color">همه سطوح</span>
{{--                                            <span>(3,000)</span>--}}
                                        </span>
                                        <label class="review-label">
                                            <input type="radio" name="review-radio">
                                            <span class="review-mark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <span>
                                            <span class="la la-star"></span><span class="la la-star-o"></span><span class="la la-star-o"></span><span class="la la-star-o"></span><span class="la la-star-o"></span>
                                        </span>
{{--                                        <span class="ml-1">--}}
{{--                                            <span class="mr-1 primary-color">1.0 & up</span>--}}
{{--                                            <span>(3,000)</span>--}}
{{--                                        </span>--}}
                                        <label class="review-label">
                                            <input type="radio" name="review-radio">
                                            <span class="review-mark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
{{--                            <div class="sidebar-widget">--}}
{{--                                <h3 class="widget-title">Language</h3>--}}
{{--                                <span class="section-divider"></span>--}}
{{--                                <div class="sort-ordering">--}}
{{--                                    <select class="sort-ordering-select">--}}
{{--                                        <option value="AF">Afrikaans</option>--}}
{{--                                        <option value="SQ">Albanian</option>--}}
{{--                                        <option value="AR">Arabic</option>--}}
{{--                                        <option value="HY">Armenian</option>--}}
{{--                                        <option value="EU">Basque</option>--}}
{{--                                        <option value="BN">Bengali</option>--}}
{{--                                        <option value="BG">Bulgarian</option>--}}
{{--                                        <option value="CA">Catalan</option>--}}
{{--                                        <option value="KM">Cambodian</option>--}}
{{--                                        <option value="ZH">Chinese (Mandarin)</option>--}}
{{--                                        <option value="HR">Croatian</option>--}}
{{--                                        <option value="CS">Czech</option>--}}
{{--                                        <option value="DA">Danish</option>--}}
{{--                                        <option value="NL">Dutch</option>--}}
{{--                                        <option value="EN" selected>English</option>--}}
{{--                                        <option value="ET">Estonian</option>--}}
{{--                                        <option value="FJ">Fiji</option>--}}
{{--                                        <option value="FI">Finnish</option>--}}
{{--                                        <option value="FR">French</option>--}}
{{--                                        <option value="KA">Georgian</option>--}}
{{--                                        <option value="DE">German</option>--}}
{{--                                        <option value="EL">Greek</option>--}}
{{--                                        <option value="GU">Gujarati</option>--}}
{{--                                        <option value="HE">Hebrew</option>--}}
{{--                                        <option value="HI">Hindi</option>--}}
{{--                                        <option value="HU">Hungarian</option>--}}
{{--                                        <option value="IS">Icelandic</option>--}}
{{--                                        <option value="ID">Indonesian</option>--}}
{{--                                        <option value="GA">Irish</option>--}}
{{--                                        <option value="IT">Italian</option>--}}
{{--                                        <option value="JA">Japanese</option>--}}
{{--                                        <option value="JW">Javanese</option>--}}
{{--                                        <option value="KO">Korean</option>--}}
{{--                                        <option value="LA">Latin</option>--}}
{{--                                        <option value="LV">Latvian</option>--}}
{{--                                        <option value="LT">Lithuanian</option>--}}
{{--                                        <option value="MK">Macedonian</option>--}}
{{--                                        <option value="MS">Malay</option>--}}
{{--                                        <option value="ML">Malayalam</option>--}}
{{--                                        <option value="MT">Maltese</option>--}}
{{--                                        <option value="MI">Maori</option>--}}
{{--                                        <option value="MR">Marathi</option>--}}
{{--                                        <option value="MN">Mongolian</option>--}}
{{--                                        <option value="NE">Nepali</option>--}}
{{--                                        <option value="NO">Norwegian</option>--}}
{{--                                        <option value="FA">Persian</option>--}}
{{--                                        <option value="PL">Polish</option>--}}
{{--                                        <option value="PT">Portuguese</option>--}}
{{--                                        <option value="PA">Punjabi</option>--}}
{{--                                        <option value="QU">Quechua</option>--}}
{{--                                        <option value="RO">Romanian</option>--}}
{{--                                        <option value="RU">Russian</option>--}}
{{--                                        <option value="SM">Samoan</option>--}}
{{--                                        <option value="SR">Serbian</option>--}}
{{--                                        <option value="SK">Slovak</option>--}}
{{--                                        <option value="SL">Slovenian</option>--}}
{{--                                        <option value="ES">Spanish</option>--}}
{{--                                        <option value="SW">Swahili</option>--}}
{{--                                        <option value="SV">Swedish </option>--}}
{{--                                        <option value="TA">Tamil</option>--}}
{{--                                        <option value="TT">Tatar</option>--}}
{{--                                        <option value="TE">Telugu</option>--}}
{{--                                        <option value="TH">Thai</option>--}}
{{--                                        <option value="BO">Tibetan</option>--}}
{{--                                        <option value="TO">Tonga</option>--}}
{{--                                        <option value="TR">Turkish</option>--}}
{{--                                        <option value="UK">Ukrainian</option>--}}
{{--                                        <option value="UR">Urdu</option>--}}
{{--                                        <option value="UZ">Uzbek</option>--}}
{{--                                        <option value="VI">Vietnamese</option>--}}
{{--                                        <option value="CY">Welsh</option>--}}
{{--                                        <option value="XH">Xhosa</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div><!-- end sidebar-widget -->--}}
{{--                            <div class="sidebar-widget">--}}
{{--                                <h3 class="widget-title">Sort by</h3>--}}
{{--                                <span class="section-divider"></span>--}}
{{--                                <div class="sort-ordering">--}}
{{--                                    <select name="short-ordering-select" class="sort-ordering-select">--}}
{{--                                        <option value="bestseller">Bestseller</option>--}}
{{--                                        <option value="popular">Popular</option>--}}
{{--                                        <option value="recent">Recent</option>--}}
{{--                                        <option value="highest-rated">Highest rated</option>--}}
{{--                                        <option value="trending">Trending</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div><!-- end sidebar-widget -->--}}
{{--                            <div class="sidebar-widget">--}}
{{--                                <h3 class="widget-title">By Cost</h3>--}}
{{--                                <span class="section-divider"></span>--}}
{{--                                <ul class="filter-by-price">--}}
{{--                                    <li>--}}
{{--                                        <div class="custom-checkbox">--}}
{{--                                            <input type="checkbox" id="chb23">--}}
{{--                                            <label for="chb23">All</label>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="custom-checkbox">--}}
{{--                                            <input type="checkbox" id="chb24">--}}
{{--                                            <label for="chb24">Free</label>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="custom-checkbox">--}}
{{--                                            <input type="checkbox" id="chb25">--}}
{{--                                            <label for="chb25">Paid</label>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div><!-- end sidebar-widget -->--}}
                            <div class="sidebar-widget">
                                <h3 class="widget-title">بر حسب ارزان ترین</h3>
                                <span class="section-divider"></span>
                                <ul class="filter-by-rating filter-by-rating-2">
                                    <li>
                                        <span>
                                            <span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span>
                                        </span>
                                        <span class="ml-1">
                                            <span class="mr-1 primary-color">5.0</span>
                                            <span>(13,000)</span>
                                        </span>
                                        <label class="review-label">
                                            <input type="radio" checked="checked" name="review-radio">
                                            <span class="review-mark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <span>
                                           <span class="la la-star"></span> <span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star-o"></span>
                                        </span>
                                        <span class="ml-1">
                                            <span class="mr-1 primary-color">4.5 & up</span>
                                            <span>(5,000)</span>
                                        </span>
                                        <label class="review-label">
                                            <input type="radio" name="review-radio">
                                            <span class="review-mark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <span>
                                            <span class="la la-star"></span><span class="la la-star"></span><span class="la la-star"></span><span class="la la-star-o"></span><span class="la la-star-o"></span>
                                        </span>
                                        <span class="ml-1">
                                            <span class="mr-1 primary-color">3.0 & up</span>
                                            <span>(3,000)</span>
                                        </span>
                                        <label class="review-label">
                                            <input type="radio" name="review-radio">
                                            <span class="review-mark"></span>
                                        </label>
                                    </li>
                                    <li>
                                         <span>
                                            <span class="la la-star"></span><span class="la la-star"></span><span class="la la-star-o"></span><span class="la la-star-o"></span><span class="la la-star-o"></span>
                                        </span>
                                        <span class="ml-1">
                                            <span class="mr-1 primary-color">2.0 & up</span>
                                            <span>(3,000)</span>
                                        </span>
                                        <label class="review-label">
                                            <input type="radio" name="review-radio">
                                            <span class="review-mark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <span>
                                            <span class="la la-star"></span><span class="la la-star-o"></span><span class="la la-star-o"></span><span class="la la-star-o"></span><span class="la la-star-o"></span>
                                        </span>
                                        <span class="ml-1">
                                            <span class="mr-1 primary-color">1.0 & up</span>
                                            <span>(3,000)</span>
                                        </span>
                                        <label class="review-label">
                                            <input type="radio" name="review-radio">
                                            <span class="review-mark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div><!-- end sidebar-widget -->
{{--                            <div class="sidebar-widget">--}}
{{--                                <h3 class="widget-title">Instructors</h3>--}}
{{--                                <span class="section-divider"></span>--}}
{{--                                <div class="sort-ordering">--}}
{{--                                    <select class="sort-ordering-select">--}}
{{--                                        <option selected>All Instructor</option>--}}
{{--                                        <option value="1">Aduca Instructor Team</option>--}}
{{--                                        <option value="1">Aatef Jaberi</option>--}}
{{--                                        <option value="2">Abdul Wali</option>--}}
{{--                                        <option value="3">Abhay Talreja</option>--}}
{{--                                        <option value="4">Akshay Goel</option>--}}
{{--                                        <option value="5">Al Sweigart</option>--}}
{{--                                        <option value="6">Alagappan K</option>--}}
{{--                                        <option value="7">Bluelime Learning Solutions</option>--}}
{{--                                        <option value="8">Boris Paskhaver</option>--}}
{{--                                        <option value="9">Brent Dalley</option>--}}
{{--                                        <option value="10">Brian Jackson</option>--}}
{{--                                        <option value="11">Bruce Chamoff</option>--}}
{{--                                        <option value="12">Carl Heaton</option>--}}
{{--                                        <option value="13">Chad Tennant</option>--}}
{{--                                        <option value="14">Chris Lele</option>--}}
{{--                                        <option value="15">Daniel Kalish</option>--}}
{{--                                        <option value="16">Daniel White</option>--}}
{{--                                        <option value="17">Darrel Wilson</option>--}}
{{--                                        <option value="18">EDUmobile Academy</option>--}}
{{--                                        <option value="19">Eduonix Learning Solutions</option>--}}
{{--                                        <option value="20">Eduonix-Tech</option>--}}
{{--                                        <option value="21">Ermin Kreponic</option>--}}
{{--                                        <option value="22">Fahad Chaudhry</option>--}}
{{--                                        <option value="23">Federico Fort</option>--}}
{{--                                        <option value="24">Frahaan Hussain</option>--}}
{{--                                        <option value="25">Gabriel Both</option>--}}
{{--                                        <option value="26">Gandhi Kumarasamy Sezhian</option>--}}
{{--                                        <option value="27">Hayley - Creative Mind Ch</option>--}}
{{--                                        <option value="28">Hussein Al Rubaye</option>--}}
{{--                                        <option value="29">Infinite Skills</option>--}}
{{--                                        <option value="30">Irfan Dayan</option>--}}
{{--                                        <option value="31">James Canzanella</option>--}}
{{--                                        <option value="32">James G</option>--}}
{{--                                        <option value="33">Kawser Ahmed</option>--}}
{{--                                        <option value="34">Kraig Mathias</option>--}}
{{--                                        <option value="35">Krisztina Rudnay</option>--}}
{{--                                        <option value="36">Laurence Svekis</option>--}}
{{--                                        <option value="37">Lawrence Kim</option>--}}
{{--                                        <option value="17">M Darwish</option>--}}
{{--                                        <option value="38">Maggie Osama</option>--}}
{{--                                        <option value="39">Nader Hantash</option>--}}
{{--                                        <option value="40">Naeem Hussain</option>--}}
{{--                                        <option value="41">Phil Ebiner</option>--}}
{{--                                        <option value="42">Rufeena Jones S</option>--}}
{{--                                        <option value="43">Richard Miles</option>--}}
{{--                                        <option value="44">Sandor Kiss</option>--}}
{{--                                        <option value="45">Saranya Srinidhi</option>--}}
{{--                                        <option value="46">Think Forward Online Training</option>--}}
{{--                                        <option value="47">Tim Sharp</option>--}}
{{--                                        <option value="48">Usman Raoof</option>--}}
{{--                                        <option value="49">Victoria White</option>--}}
{{--                                        <option value="50">Wayne Walker</option>--}}
{{--                                        <option value="51">Yohann Taieb</option>--}}
{{--                                        <option value="52">Zac Johnson</option>--}}
{{--                                        <option value="53">Zach Miller</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div><!-- end sidebar-widget -->--}}
{{--                            <div class="sidebar-widget">--}}
{{--                                <h3 class="widget-title">Features</h3>--}}
{{--                                <span class="section-divider"></span>--}}
{{--                                <ul class="filter-by-level">--}}
{{--                                    <li>--}}
{{--                                        <div class="custom-checkbox">--}}
{{--                                            <input type="checkbox" id="chb26">--}}
{{--                                            <label for="chb26" class="primary-color">Captions<span class="ml-2 font-size-14 primary-color-3">(20,300)</span></label>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="custom-checkbox">--}}
{{--                                            <input type="checkbox" id="chb27">--}}
{{--                                            <label for="chb27" class="primary-color">Quizzes<span class="ml-2 font-size-14 primary-color-3">(5,300)</span></label>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="custom-checkbox">--}}
{{--                                            <input type="checkbox" id="chb28">--}}
{{--                                            <label for="chb28" class="primary-color">Coding Exercises<span class="ml-2 font-size-14 primary-color-3">(12)</span></label>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <div class="custom-checkbox">--}}
{{--                                            <input type="checkbox" id="chb29">--}}
{{--                                            <label for="chb29" class="primary-color">Practice Tests<span class="ml-2 font-size-14 primary-color-3">(200)</span></label>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div><!-- end sidebar-widget -->--}}
                        </div>
                    </div><!-- end col-lg-4 -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-navigation-wrap text-center mt-5">
                            <div class="page-navigation-inner d-inline-block">
                                <div class="page-navigation mx-auto">
                                    <a href="course-grid.html#" class="page-go page-prev">
                                        <i class="fas fa-chevron-circle-left"></i>
                                    </a>
                                    <ul class="page-navigation-nav">
                                        <li><a href="/course-grid.html" class="page-go-link">1</a></li>
                                        <li class="active"><a href="/course-grid" class="page-go-link">2</a></li>
                                        <li><a href="/course-grid" class="page-go-link">3</a></li>
                                        <li><a href="/course-grid" class="page-go-link">4</a></li>
                                        <li><a href="/course-grid" class="page-go-link">5</a></li>
                                    </ul>
                                    <a href="course-grid.html#" class="page-go page-next">
                                        <i class="fas fa-chevron-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div><!-- end page-navigation-wrap -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end card-content-wrapper -->
        </div><!-- end container -->
    </div><!-- end course-wrapper -->
</section><!-- end courses-area -->
<!--======================================
        END COURSE AREA
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
{{--                    By <a href="teacher-detail.html">alex smith</a>--}}
{{--                </p>--}}
{{--                <h3 class="card__title">--}}
{{--                    <a href="course-details">WordPress for Beginners – Master WordPress</a>--}}
{{--                </h3>--}}
{{--                <p class="card__label">--}}
{{--                    <span class="card__label-text mr-1">BESTSELLER</span>--}}
{{--                    <span class="mr-1">in</span><a href="course-grid.html#" class="mr-1">WordPress</a> <span>| Development</span>--}}
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
{{--                    <a href="course-details" class="theme-btn d-block">Preview this course</a>--}}
{{--                </div>--}}
{{--                <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
{{--                    <span class="card__price">$58.00</span>--}}
{{--                    <a href="course-grid.html#" class="text-btn">Add to cart</a>--}}
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
{{--                    By <a href="teacher-detail.html">brad travesy</a>--}}
{{--                </p>--}}
{{--                <h3 class="card__title">--}}
{{--                    <a href="course-details">Learn Ethical Hacking from Scratch Your Stepping</a>--}}
{{--                </h3>--}}
{{--                <p class="card__label">--}}
{{--                    <span class="card__label-text mr-1">BESTSELLER</span>--}}
{{--                    <span class="mr-1">in</span><a href="course-grid.html#" class="mr-1">Hacking</a> <span>| Development</span>--}}
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
{{--                    <a href="course-details" class="theme-btn d-block">Preview this course</a>--}}
{{--                </div>--}}
{{--                <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
{{--                    <span class="card__price">Free</span>--}}
{{--                    <a href="course-grid.html#" class="text-btn">get enrolled</a>--}}
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
{{--                    By <a href="teacher-detail.html">mark hardson</a>--}}
{{--                </p>--}}
{{--                <h3 class="card__title">--}}
{{--                    <a href="course-details">Microsoft SQL Server 2019 for Everyone</a>--}}
{{--                </h3>--}}
{{--                <p class="card__label">--}}
{{--                    <span class="card__label-text mr-1">BESTSELLER</span>--}}
{{--                    <span class="mr-1">in</span><a href="course-grid.html#" class="mr-1">SQL</a> <span>| Development</span>--}}
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
{{--                    <a href="course-details" class="theme-btn d-block">Preview this course</a>--}}
{{--                </div>--}}
{{--                <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
{{--                    <span class="card__price">$68.00</span>--}}
{{--                    <a href="course-grid.html#" class="text-btn">add to cart</a>--}}
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
{{--                    By <a href="teacher-detail.html">Kamran Paul</a>--}}
{{--                </p>--}}
{{--                <h3 class="card__title">--}}
{{--                    <a href="course-details">User Experience Design - Adobe XD UI UX Design</a>--}}
{{--                </h3>--}}
{{--                <p class="card__label">--}}
{{--                    <span class="card__label-text mr-1">BESTSELLER</span>--}}
{{--                    <span class="mr-1">in</span><a href="course-grid.html#" class="mr-1">Design</a> <span>| Development</span>--}}
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
{{--                    <a href="course-details" class="theme-btn d-block">Preview this course</a>--}}
{{--                </div>--}}
{{--                <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
{{--                    <span class="card__price">Free</span>--}}
{{--                    <a href="course-grid.html#" class="text-btn">Get Enrolled</a>--}}
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
{{--                    By <a href="teacher-detail.html">Jose Purtila</a>--}}
{{--                </p>--}}
{{--                <h3 class="card__title">--}}
{{--                    <a href="course-details">The Complete Digital finance Marketing Course</a>--}}
{{--                </h3>--}}
{{--                <p class="card__label">--}}
{{--                    <span class="card__label-text mr-1">BESTSELLER</span>--}}
{{--                    <span class="mr-1">in</span><a href="course-grid.html#" class="mr-1">Marketing</a> <span>| Development</span>--}}
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
{{--                    <a href="course-details" class="theme-btn d-block">Preview this course</a>--}}
{{--                </div>--}}
{{--                <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
{{--                    <span class="card__price"><span class="before-price">$189.00</span> $119.00</span>--}}
{{--                    <a href="course-grid.html#" class="text-btn">Add to cart</a>--}}
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
{{--                    By <a href="teacher-detail.html">Noelle Travesy</a>--}}
{{--                </p>--}}
{{--                <h3 class="card__title">--}}
{{--                    <a href="course-details">Complete Python Bootcamp: Go from zero to hero</a>--}}
{{--                </h3>--}}
{{--                <p class="card__label">--}}
{{--                    <span class="card__label-text mr-1">BESTSELLER</span>--}}
{{--                    <span class="mr-1">in</span><a href="course-grid.html#" class="mr-1">Python</a> <span>| Development</span>--}}
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
{{--                    <a href="course-details" class="theme-btn d-block">Preview this course</a>--}}
{{--                </div>--}}
{{--                <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
{{--                    <span class="card__price">$68.00</span>--}}
{{--                    <a href="course-grid.html#" class="text-btn">add to cart</a>--}}
{{--                </div><!-- end card-price-wrap -->--}}
{{--            </div><!-- end card-content -->--}}
{{--        </div><!-- end card-item -->--}}
{{--    </div>--}}
{{--</div><!-- end tooltip_templates -->--}}


<!-- template js files -->
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

@endsection

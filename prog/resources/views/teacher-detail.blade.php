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
<section class="breadcrumb-area instructor-breadcrumb-area text-left">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content instructor-bread-content d-flex align-items-center">
                    <div class="bread-img-wrap flex-shrink-0">
                        <img src="/images/team10.jpg" alt="">
                    </div>
                    <div class="section-heading">
                        <h2 class="section__title font-size-30">Mark Hardson</h2>
                        <p class="section__desc font-size-16 mb-1">Joined 4 years ago</p>
                        <p class="section__desc font-size-16 mb-0">Digital Marketer And Writer. Lover Of Details.</p>
                    </div>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!--======================================
        START SPEAKER AREA
======================================-->
<section class="team-detail-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="team-single-img">
                    <img src="/images/instructor-img.jpg" alt="team image" class="team__img">
                </div><!-- end team-single-img -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-8">
                <div class="team-single-wrap">
                    <div class="team-single-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="team-single-item">
                                    <h3 class="widget-title pb-3 font-size-20">Areas of Expertise</h3>
                                    <ul class="list-items">
                                        <li>Business transformation</li>
                                        <li>Restructuring and turnaround</li>
                                        <li>Integration</li>
                                        <li>Growth strategy</li>
                                    </ul>
                                </div><!-- end team-single-item -->
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="team-single-item">
                                    <h3 class="widget-title pb-3 font-size-20">Education</h3>
                                    <ul class="list-items">
                                        <li>MBA, Rotterdam School of Management, Erasmus University</li>
                                        <li>BS, engineering, Technical University of Denmark</li>
                                    </ul>
                                </div><!-- end team-single-item -->
                            </div><!-- end col-lg-6 -->
                        </div><!-- end row-->
                    </div>
                    <div class="team-single-content padding-top-35px">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="team-single-item">
                                    <ul class="address-list">
                                        <li><a href="tel:+123-456-0975"><i class="la la-phone"></i> +123-456-0975</a></li>
                                        <li><a href="mailto:example@gmail.com"><i class="la la-envelope-o"></i>example@gmail.com</a></li>
                                        <li><a href="teacher-detail.html#"><i class="la la-link"></i>www.techydevs.com</a></li>
                                    </ul>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="team-single-item">
                                    <ul class="address-list">
                                        <li><a href="teacher-detail.html#"><i class="fa fa-facebook"></i> Facebook</a></li>
                                        <li><a href="teacher-detail.html#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                        <li><a href="teacher-detail.html#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                    </ul>
                                </div>
                            </div><!-- end col-lg-6 -->
                        </div><!-- end row-->
                    </div>
                    <div class="team-single-content padding-top-35px text-center">
                        <div class="row">
                            <div class="col-lg-4 column-td-half">
                                <div class="team-single-item">
                                    <h3 class="widget-title font-size-20 mb-3 widget-title-tooltip"><i class="la la-users"></i> Total Students</h3>
                                   <p class="number-count">
                                       <span class="counter">1867801</span>
                                   </p>
                                </div><!-- end team-single-item -->
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 column-td-half">
                                <div class="team-single-item">
                                    <h3 class="widget-title font-size-20 mb-3 widget-title-tooltip"><i class="la la-file-video-o"></i>Courses</h3>
                                    <p class="number-count">
                                        <span class="counter">35</span>
                                    </p>
                                </div><!-- end team-single-item -->
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 column-td-half">
                                <div class="team-single-item">
                                    <h3 class="widget-title font-size-20 mb-3 widget-title-tooltip"><i class="la la-star"></i>Reviews</h3>
                                    <p class="number-count">
                                        <span class="counter">359790</span>
                                    </p>
                                </div><!-- end team-single-item -->
                            </div><!-- end col-lg-4 -->
                        </div><!-- end row-->
                    </div>
                </div><!-- end team-single-wrap -->
            </div><!-- end col-lg-8 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="about-tab-wrap padding-top-20px">
                    <div class="section-tab padding-bottom-30px">
                        <ul class="nav nav-tabs" role="tablist" id="review">
                            <li role="presentation">
                                <a href="teacher-detail.html#about-me" role="tab" data-toggle="tab" class="theme-btn active" aria-selected="true">
                                    About me
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="teacher-detail.html#experience" role="tab" data-toggle="tab" class="theme-btn" aria-selected="false">
                                    Experience
                                </a>
                            </li>
                        </ul>
                    </div><!-- end section-tab -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="about-me">
                            <div class="pane-body">
                                <p class="pb-3">
                                    There are many variations of passages of Lorem Ipsum available,
                                    but the majority have suffered alteration in some form, by injected humour,
                                    or randomised words which don't look even slightly believable.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab corporis est
                                    fugiat ipsa laboriosam laudantium possimus quo? Aperiam architecto
                                    laborum provident rerum, totam ullam! Accusantium eius eum perferendis quasi, repellendus
                                    suscipit voluptate voluptatem! Delectus dolorem maxime nulla numquam quasi quod.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque ipsa magnam,
                                    magni nobis quam ratione reiciendis totam? Accusantium aliquam aspernatur, assumenda
                                    cupiditate deleniti eius, ex fuga iusto minus,
                                    nihil perspiciatis porro provident quasi soluta ut! Consequuntur earum eos magnam?
                                </p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="experience">
                            <div class="pane-body">
                                <p>
                                    There are many variations of passages of Lorem Ipsum available,
                                    but the majority have suffered alteration in some form, by injected humour,
                                    or randomised words which don't look even slightly believable.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    cupiditate deleniti eius, ex fuga iusto minus,
                                    nihil perspiciatis porro provident quasi soluta ut! Consequuntur earum eos magnam?
                                </p>
                                <div class="skills-wrap padding-top-30px">
                                    <div class="skills">
                                        <div class="skill">
                                            <span class="widget-title">Consultancy</span>
                                            <span>96%</span>
                                            <div class="progress_bg">
                                                <div class="progress_bar"></div>
                                            </div>
                                        </div>
                                        <div class="skill">
                                            <span class="widget-title">Marketing</span>
                                            <span>86%</span>
                                            <div class="progress_bg">
                                                <div class="progress_bar"></div>
                                            </div>
                                        </div>
                                        <div class="skill">
                                            <span class="widget-title">Technology</span>
                                            <span>76%</span>
                                            <div class="progress_bg">
                                                <div class="progress_bar"></div>
                                            </div>
                                        </div>
                                    </div><!-- end skills-->
                                </div>
                            </div>
                        </div>
                    </div><!-- end tab-content -->
                </div><!-- end about-tab-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="instructor-all-course padding-top-60px">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="widget-title pb-3">Courses Taught by Mark Hardson</h3>
                    <div class="section-block"></div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row mt-5">
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
                                <a href="teacher-detail.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
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
                                <a href="teacher-detail.html#" class="text-btn">Add to cart</a>
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
                                <a href="teacher-detail.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
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
                                <a href="teacher-detail.html#" class="text-btn">Get Enrolled</a>
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
                                <a href="teacher-detail.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
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
                                <a href="teacher-detail.html#" class="text-btn">Add to cart</a>
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
                                <a href="teacher-detail.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
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
                                <a href="teacher-detail.html#" class="text-btn">Get Enrolled</a>
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
                                <a href="teacher-detail.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
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
                                <a href="teacher-detail.html#" class="text-btn">Add to cart</a>
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
                                <a href="teacher-detail.html#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>
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
                                <a href="teacher-detail.html#" class="text-btn">Add to cart</a>
                            </div><!-- end card-price-wrap -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                </div><!-- end col-lg-4 -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="page-navigation-wrap mt-4 text-center">
                    <div class="page-navigation-inner d-inline-block">
                        <div class="page-navigation mx-auto">
                            <a href="teacher-detail.html#" class="page-go page-prev">
                                <i class="la la-arrow-left"></i>
                            </a>
                            <ul class="page-navigation-nav">
                                <li><a href="teacher-detail.html#" class="page-go-link">1</a></li>
                                <li class="active"><a href="teacher-detail.html#" class="page-go-link">2</a></li>
                                <li><a href="teacher-detail.html#" class="page-go-link">3</a></li>
                                <li><a href="teacher-detail.html#" class="page-go-link">4</a></li>
                                <li><a href="teacher-detail.html#" class="page-go-link">5</a></li>
                            </ul>
                            <a href="teacher-detail.html#" class="page-go page-next">
                                <i class="la la-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- end page-navigation-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end team-detail-area -->
<!--======================================
        END SPEAKER AREA
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
                    <span class="mr-1">in</span><a href="teacher-detail.html#" class="mr-1">WordPress</a> <span>| Development</span>
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
                    <a href="teacher-detail.html#" class="text-btn">Add to cart</a>
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
                    <span class="mr-1">in</span><a href="teacher-detail.html#" class="mr-1">Hacking</a> <span>| Development</span>
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
                    <a href="teacher-detail.html#" class="text-btn">get enrolled</a>
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
                    <span class="mr-1">in</span><a href="teacher-detail.html#" class="mr-1">SQL</a> <span>| Development</span>
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
                    <a href="teacher-detail.html#" class="text-btn">add to cart</a>
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
                    <span class="mr-1">in</span><a href="teacher-detail.html#" class="mr-1">Design</a> <span>| Development</span>
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
                    <a href="teacher-detail.html#" class="text-btn">Get Enrolled</a>
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
                    <span class="mr-1">in</span><a href="teacher-detail.html#" class="mr-1">Marketing</a> <span>| Development</span>
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
                    <a href="teacher-detail.html#" class="text-btn">Add to cart</a>
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
                    <span class="mr-1">in</span><a href="teacher-detail.html#" class="mr-1">Python</a> <span>| Development</span>
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
                    <a href="teacher-detail.html#" class="text-btn">add to cart</a>
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
<script src="/js/fancybox.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/smooth-scrolling.js"></script>
<script src="/js/tooltipster.bundle.min.js"></script>
<script src="/js/date-time-picker.js"></script>
<script src="/js/jquery.filer.min.js"></script>
<script src="/js/animated-skills.js"></script>
<script src="/js/main.js"></script>
@endsection

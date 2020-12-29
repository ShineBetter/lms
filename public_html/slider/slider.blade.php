<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <title>slider</title>
    <style>
        @media (min-width: 768px) {
            /* show 3 items */
            .carousel-inner .active,
            .carousel-inner .active + .carousel-item,
            .carousel-inner .active + .carousel-item + .carousel-item {
                display: block;
            }

            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
                transition: none;
            }

            .carousel-inner .carousel-item-next,
            .carousel-inner .carousel-item-prev {
                position: relative;
                transform: translate3d(0, 0, 0);
            }

            .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: absolute;
                top: 0;
                right: -33.3333%;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* left or forward direction */
            .active.carousel-item-left + .carousel-item-next.carousel-item-left,
            .carousel-item-next.carousel-item-left + .carousel-item,
            .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
            .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }

            /* farthest right hidden item must be abso position for animations */
            .carousel-inner .carousel-item-prev.carousel-item-right {
                position: absolute;
                top: 0;
                left: 0;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* right or prev direction */
            .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
            .carousel-item-prev.carousel-item-right + .carousel-item,
            .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
            .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(100%, 0, 0);
                visibility: visible;
                display: block;
                visibility: visible;
            }
        }

    </style>
</head>
<body>
<div class="container-fluid">
    <h1 class="text-center mb-3">Bootstrap Multi-Card Carousel</h1>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner row w-100 mx-auto">
            <div class="carousel-item col-md-4 active">
                <div class="card">
                    <div class="card">
                        <!--                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">-->
                        <div class="card-image">
                            <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">highest rated</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                <!-- end card-image -->
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-4">
                <div class="card">
                    <div class="card">
                        <!--                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">-->
                        <div class="card-image">
                            <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">highest rated</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                <!-- end card-image -->
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-4">
                <div class="card">
                    <div class="card">
                        <!--                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">-->
                        <div class="card-image">
                            <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">highest rated</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                <!-- end card-image -->
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-4">
                <div class="card">
                    <div class="card">
                        <!--                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">-->
                        <div class="card-image">
                            <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">highest rated</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                <!-- end card-image -->
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-4">
                <div class="card">
                    <div class="card">
                        <!--                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">-->
                        <div class="card-image">
                            <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">highest rated</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                <!-- end card-image -->
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-4">
                <div class="card">
                    <div class="card">
                        <!--                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">-->
                        <div class="card-image">
                            <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">highest rated</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                <!-- end card-image -->
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-4">
                <div class="card">
                    <div class="card">
                        <!--                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">-->
                        <div class="card-image">
                            <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">highest rated</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                <!-- end card-image -->
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-4">
                <div class="card">
                    <div class="card">
                        <!--                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">-->
                        <div class="card-image">
                            <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">highest rated</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                <!-- end card-image -->
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-4">
                <div class="card">
<!--                    <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">-->
                    <div class="card-image">
                        <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>
                        <div class="card-badge">
                            <span class="badge-label">highest rated</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-item card-preview" data-tooltip-content="#tooltip_content_5">
                           <!-- end card-image -->
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
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>

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

</body>
</html>


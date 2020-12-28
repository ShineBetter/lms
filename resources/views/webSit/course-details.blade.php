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
    <section class="breadcrumb-area breadcrumb-detail-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content breadcrumb-detail-content">
                        <div class="section-heading">
                            <span class="badge-label">دوره ها</span>
                            <h2 class="section__title mt-1">آموزشپگاه میربلند موفق ترین اموزشگاه در تهران</h2>
                            <h4 class="widget-title mt-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</h4>
                        </div>
                        {{--                    <ul class="breadcrumb__list mt-2">--}}
                        {{--                        <li>Created by <a href="teacher-detail.html">Mark Hardson</a></li>--}}
                        {{--                        <li>--}}
                        {{--                            <i class="fas fa-star"></i>--}}
                        {{--                            <i class="fas fa-star"></i>--}}
                        {{--                            <i class="fas fa-star"></i>--}}
                        {{--                            <i class="fas fa-star"></i>--}}
                        {{--                            <i class="fas fa-star-half-o"></i>--}}
                        {{--                            4.5 (173,750 ratings)--}}
                        {{--                        </li>--}}
                        {{--                        <li>739,333 Students enrolled</li>--}}
                        {{--                        <li><i class="fas fa-globe"></i> English</li>--}}
                        {{--                        <li>Last updated 2 July, 2019</li>--}}
                        {{--                    </ul>--}}
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end breadcrumb-area -->
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->

    <!--======================================
            START COURSE DETAIL
    ======================================-->
    <section class="course-detail margin-bottom-110px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="course-detail-content-wrap margin-top-100px">
                        <div class="post-overview-card margin-bottom-50px">
                            <h3 class="widget-title">سوالات شما درباره دوره و ازمون ها؟</h3>
                            <ul class="list-items mt-3">
                                <li><i class="fas fa-check-circle"></i> لورم ایپسوم متن ساختگی؟</li>
                                <li><i class="fas fa-check-circle"></i> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</li>
                                <li><i class="fas fa-check-circle"></i> لورم ایپسوم متن ساختگیلورم ایپسوم متن؟</li>
                                <li><i class="fas fa-check-circle"></i> ازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </li>
                                <li><i class="fas fa-check-circle"></i> لورم ایپسوم  متن ساختگیمتن ساختگی ؟</li>
                                <li><i class="fas fa-check-circle"></i> طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد</li>
                                <li><i class="fas fa-check-circle"></i>متن ساختگی؟</li>
                                <li><i class="fas fa-check-circle"></i> استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه</li>
                            </ul>
                        </div><!-- end post-overview-card -->
                        <!-- end requirement-wrap -->
                        <!-- end curriculum-wrap -->
                        <div class="section-block"></div>

                        <div class="section-block"></div>
                        <div class="instructor-wrap padding-top-50px padding-bottom-45px">
                            <h3 class="widget-title">About the instructor</h3>
                            <div class="instructor-content margin-top-30px d-flex">
                                <div class="instructor-img">
                                    <a href="teacher-detail.html" class="instructor__avatar">
                                        <img src="/images/team7.jpg" alt="">
                                    </a>
                                    <ul class="list-items">
                                        <li><span class="fas fa-star"></span> 4.6 Instructor Rating</li>
                                        <li><span class="fas fa-user"></span> 45,786 Students</li>
                                        <li><span class="fas fa-comment-o"></span> 2,533 Reviews</li>
                                        <li><span class="fas fa-play-circle-o"></span> 24 Courses</li>
                                        <li><span class="fas fa-eye"></span><a href="teacher-detail.html"> View all Courses</a></li>
                                    </ul>
                                </div><!-- end instructor-img -->
                                <div class="instructor-details">
                                    <div class="instructor-titles">
                                        <h3 class="widget-title"><a href="teacher-detail.html">Mark Hardson</a></h3>
                                        <p class="instructor__subtitle">Joined 4 years ago</p>
                                        <p class="instructor__meta">Digital marketer and writer. Lover of details.</p>
                                    </div><!-- end instructor-titles -->
                                    <div class="instructor-desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                        <div class="collapse" id="show-more-content">
                                            <p> <strong>01: Finance</strong> - It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <p> <strong>01: Data science</strong> - It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <p> <strong>01: Entrepreneurship</strong> - It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <p> <strong>01: Blockchain for Business</strong> - It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <p>By choosing 365 Careers, you make sure you will learn from proven experts, who have a passion for teaching, and can take you from beginner to pro in the shortest possible amount of time.  </p>
                                            <p>If you want to become a financial analyst, a finance manager, an FP&A analyst, an investment banker, a business executive, an entrepreneur, a business intelligence analyst, a data analyst, or a data scientist, <strong>Mark Hardson's courses are the perfect course to start.</strong> </p>
                                        </div>
                                        <div class="btn-box pt-2 d-inline-block">
                                            <a class="collapsed link-collapsed" data-toggle="collapse" href="course-details.blade.php#show-more-content" role="button" aria-expanded="false" aria-controls="show-more-content">
                                                <span class="link-collapse-read-more">Read more</span>
                                                <span class="link-collapse-active">Read less</span>
                                                <div class="ml-1">
                                                    <i class="fas fa-plus"></i>
                                                    <i class="fas fa-minus"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div><!-- end instructor-desc -->
                                </div><!-- end instructor-details -->
                            </div><!-- end instructor-content -->
                        </div><!-- end instructor-wrap -->
                        <div class="review-wrap">
                            <h3 class="widget-title">Student feedback</h3>
                            <div class="review-content margin-top-40px margin-bottom-50px d-flex">
                                <div class="review-rating-summary">
                                    <div class="review-rating-summary-inner d-flex align-items-end">
                                        <div class="stats-average__count">
                                            <span class="stats-average__count-count">4.6</span>
                                        </div><!-- end stats-average__count -->
                                        <div class="stats-average__rating d-flex">
                                            <ul class="review-stars d-flex">
                                                <li><span class="fas fa-star"></span></li>
                                                <li><span class="fas fa-star"></span></li>
                                                <li><span class="fas fa-star"></span></li>
                                                <li><span class="fas fa-star"></span></li>
                                                <li><span class="fas fa-star-o"></span></li>
                                            </ul>
                                            <span class="star-rating-wrap">
                                            <span class="star__rating">(2,533)</span>
                                        </span>
                                        </div><!-- end stats-average__rating -->
                                    </div><!-- end review-rating-summary-inner -->
                                    <div class="course-rating-text">
                                        <p class="course-rating-text__text">Course Rating</p>
                                    </div><!-- end course-rating-text -->
                                </div><!-- end review-rating-summary -->
                                <div class="review-rating-widget">
                                    <div class="review-rating-rate">
                                        <ul>
                                            <li class="review-rating-rate__items">
                                                <div class="review-rating-inner__item">
                                                    <div class="review-rating-rate__item-text">5 stars</div>
                                                    <div class="review-rating-rate__item-fill">
                                                        <span class="review-rating-rate_item-fill_fill rating-fill-width1"></span>
                                                    </div>
                                                    <div class="review-rating-rate__item-percent-text">77 %</div>
                                                </div>
                                            </li>
                                            <li class="review-rating-rate__items">
                                                <div class="review-rating-inner__item">
                                                    <div class="review-rating-rate__item-text">4 stars</div>
                                                    <div class="review-rating-rate__item-fill">
                                                        <span class="review-rating-rate_item-fill_fill rating-fill-width2"></span>
                                                    </div>
                                                    <div class="review-rating-rate__item-percent-text">54 %</div>
                                                </div>
                                            </li>
                                            <li class="review-rating-rate__items">
                                                <div class="review-rating-inner__item">
                                                    <div class="review-rating-rate__item-text">3 stars</div>
                                                    <div class="review-rating-rate__item-fill">
                                                        <span class="review-rating-rate_item-fill_fill rating-fill-width3"></span>
                                                    </div>
                                                    <div class="review-rating-rate__item-percent-text">14 %</div>
                                                </div>
                                            </li>
                                            <li class="review-rating-rate__items">
                                                <div class="review-rating-inner__item">
                                                    <div class="review-rating-rate__item-text">2 stars</div>
                                                    <div class="review-rating-rate__item-fill">
                                                        <span class="review-rating-rate_item-fill_fill rating-fill-width4"></span>
                                                    </div>
                                                    <div class="review-rating-rate__item-percent-text">5 %</div>
                                                </div>
                                            </li>
                                            <li class="review-rating-rate__items">
                                                <div class="review-rating-inner__item">
                                                    <div class="review-rating-rate__item-text">1 stars</div>
                                                    <div class="review-rating-rate__item-fill">
                                                        <span class="review-rating-rate_item-fill_fill rating-fill-width5"></span>
                                                    </div>
                                                    <div class="review-rating-rate__item-percent-text">2 %</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- end review-rating-rate -->
                                </div><!-- end review-rating-widget -->
                            </div><!-- end review-content -->
                            <div class="section-block"></div>
                            <div class="comments-wrapper margin-top-50px">
                                <h3 class="widget-title"> Reviews</h3>
                                <ul class="comments-list padding-top-30px">
                                    <li>
                                        <div class="comment">
                                            <div class="comment-avatar">
                                                <img class="avatar__img" alt="" src="/images/team7.jpg">
                                            </div>
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <h3 class="comment__author">adam smith</h3>
                                                    <p class="comment__date">17 Dec, 2018 - 4:00 pm</p>
                                                    <ul class="review-stars review-stars1">
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                    </ul>
                                                </div>
                                                <p class="comment-content">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Ut enim ad minim veniam, quis nostrud exercitation.
                                                </p>
                                                <div class="comment-reply">
                                                    <a class="theme-btn" href="course-details.blade.php#" data-toggle="modal" data-target=".modal-action-form">
                                                        <span class="fas fa-mail-reply"></span> Reply
                                                    </a>
                                                    <div class="helpful__action d-flex align-items-center">
                                                        <span class="helpful__action-text">Was this review helpful?</span>
                                                        <button class="btn">Yes</button>
                                                        <button class="btn">No</button>
                                                        <div class="msg-action-dot">
                                                            <div class="dropdown">
                                                                <a class="action-dot" href="course-details.blade.php#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                </a>
                                                                <div class="dropdown-menu border" aria-labelledby="dropdownMenuLink">
                                                                    <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target=".report-modal-form"><i class="fas fa-flag mr-2"></i>Report abuse</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end comment -->
                                        <ul class="comments-reply">
                                            <li>
                                                <div class="comment">
                                                    <div class="comment-avatar">
                                                        <img class="avatar__img" alt="" src="/images/team8.jpg">
                                                    </div>
                                                    <div class="comment-body">
                                                        <div class="meta-data">
                                                            <h3 class="comment__author">Jhon doe</h3>
                                                            <p class="comment__date">17 Dec, 2018 - 4:00 pm</p>
                                                            <ul class="review-stars review-stars2">
                                                                <li><span class="fas fa-star"></span></li>
                                                                <li><span class="fas fa-star"></span></li>
                                                                <li><span class="fas fa-star"></span></li>
                                                                <li><span class="fas fa-star"></span></li>
                                                                <li><span class="fas fa-star"></span></li>
                                                            </ul>
                                                        </div>
                                                        <p class="comment-content">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                            Ut enim ad minim veniam.
                                                        </p>
                                                        <div class="comment-reply">
                                                            <a class="theme-btn" href="course-details.blade.php#" data-toggle="modal" data-target=".modal-action-form">
                                                                <span class="fas fa-mail-reply"></span> Reply
                                                            </a>
                                                            <div class="helpful__action d-flex align-items-center">
                                                                <span class="helpful__action-text">Was this review helpful?</span>
                                                                <button class="btn">Yes</button>
                                                                <button class="btn">No</button>
                                                                <div class="msg-action-dot">
                                                                    <div class="dropdown">
                                                                        <a class="action-dot" href="course-details.blade.php#" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="fas fa-ellipsis-v"></i>
                                                                        </a>
                                                                        <div class="dropdown-menu border" aria-labelledby="dropdownMenuLink2">
                                                                            <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target=".report-modal-form"><i class="fas fa-flag mr-2"></i>Report abuse</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul><!-- end comment -->
                                        <div class="comment">
                                            <div class="comment-avatar">
                                                <img class="avatar__img" alt="" src="/images/team9.jpg">
                                            </div>
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <h3 class="comment__author">Mike Doe</h3>
                                                    <p class="comment__date">17 Dec, 2018 - 4:00 pm</p>
                                                    <ul class="review-stars review-stars3">
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                        <li><span class="fas fa-star"></span></li>
                                                    </ul>
                                                </div>
                                                <p class="comment-content">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Ut enim ad minim veniam, quis nostrud exercitation.
                                                </p>
                                                <div class="comment-reply">
                                                    <a class="theme-btn" href="course-details.blade.php#" data-toggle="modal" data-target=".modal-action-form">
                                                        <span class="fas fa-mail-reply"></span> Reply
                                                    </a>
                                                    <div class="helpful__action d-flex align-items-center">
                                                        <span class="helpful__action-text">Was this review helpful?</span>
                                                        <button class="btn">Yes</button>
                                                        <button class="btn">No</button>
                                                        <div class="msg-action-dot">
                                                            <div class="dropdown">
                                                                <a class="action-dot" href="course-details.blade.php#" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v"></i>
                                                                </a>
                                                                <div class="dropdown-menu border" aria-labelledby="dropdownMenuLink3">
                                                                    <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target=".report-modal-form"><i class="fas fa-flag mr-2"></i>Report abuse</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end comment -->
                                    </li>
                                </ul>
                                <div class="see-more-review-btn margin-bottom-50px">
                                    <div class="btn-box text-center">
                                        <button type="button" class="theme-btn theme-btn-light">load more reviews</button>
                                    </div><!-- end btn-box -->
                                </div>
                                <div class="review-form">
                                    <h3 class="widget-title">Add a Review</h3>
                                    <div class="rating-wrap mt-4">
                                        <div class="rating-shared rating-shared-box d-inline-block">
                                            <fieldset>
                                                <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 Star"></label>
                                                <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 Star"></label>
                                                <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 Star"></label>
                                                <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 Star"></label>
                                                <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 Star"></label>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="contact-form-action margin-top-35px">
                                        <form method="post">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="input-box">
                                                        <label class="label-text">Name<span class="primary-color-2 ml-1">*</span></label>
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="name" placeholder="Your name">
                                                            <i class="fas fa-user input-icon"></i>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="col-lg-6">
                                                    <div class="input-box">
                                                        <label class="label-text">Email<span class="primary-color-2 ml-1">*</span></label>
                                                        <div class="form-group">
                                                            <input class="form-control" type="email" name="email" placeholder="Email address">
                                                            <i class="fas fa-envelope-o input-icon"></i>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                                <div class="col-lg-12">
                                                    <div class="input-box">
                                                        <label class="label-text">Message<span class="primary-color-2 ml-1">*</span></label>
                                                        <div class="form-group">
                                                            <textarea class="message-control form-control" name="message" placeholder="Write message"></textarea>
                                                            <i class="fas fa-pencil input-icon"></i>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <div class="custom-checkbox">
                                                            <input type="checkbox" id="chb1">
                                                            <label for="chb1">Save my name, and email in this browser for the next time I comment.</label>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                                <div class="col-lg-12">
                                                    <div class="btn-box">
                                                        <button class="theme-btn" type="submit">submit review</button>
                                                    </div>
                                                </div><!-- end col-md-12 -->
                                            </div><!-- end row -->
                                        </form>
                                    </div><!-- end contact-form-action -->
                                </div><!-- end review-form -->
                            </div><!-- end comments-wrapper -->
                        </div><!-- end review-wrap -->
                        {{--                    <div class="view-more-courses mt-5">--}}
                        {{--                        <h3 class="widget-title">More Courses by Mark hardson</h3>--}}
                        {{--                        <div class="view-more-carousel margin-top-30px margin-bottom-50px">--}}
                        {{--                            <div class="card-item">--}}
                        {{--                                <div class="card-image">--}}
                        {{--                                    <a href="course-details.blade.php" class="card__img"><img src="/images/img8.jpg" alt=""></a>--}}
                        {{--                                    <div class="card-badge">--}}
                        {{--                                        <span class="badge-label">bestseller</span>--}}
                        {{--                                    </div>--}}
                        {{--                                </div><!-- end card-image -->--}}
                        {{--                                <div class="card-content">--}}
                        {{--                                    <p class="card__label">--}}
                        {{--                                        <span class="card__label-text">beginner</span>--}}
                        {{--                                        <a href="course-details.blade.php#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fas fa-heart-o"></span></a>--}}
                        {{--                                    </p>--}}
                        {{--                                    <h3 class="card__title">--}}
                        {{--                                        <a href="course-details.blade.php">WordPress for Beginners – Master WordPress</a>--}}
                        {{--                                    </h3>--}}
                        {{--                                    <p class="card__author">--}}
                        {{--                                        <a href="teacher-detail.html">alex smith</a>--}}
                        {{--                                    </p>--}}
                        {{--                                    <div class="rating-wrap d-flex mt-2 mb-3">--}}
                        {{--                                        <ul class="review-stars">--}}
                        {{--                                            <li><span class="fas fa-star"></span></li>--}}
                        {{--                                            <li><span class="fas fa-star"></span></li>--}}
                        {{--                                            <li><span class="la la-star"></span></li>--}}
                        {{--                                            <li><span class="la la-star"></span></li>--}}
                        {{--                                            <li><span class="la la-star-o"></span></li>--}}
                        {{--                                        </ul>--}}
                        {{--                                        <span class="star-rating-wrap">--}}
                        {{--                                            <span class="star__rating">4.4</span>--}}
                        {{--                                            <span class="star__count">(20)</span>--}}
                        {{--                                        </span>--}}
                        {{--                                    </div><!-- end rating-wrap -->--}}
                        {{--                                    <div class="card-action">--}}
                        {{--                                        <ul class="card-duration d-flex justify-content-between align-items-center">--}}
                        {{--                                            <li>--}}
                        {{--                                                <span class="meta__date">--}}
                        {{--                                                    <i class="la la-play-circle"></i> 45 Classes--}}
                        {{--                                                </span>--}}
                        {{--                                            </li>--}}
                        {{--                                            <li>--}}
                        {{--                                                <span class="meta__date">--}}
                        {{--                                                    <i class="la la-clock-o"></i> 3 hours 20 min--}}
                        {{--                                                </span>--}}
                        {{--                                            </li>--}}
                        {{--                                        </ul>--}}
                        {{--                                    </div><!-- end card-action -->--}}
                        {{--                                    <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
                        {{--                                        <span class="card__price">$58.00</span>--}}
                        {{--                                        <a href="course-details.blade.php#" class="text-btn">Add to cart</a>--}}
                        {{--                                    </div><!-- end card-price-wrap -->--}}
                        {{--                                </div><!-- end card-content -->--}}
                        {{--                            </div><!-- end card-item -->--}}
                        {{--                            <div class="card-item">--}}
                        {{--                                <div class="card-image">--}}
                        {{--                                    <a href="course-details.blade.php" class="card__img"><img src="/images/img9.jpg" alt=""></a>--}}
                        {{--                                </div><!-- end card-image -->--}}
                        {{--                                <div class="card-content">--}}
                        {{--                                    <p class="card__label">--}}
                        {{--                                        <span class="card__label-text">beginner</span>--}}
                        {{--                                        <a href="course-details.blade.php#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>--}}
                        {{--                                    </p>--}}
                        {{--                                    <h3 class="card__title">--}}
                        {{--                                        <a href="course-details.blade.php">Learn Ethical Hacking from Scratch Your Stepping</a>--}}
                        {{--                                    </h3>--}}
                        {{--                                    <p class="card__author">--}}
                        {{--                                        <a href="teacher-detail.html">brad travesy</a>--}}
                        {{--                                    </p>--}}
                        {{--                                    <div class="rating-wrap d-flex mt-2 mb-3">--}}
                        {{--                                        <ul class="review-stars">--}}
                        {{--                                            <li><span class="la la-star"></span></li>--}}
                        {{--                                            <li><span class="la la-star"></span></li>--}}
                        {{--                                            <li><span class="la la-star"></span></li>--}}
                        {{--                                            <li><span class="la la-star"></span></li>--}}
                        {{--                                            <li><span class="la la-star-o"></span></li>--}}
                        {{--                                        </ul>--}}
                        {{--                                        <span class="star-rating-wrap">--}}
                        {{--                                            <span class="star__rating">4.2</span>--}}
                        {{--                                            <span class="star__count">(30)</span>--}}
                        {{--                                        </span>--}}
                        {{--                                    </div><!-- end rating-wrap -->--}}
                        {{--                                    <div class="card-action">--}}
                        {{--                                        <ul class="card-duration d-flex justify-content-between align-items-center">--}}
                        {{--                                            <li>--}}
                        {{--                                                <span class="meta__date">--}}
                        {{--                                                    <i class="la la-play-circle"></i> 45 Classes--}}
                        {{--                                                </span>--}}
                        {{--                                            </li>--}}
                        {{--                                            <li>--}}
                        {{--                                                <span class="meta__date">--}}
                        {{--                                                    <i class="la la-clock-o"></i> 3 hours 20 min--}}
                        {{--                                                </span>--}}
                        {{--                                            </li>--}}
                        {{--                                        </ul>--}}
                        {{--                                    </div><!-- end card-action -->--}}
                        {{--                                    <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
                        {{--                                        <span class="card__price">Free</span>--}}
                        {{--                                        <a href="course-details.blade.php#" class="text-btn">Get Enrolled</a>--}}
                        {{--                                    </div><!-- end card-price-wrap -->--}}
                        {{--                                </div><!-- end card-content -->--}}
                        {{--                            </div><!-- end card-item -->--}}
                        {{--                            <div class="card-item">--}}
                        {{--                                <div class="card-image">--}}
                        {{--                                    <a href="course-details.blade.php" class="card__img"><img src="/images/img10.jpg" alt=""></a>--}}
                        {{--                                    <div class="card-badge">--}}
                        {{--                                        <span class="badge-label">highest rated</span>--}}
                        {{--                                    </div>--}}
                        {{--                                </div><!-- end card-image -->--}}
                        {{--                                <div class="card-content">--}}
                        {{--                                    <p class="card__label">--}}
                        {{--                                        <span class="card__label-text">advanced</span>--}}
                        {{--                                        <a href="course-details.blade.php#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>--}}
                        {{--                                    </p>--}}
                        {{--                                    <h3 class="card__title">--}}
                        {{--                                        <a href="course-details.blade.php">Microsoft SQL Server 2019 for Everyone</a>--}}
                        {{--                                    </h3>--}}
                        {{--                                    <p class="card__author">--}}
                        {{--                                        <a href="teacher-detail.html">mark hardson</a>--}}
                        {{--                                    </p>--}}
                        {{--                                    <div class="rating-wrap d-flex mt-2 mb-3">--}}
                        {{--                                        <ul class="review-stars">--}}
                        {{--                                            <li><span class="la la-star"></span></li>--}}
                        {{--                                            <li><span class="la la-star"></span></li>--}}
                        {{--                                            <li><span class="la la-star"></span></li>--}}
                        {{--                                            <li><span class="la la-star"></span></li>--}}
                        {{--                                            <li><span class="la la-star-o"></span></li>--}}
                        {{--                                        </ul>--}}
                        {{--                                        <span class="star-rating-wrap">--}}
                        {{--                                            <span class="star__rating">4.5</span>--}}
                        {{--                                            <span class="star__count">(40)</span>--}}
                        {{--                                        </span>--}}
                        {{--                                    </div><!-- end rating-wrap -->--}}
                        {{--                                    <div class="card-action">--}}
                        {{--                                        <ul class="card-duration d-flex justify-content-between align-items-center">--}}
                        {{--                                            <li>--}}
                        {{--                                                <span class="meta__date">--}}
                        {{--                                                    <i class="la la-play-circle"></i> 45 Classes--}}
                        {{--                                                </span>--}}
                        {{--                                            </li>--}}
                        {{--                                            <li>--}}
                        {{--                                                <span class="meta__date">--}}
                        {{--                                                    <i class="la la-clock-o"></i> 3 hours 20 min--}}
                        {{--                                                </span>--}}
                        {{--                                            </li>--}}
                        {{--                                        </ul>--}}
                        {{--                                    </div><!-- end card-action -->--}}
                        {{--                                    <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
                        {{--                                        <span class="card__price">$68.00</span>--}}
                        {{--                                        <a href="course-details.blade.php#" class="text-btn">Add to cart</a>--}}
                        {{--                                    </div><!-- end card-price-wrap -->--}}
                        {{--                                </div><!-- end card-content -->--}}
                        {{--                            </div><!-- end card-item -->--}}
                        {{--                            <div class="card-item">--}}
                        {{--                                <div class="card-image">--}}
                        {{--                                    <a href="course-details.blade.php" class="card__img"><img src="/images/img11.jpg" alt=""></a>--}}
                        {{--                                </div><!-- end card-image -->--}}
                        {{--                                <div class="card-content">--}}
                        {{--                                    <p class="card__label">--}}
                        {{--                                        <span class="card__label-text">all levels</span>--}}
                        {{--                                        <a href="course-details.blade.php#" class="card__collection-icon" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="la la-heart-o"></span></a>--}}
                        {{--                                    </p>--}}
                        {{--                                    <h3 class="card__title">--}}
                        {{--                                        <a href="course-details.blade.php">User Experience Design - Adobe XD UI UX Design</a>--}}
                        {{--                                    </h3>--}}
                        {{--                                    <p class="card__author">--}}
                        {{--                                        <a href="teacher-detail.html">kamran paul</a>--}}
                        {{--                                    </p>--}}
                        {{--                                    <div class="rating-wrap d-flex mt-2 mb-3">--}}
                        {{--                                        <ul class="review-stars">--}}
                        {{--                                            <li><span class="la la-star"></span></li>--}}
                        {{--                                            <li><span class="la la-star"></span></li>--}}
                        {{--                                            <li><span class="la la-star"></span></li>--}}
                        {{--                                            <li><span class="la la-star"></span></li>--}}
                        {{--                                            <li><span class="la la-star-o"></span></li>--}}
                        {{--                                        </ul>--}}
                        {{--                                        <span class="star-rating-wrap">--}}
                        {{--                                            <span class="star__rating">4.4</span>--}}
                        {{--                                            <span class="star__count">(20)</span>--}}
                        {{--                                        </span>--}}
                        {{--                                    </div><!-- end rating-wrap -->--}}
                        {{--                                    <div class="card-action">--}}
                        {{--                                        <ul class="card-duration d-flex justify-content-between align-items-center">--}}
                        {{--                                            <li>--}}
                        {{--                                                <span class="meta__date">--}}
                        {{--                                                    <i class="la la-play-circle"></i> 45 Classes--}}
                        {{--                                                </span>--}}
                        {{--                                            </li>--}}
                        {{--                                            <li>--}}
                        {{--                                                <span class="meta__date">--}}
                        {{--                                                    <i class="la la-clock-o"></i> 3 hours 20 min--}}
                        {{--                                                </span>--}}
                        {{--                                            </li>--}}
                        {{--                                        </ul>--}}
                        {{--                                    </div><!-- end card-action -->--}}
                        {{--                                    <div class="card-price-wrap d-flex justify-content-between align-items-center">--}}
                        {{--                                        <span class="card__price">Free</span>--}}
                        {{--                                        <a href="course-details.blade.php#" class="text-btn">Get Enrolled</a>--}}
                        {{--                                    </div><!-- end card-price-wrap -->--}}
                        {{--                                </div><!-- end card-content -->--}}
                        {{--                            </div><!-- end card-item -->--}}
                        {{--                        </div><!-- end view-more-carousel -->--}}
                        {{--                    </div><!-- end view-more-courses -->--}}
                        <div class="report-modal-box">
                            <button type="button" class="theme-btn theme-btn-light" data-toggle="modal" data-target=".report-modal-form">
                                <i class="fas fa-flag font-size-18 mr-1"></i>Report abuse
                            </button>
                        </div>
                    </div><!-- end course-detail-content-wrap -->
                </div><!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar-component">
                        <div class="sidebar">
                            <div class="sidebar-widget sidebar-preview">
                                <div class="sidebar-preview-titles text-center">
                                    <h3 class="widget-title text-center">نام محصول</h3>
                                    <span class="section-divider"></span>
                                </div>
                                <div class="preview-video-and-details">
                                    <div class="preview-course-video">
                                        <a href="javascript:void(0)" data-toggle="modal" data-target=".preview-modal-form">
                                            <img src="/images/preview-img.jpg" alt="course-img">

                                        </a>
                                    </div>
                                    <div class="preview-course-content">
                                        <p class="preview-course__price d-flex align-items-center">
                                            <span class="price-current">$76.99</span>

                                        </p>

                                        <div class="buy-course-btn mb-3 text-center">
                                            <a href="course-details.blade.php#" class="theme-btn w-100 mb-3">خرید دوره</a>
                                        </div>
    {{--                                    <div class="preview-course-incentives">--}}
    {{--                                        <p class="preview-course-incentives__text mb-4">--}}
    {{--                                            <i class="la la-thumbs-up"></i> 30-Day Money-Back Guarantee--}}
    {{--                                        </p>--}}
    {{--                                        <h3 class="widget-title font-size-18">This course includes</h3>--}}
    {{--                                        <ul class="list-items pb-3">--}}
    {{--                                            <li><i class="la la-play-circle-o"></i>2.5 hours on-demand video</li>--}}
    {{--                                            <li><i class="la la-file"></i>34 articles</li>--}}
    {{--                                            <li><i class="la la-file-text"></i>12 downloadable resources</li>--}}
    {{--                                            <li><i class="la la-key"></i>Full lifetime access</li>--}}
    {{--                                            <li><i class="la la-television"></i>Access on mobile and TV</li>--}}
    {{--                                            <li><i class="la la-certificate"></i>Certificate of Completion</li>--}}
    {{--                                        </ul>--}}
    {{--                                        <div class="section-block"></div>--}}
    {{--                                        <div class="video-content-btn d-flex align-items-center justify-content-between pb-3 pt-3">--}}
    {{--                                            <button class="btn">--}}
    {{--                                                <i class="la la-heart-o mr-1 bookmark-icon"></i>--}}
    {{--                                                <span class="swapping-btn" data-text-swap="Wishlisted" data-text-original="Wishlist">Wishlist</span>--}}
    {{--                                            </button>--}}
    {{--                                            <button class="btn" data-toggle="modal" data-target=".share-modal-form">--}}
    {{--                                                <i class="la la-share mr-1"></i>--}}
    {{--                                                <span>Share</span>--}}
    {{--                                            </button>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="section-block"></div>--}}
    {{--                                        <div class="business-content pt-4">--}}
    {{--                                            <h3 class="widget-title mb-1 font-size-18">Training 5 or more people?</h3>--}}
    {{--                                            <p class="line-height-25 pb-2">Get your team access to 3,000+ top Aduca courses anytime, anywhere.</p>--}}
    {{--                                            <a href="course-details.blade.php#">Try Aduca for Business</a>--}}
    {{--                                        </div>--}}
    {{--                                    </div><!-- end preview-course-incentives -->--}}
    {{--                                </div><!-- end preview-course-content -->--}}
    {{--                            </div><!-- end preview-video-and-details -->--}}
    {{--                        </div><!-- end sidebar-widget -->--}}
    {{--                        <div class="sidebar-widget sidebar-feature">--}}
    {{--                            <h3 class="widget-title">Course Features</h3>--}}
    {{--                            <span class="section-divider"></span>--}}
    {{--                            <ul class="list-items">--}}
    {{--                                <li>--}}
    {{--                                    <span><i class="la la-clock-o"></i>Duration</span>--}}
    {{--                                    <span>2.5 hours</span>--}}
    {{--                                </li>--}}
    {{--                                <li>--}}
    {{--                                    <span><i class="la la-play-circle-o"></i>Lectures</span>--}}
    {{--                                    <span>17</span>--}}
    {{--                                </li>--}}
    {{--                                <li>--}}
    {{--                                    <span><i class="la la-file-text"></i>Resources</span>--}}
    {{--                                    <span>12</span>--}}
    {{--                                </li>--}}
    {{--                                <li>--}}
    {{--                                    <span><i class="la la-puzzle-piece"></i>Quizzes</span>--}}
    {{--                                    <span>26</span>--}}
    {{--                                </li>--}}
    {{--                                <li>--}}
    {{--                                    <span><i class="la la-eye"></i>Preview Lessons</span>--}}
    {{--                                    <span>4</span>--}}
    {{--                                </li>--}}
    {{--                                <li>--}}
    {{--                                    <span> <i class="la la-language"></i>Language</span>--}}
    {{--                                    <span>English</span>--}}
    {{--                                </li>--}}
    {{--                                <li>--}}
    {{--                                    <span><i class="la la-level-up"></i>Skill level</span>--}}
    {{--                                    <span>All levels</span>--}}
    {{--                                </li>--}}
    {{--                                <li>--}}
    {{--                                    <span>  <i class="la la-users"></i>Students</span>--}}
    {{--                                    <span>585</span>--}}
    {{--                                </li>--}}
    {{--                                <li>--}}
    {{--                                    <span><i class="la la-certificate"></i>Certificate</span>--}}
    {{--                                    <span>Yes</span>--}}
    {{--                                </li>--}}
    {{--                            </ul>--}}
    {{--                        </div><!-- end sidebar-widget -->--}}
                                        <div class="sidebar-widget recent-widget">
                                            <h3 class="widget-title">آخرین آزمون ها</h3>
                                            <span class="section-divider"></span>
                                            <div class="recent-item">
                                                <div class="recent-img">
                                                    <a href="#">
                                                        <img src="/images/img19.jpg" alt="blog image">
                                                    </a>
                                                </div><!-- end recent-img -->
                                                <div class="recentpost-body text-right pr-2">
                                    <span class="recent__meta">25فروردین <a href="course-details.blade.php#">
                                            <br>استاد معمولی</a></span>
                                                    <h4 class="recent__link">
                                                        <a href="course-details.blade.php">آزم.ن جامع عربی</a>
                                                    </h4>
                                                    <p class="recent-course__price">30000تومان</p>
                                                </div><!-- end recent-img -->
                                            </div><!-- end recent-item -->
                                            <div class="recent-item">
                                                <div class="recent-img">
                                                    <a href="course-details.blade.php">
                                                        <img src="/images/img20.jpg" alt="blog image">
                                                    </a>
                                                </div><!-- end recent-img -->
                                                <div class="recentpost-body text-right pr-2">
                                    <span class="recent__meta">25فروردین <a href="course-details.blade.php#">
                                            <br>استاد معمولی</a></span>
                                                    <h4 class="recent__link">
                                                        <a href="course-details.blade.php">آزم.ن جامع عربی</a>
                                                    </h4>
                                                    <p class="recent-course__price">30000تومان<span>$70.99</span></p>
                                                </div><!-- end recent-img -->
                                            </div><!-- end recent-item -->
                                            <div class="recent-item">
                                                <div class="recent-img">
                                                    <a href="course-details.blade.php">
                                                        <img src="/images/img21.jpg" alt="blog image">
                                                    </a>
                                                </div><!-- end recent-img -->
                                                <div class="recentpost-body text-right pr-2">
                                    <span class="recent__meta">25فروردین <a href="course-details.blade.php#">
                                            <br>استاد معمولی</a></span>
                                                    <h4 class="recent__link">
                                                        <a href="course-details.blade.php">آزم.ن جامع عربی</a>
                                                    </h4>
                                                    <p class="recent-course__price">Free</p>
                                                </div><!-- end recent-img -->
                                            </div><!-- end recent-item -->
                                            <div class="btn-box text-center">
                                                <a href="course-grid.html" class="theme-btn d-block">همه آزمون ها</a>
                                            </div><!-- end btn-box -->
                                        </div><!-- end sidebar-widget -->
                                        <div class="sidebar-widget tag-widget">
                                            <h3 class="widget-title">برچسب ها</h3>
                                            <span class="section-divider"></span>
                                            <ul class="list-items text-right">
                                                <li><a href="course-details.blade.php#">آزمون انلاین</a></li>
                                                <li><a href="course-details.blade.php#">دوره های اموزشی</a></li>
                                                <li><a href="course-details.blade.php#">دوره هااینترنتی</a></li>
                                                <li><a href="course-details.blade.php#">فروشگاه اینترنتی</a></li>
                                                <li><a href="course-details.blade.php#">آزمون جامع</a></li>
                                                <li><a href="course-details.blade.php#">آموزشگاه میربلند</a></li>
                                                <li><a href="course-details.blade.php#">آموزشگاه مجازی</a></li>
                                                <li><a href="course-details.blade.php#">عربی-زبان-ریاضی آنلاین</a></li>
                                            </ul>
                                        </div><!-- end sidebar-widget -->
                                    </div><!-- end sidebar -->
                                </div><!-- end sidebar-component -->
                            </div><!-- end col-lg-4 -->
                        </div><!-- end row -->
                    </div><!-- end container -->
    </section><!-- end course-detail -->
    <!--======================================
            END COURSE DETAIL
    ======================================-->

    <!--================================
            START GET STAR AREA
    =================================-->
    {{--<div class="subscriber-area call-to-action padding-top-40px padding-bottom-40px">--}}
    {{--    <div class="container">--}}
    {{--        <div class="row align-items-center">--}}
    {{--            <div class="col-lg-8">--}}
    {{--                <div class="call-to-action-heading d-flex align-items-center">--}}
    {{--                    <div class="call-to-action-icon">--}}
    {{--                        <svg viewBox="0 -48 496 496" xmlns="http://www.w3.org/2000/svg"><path d="m472 0h-448c-13.230469 0-24 10.769531-24 24v352c0 13.230469 10.769531 24 24 24h448c13.230469 0 24-10.769531 24-24v-352c0-13.230469-10.769531-24-24-24zm8 376c0 4.414062-3.59375 8-8 8h-448c-4.40625 0-8-3.585938-8-8v-352c0-4.40625 3.59375-8 8-8h448c4.40625 0 8 3.59375 8 8zm0 0"/><path d="m448 32h-400v240h400zm-16 224h-368v-208h368zm0 0"/><path d="m328 200.136719c0-17.761719-11.929688-33.578125-29.007812-38.464844l-26.992188-7.703125v-2.128906c9.96875-7.511719 16-19.328125 16-31.832032v-14.335937c0-21.503906-16.007812-39.726563-36.449219-41.503906-11.183593-.96875-22.34375 2.800781-30.574219 10.351562-8.25 7.550781-12.976562 18.304688-12.976562 29.480469v16c0 12.503906 6.03125 24.328125 16 31.832031v2.128907l-26.992188 7.710937c-17.078124 4.886719-29.007812 20.703125-29.007812 38.464844v39.863281h160zm-16 23.863281h-128v-23.863281c0-10.664063 7.160156-20.152344 17.40625-23.082031l38.59375-11.023438v-23.070312l-3.976562-2.3125c-7.527344-4.382813-12.023438-12.105469-12.023438-20.648438v-16c0-6.703125 2.839844-13.160156 7.792969-17.695312 5.007812-4.601563 11.496093-6.832032 18.382812-6.207032 12.230469 1.0625 21.824219 12.285156 21.824219 25.566406v14.335938c0 8.542969-4.496094 16.265625-12.023438 20.648438l-3.976562 2.3125v23.070312l38.59375 11.023438c10.246094 2.9375 17.40625 12.425781 17.40625 23.082031zm0 0"/><path d="m32 364.945312 73.886719-36.945312-73.886719-36.945312zm16-48 22.113281 11.054688-22.113281 11.054688zm0 0"/><path d="m152 288h16v80h-16zm0 0"/><path d="m120 288h16v80h-16zm0 0"/><path d="m336 288h-48v32h-104v16h104v32h48v-32h128v-16h-128zm-16 64h-16v-48h16zm0 0"/></svg>--}}
    {{--                    </div>--}}
    {{--                    <div class="section-heading">--}}
    {{--                        <h2 class="section__title font-size-20 pb-1">Become a Teacher, Share your knowledge</h2>--}}
    {{--                        <p class="section__desc mb-0">Create an online video course, reach students across the globe, and earn money</p>--}}
    {{--                    </div><!-- end section-heading -->--}}
    {{--                </div>--}}
    {{--            </div><!-- end col-lg-8 -->--}}
    {{--            <div class="col-lg-4">--}}
    {{--                <div class="btn-box text-right">--}}
    {{--                    <a href="course-details.blade.php#" class="theme-btn">Tech on aduca</a>--}}
    {{--                </div><!-- end btn-box-->--}}
    {{--            </div><!-- end col-lg-4 -->--}}
    {{--        </div><!-- end row -->--}}
    {{--    </div><!-- end container -->--}}
    {{--</div><!-- end subscriber-area -->--}}
    <!--================================
        END GET STAR AREA
=================================-->

    <!-- ================================
             END FOOTER AREA
    ================================= -->
    <!-- end footer-area -->
    <!-- ================================
              END FOOTER AREA
    ================================= -->

    <!-- start scroll top -->

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
    <script src="/js/plyr.js"></script>
    <script src="/js/smooth-scrolling.js"></script>
    <script src="/js/jquery.filer.min.js"></script>
    <script src="/js/date-time-picker.js"></script>
    <script src="/js/emojionearea.min.js"></script>
    <script src="/js/copy-text-script.js"></script>
    <script src="/js/tooltipster.bundle.min.js"></script>
    <script src="/js/main.js"></script>
    <script>
        var player = new Plyr('#player');
        var player = new Plyr('#player2');
        var player = new Plyr('#player3');
        var player = new Plyr('#player4');
    </script>
@endsection

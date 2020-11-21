@extends('layout.dashboard.dashlayout.head')
@section('title','صفحه اصلی')
@section('cntd')
    @parent
    @php
        $header="";
        $loader="dont";
        $sidebar="";
    @endphp
    <div class="dashboard-content-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content dashboard-bread-content d-flex align-items-center justify-content-between">
                        <div class="user-bread-content d-flex align-items-center">
                            <div class="bread-img-wrap">
                                <img src="images/team10.jpg" alt="">
                            </div>
                            <div class="section-heading">
                                <h2 class="section__title font-size-30">Howdy, Alex Smith</h2>
                                <div class="rating-wrap d-flex mt-2">
                                    <ul class="review-stars">
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star"></span></li>
                                        <li><span class="la la-star-o"></span></li>
                                    </ul>
                                    <span class="star-rating-wrap">
                                        <span class="star__rating">4.2</span>
                                        <span class="star__count">(70)</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="upload-btn-box">
                            <form action="dashboard-bookmark.html#" method="post" enctype="multipart/form-data">
                                <input type="file" name="files[]" class="filer_input" multiple="multiple">
                            </form>
                        </div>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="section-block"></div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <h3 class="widget-title">Bookmarks</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <h3 class="widget-title">My Bookmarks</h3>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="my-bookmark-wrap">
                                <div class="row">
                                    <div class="col-lg-4 column-lmd-2-half column-td-full">
                                        <div class="card-item">
                                            <div class="card-image">
                                                <a href="course-details.html" class="card__img"><img src="images/img11.jpg" alt=""></a>
                                            </div><!-- end card-image -->
                                            <div class="card-content">
                                                <p class="card__label">
                                                    <span class="card__label-text">all levels</span>
                                                    <a href="dashboard-bookmark.html#" class="card__collection-icon primary-color-2" data-toggle="tooltip" data-placement="top" title="Remove form wishlist"><span class="la la-heart"></span></a>
                                                </p>
                                                <h3 class="card__title">
                                                    <a href="course-details.html">User Experience Design - Adobe XD UI UX Design</a>
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
                                                    <a href="dashboard-bookmark.html#" class="text-btn">Get Enrolled</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 column-lmd-2-half column-td-full">
                                        <div class="card-item">
                                            <div class="card-image">
                                                <a href="course-details.html" class="card__img"><img src="images/img12.jpg" alt=""></a>
                                                <div class="card-badge">
                                                    <span class="badge-label">bestseller</span>
                                                </div>
                                            </div><!-- end card-image -->
                                            <div class="card-content">
                                                <p class="card__label">
                                                    <span class="card__label-text">all levels</span>
                                                    <a href="dashboard-bookmark.html#" class="card__collection-icon primary-color-2" data-toggle="tooltip" data-placement="top" title="Remove form wishlist"><span class="la la-heart"></span></a>
                                                </p>
                                                <h3 class="card__title">
                                                    <a href="course-details.html">The Complete Digital finance Marketing Course</a>
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
                                                    <a href="dashboard-bookmark.html#" class="text-btn">Add to cart</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 column-lmd-2-half column-td-full">
                                        <div class="card-item">
                                            <div class="card-image">
                                                <a href="course-details.html" class="card__img"><img src="images/img13.jpg" alt=""></a>
                                            </div><!-- end card-image -->
                                            <div class="card-content">
                                                <p class="card__label">
                                                    <span class="card__label-text">all levels</span>
                                                    <a href="dashboard-bookmark.html#" class="card__collection-icon primary-color-2" data-toggle="tooltip" data-placement="top" title="Remove form wishlist"><span class="la la-heart"></span></a>
                                                </p>
                                                <h3 class="card__title">
                                                    <a href="course-details.html">Complete Python Bootcamp: Go from zero to hero</a>
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
                                                    <a href="dashboard-bookmark.html#" class="text-btn">Add to cart</a>
                                                </div><!-- end card-price-wrap -->
                                            </div><!-- end card-content -->
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-4 -->
                                </div><!-- end row -->
                            </div>
                        </div>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-content mt-0 pt-0 pb-4 border-top-0 text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="copy__desc">&copy; 2020 Aduca. All Rights Reserved. by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs.</a></p>
                            </div><!-- end col-lg-12 -->
                        </div><!-- end row -->
                    </div><!-- end copyright-content -->
                </div><!-- end col-lg-12 -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-content-wrap -->
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="fa fa-angle-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<!-- account-delete-modal -->
<div class="modal-form text-center">
    <div class="modal fade account-delete-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content p-4">
                <div class="modal-top border-0 mb-4 p-0">
                    <div class="alert-content">
                        <span class="la la-exclamation-circle warning-icon"></span>
                        <h4 class="widget-title font-size-20 mt-2 mb-1">Your account will be deleted permanently!</h4>
                        <p class="modal-sub">Are you sure to proceed.</p>
                    </div>
                </div>
                <div class="btn-box">
                    <button type="button" class="btn primary-color font-weight-bold mr-3" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="theme-btn bg-color-6 border-0 text-white" >Delete</button>
                </div>
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end modal -->
</div><!-- end modal-form -->

<!-- account-delete-modal -->
<div class="modal-form text-center">
    <div class="modal fade item-delete-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content p-4">
                <div class="modal-top border-0 mb-4 p-0">
                    <div class="alert-content">
                        <span class="la la-exclamation-circle warning-icon"></span>
                        <h4 class="modal-title widget-title font-size-20 mt-2 mb-1">Your item will be deleted permanently!</h4>
                        <p class="modal-sub">Are you sure to proceed.</p>
                    </div>
                </div>
                <div class="btn-box">
                    <button type="button" class="btn primary-color font-weight-bold mr-3" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="theme-btn bg-color-6 border-0 text-white" >Delete</button>
                </div>
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end modal -->
</div><!-- end modal-form -->

<!-- template js files -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/fancybox.js"></script>
<script src="js/wow.js"></script>
<script src="js/smooth-scrolling.js"></script>
<script src="js/tooltipster.bundle.min.js"></script>
<script src="js/jquery.filer.min.js"></script>
<script src="js/date-time-picker.js"></script>
<script src="js/emojionearea.min.js"></script>
<script src="js/animated-skills.js"></script>
<script src="js/main.js"></script>
@endsection

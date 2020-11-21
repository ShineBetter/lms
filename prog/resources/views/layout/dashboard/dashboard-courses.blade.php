@extends('layout.dashboard.dashlayout.head')
@section('title','دوره ها')
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
                            <form action="dashboard-courses.html#" method="post" enctype="multipart/form-data">
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
                    <h3 class="widget-title">Courses</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <h3 class="widget-title">My Courses</h3>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="card-item card-list-layout">
                                <div class="card-image">
                                    <a href="course-details.html" class="card__img"><img src="images/img8.jpg" alt=""></a>
                                </div><!-- end card-image -->
                                <div class="card-content">
                                    <h3 class="card__title mt-0">
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
                                        <ul class="card-duration d-flex">
                                            <li>
                                                <span class="meta__date mr-2">
                                                    <span class="status-text">Status:</span>
                                                    <span class="badge bg-success text-white">Published</span>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="meta__date mr-2">
                                                    <span class="status-text">Duration:</span>
                                                    <span class="status-text primary-color-3">3 hours 20 min</span>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="meta__date mr-2">
                                                    <span class="status-text">Students:</span>
                                                    <span class="status-text primary-color-3">12</span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div><!-- end card-action -->
                                    <div class="card-price-wrap d-flex align-items-center">
                                        <p class="card__price">$58.00</p>
                                        <div class="edit-action">
                                            <ul class="edit-list">
                                                <li><a href="course-details.html" class="theme-btn view-btn"><i class="la la-eye mr-1 font-size-16"></i>View</a></li>
                                                <li><span class="theme-btn edit-btn"><i class="la la-edit mr-1 font-size-16"></i>Edit</span></li>
                                                <li><span class="theme-btn delete-btn" data-toggle="modal" data-target=".item-delete-modal"><i class="la la-trash mr-1 font-size-16"></i>Delete</span></li>
                                            </ul>
                                        </div>
                                    </div><!-- end card-price-wrap -->
                                </div><!-- end card-content -->
                            </div><!-- end card-item -->
                            <div class="card-item card-list-layout">
                                <div class="card-image">
                                    <a href="course-details.html" class="card__img"><img src="images/img9.jpg" alt=""></a>
                                </div><!-- end card-image -->
                                <div class="card-content">
                                    <h3 class="card__title mt-0">
                                        <a href="course-details.html">How to be a DJ? Make Electronic Music</a>
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
                                        <ul class="card-duration d-flex">
                                            <li>
                                                <span class="meta__date mr-2">
                                                    <span class="status-text">Status:</span>
                                                    <span class="badge bg-danger text-white">Cancelled</span>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="meta__date mr-2">
                                                    <span class="status-text">Duration:</span>
                                                    <span class="status-text primary-color-3">3 hours 20 min</span>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="meta__date mr-2">
                                                    <span class="status-text">Students:</span>
                                                    <span class="status-text primary-color-3">12</span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div><!-- end card-action -->
                                    <div class="card-price-wrap d-flex align-items-center">
                                        <p class="card__price">$58.00</p>
                                        <div class="edit-action">
                                            <ul class="edit-list">
                                                <li><a href="course-details.html" class="theme-btn view-btn"><i class="la la-eye mr-1 font-size-16"></i>View</a></li>
                                                <li><span class="theme-btn edit-btn"><i class="la la-edit mr-1 font-size-16"></i>Edit</span></li>
                                                <li><span class="theme-btn delete-btn" data-toggle="modal" data-target=".item-delete-modal"><i class="la la-trash mr-1 font-size-16"></i>Delete</span></li>
                                            </ul>
                                        </div>
                                    </div><!-- end card-price-wrap -->
                                </div><!-- end card-content -->
                            </div><!-- end card-item -->
                            <div class="card-item card-list-layout">
                                <div class="card-image">
                                    <a href="course-details.html" class="card__img"><img src="images/img10.jpg" alt=""></a>
                                </div><!-- end card-image -->
                                <div class="card-content">
                                    <h3 class="card__title mt-0">
                                        <a href="course-details.html">Introduction Web Design with HTML</a>
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
                                        <ul class="card-duration d-flex">
                                            <li>
                                                <span class="meta__date mr-2">
                                                    <span class="status-text">Status:</span>
                                                    <span class="badge bg-success text-white">Published</span>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="meta__date mr-2">
                                                    <span class="status-text">Duration:</span>
                                                    <span class="status-text primary-color-3">3 hours 20 min</span>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="meta__date mr-2">
                                                    <span class="status-text">Students:</span>
                                                    <span class="status-text primary-color-3">12</span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div><!-- end card-action -->
                                    <div class="card-price-wrap d-flex align-items-center">
                                        <p class="card__price">$58.00</p>
                                        <div class="edit-action">
                                            <ul class="edit-list">
                                                <li><a href="course-details.html" class="theme-btn view-btn"><i class="la la-eye mr-1 font-size-16"></i>View</a></li>
                                                <li><span class="theme-btn edit-btn"><i class="la la-edit mr-1 font-size-16"></i>Edit</span></li>
                                                <li><span class="theme-btn delete-btn" data-toggle="modal" data-target=".item-delete-modal"><i class="la la-trash mr-1 font-size-16"></i>Delete</span></li>
                                            </ul>
                                        </div>
                                    </div><!-- end card-price-wrap -->
                                </div><!-- end card-content -->
                            </div><!-- end card-item -->
                            <div class="card-item card-list-layout">
                                <div class="card-image">
                                    <a href="course-details.html" class="card__img"><img src="images/img11.jpg" alt=""></a>
                                </div><!-- end card-image -->
                                <div class="card-content">
                                    <h3 class="card__title mt-0">
                                        <a href="course-details.html">Designing a Responsive Mobile Website with Muse</a>
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
                                        <ul class="card-duration d-flex">
                                            <li>
                                                <span class="meta__date mr-2">
                                                    <span class="status-text">Status:</span>
                                                    <span class="badge bg-success text-white">Published</span>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="meta__date mr-2">
                                                    <span class="status-text">Duration:</span>
                                                    <span class="status-text primary-color-3">3 hours 20 min</span>
                                                </span>
                                            </li>
                                            <li>
                                                <span class="meta__date mr-2">
                                                    <span class="status-text">Students:</span>
                                                    <span class="status-text primary-color-3">12</span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div><!-- end card-action -->
                                    <div class="card-price-wrap d-flex align-items-center">
                                        <p class="card__price">$58.00</p>
                                        <div class="edit-action">
                                            <ul class="edit-list">
                                                <li><a href="course-details.html" class="theme-btn view-btn"><i class="la la-eye mr-1 font-size-16"></i>View</a></li>
                                                <li><span class="theme-btn edit-btn"><i class="la la-edit mr-1 font-size-16"></i>Edit</span></li>
                                                <li><span class="theme-btn delete-btn" data-toggle="modal" data-target=".item-delete-modal"><i class="la la-trash mr-1 font-size-16"></i>Delete</span></li>
                                            </ul>
                                        </div>
                                    </div><!-- end card-price-wrap -->
                                </div><!-- end card-content -->
                            </div><!-- end card-item -->
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
                        <h4 class="widget-title font-size-20 mt-2 mb-1">Your item will be deleted permanently!</h4>
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
<script src="js/waypoint.min.js"></script>
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

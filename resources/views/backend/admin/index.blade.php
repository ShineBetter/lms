@extends('backend.admin.partial._master')
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
                                <h2 class="section__title font-size-30">{{\App\User::where('id',auth()->id())->first()->profile->name}}</h2>
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
                    <h3 class="widget-title">Dashboard</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                    <div class="icon-box d-flex align-items-center">
                        <div class="icon-element icon-element-bg-1 flex-shrink-0">
                            <i class="la la-mouse-pointer"></i>
                        </div><!-- end icon-element-->
                        <div class="info-content">
                            <h4 class="info__title mb-2">Enrolled Courses</h4>
                            <span class="info__count">11</span>
                        </div><!-- end info-content -->
                    </div>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                    <div class="icon-box d-flex align-items-center">
                        <div class="icon-element icon-element-bg-2 flex-shrink-0">
                            <i class="la la-file-text-o"></i>
                        </div><!-- end icon-element-->
                        <div class="info-content">
                            <h4 class="info__title mb-2">Active Courses</h4>
                            <span class="info__count">5</span>
                        </div><!-- end info-content -->
                    </div>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                    <div class="icon-box d-flex align-items-center">
                        <div class="icon-element icon-element-bg-3 flex-shrink-0">
                            <i class="la la-graduation-cap"></i>
                        </div><!-- end icon-element-->
                        <div class="info-content">
                            <h4 class="info__title mb-2">Completed Courses</h4>
                            <span class="info__count">6</span>
                        </div><!-- end info-content -->
                    </div>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                    <div class="icon-box d-flex align-items-center">
                        <div class="icon-element icon-element-bg-4 flex-shrink-0">
                            <i class="la la-users"></i>
                        </div><!-- end icon-element-->
                        <div class="info-content">
                            <h4 class="info__title mb-2">Total Students</h4>
                            <span class="info__count">300</span>
                        </div><!-- end info-content -->
                    </div>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                    <div class="icon-box d-flex align-items-center">
                        <div class="icon-element icon-element-bg-5 flex-shrink-0">
                            <i class="la la-file-video-o"></i>
                        </div><!-- end icon-element-->
                        <div class="info-content">
                            <h4 class="info__title mb-2">Total Courses</h4>
                            <span class="info__count">11</span>
                        </div><!-- end info-content -->
                    </div>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-lmd-2-half column-md-2-full">
                    <div class="icon-box d-flex align-items-center">
                        <div class="icon-element icon-element-bg-6 flex-shrink-0">
                            <i class="la la-dollar"></i>
                        </div><!-- end icon-element-->
                        <div class="info-content">
                            <h4 class="info__title mb-2">Total Earnings</h4>
                            <span class="info__count">289.12</span>
                        </div><!-- end info-content -->
                    </div>
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-4 column-lmd-2-half column-md-full">
                    <div class="chart-item">
                        <div class="chart-headline margin-bottom-40px">
                            <h3 class="widget-title font-size-18">Total Sales</h3>
                        </div>
                        <canvas id="doughnut-chart"></canvas>
                        <div class="chart-legend text-center margin-top-40px">
                            <ul>
                                <li><span class="legend__bg legend__bg-1"></span>Direct Sales</li>
                                <li><span class="legend__bg legend__bg-2"></span>Referral Sales</li>
                                <li><span class="legend__bg legend__bg-3"></span>Affiliate Sales</li>
                            </ul>
                        </div>
                    </div><!-- end chart-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-lmd-2-half column-md-full">
                    <div class="chart-item">
                        <div class="chart-headline margin-bottom-35px">
                            <h3 class="widget-title font-size-18">Net Income</h3>
                        </div>
                        <canvas id="bar-chart"></canvas>
                        <div class="chart-legend text-center margin-top-40px">
                            <ul>
                                <li>Sales for this month</li>
                            </ul>
                        </div>
                    </div><!-- end chart-item -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-lmd-2-half column-md-full">
                    <div class="chart-item">
                        <div class="chart-headline margin-bottom-35px">
                            <h3 class="widget-title font-size-18">Earning by Location</h3>
                        </div>
                        <div class="world-map">
                            <div id="visit-by-locate"></div>
                        </div>
                        <div class="progress-bar-wrap mt-4">
                            <div class="progress-item">
                                <p class="skillbar-title">USA</p>
                                <div class="skillbar-box">
                                    <div class="skillbar" data-percent="70%">
                                        <div class="skillbar-bar skillbar-bar-bg-1"></div>
                                    </div> <!-- End Skill Bar -->
                                </div>
                                <div class="skill-bar-percent">70%</div>
                            </div>
                            <div class="progress-item">
                                <p class="skillbar-title">UK</p>
                                <div class="skillbar-box">
                                    <div class="skillbar" data-percent="50%">
                                        <div class="skillbar-bar skillbar-bar-bg-2"></div>
                                    </div> <!-- End Skill Bar -->
                                </div>
                                <div class="skill-bar-percent">50%</div>
                            </div>
                            <div class="progress-item">
                                <p class="skillbar-title">China</p>
                                <div class="skillbar-box">
                                    <div class="skillbar" data-percent="40%">
                                        <div class="skillbar-bar skillbar-bar-bg-3"></div>
                                    </div> <!-- End Skill Bar -->
                                </div>
                                <div class="skill-bar-percent">40%</div>
                            </div>
                        </div>
                    </div><!-- end chart-item -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-7 column-lmd-2-half column-md-full">
                    <div class="chart-item">
                        <div class="chart-headline margin-bottom-30px d-flex justify-content-between align-items-center">
                            <h3 class="widget-title font-size-18">Earning Statistics</h3>
                            <div class="sort-ordering chart-short-option">
                                <select class="sort-ordering-select">
                                    <option value="this-week">This Week</option>
                                    <option value="this-month">This Month</option>
                                    <option value="last-months">Last 6 Months</option>
                                    <option value="this-year">This Year</option>
                                </select>
                            </div>
                        </div>
                        <canvas id="line-chart"></canvas>
                        <div class="chart-legend text-center margin-top-40px">
                            <ul>
                                <li>Earnings for this month</li>
                            </ul>
                        </div>
                    </div><!-- end chart-item -->
                </div><!-- end col-lg-7 -->
                <div class="col-lg-5 column-lmd-2-half column-md-full">
                    <div class="dashboard-shared">
                        <div class="mess-dropdown">
                            <div class="dashboard-title margin-bottom-20px">
                                <h4 class="widget-title font-size-18 d-flex align-items-center">
                                    Notifications
                                    <a href="dashboard.html#" class="primary-color-3 ml-auto font-size-13">Mark all as read</a>
                                </h4>
                            </div><!-- end dashboard-title -->
                            <div class="mess__body">
                                <a href="dashboard.html#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element bg-color-1 text-white">
                                            <i class="la la-bolt"></i>
                                        </div>
                                        <div class="content">
                                            <span class="time">1 hour ago</span>
                                            <p class="text">Your Resume Updated!</p>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="dashboard.html#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element bg-color-2 text-white">
                                            <i class="la la-lock"></i>
                                        </div>
                                        <div class="content">
                                            <span class="time">November 12, 2019</span>
                                            <p class="text">You changed password</p>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="dashboard.html#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element bg-color-3 text-white">
                                            <i class="la la-check-circle"></i>
                                        </div>
                                        <div class="content">
                                            <span class="time">October 6, 2019</span>
                                            <p class="text">You applied for a job <span class="color-text">Front-end Developer</span></p>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="dashboard.html#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element bg-color-3 text-white">
                                            <i class="la la-check-circle"></i>
                                        </div>
                                        <div class="content">
                                            <span class="time">October 6, 2019</span>
                                            <p class="text">You applied for a job <span class="color-text">Front-end Developer</span></p>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="dashboard.html#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element bg-color-3 text-white">
                                            <i class="la la-check-circle"></i>
                                        </div>
                                        <div class="content">
                                            <span class="time">October 6, 2019</span>
                                            <p class="text">You applied for a job <span class="color-text">Front-end Developer</span></p>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="dashboard.html#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element bg-color-4 text-white">
                                            <i class="la la-user"></i>
                                        </div>
                                        <div class="content">
                                            <span class="time">Jun 12, 2019</span>
                                            <p class="text">Your account has been created successfully</p>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="dashboard.html#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element bg-color-5 text-white">
                                            <i class="la la-download"></i>
                                        </div>
                                        <div class="content">
                                            <span class="time">May 12, 2019</span>
                                            <p class="text">Someone downloaded resume</p>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                            </div>
                            <div class="btn-box p-2 text-center">
                                <a href="dashboard.html#">View All Notifications</a>
                            </div><!-- end btn-box -->
                        </div><!-- end mess-dropdown -->
                    </div><!-- end dashboard-shared -->
                </div><!-- end col-lg-5 -->
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
    </div>

    <!-- start cssload-loader -->

    <!-- end cssload-loader -->

    <!--======================================
            START HEADER AREA
        ======================================-->
    <!-- end header-menu-area -->
    <!--======================================
            END HEADER AREA
    ======================================-->

    <!-- ================================
        START DASHBOARD AREA

    ================================= -->
    <!-- end dashboard-area -->
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

    <!-- template js files -->
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap-select.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/magnific-popup.min.js"></script>
    <script src="/js/isotope.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/fancybox.js"></script>
    <script src="/js/wow.js"></script>
    <script src="/js/chart.js"></script>
    <script src="/js/doughnut-chart.js"></script>
    <script src="/js/bar-chart.js"></script>
    <script src="/js/line-chart.js"></script>
    <script src="/js/smooth-scrolling.js"></script>
    <script src="/js/tooltipster.bundle.min.js"></script>
    <script src="/js/jquery.filer.min.js"></script>
    <script src="/js/jquery.vmap.js"></script>
    <script src="/js/jquery.vmap.world.js"></script>
    <script src="/js/jquery.vmap.sampledata.js"></script>
    <script src="/js/jquery.vmap-script.js"></script>
    <script src="/js/progress-bar.js"></script>
    <script src="/js/date-time-picker.js"></script>
    <script src="/js/emojionearea.min.js"></script>
    <script src="/js/animated-skills.js"></script>
    <script src="/js/main.js"></script>
    <style>
        .show{
            left: 0 !important;
            right: unset !important;
        }
    </style>
@endsection

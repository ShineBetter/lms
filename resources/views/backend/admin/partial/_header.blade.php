<header class="header-menu-area dashboard-header">
    <div class="header-menu-content dashboard-menu-content"
         style="direction: rtl"
    >
        <div class="container-fluid">
            <div class="main-menu-content">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo-box">
                            <a href="index.html" class="logo"><img src="{{asset('template_sit/images/logo.png')}}"
                                                                   alt="logo"></a>
                            <div class="menu-toggler">
                                <i class="la la-bars"></i>
                                <i class="la la-times"></i>
                            </div>
                        </div>
                    </div><!-- end col-lg-2 -->
                    <div class="col-lg-10">
                        <div class="menu-wrapper">
                            <nav class="main-menu mr-5 ml-5">
                                <ul>

                                    <li>
                                        <a href="dashboard.html#">آزمون ها</a>
                                        {{--                                        <ul class="dropdown-menu-item" style="direction: rtl;text-align: right;">--}}
                                        {{--                                            <li><a href="course-grid.html">course grid</a></li>--}}
                                        {{--                                            <li><a href="course-details.html">course details</a></li>--}}
                                        {{--                                            <li><a href="lesson-details.html">lesson details</a></li>--}}
                                        {{--                                            <li><a href="my-courses.html">My courses</a></li>--}}
                                        {{--                                        </ul>--}}
                                    </li>
                                    <li>
                                        <a href="dashboard.html#">دوره ها</a>
                                        {{--                                        <ul class="dropdown-menu-item" style="direction: rtl;text-align: right;">--}}

                                        {{--                                        </ul>--}}
                                    </li>
                                    <li class="mr-4">
                                        <a href="/">آموزشگاه</a>
                                        <ul class="dropdown-menu-item" style="direction: rtl;text-align: right;">
                                            <li><a href="/">صفحه اصلی</a></li>
                                            <li><a href="about">درباره ما</a></li>
                                            <li><a href="contact">تماس باما</a></li>

                                        </ul>
                                    </li>

                                </ul><!-- end ul -->
                            </nav>
                            <div class="contact-form-action ml-auto">
                                <form method="post">
                                    <div class="input-box">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="search"
                                                   placeholder="جستوجو سریع">
                                            <span class="la la-search search-icon"></span>
                                        </div>
                                    </div><!-- end input-box -->
                                </form>
                            </div><!-- end contact-form-action -->
                            <!-- end main-menu -->
                            <div class="logo-right-button d-flex align-items-center">
                                <div class="header-action-button d-flex align-items-center">
                                    <div class="notification-wrap d-flex align-items-center">
                                        <div class="notification-item mr-3">
                                            <div class="dropdown ">
                                                <button class="notification-btn dropdown-toggle" type="button"
                                                        id="notificationDropdownMenu" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-bell"></i>
                                                    <span class="quantity">5</span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="notificationDropdownMenu"
                                                     style="
                                                 left: 0 !important;
                                                 right: unset !important;
                                                "
                                                >
                                                    <div class="mess-dropdown">
                                                        <div class="mess__title">
                                                            <h4 class="widget-title">Notifications</h4>
                                                        </div><!-- end mess__title -->
                                                        <div class="mess__body">
                                                            <a href="dashboard.html" class="d-block">
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
                                                            <a href="dashboard.html" class="d-block">
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
                                                            <a href="dashboard.html" class="d-block">
                                                                <div class="mess__item">
                                                                    <div class="icon-element bg-color-3 text-white">
                                                                        <i class="la la-check-circle"></i>
                                                                    </div>
                                                                    <div class="content">
                                                                        <span class="time">October 6, 2019</span>
                                                                        <p class="text">You applied for a job <span
                                                                                class="color-text">Front-end Developer</span>
                                                                        </p>
                                                                    </div>
                                                                </div><!-- end mess__item -->
                                                            </a>
                                                            <a href="dashboard.html" class="d-block">
                                                                <div class="mess__item">
                                                                    <div class="icon-element bg-color-4 text-white">
                                                                        <i class="la la-user"></i>
                                                                    </div>
                                                                    <div class="content">
                                                                        <span class="time">Jun 12, 2019</span>
                                                                        <p class="text">Your account has been created
                                                                            successfully</p>
                                                                    </div>
                                                                </div><!-- end mess__item -->
                                                            </a>
                                                            <a href="dashboard.html" class="d-block">
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
                                                        </div><!-- end mess__body -->
                                                        <div class="btn-box p-2 text-center">
                                                            <a href="dashboard.html">Show All Notifications</a>
                                                        </div><!-- end btn-box -->
                                                    </div><!-- end mess-dropdown -->
                                                </div><!-- end dropdown-menu -->
                                            </div><!-- end dropdown -->
                                        </div>
                                        <div class="notification-item mr-3">
                                            <div class="dropdown ">
                                                <button class="notification-btn dropdown-toggle" type="button"
                                                        id="messageDropdownMenu" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                    <i class="la la-envelope"></i>
                                                    <span class="quantity">5</span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="messageDropdownMenu"
                                                     style="
                                                    left: 0 !important;
                                                    right: unset;
                                                "
                                                >
                                                    <div class="mess-dropdown">
                                                        <div class="mess__title">
                                                            <h4 class="widget-title">Messages</h4>
                                                        </div><!-- end mess__title -->
                                                        <div class="mess__body">
                                                            <a href="dashboard-message.html" class="d-block">
                                                                <div class="mess__item">
                                                                    <div class="avatar dot-status">
                                                                        <img
                                                                            src="{{asset('template_sit/images/team7.jpg')}}"
                                                                            alt="Team img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h4 class="widget-title">Michelle Moreno</h4>
                                                                        <p class="text">Thanks for reaching out. I'm
                                                                            quite busy right now on many</p>
                                                                        <span class="time">5 min ago</span>
                                                                    </div>
                                                                </div><!-- end mess__item -->
                                                            </a>
                                                            <a href="dashboard-message.html" class="d-block">
                                                                <div class="mess__item">
                                                                    <div class="avatar dot-status online-status">
                                                                        <img
                                                                            src="{{asset('template_sit/images/team8.jpg')}}"
                                                                            alt="Team img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h4 class="widget-title">Alex Smith</h4>
                                                                        <p class="text">Thanks for reaching out. I'm
                                                                            quite busy right now on many</p>
                                                                        <span class="time">2 days ago</span>
                                                                    </div>
                                                                </div><!-- end mess__item -->
                                                            </a>
                                                            <a href="dashboard-message.html" class="d-block">
                                                                <div class="mess__item">
                                                                    <div class="avatar dot-status">
                                                                        <img
                                                                            src="{{asset('template_sit/images/team9.jpg')}}"
                                                                            alt="Team img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h4 class="widget-title">Michelle Moreno</h4>
                                                                        <p class="text">Thanks for reaching out. I'm
                                                                            quite busy right now on many</p>
                                                                        <span class="time">5 min ago</span>
                                                                    </div>
                                                                </div><!-- end mess__item -->
                                                            </a>
                                                            <a href="dashboard-message.html" class="d-block">
                                                                <div class="mess__item">
                                                                    <div class="avatar dot-status online-status">
                                                                        <img
                                                                            src="{{asset('template_sit/images/team7.jpg')}}"
                                                                            alt="Team img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h4 class="widget-title">Alex Smith</h4>
                                                                        <p class="text">Thanks for reaching out. I'm
                                                                            quite busy right now on many</p>
                                                                        <span class="time">2 days ago</span>
                                                                    </div>
                                                                </div><!-- end mess__item -->
                                                            </a>
                                                            <a href="dashboard-message.html" class="d-block">
                                                                <div class="mess__item">
                                                                    <div class="avatar dot-status">
                                                                        <img
                                                                            src="{{asset('template_sit/images/team8.jpg')}}"
                                                                            alt="Team img">
                                                                    </div>
                                                                    <div class="content">
                                                                        <h4 class="widget-title">Alex Smith</h4>
                                                                        <p class="text">Thanks for reaching out. I'm
                                                                            quite busy right now on many</p>
                                                                        <span class="time">2 days ago</span>
                                                                    </div>
                                                                </div><!-- end mess__item -->
                                                            </a>
                                                        </div><!-- end mess__body -->
                                                        <div class="btn-box p-2 text-center">
                                                            <a href="dashboard-message.html">Show All Message</a>
                                                        </div><!-- end btn-box -->
                                                    </div><!-- end mess-dropdown -->
                                                </div><!-- end dropdown-menu -->
                                            </div><!-- end dropdown -->
                                        </div>
                                    </div>
                                    <div class="user-action-wrap">
                                        <div class="notification-item user-action-item">
                                            <div class="dropdown mr-3">
                                                <button
                                                    class="notification-btn dot-status online-status dropdown-toggle"
                                                    type="button" id="userDropdownMenu" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{asset('template_sit/images/team7.jpg')}}"
                                                         alt="John-doe">
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="userDropdownMenu"
                                                     style="
                                                    left: 0 !important;
                                                    right: unset;
                                                "
                                                >
                                                    <div class="mess-dropdown">
                                                        <div class="mess__title d-flex align-items-center">
                                                            <div class="image">
                                                                <a href="dashboard.html#">
                                                                    <img
                                                                        src="{{asset('template_sit/images/team7.jpg')}}"
                                                                        alt="John Doe">
                                                                </a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="widget-title font-size-16">
                                                                    <a href="dashboard.html#" class="text-white">
                                                                        Alex Smith
                                                                    </a>
                                                                </h4>
                                                                <span class="email">alexsmith@example.com</span>
                                                            </div>
                                                        </div><!-- end mess__title -->
                                                        <div class="mess__body">
                                                            <ul class="list-items">
                                                                <li class="mb-0">
                                                                    <a href="my-courses.html" class="d-block">
                                                                        <i class="la la-file-video-o"></i> My courses
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="shopping-cart.html" class="d-block">
                                                                        <i class="la la-shopping-cart"></i> My cart
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="my-courses.html" class="d-block">
                                                                        <i class="la la-bookmark"></i> My wishlist
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <div class="section-block mt-2 mb-2"></div>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="dashboard.html" class="d-block">
                                                                        <span><i
                                                                                class="la la-bell"></i> Notifications</span>
                                                                        <span class="badge bg-info text-white ml-2 p-1">9+</span>
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="dashboard-message.html" class="d-block">
                                                                        <span><i
                                                                                class="la la-envelope"></i> Messages</span>
                                                                        <span class="badge bg-info text-white ml-2 p-1">12+</span>
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="dashboard-settings.html" class="d-block">
                                                                        <i class="la la-gear"></i> Settings
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="dashboard-purchase-history.html"
                                                                       class="d-block">
                                                                        <i class="la la-cart-plus"></i> Purchase history
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <div class="section-block mt-2 mb-2"></div>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="student-detail.html" class="d-block">
                                                                        <i class="la la-user"></i> Public Profile
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="dashboard-settings.html" class="d-block">
                                                                        <i class="la la-edit"></i> Edit Profile
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <div class="section-block mt-2 mb-2"></div>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="dashboard.html#" class="d-block">
                                                                        <i class="la la-question"></i> Help
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="index.html" class="d-block">
                                                                        <i class="la la-power-off"></i> Logout
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <div class="section-block mt-2 mb-2"></div>
                                                                </li>
                                                                <li>
                                                                    <div class="business-content">
                                                                        <a href="dashboard.html#">
                                                                            <span
                                                                                class="widget-title font-size-18 d-block">Try Aduca for Business</span>
                                                                            <span
                                                                                class="line-height-24 d-block primary-color-3 font-size-14">Bring learning to your company</span>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div><!-- end mess__body -->
                                                    </div><!-- end mess-dropdown -->
                                                </div><!-- end dropdown-menu -->
                                            </div><!-- end dropdown -->
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end logo-right-button -->
                            <div class="user-nav-container">
                                <div class="humburger-menu">
                                    <div class="humburger-menu-lines side-menu-close"></div>
                                    <!-- end humburger-menu-lines -->
                                </div><!-- end humburger-menu -->
                                <div class="section-tab section-tab-2">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation">
                                            <a href="dashboard.html#notification-home" role="tab" data-toggle="tab"
                                               class="active" aria-selected="true">
                                                Notifications
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="dashboard.html#message-home" role="tab" data-toggle="tab"
                                               aria-selected="false">
                                                Messages
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="dashboard.html#account-home" role="tab" data-toggle="tab"
                                               aria-selected="false">
                                                Account
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="user-panel-content">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="notification-home" role="tabpanel">
                                            <div class="user-sidebar-item">
                                                <div class="mess-dropdown">
                                                    <div class="mess__body">
                                                        <a href="dashboard.html" class="d-block">
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
                                                        <a href="dashboard.html" class="d-block">
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
                                                        <a href="dashboard.html" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="icon-element bg-color-3 text-white">
                                                                    <i class="la la-check-circle"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <span class="time">October 6, 2019</span>
                                                                    <p class="text">You applied for a job <span
                                                                            class="color-text">Front-end Developer</span>
                                                                    </p>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                        <a href="dashboard.html" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="icon-element bg-color-4 text-white">
                                                                    <i class="la la-user"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <span class="time">Jun 12, 2019</span>
                                                                    <p class="text">Your account has been created
                                                                        successfully</p>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                        <a href="dashboard.html" class="d-block">
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
                                                    </div><!-- end mess__body -->
                                                    <div class="btn-box p-2 text-center">
                                                        <a href="dashboard.html">Show All Notifications</a>
                                                    </div><!-- end btn-box -->
                                                </div><!-- end mess-dropdown -->
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="message-home" role="tabpanel">
                                            <div class="user-sidebar-item">
                                                <div class="mess-dropdown">
                                                    <div class="mess__body">
                                                        <a href="dashboard-message.html" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="avatar dot-status">
                                                                    <img
                                                                        src="{{asset('template_sit/images/team7.jpg')}}"
                                                                        alt="Team img">
                                                                </div>
                                                                <div class="content">
                                                                    <h4 class="widget-title">Michelle Moreno</h4>
                                                                    <p class="text">Thanks for reaching out. I'm quite
                                                                        busy right now on many</p>
                                                                    <span class="time">5 min ago</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                        <a href="dashboard-message.html" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="avatar dot-status online-status">
                                                                    <img
                                                                        src="{{asset('template_sit/images/team8.jpg')}}"
                                                                        alt="Team img">
                                                                </div>
                                                                <div class="content">
                                                                    <h4 class="widget-title">Alex Smith</h4>
                                                                    <p class="text">Thanks for reaching out. I'm quite
                                                                        busy right now on many</p>
                                                                    <span class="time">2 days ago</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                        <a href="dashboard-message.html" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="avatar dot-status">
                                                                    <img
                                                                        src="{{asset('template_sit/images/team9.jpg')}}"
                                                                        alt="Team img">
                                                                </div>
                                                                <div class="content">
                                                                    <h4 class="widget-title">Michelle Moreno</h4>
                                                                    <p class="text">Thanks for reaching out. I'm quite
                                                                        busy right now on many</p>
                                                                    <span class="time">5 min ago</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                        <a href="dashboard-message.html" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="avatar dot-status online-status">
                                                                    <img
                                                                        src="{{asset('template_sit/images/team7.jpg')}}"
                                                                        alt="Team img">
                                                                </div>
                                                                <div class="content">
                                                                    <h4 class="widget-title">Alex Smith</h4>
                                                                    <p class="text">Thanks for reaching out. I'm quite
                                                                        busy right now on many</p>
                                                                    <span class="time">2 days ago</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                        <a href="dashboard-message.html" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="avatar dot-status">
                                                                    <img
                                                                        src="{{asset('template_sit/images/team8.jpg')}}"
                                                                        alt="Team img">
                                                                </div>
                                                                <div class="content">
                                                                    <h4 class="widget-title">Alex Smith</h4>
                                                                    <p class="text">Thanks for reaching out. I'm quite
                                                                        busy right now on many</p>
                                                                    <span class="time">2 days ago</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                    </div><!-- end mess__body -->
                                                    <div class="btn-box p-2 text-center">
                                                        <a href="dashboard-message.html">Show All Message</a>
                                                    </div><!-- end btn-box -->
                                                </div><!-- end mess-dropdown -->
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="account-home" role="tabpanel">
                                            <div class="user-sidebar-item user-action-item">
                                                <div class="mess-dropdown">
                                                    <div class="mess__title d-flex align-items-center">
                                                        <div class="image">
                                                            <a href="dashboard.html#">
                                                                <img src="{{asset('template_sit/images/team7.jpg')}}"
                                                                     alt="John Doe">
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <h4 class="widget-title font-size-16">
                                                                <a href="dashboard.html#" class="text-white">
                                                                    Alex Smith
                                                                </a>
                                                            </h4>
                                                            <span class="email">alexsmith@example.com</span>
                                                        </div>
                                                    </div><!-- end mess__title -->
                                                    <div class="mess__body">
                                                        <ul class="list-items">
                                                            <li class="mb-0">
                                                                <a href="my-courses.html" class="d-block">
                                                                    <i class="la la-file-video-o"></i> My courses
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="shopping-cart.html" class="d-block">
                                                                    <i class="la la-shopping-cart"></i> My cart
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="my-courses.html" class="d-block">
                                                                    <i class="la la-bookmark"></i> My wishlist
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <div class="section-block mt-2 mb-2"></div>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="dashboard.html" class="d-block">
                                                                    <span><i
                                                                            class="la la-bell"></i> Notifications</span>
                                                                    <span
                                                                        class="badge bg-info text-white ml-2 p-1">9+</span>
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="dashboard-message.html" class="d-block">
                                                                    <span><i class="la la-envelope"></i> Messages</span>
                                                                    <span
                                                                        class="badge bg-info text-white ml-2 p-1">12+</span>
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="dashboard-settings.html" class="d-block">
                                                                    <i class="la la-gear"></i> Settings
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="dashboard-purchase-history.html"
                                                                   class="d-block">
                                                                    <i class="la la-cart-plus"></i> Purchase history
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <div class="section-block mt-2 mb-2"></div>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="student-detail.html" class="d-block">
                                                                    <i class="la la-user"></i> Public Profile
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="dashboard-settings.html" class="d-block">
                                                                    <i class="la la-edit"></i> Edit Profile
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <div class="section-block mt-2 mb-2"></div>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="dashboard.html#" class="d-block">
                                                                    <i class="la la-question"></i> Help
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="index.html" class="d-block">
                                                                    <i class="la la-power-off"></i> Logout
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <div class="section-block mt-2 mb-2"></div>
                                                            </li>
                                                            <li>
                                                                <div class="business-content">
                                                                    <a href="dashboard.html#">
                                                                        <span class="widget-title font-size-18 d-block">Try Aduca for Business</span>
                                                                        <span
                                                                            class="line-height-24 d-block primary-color-3">Bring learning to your company</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div><!-- end mess__body -->
                                                </div><!-- end mess-dropdown -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
</header>

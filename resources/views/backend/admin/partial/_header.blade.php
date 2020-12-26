<style>
    .menu-notif {
        /*width: 260px;*/
        margin: 1px auto 0;
        cursor: pointer;
    }
    .title {
        /*width: 100%;*/
        box-sizing: border-box;
        background: #fff;
        padding: 9px 15px;
        border-radius: 50px;
        position: relative;
        box-shadow: 0 0 40px -10px #000;
        color: #505050;
    }
    .span-notif {
        float: right;
        font-size: 18px !important;
    }
    .dropdown-notif {
        width: 25%;
        background: #fff;
        border-radius: 4px;
        box-shadow: 0 0 40px -10px #000;
        color: #505050;
        margin-top: 24px;
        max-height: 0;
        overflow: hidden;
        transition: all 0.5s;
        left: 4%;
    }
    .down-notif {
        max-height: 150px;
    }
    .arrow {
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 10px solid #fff;
        position: absolute;
        right: 20px;
        bottom: -24px;
        display: none;
    }
    .arrow.gone {
        display: block;
    }
    .p-notif {
        text-align: right;
        padding: 15px 14px;
        margin: 0;
        transition: all 0.1s;
        background-color: white;
    }
    .p-notif:hover {
        background: #10ad34;
        -webkit-transform: scale(1.05);
        color: rgba(255, 255, 255, 0.8);
        box-shadow: 0 0 30px -10px #000;
    }

</style>
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
                                <i class="fa fa-bars"></i>
                                <i class="fa fa-times"></i>
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
                                            <span class="fa fa-search search-icon"></span>
                                        </div>
                                    </div><!-- end input-box -->
                                </form>
                            </div><!-- end contact-form-action -->
                            <!-- end main-menu -->
                            <div class="logo-right-button d-flex align-items-center">
                                <div class="header-action-button d-flex align-items-center">
                                    <div class="notification-wrap d-flex align-items-center">
                                        <div class="notification-item mr-3">
{{--                                            <div class="dropdown ">--}}
{{--                                                <button class="notification-btn dropdown-toggle" type="button"--}}
{{--                                                        id="messageDropdownMenu" data-toggle="dropdown"--}}
{{--                                                        aria-haspopup="true" aria-expanded="false">--}}
{{--                                                    <i class=""></i>--}}
{{--                                                    <span class="quantity">5</span>--}}
{{--                                                </button>--}}
{{--                                                <div class="dropdown-menu" aria-labelledby="messageDropdownMenu"--}}
{{--                                                     style="--}}
{{--                                                    left: 0 !important;--}}
{{--                                                    right: unset;--}}
{{--                                                "--}}
{{--                                                >--}}
{{--                                                    <div class="mess-dropdown">--}}
{{--                                                        <div class="mess__title">--}}
{{--                                                            <h4 class="widget-title">Messages</h4>--}}
{{--                                                        </div><!-- end mess__title -->--}}
{{--                                                        <div class="mess__body">--}}
{{--                                                            <a href="dashboard-message.html" class="d-block">--}}
{{--                                                                <div class="mess__item">--}}
{{--                                                                    <div class="avatar dot-status">--}}
{{--                                                                        <img--}}
{{--                                                                            src="{{asset('template_sit/images/team7.jpg')}}"--}}
{{--                                                                            alt="Team img">--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="content">--}}
{{--                                                                        <h4 class="widget-title">Michelle Moreno</h4>--}}
{{--                                                                        <p class="text">Thanks for reaching out. I'm--}}
{{--                                                                            quite busy right now on many</p>--}}
{{--                                                                        <span class="time">5 min ago</span>--}}
{{--                                                                    </div>--}}
{{--                                                                </div><!-- end mess__item -->--}}
{{--                                                            </a>--}}
{{--                                                            <a href="dashboard-message.html" class="d-block">--}}
{{--                                                                <div class="mess__item">--}}
{{--                                                                    <div class="avatar dot-status online-status">--}}
{{--                                                                        <img--}}
{{--                                                                            src="{{asset('template_sit/images/team8.jpg')}}"--}}
{{--                                                                            alt="Team img">--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="content">--}}
{{--                                                                        <h4 class="widget-title">Alex Smith</h4>--}}
{{--                                                                        <p class="text">Thanks for reaching out. I'm--}}
{{--                                                                            quite busy right now on many</p>--}}
{{--                                                                        <span class="time">2 days ago</span>--}}
{{--                                                                    </div>--}}
{{--                                                                </div><!-- end mess__item -->--}}
{{--                                                            </a>--}}
{{--                                                            <a href="dashboard-message.html" class="d-block">--}}
{{--                                                                <div class="mess__item">--}}
{{--                                                                    <div class="avatar dot-status">--}}
{{--                                                                        <img--}}
{{--                                                                            src="{{asset('template_sit/images/team9.jpg')}}"--}}
{{--                                                                            alt="Team img">--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="content">--}}
{{--                                                                        <h4 class="widget-title">Michelle Moreno</h4>--}}
{{--                                                                        <p class="text">Thanks for reaching out. I'm--}}
{{--                                                                            quite busy right now on many</p>--}}
{{--                                                                        <span class="time">5 min ago</span>--}}
{{--                                                                    </div>--}}
{{--                                                                </div><!-- end mess__item -->--}}
{{--                                                            </a>--}}
{{--                                                            <a href="dashboard-message.html" class="d-block">--}}
{{--                                                                <div class="mess__item">--}}
{{--                                                                    <div class="avatar dot-status online-status">--}}
{{--                                                                        <img--}}
{{--                                                                            src="{{asset('template_sit/images/team7.jpg')}}"--}}
{{--                                                                            alt="Team img">--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="content">--}}
{{--                                                                        <h4 class="widget-title">Alex Smith</h4>--}}
{{--                                                                        <p class="text">Thanks for reaching out. I'm--}}
{{--                                                                            quite busy right now on many</p>--}}
{{--                                                                        <span class="time">2 days ago</span>--}}
{{--                                                                    </div>--}}
{{--                                                                </div><!-- end mess__item -->--}}
{{--                                                            </a>--}}
{{--                                                            <a href="dashboard-message.html" class="d-block">--}}
{{--                                                                <div class="mess__item">--}}
{{--                                                                    <div class="avatar dot-status">--}}
{{--                                                                        <img--}}
{{--                                                                            src="{{asset('template_sit/images/team8.jpg')}}"--}}
{{--                                                                            alt="Team img">--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="content">--}}
{{--                                                                        <h4 class="widget-title">Alex Smith</h4>--}}
{{--                                                                        <p class="text">Thanks for reaching out. I'm--}}
{{--                                                                            quite busy right now on many</p>--}}
{{--                                                                        <span class="time">2 days ago</span>--}}
{{--                                                                    </div>--}}
{{--                                                                </div><!-- end mess__item -->--}}
{{--                                                            </a>--}}
{{--                                                        </div><!-- end mess__body -->--}}
{{--                                                        <div class="btn-box p-2 text-center">--}}
{{--                                                            <a href="dashboard-message.html">Show All Message</a>--}}
{{--                                                        </div><!-- end btn-box -->--}}
{{--                                                    </div><!-- end mess-dropdown -->--}}
{{--                                                </div><!-- end dropdown-menu -->--}}
{{--                                            </div><!-- end dropdown -->--}}
                                            <div class="menu-notif">
                                                <div class="title" onclick="f()"><i class="fa fa-envelope"></i>
                                                    <div class="arrow"></div>
                                                </div>
                                                <div class="dropdown dropdown-notif" style="position: absolute">
                                                    <p class="p-notif">پیام جدید از استاد معرفی<span class="span-notif"></span></p>
                                                    <p class="p-notif">پیام جدید از مدیریت<span class="span-notif"></span></p>
                                                    <p class="p-notif">پیام خوانده شده از ... <span class="span-notif"></span></p>
                                                </div>
                                            </div>
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
{{--                                                <div class="dropdown-menu" aria-labelledby="userDropdownMenu"--}}
{{--                                                     style="--}}
{{--                                                    left: 0 !important;--}}
{{--                                                    right: unset;--}}
{{--                                                ">--}}
{{--                                                    <div class="mess-dropdown">--}}
{{--                                                        <div class="mess__title d-flex align-items-center">--}}
{{--                                                            <div class="image">--}}
{{--                                                                <a href="dashboard.html#">--}}
{{--                                                                    <img--}}
{{--                                                                        src="{{asset('template_sit/images/team7.jpg')}}"--}}
{{--                                                                        alt="John Doe">--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="content">--}}
{{--                                                                <h4 class="widget-title font-size-16">--}}
{{--                                                                    <a href="dashboard.html#" class="text-white">--}}
{{--                                                                        Alex Smith--}}
{{--                                                                    </a>--}}
{{--                                                                </h4>--}}
{{--                                                                <span class="email">alexsmith@example.com</span>--}}
{{--                                                            </div>--}}
{{--                                                        </div><!-- end mess__title -->--}}
{{--                                                        <div class="mess__body">--}}
{{--                                                            <ul class="list-items">--}}
{{--                                                                <li class="mb-0">--}}
{{--                                                                    <a href="my-courses.html" class="d-block">--}}
{{--                                                                        <i class="fa fa-file-video-o"></i> My courses--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}
{{--                                                                <li class="mb-0">--}}
{{--                                                                    <a href="shopping-cart.html" class="d-block">--}}
{{--                                                                        <i class="fa fa-shopping-cart"></i> My cart--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}
{{--                                                                <li class="mb-0">--}}
{{--                                                                    <a href="my-courses.html" class="d-block">--}}
{{--                                                                        <i class="fa fa-bookmark"></i> My wishlist--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}
{{--                                                                <li class="mb-0">--}}
{{--                                                                    <div class="section-block mt-2 mb-2"></div>--}}
{{--                                                                </li>--}}
{{--                                                                <li class="mb-0">--}}
{{--                                                                    <a href="dashboard.html" class="d-block">--}}
{{--                                                                        <span><i--}}
{{--                                                                                class="fa fa-bell"></i> Notifications</span>--}}
{{--                                                                        <span class="badge bg-info text-white ml-2 p-1">9+</span>--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}
{{--                                                                <li class="mb-0">--}}
{{--                                                                    <a href="dashboard-message.html" class="d-block">--}}
{{--                                                                        <span><i--}}
{{--                                                                                class="fa fa-envelope"></i> Messages</span>--}}
{{--                                                                        <span class="badge bg-info text-white ml-2 p-1">12+</span>--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}
{{--                                                                <li class="mb-0">--}}
{{--                                                                    <a href="dashboard-settings.html" class="d-block">--}}
{{--                                                                        <i class="fa fa-gear"></i> Settings--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}
{{--                                                                <li class="mb-0">--}}
{{--                                                                    <a href="dashboard-purchase-history.html"--}}
{{--                                                                       class="d-block">--}}
{{--                                                                        <i class="fa fa-cart-plus"></i> Purchase history--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}
{{--                                                                <li class="mb-0">--}}
{{--                                                                    <div class="section-block mt-2 mb-2"></div>--}}
{{--                                                                </li>--}}
{{--                                                                <li class="mb-0">--}}
{{--                                                                    <a href="student-detail.html" class="d-block">--}}
{{--                                                                        <i class="fa fa-user"></i> Public Profile--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}
{{--                                                                <li class="mb-0">--}}
{{--                                                                    <a href="dashboard-settings.html" class="d-block">--}}
{{--                                                                        <i class="fa fa-edit"></i> Edit Profile--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}
{{--                                                                <li class="mb-0">--}}
{{--                                                                    <div class="section-block mt-2 mb-2"></div>--}}
{{--                                                                </li>--}}
{{--                                                                <li class="mb-0">--}}
{{--                                                                    <a href="dashboard.html#" class="d-block">--}}
{{--                                                                        <i class="fa fa-question"></i> Help--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}
{{--                                                                <li class="mb-0">--}}
{{--                                                                    <a href="index.html" class="d-block">--}}
{{--                                                                        <i class="fa fa-power-off"></i> Logout--}}
{{--                                                                    </a>--}}
{{--                                                                </li>--}}
{{--                                                                <li class="mb-0">--}}
{{--                                                                    <div class="section-block mt-2 mb-2"></div>--}}
{{--                                                                </li>--}}
{{--                                                                <li>--}}
{{--                                                                    <div class="business-content">--}}
{{--                                                                        <a href="dashboard.html#">--}}
{{--                                                                            <span--}}
{{--                                                                                class="widget-title font-size-18 d-block">Try Aduca for Business</span>--}}
{{--                                                                            <span--}}
{{--                                                                                class="line-height-24 d-block primary-color-3 font-size-14">Bring learning to your company</span>--}}
{{--                                                                        </a>--}}
{{--                                                                    </div>--}}
{{--                                                                </li>--}}
{{--                                                            </ul>--}}
{{--                                                        </div><!-- end mess__body -->--}}
{{--                                                    </div><!-- end mess-dropdown -->--}}
{{--                                                </div><!-- end dropdown-menu -->--}}
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
{{--                                                <div class="mess-dropdown">--}}
{{--                                                    <div class="mess__body">--}}
{{--                                                        <a href="dashboard.html" class="d-block">--}}
{{--                                                            <div class="mess__item">--}}
{{--                                                                <div class="icon-element bg-color-1 text-white">--}}
{{--                                                                    <i class="fa fa-bolt"></i>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="content">--}}
{{--                                                                    <span class="time">1 hour ago</span>--}}
{{--                                                                    <p class="text">Your Resume Updated!</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div><!-- end mess__item -->--}}
{{--                                                        </a>--}}
{{--                                                        <a href="dashboard.html" class="d-block">--}}
{{--                                                            <div class="mess__item">--}}
{{--                                                                <div class="icon-element bg-color-2 text-white">--}}
{{--                                                                    <i class="fa fa-lock"></i>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="content">--}}
{{--                                                                    <span class="time">November 12, 2019</span>--}}
{{--                                                                    <p class="text">You changed password</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div><!-- end mess__item -->--}}
{{--                                                        </a>--}}
{{--                                                        <a href="dashboard.html" class="d-block">--}}
{{--                                                            <div class="mess__item">--}}
{{--                                                                <div class="icon-element bg-color-3 text-white">--}}
{{--                                                                    <i class="fa fa-check-circle"></i>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="content">--}}
{{--                                                                    <span class="time">October 6, 2019</span>--}}
{{--                                                                    <p class="text">You applied for a job <span--}}
{{--                                                                            class="color-text">Front-end Developer</span>--}}
{{--                                                                    </p>--}}
{{--                                                                </div>--}}
{{--                                                            </div><!-- end mess__item -->--}}
{{--                                                        </a>--}}
{{--                                                        <a href="dashboard.html" class="d-block">--}}
{{--                                                            <div class="mess__item">--}}
{{--                                                                <div class="icon-element bg-color-4 text-white">--}}
{{--                                                                    <i class="fa fa-user"></i>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="content">--}}
{{--                                                                    <span class="time">Jun 12, 2019</span>--}}
{{--                                                                    <p class="text">Your account has been created--}}
{{--                                                                        successfully</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div><!-- end mess__item -->--}}
{{--                                                        </a>--}}
{{--                                                        <a href="dashboard.html" class="d-block">--}}
{{--                                                            <div class="mess__item">--}}
{{--                                                                <div class="icon-element bg-color-5 text-white">--}}
{{--                                                                    <i class="fa fa-download"></i>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="content">--}}
{{--                                                                    <span class="time">May 12, 2019</span>--}}
{{--                                                                    <p class="text">Someone downloaded resume</p>--}}
{{--                                                                </div>--}}
{{--                                                            </div><!-- end mess__item -->--}}
{{--                                                        </a>--}}
{{--                                                    </div><!-- end mess__body -->--}}
{{--                                                    <div class="btn-box p-2 text-center">--}}
{{--                                                        <a href="dashboard.html">Show All Notifications</a>--}}
{{--                                                    </div><!-- end btn-box -->--}}
{{--                                                </div><!-- end mess-dropdown -->--}}
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
                                                                    <i class="fa fa-file-video-o"></i> My courses
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="shopping-cart.html" class="d-block">
                                                                    <i class="fa fa-shopping-cart"></i> My cart
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="my-courses.html" class="d-block">
                                                                    <i class="fa fa-bookmark"></i> My wishlist
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <div class="section-block mt-2 mb-2"></div>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="dashboard.html" class="d-block">
                                                                    <span><i
                                                                            class="fa fa-bell"></i> Notifications</span>
                                                                    <span
                                                                        class="badge bg-info text-white ml-2 p-1">9+</span>
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="dashboard-message.html" class="d-block">
                                                                    <span><i class="fa fa-envelope"></i> Messages</span>
                                                                    <span
                                                                        class="badge bg-info text-white ml-2 p-1">12+</span>
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="dashboard-settings.html" class="d-block">
                                                                    <i class="fa fa-gear"></i> Settings
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="dashboard-purchase-history.html"
                                                                   class="d-block">
                                                                    <i class="fa fa-cart-plus"></i> Purchase history
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <div class="section-block mt-2 mb-2"></div>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="student-detail.html" class="d-block">
                                                                    <i class="fa fa-user"></i> Public Profile
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="dashboard-settings.html" class="d-block">
                                                                    <i class="fa fa-edit"></i> Edit Profile
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <div class="section-block mt-2 mb-2"></div>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="dashboard.html#" class="d-block">
                                                                    <i class="fa fa-question"></i> Help
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="index.html" class="d-block">
                                                                    <i class="fa fa-power-off"></i> Logout
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
<script>
    function f() {
        document.getElementsByClassName('dropdown')[0].classList.toggle('down');
        document.getElementsByClassName('arrow')[0].classList.toggle('gone');
        if (document.getElementsByClassName('dropdown')[0].classList.contains('down')) {
            setTimeout(function() {
                document.getElementsByClassName('dropdown')[0].style.overflow = 'visible'
            }, 500)
        } else {
            document.getElementsByClassName('dropdown')[0].style.overflow = 'hidden'
        }
    }
</script>

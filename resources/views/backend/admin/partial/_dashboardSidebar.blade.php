<section class="dashboard-area">
    <div class="dashboard-sidebar">
        <div class="dashboard-nav-trigger">
            <div class="dashboard-nav-trigger-btn">
                <i class="la la-bars"></i> Dashboard Nav
            </div>
        </div>
        <div class="dashboard-nav-container">
            <div class="humburger-menu">
                <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
            </div><!-- end humburger-menu -->
            <div class="side-menu-wrap">
                <ul class="side-menu-ul">
                    <li class="sidenav__item page-active">
                        <a href="dashboard.html">
                            <b><i class="fa fa-columns"></i>داشبورد</b>
                        </a>
                    </li>
                    <li class="sidenav__item">
                        <a class="dropdown-btn">
                            <i class="fa fa-cog"></i>
                            تنظیمات سایت
                        </a>
                        <div class="dropdown-container">
                            <a href=""><b class="text-success">صفحه اصلی</b></a>
                            <a href="{{route('banner.index')}}"><i class="fa fa-image"></i>بنــــر</a>
                            <a href="#"><i class="fa fa-camera-retrot"></i>دبیران</a>
                            <a href="#"><i class="fa fa-discourse"></i>دوره ها</a>
                            <a href="#"><i class="fa fa-scroll"></i>آزمون ها</a>
                            <a href="#"><i class="fa fa-comments"></i>کامنت ها</a>
                            <a href="#"><i class="fa fa-scroll"></i>درباره ما</a>
                            <a href="#"><i class="fa fa-images"></i>تصاویر آموزشگاه</a>


                        </div>

                    </li>
                    <li class="sidenav__item">
                        <a class="dropdown-btn">
                            <i class="fa fa-cog"></i>
                            جداول پایه
                        </a>
                        <div class="dropdown-container">
                            <a href="{{route('level.index')}}"><i class="fa fa-image"></i>پایه ها</a>
                            <a href="{{route('lesson.index')}}"><i class="fa fa-image"></i>دروس</a>
                            <a href="{{route('conference.index')}}"><i class="fa fa-image"></i>دوره ها</a>
                            <a href="{{route('conference.index')}}"><i class="fa fa-image"></i>دوره ها</a>
                            <a href="{{route('lesson.index')}}"><i class="fa fa-image"></i>همایش ها</a>
                            <a href="{{route('role.index')}}"><i class="fa fa-image"></i>افزودن نقش کاربر</a>
                            <a href="{{route('lesson.index')}}"><i class="fa fa-image"></i>اساتید</a>
                            <a href="{{route('lesson.index')}}"><i class="fa fa-image"></i>دانش آموزان</a>
                            <a href="{{route('parent.index')}}"><i class="fa fa-image"></i>اولیا</a>
                        </div>

                    </li>
{{--      --}}

                    <li class="sidenav__item"><a href="dashboard-message.html"><i class="fa fa-comments"></i>پیغام
                            <span class="badge badge-info radius-rounded p-1 ml-1">2</span></a>
                    </li>
                    <li class="sidenav__item"><a href="dashboard-reviews.html"><i class="fa fa-user-graduate"></i>دانش
                            آموز</a>
                    </li>
                    <li class="sidenav__item"><a href="dashboard-earnings.html"><i class="fas fa-users"></i>والدین</a>
                    </li>
                    <li class="sidenav__item"><a href="dashboard-earnings.html"><i class="fa fa-chalkboard-teacher"></i>دبیران</a>
                    </li>
                    <li class="sidenav__item"><a href="dashboard-courses.html"><i class="fa fa-shopping-basket"></i>فروشگاه</a>
                    </li>

                    <li class="sidenav__item"><a href="dashboard-quiz.html"><i class="fa fa-edit"></i>لیست آزمونها</a>
                    </li>

                    <li class="sidenav__item"><a href="dashboard-submit-course.html"><i class="fa fa-list-ol"></i>لیست
                            دوره ها و همایشات</a>
                    </li>
                    <li class="sidenav__item"><a href="{{route('user.logout')}}"><i class="fa fa-power-off"></i> خروج</a></li>
                    <li class="sidenav__item">
                        <a href="javascript:void(0)" data-toggle="modal" data-target=".account-delete-modal"><i
                                class="fa fa-trash"></i>حذف اکانت</a>
                    </li>
                </ul>
            </div>
            <!-- end side-menu-wrap -->
        </div>
    </div><!-- end dashboard-sidebar -->

</section>

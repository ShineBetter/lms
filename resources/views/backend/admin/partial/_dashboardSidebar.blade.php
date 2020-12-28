<div class="dashboard-sidebar">
    <div class="dashboard-nav-trigger">
        <div class="dashboard-nav-trigger-btn">
            <i class="fas fa-arrow-circle-left"></i>
        </div>
    </div>
    <div class="dashboard-nav-container">
        <div class="humburger-menu">
            <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
        </div><!-- end humburger-menu -->
        @can('Admin')
        <div class="panel-type-title text-center p-3"><span>پنل مدیریت</span></div>
        <div class="side-menu-wrap">
            <ul class="side-menu-ul">
                <li class="sidenav__item page-active"><a class="text-center" href="{{ route('panel') }}"><i
                            class="fas fa-dashboard"></i>
                        <p class="w-100">داشبورد</p>
                    </a></li>
                <li class="sidenav__item"><a class="text-center" href="{{ route('level.index') }}">
                        <i class="fas fa-database"></i>
                        <p class="w-100">پایه ها</p>
                    </a></li>
                <li class="sidenav__item"><a class="text-center" href="{{ route('lesson.index') }}"><i class="fas fa-book"></i>
                        <p class="w-100">دروس</p>
                    </a></li>
                <li class="sidenav__item"><a class="text-center" href="/dashboard-courses">
                        <i class="fas fa-window-restore"></i>
                        <p class="w-100">دوره ها</p>
                    </a>
                </li>
            <li class="sidenav__item"><a class="text-center" href="{{ route('parent.index') }}"><i
                            class="fas fa-user-secret"></i>
                        <p class="w-100">اولیا</p>
                    </a></li>
                <li class="sidenav__item"><a class="text-center" href="{{ route('student.index') }}">
                        <i class="fas fa-book-reader"></i>
                        <p class="w-100">دانش آموزان</p>
                    </a></li>
                <li class="sidenav__item"><a class="text-center" href="{{ route('teacher.index') }}"><i
                            class="fas fa-chalkboard-teacher"></i>
                        <p class="w-100">اساتید</p>
                    </a></li>
                <li class="sidenav__item"><a class="text-center" href="{{ route('admin.index') }}"><i
                            class="fas fa-user-tie"></i>
                        <p class="w-100">مدیران</p>
                    </a></li>
                <li class="sidenav__item"><a class="text-center" href="{{ route('quiz.index') }}"><i class="fas fa-bolt"></i>
                        <p class="w-100">امتحانات</p>
                    </a></li>
                <li class="sidenav__item"><a class="text-center" href="{{ route('conference.index') }}"><i class="fas fa-id-badge"></i>
                        <p class="w-100">همایشات</p>
                    </a></li>
{{--<<<<<<< HEAD--}}
{{--                <li class="sidenav__item"><a class="text-center" href="/dashboard-enrolled-courses"><i--}}
{{--                            class="fas fa-clipboard-check"></i>--}}
{{--                        <p class="w-100">دوره های ثبت نام شده</p>--}}
{{--=======--}}
                <li class="sidenav__item"><a class="text-center" href="{{route('questions.index')}}"><i
                            class="fas fa-graduation-cap"></i>
                        <p class="w-100">سوالات</p>

                    </a></li>
                <li class="sidenav__item"><a class="text-center" href="{{route('category.index')}}"><i class="fas fa-database"></i>
                        <p class="w-100">دسته بندی محصولات</p>
                    </a>
                </li>

{{--                <li class="sidenav__item"><a class="text-center" href="{{route('category.index')}}"></i>--}}
{{--                   --}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="sidenav__item"><a class="text-center" href="{{route('product.index')}}"><i class="fas fa-shopping-cart"></i>

                        <p class="w-100">محصولات</p>
                    </a>
                </li>
                <li class="sidenav__item"><a class="text-center" href="/dashboard-message"><i class="fas fa-envelope"></i>
                        <p class="w-100">پیام ها</p> <span class="badge badge-info radius-rounded p-1 ml-1">2</span>
                    </a>
                </li>
                <li class="sidenav__item"><a class="text-center" href="/dashboard-reviews"><i class="fas fa-star"></i>
                        <p class="w-100">دوره های تایید شده</p>
                    </a></li>
                <li class="sidenav__item"><a class="text-center" href="/dashboard-earnings"><i class="fas fa-dollar"></i>
                        <p class="w-100">تراکنش ها</p>
                    </a></li>
                <li class="sidenav__item"><a class="text-center" href="/dashboard-withdraw"><i class="fas fa-money"></i>
                        <p class="w-100">درآمد</p>
                    </a></li>
                <li class="sidenav__item"><a class="text-center" href="/dashboard-purchase-history"><i
                            class="fas fa-minus-square"></i>
                        <p class="w-100">دوره های تایید نشده</p>
                    </a></li>
                <li class="sidenav__item"><a class="text-center" href="/dashboard-submit-course"><i
                            class="fas fa-plus-circle"></i>
                        <p class="w-100">ارسال دوره</p>
                    </a></li>
                <li class="sidenav__item"><a class="text-center" href="{{ route('profile') }}"><i class="fas fa-cog"></i>
                        <p class="w-100">تنظیمات سایت</p>
                    </a></li>

{{--                ///////////////////--}}
                <li class="sidenav__item"><a class="text-center" href="/dashboard-enrolled-courses"><i
                            class="fas fa-clipboard-check"></i>
                        <p class="w-100">دوره های ثبت نام شده</p>
                    </a></li>
                <li class="sidenav__item"><a class="text-center" href="/dashboard-message"><i class="fas fa-envelope"></i>
                        <p class="w-100">پیام ها</p> <span class="badge badge-info radius-rounded p-1 ml-1">2</span>
                    </a>
                </li>
                <li class="sidenav__item"><a class="text-center" href="/dashboard-reviews"><i class="fas fa-star"></i>
                        <p class="w-100">دوره های تایید شده</p>
                    </a></li>
                <li class="sidenav__item"><a class="text-center" href="{{ route('mainpage.index') }}"><i class="fas fa-dollar"></i>
                        <p class="w-100">3 ستون صفحه اصلی</p>
                    </a></li>
                <li class="sidenav__item"><a class="text-center" href="{{ route('mainCount.index') }}"><i class="fas fa-money"></i>
                        <p class="w-100">اسلایدر صفحه اصلی</p>
                    </a></li>
                <li class="sidenav__item"><a class="text-center" href="{{ route('formFree.index') }}"><i
                            class="fas fa-shopping-cart"></i>
                        <p class="w-100">علاقه مندان به دوره رایگان</p>
                    </a></li>
                <li class="sidenav__item"><a class="text-center" href="{{ route('formNews.index') }}">
                        <i class="far fa-newspaper"></i>
                        <p class="w-100">داوطلبان دریافت اخبار</p>
                    </a></li>
                <li class="sidenav__item"><a class="text-center" href="{{ route('formFaq.index') }}"><i class="fas fa-users-cog"></i>
                        <p class="w-100">درخواست مشاوره</p>
                    </a></li>
                <li class="sidenav__item"><a class="text-center" href="{{ route('user.logout') }}"><i
                            class="fas fa-power-off"></i>
                        <p class="w-100">خروج</p>
                    </a></li>
            </ul>
        </div><!-- end side-menu-wrap -->
        @endcan
        @can('Teacher')
            <div class="panel-type-title text-center p-3"><span>پنل استاد</span></div>
            <div class="side-menu-wrap">
                <ul class="side-menu-ul">
                    <li class="sidenav__item page-active"><a class="text-center" href="{{ route('panel') }}">
                            <i class="fas fa-database"></i>
                            <p class="w-100">داشبورد</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="{{ route('level.index') }}">
                            <i class="fas fa-database"></i>
                            <p class="w-100">پایه ها</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="{{ route('lesson.index') }}">
                            <i class="fas fa-book-reader"></i>
                            <p class="w-100">دروس</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="/dashboard-courses">
                            <i class="fas fa-window-restore"></i>
                            <p class="w-100">دوره ها</p>
                        </a>
                    </li>
                    <li class="sidenav__item"><a class="text-center" href="{{ route('parent.index') }}">
                            <i class="fas fa-user-secret"></i>
                            <p class="w-100">اولیا</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="{{ route('student.index') }}">
                            <i class="fas fa-book-reader"></i>
                            <p class="w-100">دانش آموزان</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="{{ route('quiz.index') }}">
                            <i class="fas fa-edit"></i>
                            <p class="w-100">امتحانات</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="/dashboard-enrolled-courses">
                            <i class="fas fa-clipboard-check"></i>
                            <p class="w-100">دوره های ثبت نام شده</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="/dashboard-message">
                            <i class="far fa-comments"></i>
                            <p class="w-100">پیام ها</p> <span class="badge badge-info radius-rounded p-1 ml-1">2</span>
                        </a>
                    </li>
                    <li class="sidenav__item"><a class="text-center" href="/dashboard-reviews">
                            <i class="fas fa-clipboard-check"></i>
                            <p class="w-100">دوره های تایید شده</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="/dashboard-earnings"><i
                                class="fa fa-dollar"></i>
                            <p class="w-100">تراکنش ها</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="/dashboard-purchase-history">
                            <i class="fas fa-minus-square"></i>
                            <p class="w-100">دوره های تایید نشده</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="/dashboard-submit-course">
                            <i class="fas fa-notes-medical"></i>
                            <p class="w-100">ارسال دوره</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="{{ route('user.logout') }}">
                            <i class="fas fa-sign-out-alt"></i>
                            <p class="w-100">خروج</p>
                        </a></li>
                </ul>
            </div><!-- end side-menu-wrap -->
        @endcan
        @can('Parent')
            <div class="panel-type-title text-center p-3"><span>پنل والدین</span></div>
            <div class="side-menu-wrap">
                <ul class="side-menu-ul">
                    <li class="sidenav__item page-active"><a class="text-center" href="{{ route('panel') }}"><i
                                class="fa fa-dashboard"></i>
                            <p class="w-100">داشبورد</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="{{ route('level.index') }}">
                            <i class="fas fa-database"></i>
                            <p class="w-100">پایه ها</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="{{ route('lesson.index') }}">
                            <i class="fas fa-book-reader"></i>
                            <p class="w-100">دروس</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="/dashboard-courses">
                            <i class="fas fa-window-restore"></i>
                            <p class="w-100">دوره ها</p>
                        </a>
                    </li>
                    <li class="sidenav__item"><a class="text-center" href="{{ route('teacher.index') }}">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <p class="w-100">اساتید</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="{{ route('quiz.index') }}">
                            <i class="fas fa-edit"></i>
                            <p class="w-100">امتحانات</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="/dashboard-enrolled-courses">
                            <i class="fas fa-window-restore"></i>
                            <p class="w-100">دوره های ثبت نام شده</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="/dashboard-message">
                            <i class="far fa-comments"></i>
                            <p class="w-100">پیام ها</p> <span class="badge badge-info radius-rounded p-1 ml-1">2</span>
                        </a>
                    </li>
                    <li class="sidenav__item"><a class="text-center" href="/dashboard-earnings"><i
                                class="fa fa-dollar"></i>
                            <p class="w-100">تراکنش ها</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="{{ route('user.logout') }}">
                            <i class="fas fa-sign-out-alt"></i>
                            <p class="w-100">خروج</p>
                        </a></li>
                </ul>
            </div><!-- end side-menu-wrap -->
        @endcan
        @can('Student')
            <div class="panel-type-title text-center p-3"><span>پنل دانش آموز</span></div>
            <div class="side-menu-wrap">
                <ul class="side-menu-ul">
                    <li class="sidenav__item page-active"><a class="text-center" href="{{ route('panel') }}"><i
                                class="fa fa-dashboard"></i>
                            <p class="w-100">داشبورد</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="{{ route('level.index') }}">
                            <i class="fas fa-database"></i>
                            <p class="w-100">پایه ها</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="{{ route('lesson.index') }}">
                            <i class="fas fa-book-reader"></i>
                            <p class="w-100">دروس</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="/dashboard-courses">
                            <i class="fas fa-window-restore"></i>
                            <p class="w-100">دوره ها</p>
                        </a>
                    </li>
                    <li class="sidenav__item"><a class="text-center" href="{{ route('teacher.index') }}">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <p class="w-100">اساتید</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="{{ route('quiz.index') }}">
                            <i class="fas fa-edit"></i>
                            <p class="w-100">امتحانات</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="/dashboard-enrolled-courses">
                            <i class="fas fa-clipboard-check"></i>
                            <p class="w-100">دوره های ثبت نام شده</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="/dashboard-message">
                            <i class="far fa-comments"></i>
                            <p class="w-100">پیام ها</p> <span class="badge badge-info radius-rounded p-1 ml-1">2</span>
                        </a>
                    </li>
                    <li class="sidenav__item"><a class="text-center" href="/dashboard-earnings"><i
                                class="fa fa-dollar"></i>
                            <p class="w-100">تراکنش ها</p>
                        </a></li>
                    <li class="sidenav__item"><a class="text-center" href="{{ route('user.logout') }}">
                            <i class="fas fa-sign-out-alt"></i>
                            <p class="w-100">خروج</p>
                        </a></li>
                </ul>
            </div><!-- end side-menu-wrap -->
        @endcan

    </div>
</div>

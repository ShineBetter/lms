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
                <li class="sidenav__item page-active"><a class="text-center" href="{{route('panel')}}"><i
                            class="la la-dashboard"></i>
                        <p class="w-100">داشبورد</p></a></li>
                <li class="sidenav__item"><a class="text-center" href="{{route('level.index')}}"><i
                            class="la la-file-video-o"></i>
                        <p class="w-100">پایه ها</p></a></li>
                <li class="sidenav__item"><a class="text-center" href="{{route('lesson.index')}}"><i
                            class="la la-file-video-o"></i>
                        <p class="w-100">دروس</p></a></li>
                <li class="sidenav__item"><a class="text-center" href="/dashboard-courses"><i
                            class="la la-file-video-o"></i>
                        <p class="w-100">دوره ها</p></a></li>
                <li class="sidenav__item"><a class="text-center" href="/dashboard-quiz"><i class="la la-bolt"></i>
                        <p class="w-100">امتحانات</p></a></li>
                {{--                <li class="sidenav__item"><a class="text-center" href="/dashboard-bookmark"><i class="la la-bookmark"></i><p class="w-100">Bookmarks</p></a></li>--}}
                <li class="sidenav__item"><a class="text-center" href="/dashboard-enrolled-courses"><i
                            class="la la-graduation-cap"></i>
                        <p class="w-100">دوره های ثبت نام شده</p></a></li>
                <li class="sidenav__item"><a class="text-center" href="/dashboard-message"><i class="la la-bell"></i>
                        <p class="w-100">پیام ها</p> <span class="badge badge-info radius-rounded p-1 ml-1">2</span></a>
                </li>
                <li class="sidenav__item"><a class="text-center" href="/dashboard-reviews"><i class="la la-star"></i>
                        <p class="w-100">دوره های تایید شده</p></a></li>
                <li class="sidenav__item"><a class="text-center" href="/dashboard-earnings"><i class="la la-dollar"></i>
                        <p class="w-100">تراکنش ها</p></a></li>
                <li class="sidenav__item"><a class="text-center" href="/dashboard-withdraw"><i class="la la-money"></i>
                        <p class="w-100">درآمد</p></a></li>
                <li class="sidenav__item"><a class="text-center" href="/dashboard-purchase-history"><i
                            class="la la-shopping-cart"></i>
                        <p class="w-100">دوره های تایید نشده</p></a></li>
                <li class="sidenav__item"><a class="text-center" href="/dashboard-submit-course"><i
                            class="la la-plus-circle"></i>
                        <p class="w-100">ارسال دوره</p></a></li>
                <li class="sidenav__item"><a class="text-center" href="{{route('profile')}}"><i class="la la-cog"></i>
                        <p class="w-100">تنظیمات سایت</p></a></li>
                <li class="sidenav__item"><a class="text-center" href="{{route('user.logout')}}"><i class="la la-power-off"></i>
                        <p class="w-100">خروج</p></a></li>
                {{--                <li class="sidenav__item"><a class="text-center" href="javascript:void(0)" data-toggle="modal" data-target=".account-delete-modal" ><i class="la la-trash"></i> <p class="w-100">Delete Account</p></a></li>--}}
            </ul>
        </div><!-- end side-menu-wrap -->
    </div>
</div>

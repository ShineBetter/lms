<header class="header-menu-area">
    <div class="header-top">
        <div class="container-fluid">
            @php
                $contact=\Illuminate\Support\Facades\DB::table('contacts')->first()
            @endphp
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-widget text-right">
                        <ul class="header-action-list">

                            <li><a href="home-rtl.html#"><span class="la la-phone ml-2"></span>{{$contact->phone}}<i
                                        class="fas fa-phone"></i></a></li>
                            <li><a href="home-rtl.html#"><span class="la la-envelope-o mr-2"></span>{{$contact->email}}
                                    <i class="fas fa-envelope"></i></a></li>

                        </ul>
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="header-widget d-flex align-items-center justify-content-end">
                        <div class="header-right-info">
                            <ul class="header-social-profile">
{{--                                @php--}}
{{--                                    $data=\Illuminate\Support\Facades\DB::table('socials')->get()--}}
{{--                                @endphp--}}
{{--                                @foreach($data as $item)--}}
{{--                                    <li><a name="{{$item->social_name}}" href="{{$item->social_link}}"><i--}}
{{--                                                class="{{$item->social_icon}}"></i></a></li>--}}
{{--                                @endforeach--}}
                                @php
                                    $socials=\Illuminate\Support\Facades\DB::table('socials')->get()
                                @endphp
                                @foreach($socials as $social)
                                    <li><a name="{{$social->social_name}}" href="{{$social->social_link}}"><i
                                                class="{{$social->social_icon}}"></i></a></li>
                                @endforeach
{{--                                    <li><a href=""><i class="fab fa-facebook"></i></a></li>--}}
{{--                                    <li><a href=""><i class="fab fa-twitter"></i></a></li>--}}
{{--                                    <li><a href=""><i class="fab fa-instagram"></i></a></li>--}}
{{--                                    <li><a href=""><i class="fab fa-linkedin"></i></a></li>--}}
                            </ul>
                        </div><!-- end header-right-info -->
                        <div class="header-right-info">
                            <ul class="header-action-list">
                                @if(\Illuminate\Support\Facades\Auth::check())
                                    <li style="border-left: 1px solid rgba(127, 136, 151, 0.1);padding-left: 15px;"><a href="{{route('panel')}}">پنل کاربری</a></li>
                                    <li><a href="{{route('user.logout')}}">خروج</a></li>
                                @else
                                    <li style="border-left: 1px solid rgba(127, 136, 151, 0.1);padding-left: 15px;"><a href="{{route('login.form')}}">ورود</a></li>
                                    <li><a href="{{route('register.form')}}">ثبت نام</a></li>
                                @endif
                            </ul>
                        </div><!-- end header-right-info -->
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-top -->
    <div class="header-menu-content">
        <div class="container-fluid">
            <div class="main-menu-content">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <div class="menu-wrapper float-right">
                            <nav class="main-menu">
                                <ul>
                                    <li>
                                        <a href="/">خانه</a>
                                    </li>
                                    <li>
                                        <a>امتحانات</a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="/course-grid">صفحه امتحانات</a></li>
                                            {{--                                            <li><a href="/course-details">امتحان</a></li>--}}
                                            <li><a href="/course-grid">ازمون ها</a></li>
                                            {{--                                            <li><a href="/my-courses">امتحانات من</a></li>--}}
                                        </ul>
                                    </li>
{{--                                    <li>--}}
{{--                                        <a>دانش آموزان</a>--}}
{{--                                        <ul class="dropdown-menu-item">--}}
{{--                                            --}}{{--                                            <li><a href="/student-detail">student detail</a></li>--}}
{{--                                            <li><a href="/student-quiz">آزمون</a></li>--}}
{{--                                            --}}{{--                                            <li><a href="/student-quiz-result">quiz results</a> <span class="new-page-badge">New</span></li>--}}
{{--                                            <li><a href="/student-quiz-result-details">پاسخ آزمون</a></li>--}}
{{--                                            <li><a href="/student-quiz-result-details-2">کارنامه</a></li>--}}
{{--                                            --}}{{--                                            <li><a href="/student-path-assessment">جواب صفحات</a> <span class="new-page-badge">New</span></li>--}}
{{--                                            --}}{{--                                            <li><a href="/student-path-assessment-result">Skill result</a> <span class="new-page-badge">New</span></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
                                    <li>
                                        <a>صفحات</a>
                                        <ul class="dropdown-menu-item">
                                            {{--                                            <li><a href="dashboard.html">dashboard</a></li>--}}

                                            <li><a href="/teachers">دبیران</a></li>
                                            <li><a href="/teacher-detail">پروفایل دبیران</a></li>
                                            {{--                                            <li><a href="../become-a-teacher.blade.php">become instructor</a></li>--}}
                                            <li><a href="/faq">مشاوران</a></li>
                                            {{--                                            <li><a href="../admission.blade.php">admission</a></li>--}}
                                            {{--                                            <li><a href="gallery.html">gallery</a></li>--}}
                                            <li><a href="/pricing-table">قیمت همایشات</a></li>
                                            {{--                                            <li><a href="sign-up.html">sign-up</a></li>--}}
                                            {{--                                            <li><a href="login.html">login</a></li>--}}
                                            {{--                                            <li><a href="recover.html">recover</a></li>--}}
{{--                                            <li><a href="/course-grid">فروشگاه</a></li>--}}
                                            {{--                                            <li><a href="../checkout.blade.php">checkout</a></li>--}}
                                            {{--                                            <li><a href="error.html">error 404 page</a></li>--}}
                                        </ul>
                                    </li>
                                    {{--                                    <li>--}}
                                    {{--                                        <a href="home-rtl.html#">blog</a>--}}
                                    {{--                                        <ul class="dropdown-menu-item">--}}
                                    {{--                                            <li><a href="../blog-full-width.blade.php">blog full width </a></li>--}}
                                    {{--                                            <li><a href="../blog-grid.blade.php">blog grid</a></li>--}}
                                    {{--                                            <li><a href="../blog-left-sidebar.blade.php">blog left sidebar</a></li>--}}
                                    {{--                                            <li><a href="../blog-right-sidebar.blade.php">blog right sidebar</a></li>--}}
                                    {{--                                            <li><a href="../blog-single.blade.php">blog detail</a></li>--}}
                                    {{--                                        </ul>--}}
                                    {{--                                    </li>--}}
                                    <li><a href="/about">درباره ما</a></li>
                                    <li><a href="/contact">تماس با ما</a></li>
                                </ul><!-- end ul -->
                            </nav><!-- end main-menu -->
                            <!-- end menu-category -->
                            <div class="contact-form-action">
                                <form method="post">
                                    <div class="input-box">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="search" placeholder="جستجو">
                                            <span class="la la-search search-icon">
                                                <i class="fas fa-search"></i>
                                            </span>
                                        </div>
                                    </div><!-- end input-box -->
                                </form>
                            </div><!-- end contact-form-action -->

                            {{--                            <div class="logo-right-button">--}}
                            {{--                                <a href="../admission.blade.php" class="theme-btn">داشبورد</a>--}}
                            {{--                            </div><!-- end logo-right-button -->--}}
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-10 -->
                    <div class="col-lg-3">
                        <div class="logo-box">
                            <a href="../index.blade.php" class="logo"><img src="/images/logo.png" alt="logo"></a>
                            <div class="menu-toggler">
                                <i class="fas fa-bars"></i>
                                {{--                                <i class="fas fa-times"></i>--}}
                            </div>
                        </div>
                    </div><!-- end col-lg-2 -->

                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
</header>

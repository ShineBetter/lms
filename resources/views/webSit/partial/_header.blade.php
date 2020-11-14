<header class="header-menu-area">
    <div class="header-top">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-widget">
                        <ul class="header-action-list">
                            <li><a href="home-rtl.html#"><span class="la la-phone mr-2"></span>123-456-789</a> </li>
                            <li><a href="home-rtl.html#"><span class="la la-envelope-o mr-2"></span>contact@aduca.com</a></li>
                        </ul>
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="header-widget d-flex align-items-center justify-content-end">
                        <div class="header-right-info">
                            <ul class="header-social-profile">
                                <li><a href="home-rtl.html#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="home-rtl.html#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="home-rtl.html#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="home-rtl.html#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- end header-right-info -->
                        <div class="header-right-info">
                            <div class="shop-cart">
                                <ul>
                                    <li>
                                        <p class="shop-cart-btn d-flex align-items-center">
                                            <i class="la la-shopping-cart"></i>
                                            <span class="product-count ml-1">2</span>
                                        </p>
                                        <ul class="cart-dropdown-menu">
                                            <li>
                                                <a href="shopping-cart.html" class="cart-link">
                                                    <img src="{{asset('template_sit/images/small-img.jpg')}}" alt="product">
                                                </a>
                                                <p class="cart-info">
                                                    <a href="shopping-cart.html">
                                                        The Complete Financial Analyst Course 2019
                                                    </a>
                                                    <span class="cart__author">Josh Purdila</span>
                                                    <span class="cart__price">
                                                           $22.99 <span class="before-price">$55.99</span>
                                                        </span>
                                                </p>
                                            </li>
                                            <li>
                                                <a href="shopping-cart.html" class="cart-link">
                                                    <img src="{{asset('template_sit/images/small-img.jpg')}}" alt="product">
                                                </a>
                                                <p class="cart-info">
                                                    <a href="shopping-cart.html">
                                                        The Complete Financial Analyst Course 2019
                                                    </a>
                                                    <span class="cart__author">Josh Purdila</span>
                                                    <span class="cart__price">
                                                           $22.99 <span class="before-price">$55.99</span>
                                                    </span>
                                                </p>
                                            </li>
                                            <li>
                                                <p class="cart-total">Total: $44.99<span class="before-price">$110.99</span></p>
                                            </li>
                                            <li>
                                                <a class="theme-btn w-100 text-center" href="shopping-cart.html">go to Cart</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- end shop-cart -->
                        </div><!-- end header-right-info -->
                        <div class="header-right-info">
                            <ul class="header-action-list">
                                @auth
                                    @if(Auth::user()->role=='admin')
                                        <li><i class="ti-user"></i> <a href="{{url('/admin')}}"  target="_blank">داشبورد مدیر</a></li>
                                    @else
                                        <li><i class="ti-user"></i> <a href="{{route('home')}}"  target="_blank">داشبورد کاربر</a></li>
                                    @endif
                                    <li><i class="ti-power-off"></i> <a href="{{route('user.logout')}}">خروج</a></li>

                                @else
{{--                                    <li><i class="ti-power-off"></i><a href="{{url('user/login')}}">ورود /</a> <a href="{{url('user/register')}}">ثبت نام</a></li>--}}
                                    <li><a href="{{url('user/login')}}">ورود</a></li>
                                    <li>or</li>
                                    <li><a href="{{url('user/register')}}">ثبت نام</a></li>
                                @endauth
{{--                                <li><a href="{{url('user/login')}}">ورود</a></li>--}}
{{--                                <li>or</li>--}}
{{--                                <li><a href="{{url('user/register')}}">ثبت نام</a></li>--}}
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
                    <div class="col-lg-2">
                        <div class="logo-box">
                            <a href="index.html" class="logo"><img src="{{asset('template_sit/images/logo.png')}}" alt="logo"></a>
                            <div class="menu-toggler">
                                <i class="la la-bars"></i>
                                <i class="la la-times"></i>
                            </div>
                        </div>
                    </div><!-- end col-lg-2 -->
                    <div class="col-lg-10">
                        <div class="menu-wrapper">
                            <div class="menu-category">
                                <ul>
                                    <li>
                                        <a href="home-rtl.html#"><i class="la la-th-large mr-1"></i>Categories</a>
                                        <ul class="cat-dropdown-menu">
                                            <li>
                                                <a href="course-grid.html">Development <i class="la la-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="home-rtl.html#">All Development</a></li>
                                                    <li><a href="home-rtl.html#">Web Development</a></li>
                                                    <li><a href="home-rtl.html#">Mobile Apps</a></li>
                                                    <li><a href="home-rtl.html#">Game Development</a></li>
                                                    <li><a href="home-rtl.html#">Databases</a></li>
                                                    <li><a href="home-rtl.html#">Programming Languages</a></li>
                                                    <li><a href="home-rtl.html#">Software Testing</a></li>
                                                    <li><a href="home-rtl.html#">Software Engineering</a></li>
                                                    <li><a href="home-rtl.html#">E-Commerce</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="course-grid.html">business <i class="la la-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="home-rtl.html#">All Business</a></li>
                                                    <li><a href="home-rtl.html#">Finance</a></li>
                                                    <li><a href="home-rtl.html#">Entrepreneurship</a></li>
                                                    <li><a href="home-rtl.html#">Strategy</a></li>
                                                    <li><a href="home-rtl.html#">Real Estate</a></li>
                                                    <li><a href="home-rtl.html#">Home Business</a></li>
                                                    <li><a href="home-rtl.html#">Communications</a></li>
                                                    <li><a href="home-rtl.html#">Industry</a></li>
                                                    <li><a href="home-rtl.html#">Other</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="course-grid.html">IT & Software <i class="la la-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="home-rtl.html#">All IT & Software</a></li>
                                                    <li><a href="home-rtl.html#">IT Certification</a></li>
                                                    <li><a href="home-rtl.html#">Hardware</a></li>
                                                    <li><a href="home-rtl.html#">Network & Security</a></li>
                                                    <li><a href="home-rtl.html#">Operating Systems</a></li>
                                                    <li><a href="home-rtl.html#">Other</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="course-grid.html">Finance & Accounting <i class="la la-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="home-rtl.html#"> All Finance & Accounting</a></li>
                                                    <li><a href="home-rtl.html#">Accounting & Bookkeeping</a></li>
                                                    <li><a href="home-rtl.html#">Cryptocurrency & Blockchain</a></li>
                                                    <li><a href="home-rtl.html#">Economics</a></li>
                                                    <li><a href="home-rtl.html#">Investing & Trading</a></li>
                                                    <li><a href="home-rtl.html#">Other Finance & Economics</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="course-grid.html">design <i class="la la-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="home-rtl.html#">All Design</a></li>
                                                    <li><a href="home-rtl.html#">Graphic Design</a></li>
                                                    <li><a href="home-rtl.html#">Web Design</a></li>
                                                    <li><a href="home-rtl.html#">Design Tools</a></li>
                                                    <li><a href="home-rtl.html#">3D & Animation</a></li>
                                                    <li><a href="home-rtl.html#">User Experience</a></li>
                                                    <li><a href="home-rtl.html#">Other</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="course-grid.html">Personal Development <i class="la la-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="home-rtl.html#">All Personal Development</a></li>
                                                    <li><a href="home-rtl.html#">Personal Transformation</a></li>
                                                    <li><a href="home-rtl.html#">Productivity</a></li>
                                                    <li><a href="home-rtl.html#">Leadership</a></li>
                                                    <li><a href="home-rtl.html#">Personal Finance</a></li>
                                                    <li><a href="home-rtl.html#">Career Development</a></li>
                                                    <li><a href="home-rtl.html#">Parenting & Relationships</a></li>
                                                    <li><a href="home-rtl.html#">Happiness</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="course-grid.html">Marketing <i class="la la-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="home-rtl.html#">All Marketing</a></li>
                                                    <li><a href="home-rtl.html#">Digital Marketing</a></li>
                                                    <li><a href="home-rtl.html#">Search Engine Optimization</a></li>
                                                    <li><a href="home-rtl.html#">Social Media Marketing</a></li>
                                                    <li><a href="home-rtl.html#">Branding</a></li>
                                                    <li><a href="home-rtl.html#">Video & Mobile Marketing</a></li>
                                                    <li><a href="home-rtl.html#">Affiliate Marketing</a></li>
                                                    <li><a href="home-rtl.html#">Growth Hacking</a></li>
                                                    <li><a href="home-rtl.html#">Other</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="course-grid.html">Health & Fitness <i class="la la-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="home-rtl.html#">All Health & Fitness</a></li>
                                                    <li><a href="home-rtl.html#">Fitness</a></li>
                                                    <li><a href="home-rtl.html#">Sports</a></li>
                                                    <li><a href="home-rtl.html#">Dieting</a></li>
                                                    <li><a href="home-rtl.html#">Self Defense</a></li>
                                                    <li><a href="home-rtl.html#">Meditation</a></li>
                                                    <li><a href="home-rtl.html#">Mental Health</a></li>
                                                    <li><a href="home-rtl.html#">Yoga</a></li>
                                                    <li><a href="home-rtl.html#">Dance</a></li>
                                                    <li><a href="home-rtl.html#">Other</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="course-grid.html">Photography <i class="la la-angle-right"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="home-rtl.html#">All Photography</a></li>
                                                    <li><a href="home-rtl.html#">Digital Photography</a></li>
                                                    <li><a href="home-rtl.html#">Photography Fundamentals</a></li>
                                                    <li><a href="home-rtl.html#">Commercial Photography</a></li>
                                                    <li><a href="home-rtl.html#">Video Design</a></li>
                                                    <li><a href="home-rtl.html#">Photography Tools</a></li>
                                                    <li><a href="home-rtl.html#">Other</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- end menu-category -->
                            <div class="contact-form-action">
                                <form method="post">
                                    <div class="input-box">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="search" placeholder="Search for anything">
                                            <span class="la la-search search-icon"></span>
                                        </div>
                                    </div><!-- end input-box -->
                                </form>
                            </div><!-- end contact-form-action -->
                            <nav class="main-menu">
                                <ul>
                                    <li>
                                        <a href="home-rtl.html#">Home</a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="index.html">Home 01</a></li>
                                            <li><a href="home-2.html">Home 02</a></li>
                                            <li><a href="home-3.html">Home 03</a></li>
                                            <li><a href="home-rtl.html">Home RTL</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="home-rtl.html#">courses</a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="course-grid.html">course grid</a></li>
                                            <li><a href="course-details.html">course details</a></li>
                                            <li><a href="lesson-details.html">lesson details</a></li>
                                            <li><a href="my-courses.html">My courses</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="home-rtl.html#">Student</a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="student-detail.html">student detail</a></li>
                                            <li><a href="student-quiz.html">take quiz</a> <span class="new-page-badge">New</span></li>
                                            <li><a href="student-quiz-results.html">quiz results</a> <span class="new-page-badge">New</span></li>
                                            <li><a href="student-quiz-result-details.html">quiz details</a> <span class="new-page-badge">New</span></li>
                                            <li><a href="student-quiz-result-details-2.html">quiz details 2</a> <span class="new-page-badge">New</span></li>
                                            <li><a href="student-path-assessment.html">Skill Assessment</a> <span class="new-page-badge">New</span></li>
                                            <li><a href="student-path-assessment-result.html">Skill result</a> <span class="new-page-badge">New</span></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="home-rtl.html#">pages</a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="dashboard.html">dashboard</a></li>
                                            <li><a href="about.html">about</a></li>
                                            <li><a href="teachers.html">Teachers</a></li>
                                            <li><a href="teacher-detail.html">Teacher detail</a></li>
                                            <li><a href="become-a-teacher.html">become instructor</a></li>
                                            <li><a href="faq.html">FAQs</a></li>
                                            <li><a href="admission.html">admission</a></li>
                                            <li><a href="gallery.html">gallery</a></li>
                                            <li><a href="pricing-table.html">pricing tables</a></li>
                                            <li><a href="sign-up.html">sign-up</a></li>
                                            <li><a href="login.html">login</a></li>
                                            <li><a href="recover.html">recover</a></li>
                                            <li><a href="shopping-cart.html">cart</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="error.html">error 404 page</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="home-rtl.html#">blog</a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="blog-full-width.html">blog full width </a></li>
                                            <li><a href="blog-grid.html">blog grid</a></li>
                                            <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                            <li><a href="blog-single.html">blog detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul><!-- end ul -->
                            </nav><!-- end main-menu -->
                            <div class="logo-right-button">
                                <a href="admission.html" class="theme-btn">admission</a>
                            </div><!-- end logo-right-button -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
</header>

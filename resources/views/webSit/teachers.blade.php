<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
@extends('webSit.layout.head')
@section('cnt')
    @php
        $loader="dont";


    @endphp<!-- end header-menu-area -->
<!--======================================
        END HEADER AREA
======================================-->

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <div class="section-heading">
                        <h2 class="section__title">دبیران</h2>
                    </div>
                    <ul class="breadcrumb__list">
                        <li class="active__list-item"><a href="../index.blade.php">خانـه<i class="fas fa-angle-left mr-2"></i></a></li>
                        <li class="active__list-item">صفحه ها<i class="fas fa-angle-left mr-2"></i></li>
                        <li>دبیران</li>
                    </ul>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!--======================================
        START TEAM AREA
======================================-->
<section class="team-area section-padding">
    <div class="container">
        <div class="row">
            @php
                $aboutTeachers=\Illuminate\Support\Facades\DB::table('about_teachers')->get()
            @endphp
            @foreach($aboutTeachers as $aboutTeacher)
                <div class="col-lg-4 column-td-half">
                    <div class="team-item">
                        <div class="team-img-box">
                            <img src="{{asset($aboutTeacher->picture)}}" alt="">
                            <ul class="social-profile">
                                <li class="text-white">{{$aboutTeacher->filed}}</li>
                            </ul>
                        </div>
                        <div class="team-detail">
                            <h3 class="team__title"><a href="teacher-detail.html">{{$aboutTeacher->header}}</a></h3>
                            <p class="team__meta">{{$aboutTeacher->filed}}</p>
{{--                            <a href="{{route('teacher-detail',$aboutTeacher->id)}}" class="theme-btn theme-btn-light" >--}}
                                                    <a href="{{route('teacher-detail',$aboutTeacher->id)}}" class="theme-btn">پروفایل</a>
                        </div>
                    </div><!-- end team-item -->
                </div>
            @endforeach
{{--            <div class="col-lg-4 column-td-half">--}}
{{--                <div class="team-item">--}}
{{--                    <div class="team-img-box">--}}
{{--                        <img src="/images/team.jpg" alt="">--}}
{{--                        <ul class="social-profile">--}}
{{--                            <li><a href="teachers.html#"><i class="fab fa-instagram"></i></a></li>--}}
{{--                            <li><a href="teachers.html#"><i class="far fa-envelope"></i></a></li>--}}
{{--                            <li><a href="teachers.html#"><i class="fab fa-telegram-plane"></i></a></li>--}}
{{--                            <li><a href="teachers.html#"><i class="fas fa-phone"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="team-detail">--}}
{{--                        <h3 class="team__title"><a href="teacher-detail.html">کرامتی</a></h3>--}}
{{--                        <p class="team__meta">شیمی</p>--}}
{{--                        <p class="team__text">--}}
{{--                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی لورم ایپسوم متن ساختگی--}}
{{--                        </p>--}}
{{--                        <a href="teacher-detail.html" class="theme-btn">پروفایل</a>--}}
{{--                    </div>--}}
{{--                </div><!-- end team-item -->--}}
{{--            </div><!-- end col-lg-4 -->--}}
{{--            <div class="col-lg-4 column-td-half">--}}
{{--                <div class="team-item">--}}
{{--                    <div class="team-img-box">--}}
{{--                        <img src="/images/team2.jpg" alt="">--}}
{{--                        <ul class="social-profile">--}}
{{--                            <li><a href="teachers.html#"><i class="fab fa-instagram"></i></a></li>--}}
{{--                            <li><a href="teachers.html#"><i class="far fa-envelope"></i></a></li>--}}
{{--                            <li><a href="teachers.html#"><i class="fab fa-telegram-plane"></i></a></li>--}}
{{--                            <li><a href="teachers.html#"><i class="fas fa-phone"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="team-detail">--}}
{{--                        <h3 class="team__title"><a href="teacher-detail.html">کرامتی</a></h3>--}}
{{--                        <p class="team__meta">شیمی</p>--}}
{{--                        <p class="team__text">--}}
{{--                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی لورم ایپسوم متن ساختگی--}}
{{--                        </p>--}}
{{--                        <a href="teacher-detail.html" class="theme-btn">پروفایل</a>--}}
{{--                    </div>--}}
{{--                </div><!-- end team-item -->--}}
{{--            </div><!-- end col-lg-4 -->--}}
{{--            <div class="col-lg-4 column-td-half">--}}
{{--                <div class="team-item">--}}
{{--                    <div class="team-img-box">--}}
{{--                        <img src="/images/team3.jpg" alt="">--}}
{{--                        <ul class="social-profile">--}}
{{--                            <li><a href="teachers.html#"><i class="fab fa-instagram"></i></a></li>--}}
{{--                            <li><a href="teachers.html#"><i class="far fa-envelope"></i></a></li>--}}
{{--                            <li><a href="teachers.html#"><i class="fab fa-telegram-plane"></i></a></li>--}}
{{--                            <li><a href="teachers.html#"><i class="fas fa-phone"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="team-detail">--}}
{{--                        <h3 class="team__title"><a href="teacher-detail.html">کرامتی</a></h3>--}}
{{--                        <p class="team__meta">شیمی</p>--}}
{{--                        <p class="team__text">--}}
{{--                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی لورم ایپسوم متن ساختگی--}}
{{--                        </p>--}}
{{--                        <a href="teacher-detail.html" class="theme-btn">پروفایل</a>--}}
{{--                    </div>--}}
{{--                </div><!-- end team-item -->--}}
{{--            </div><!-- end col-lg-4 -->--}}
{{--            <div class="col-lg-4 column-td-half">--}}
{{--                <div class="team-item">--}}
{{--                    <div class="team-img-box">--}}
{{--                        <img src="/images/team4.jpg" alt="">--}}
{{--                        <ul class="social-profile">--}}
{{--                            <li><a href="teachers.html#"><i class="fab fa-instagram"></i></a></li>--}}
{{--                            <li><a href="teachers.html#"><i class="far fa-envelope"></i></a></li>--}}
{{--                            <li><a href="teachers.html#"><i class="fab fa-telegram-plane"></i></a></li>--}}
{{--                            <li><a href="teachers.html#"><i class="fas fa-phone"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="team-detail">--}}
{{--                        <h3 class="team__title"><a href="teacher-detail.html">کرامتی</a></h3>--}}
{{--                        <p class="team__meta">شیمی</p>--}}
{{--                        <p class="team__text">--}}
{{--                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی لورم ایپسوم متن ساختگی--}}
{{--                        </p>--}}
{{--                        <a href="teacher-detail.html" class="theme-btn">پروفایل</a>--}}
{{--                    </div>--}}
{{--                </div><!-- end team-item -->--}}
{{--            </div><!-- end col-lg-4 -->--}}
{{--            <div class="col-lg-4 column-td-half">--}}
{{--                <div class="team-item">--}}
{{--                    <div class="team-img-box">--}}
{{--                        <img src="/images/team5.jpg" alt="">--}}
{{--                        <ul class="social-profile">--}}
{{--                            <li><a href="teachers.html#"><i class="fab fa-instagram"></i></a></li>--}}
{{--                            <li><a href="teachers.html#"><i class="far fa-envelope"></i></a></li>--}}
{{--                            <li><a href="teachers.html#"><i class="fab fa-telegram-plane"></i></a></li>--}}
{{--                            <li><a href="teachers.html#"><i class="fas fa-phone"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="team-detail">--}}
{{--                        <h3 class="team__title"><a href="teacher-detail.html">کرامتی</a></h3>--}}
{{--                        <p class="team__meta">شیمی</p>--}}
{{--                        <p class="team__text">--}}
{{--                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی لورم ایپسوم متن ساختگی--}}
{{--                        </p>--}}
{{--                        <a href="teacher-detail.html" class="theme-btn">پروفایل</a>--}}
{{--                    </div>--}}
{{--                </div><!-- end team-item -->--}}
{{--            </div><!-- end col-lg-4 -->--}}
{{--            <div class="col-lg-4 column-td-half">--}}
{{--                <div class="team-item">--}}
{{--                    <div class="team-img-box">--}}
{{--                        <img src="/images/team6.jpg" alt="">--}}
{{--                        <ul class="social-profile">--}}
{{--                            <li><a href="teachers.html#"><i class="fab fa-instagram"></i></a></li>--}}
{{--                            <li><a href="teachers.html#"><i class="far fa-envelope"></i></a></li>--}}
{{--                            <li><a href="teachers.html#"><i class="fab fa-telegram-plane"></i></a></li>--}}
{{--                            <li><a href="teachers.html#"><i class="fas fa-phone"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="team-detail">--}}
{{--                        <h3 class="team__title"><a href="teacher-detail.html">کرامتی</a></h3>--}}
{{--                        <p class="team__meta">شیمی</p>--}}
{{--                        <p class="team__text">--}}
{{--                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی لورم ایپسوم متن ساختگی--}}
{{--                        </p>--}}
{{--                        <a href="teacher-detail.html" class="theme-btn">پروفایل</a>--}}
{{--                    </div>--}}
{{--                </div><!-- end team-item -->--}}
{{--            </div><!-- end col-lg-4 -->--}}
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-box mt-2 text-center">
{{--                    <button class="theme-btn" type="button">در ادامه</button>--}}
                </div>
            </div>
        </div>
    </div><!-- end container -->
</section><!-- end team-area -->
<!--======================================
        END TEAM AREA
======================================-->

<!--================================
        START GET STAR AREA
=================================-->
{{--<div class="subscriber-area call-to-action padding-top-40px padding-bottom-40px">--}}
{{--    <div class="container">--}}
{{--        <div class="row align-items-center">--}}
{{--            <div class="col-lg-8">--}}
{{--                <div class="call-to-action-heading d-flex align-items-center">--}}
{{--                    <div class="call-to-action-icon">--}}
{{--                        <svg viewBox="0 -48 496 496" xmlns="http://www.w3.org/2000/svg"><path d="m472 0h-448c-13.230469 0-24 10.769531-24 24v352c0 13.230469 10.769531 24 24 24h448c13.230469 0 24-10.769531 24-24v-352c0-13.230469-10.769531-24-24-24zm8 376c0 4.414062-3.59375 8-8 8h-448c-4.40625 0-8-3.585938-8-8v-352c0-4.40625 3.59375-8 8-8h448c4.40625 0 8 3.59375 8 8zm0 0"/><path d="m448 32h-400v240h400zm-16 224h-368v-208h368zm0 0"/><path d="m328 200.136719c0-17.761719-11.929688-33.578125-29.007812-38.464844l-26.992188-7.703125v-2.128906c9.96875-7.511719 16-19.328125 16-31.832032v-14.335937c0-21.503906-16.007812-39.726563-36.449219-41.503906-11.183593-.96875-22.34375 2.800781-30.574219 10.351562-8.25 7.550781-12.976562 18.304688-12.976562 29.480469v16c0 12.503906 6.03125 24.328125 16 31.832031v2.128907l-26.992188 7.710937c-17.078124 4.886719-29.007812 20.703125-29.007812 38.464844v39.863281h160zm-16 23.863281h-128v-23.863281c0-10.664063 7.160156-20.152344 17.40625-23.082031l38.59375-11.023438v-23.070312l-3.976562-2.3125c-7.527344-4.382813-12.023438-12.105469-12.023438-20.648438v-16c0-6.703125 2.839844-13.160156 7.792969-17.695312 5.007812-4.601563 11.496093-6.832032 18.382812-6.207032 12.230469 1.0625 21.824219 12.285156 21.824219 25.566406v14.335938c0 8.542969-4.496094 16.265625-12.023438 20.648438l-3.976562 2.3125v23.070312l38.59375 11.023438c10.246094 2.9375 17.40625 12.425781 17.40625 23.082031zm0 0"/><path d="m32 364.945312 73.886719-36.945312-73.886719-36.945312zm16-48 22.113281 11.054688-22.113281 11.054688zm0 0"/><path d="m152 288h16v80h-16zm0 0"/><path d="m120 288h16v80h-16zm0 0"/><path d="m336 288h-48v32h-104v16h104v32h48v-32h128v-16h-128zm-16 64h-16v-48h16zm0 0"/></svg>--}}
{{--                    </div>--}}
{{--                    <div class="section-heading">--}}
{{--                        <h2 class="section__title font-size-20 pb-1">Become a Teacher, Share your knowledge</h2>--}}
{{--                        <p class="section__desc mb-0 ">Create an online video course, reach students across the globe, and earn money</p>--}}
{{--                    </div><!-- end section-heading -->--}}
{{--                </div>--}}
{{--            </div><!-- end col-lg-8 -->--}}
{{--            <div class="col-lg-4">--}}
{{--                <div class="btn-box text-right">--}}
{{--                    <a href="teachers.html#" class="theme-btn">Tech on aduca</a>--}}
{{--                </div><!-- end btn-box-->--}}
{{--            </div><!-- end col-lg-4 -->--}}
{{--        </div><!-- end row -->--}}
{{--    </div><!-- end container -->--}}
{{--</div><!-- end subscriber-area -->--}}
<!--================================
        END GET STAR AREA
=================================-->

<!-- ================================
         END FOOTER AREA
================================= -->

<!-- end scroll top -->



<!-- template js files -->
<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap-select.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/isotope.js"></script>
<script src="/js/waypoint.min.js"></script>
<script src="/js/jquery.counterup.min.js"></script>
<script src="/js/fancybox.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/smooth-scrolling.js"></script>
<script src="/js/date-time-picker.js"></script>
<script src="/js/jquery.filer.min.js"></script>
<script src="/js/tooltipster.bundle.min.js"></script>
<script src="/js/main.js"></script>
@endsection

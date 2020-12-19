@extends('webSit.layout.head')
@section('cnt')
    @php
        $loader="dont";


    @endphp
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<!-- end header-menu-area -->
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
                        <h2 class="section__title">مشاوره</h2>
                    </div>
                    <ul class="breadcrumb__list">
                        <li class="active__list-item"><a href="../index.blade.php">خانـه<i class="fas fa-angle-left mr-2"></i></a></li>
                        <li class="active__list-item">صفحه ها<i class="fas fa-angle-left mr-2"></i></li>
                        <li>مشاوره</li>
                    </ul>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START FAQ AREA
================================= -->

    <section class="faq-topic section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h5 class="section__meta">پشتیبانی ما</h5>
                        <h2 class="section__title">با ما رایگان مشاوره کنید</h2>
                        <span class="section-divider"></span>
                        <p class="section__desc">
                            مجم.عه ی میربلند با سابقه 10 ساله در صنعت آموزش<br>همیار شما در مسیر آموزش و سرفرازی در کسب علم و دانش میباشد
                        </p>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row mt-3">
                <div class="col-lg-4 column-td-half">
                    <a href="/faq" class="icon-box d-flex align-items-center">
                        <div class="icon-element icon-element-bg-1 flex-shrink-0">
                            <i class="fas fa-school"></i>
                        </div><!-- end icon-element-->
                        <div class="info-content">
                            <h4 class="info__title font-size-18 primary-color font-weight-bold">چطور ثبت نام کنیم؟</h4>
{{--                            <span class="info__meta primary-color-3">ثبت نام</span>--}}
                        </div><!-- end info-content -->
                    </a>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-td-half">
                    <a href="/faq" class="icon-box d-flex align-items-center">
                        <div class="icon-element icon-element-bg-2 flex-shrink-0">
                            <i class="fas fa-user-graduate"></i>
                        </div><!-- end icon-element-->
                        <div class="info-content">
                            <h4 class="info__title font-size-18 primary-color font-weight-bold">چطور ثبت نام کنیم؟</h4>
{{--                            <span class="info__meta primary-color-3">ثبت نام</span>--}}
                        </div><!-- end info-content -->
                    </a>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-td-half">
                    <a href="/faq" class="icon-box d-flex align-items-center">
                        <div class="icon-element icon-element-bg-3 flex-shrink-0">
                            <i class="far fa-user"></i>
                        </div><!-- end icon-element-->
                        <div class="info-content">
                            <h4 class="info__title font-size-18 primary-color font-weight-bold">چطور ثبت نام کنیم؟</h4>
{{--                            <span class="info__meta primary-color-3">ثبت نام</span>--}}
                        </div><!-- end info-content -->
                    </a>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-td-half">
                    <a href="/faq" class="icon-box d-flex align-items-center">
                        <div class="icon-element icon-element-bg-4 flex-shrink-0">
                            <i class="far fa-file-word"></i>
                        </div><!-- end icon-element-->
                        <div class="info-content">
                            <h4 class="info__title font-size-18 primary-color font-weight-bold">چطور ثبت نام کنیم؟</h4>
{{--                            <span class="info__meta primary-color-3">ثبت نام</span>--}}
                        </div><!-- end info-content -->
                    </a>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-td-half">
                    <a href="/faq" class="icon-box d-flex align-items-center">
                        <div class="icon-element icon-element-bg-5 flex-shrink-0">
                            <i class="far fa-edit"></i>
                        </div><!-- end icon-element-->
                        <div class="info-content">
                            <h4 class="info__title font-size-18 primary-color font-weight-bold">چطور ثبت نام کنیم؟</h4>
{{--                            <span class="info__meta primary-color-3">ثبت نام</span>--}}
                        </div><!-- end info-content -->
                    </a>
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 column-td-half">
                    <a href="/faq" class="icon-box d-flex align-items-center">
                        <div class="icon-element icon-element-bg-6 flex-shrink-0">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div><!-- end icon-element-->
                        <div class="info-content">
                            <h4 class="info__title font-size-18 primary-color font-weight-bold">چطور ثبت نام کنیم؟</h4>
{{--                            <span class="info__meta primary-color-3">ثبت نام</span>--}}
                        </div><!-- end info-content -->
                    </a>
                </div><!-- end col-lg-4 -->
            </div>
        </div><!-- end container -->
    </section><!-- end faq-topic -->
<!-- ================================
    END FAQ AREA
================================= -->

<!-- ================================
       START FAQ AREA
================================= -->
<section class="faq-area section-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="faq-body">
                    <div class="accordion accordion-shared accordion-shared-2" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fas fa-angle-up"></i>
                                        <i class="fas fa-angle-down"></i>
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                    </button>
                                </h2>
                            </div><!-- end card-header -->
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد</p>
                                </div><!-- end card-body -->
                            </div><!-- end collapse -->
                        </div><!-- end card -->
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="fas fa-angle-up"></i>
                                        <i class="fas fa-angle-down"></i>
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد</p>
                                </div><!-- end card-body -->
                            </div><!-- end collapse -->
                        </div><!-- end card -->
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="fas fa-angle-up"></i>
                                        <i class="fas fa-angle-down"></i>
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                    </button>
                                </h2>
                            </div>
                            @if(\Illuminate\Support\Facades\Session::has('status'))
                                <x-alert type="success" text="{{\Illuminate\Support\Facades\Session::get('status')}}"/>
                            @endif
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد </p>
                                </div><!-- end card-body -->
                            </div><!-- end collapse -->
                        </div><!-- end card -->
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <i class="fas fa-angle-up"></i>
                                        <i class="fas fa-angle-down"></i>
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد
                                    </p>
                                    </div><!-- end card-body -->
                            </div><!-- end collapse -->
                        </div><!-- end card -->
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <i class="fas fa-angle-up"></i>
                                        <i class="fas fa-angle-down"></i>
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد </p>
                                </div><!-- end card-body -->
                            </div><!-- end collapse -->
                        </div><!-- end card -->
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        <i class="fas fa-angle-up"></i>
                                        <i class="fas fa-angle-down"></i>
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                <div class="card-body">
                                     <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد </p>
                                </div><!-- end card-body -->
                            </div><!-- end collapse -->
                        </div><!-- end card -->
                        <div class="card">
                            <div class="card-header" id="headingSeven">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        <i class="fas fa-angle-up"></i>
                                        <i class="fas fa-angle-down"></i>
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد </p>
                                </div><!-- end card-body -->
                            </div><!-- end collapse -->
                        </div><!-- end card -->
                        <div class="card">
                            <div class="card-header" id="headingEight">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        <i class="fas fa-angle-up"></i>
                                        <i class="fas fa-angle-down"></i>
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد
                                    </p>
                                </div><!-- end card-body -->
                            </div><!-- end collapse -->
                        </div><!-- end card -->
                    </div><!-- end accordion -->
{{--                    <div class="btn-box mt-5 text-center">--}}
{{--                        <button type="button" class="theme-btn">load more FAQs</button>--}}
{{--                    </div>--}}
                </div><!-- end faq-body -->
            </div><!-- end col-lg-7-->
            <div class="col-lg-5">
                <div class="faq-form padding-left-30px">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <h3 class="widget-title font-size-18">سوال شما متفاوت است؟</h3>
                        </div><!-- card-box-shared-title -->
                        <div class="card-box-shared-body">
                            <div class="contact-form-action">
                                <form method="get" action="{{route("formFaq.store")}}">
                                    <div class="input-box">
                                        <label class="label-text">نام و نام خانوادگی<span class="primary-color-2 ml-1">*</span></label>
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="name" placeholder="نام و نام خانوادگی را وارد کنید">
                                            <span class="la la-user input-icon"></span>
                                        </div>
                                    </div>
                                    <div class="input-box">
                                        <label class="label-text">شماره تماس<span class="primary-color-2 ml-1">*</span></label>
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="phone" placeholder="شماره تماس">
                                            <span class="la la-envelope-o input-icon"></span>
                                        </div>
                                    </div>
                                    <div class="input-box">
                                        <label class="label-text">موضوع<span class="primary-color-2 ml-1">*</span></label>
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="subject" placeholder="موضوع را عنوان کنید">
                                            <span class="la la-book input-icon"></span>
                                        </div>
                                    </div>
                                    <div class="input-box">
                                        <label class="label-text">پیام شما<span class="primary-color-2 ml-1">*</span></label>
                                        <div class="form-group">
                                            <textarea class="message-control form-control" name="text" placeholder="پیام خود را وارد کنید"></textarea>
                                            <span class="la la-pencil input-icon"></span>
                                        </div>
                                    </div>
                                    <div class="btn-box">
                                        <button type="submit" class="theme-btn">ارسال پیام</button>
                                    </div>
                                </form>
                            </div><!-- end contact-form-action -->
                        </div><!-- end card-box-shared-body -->
                    </div>
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end faq-area -->
<!-- ================================
       START FAQ AREA
================================= -->

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
<script src="/js/magnific-popup.min.js"></script>
<script src="/js/isotope.js"></script>
<script src="/js/waypoint.min.js"></script>
<script src="/js/jquery.counterup.min.js"></script>
<script src="/js/fancybox.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/smooth-scrolling.js"></script>
<script src="/js/date-time-picker.js"></script>
<script src="/js/emojionearea.min.js"></script>
<script src="/js/jquery.filer.min.js"></script>
<script src="/js/tooltipster.bundle.min.js"></script>
<script src="/js/main.js"></script>
@endsection

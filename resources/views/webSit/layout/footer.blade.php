<section class="footer-area section-bg-2 padding-top-100px padding-bottom-40px">
    <div class="container">
        <div class="row">
            @php
            $contact=\Illuminate\Support\Facades\DB::table("contacts")->first();
            @endphp
            <div class="col-lg-3 column-td-half">
                <div class="footer-widget">
                    <a href="../index.blade.php">
                        <img src="/images/logo2.png" alt="footer logo" class="footer__logo">
                    </a>
                    <ul class="list-items footer-address">
                        <li><a href="tel:+1631237884">{{$contact->phone}}</a></li>
                        <li><a href="mailto:support@wbsite.com" class="mail">{{$contact->email}}</a></li>
                        <li>{{$contact->address}}</li>
                    </ul>
                    <h3 class="widget-title font-size-17 mt-4">راه ارتباطی</h3>
                    <ul class="social-profile">
                        @php
                            $data=\Illuminate\Support\Facades\DB::table('socials')->get()
                        @endphp
                        @foreach($data as $item)
                            <li><a name="{{$item->social_name}}" href="{{$item->social_link}}"><i class="{{$item->social_icon}}"></i></a></li>
                        @endforeach
{{--                        <li><a href="home-rtl.html#"><i class="fas fa-phone"></i></a></li>--}}
{{--                        <li><a href="home-rtl.html#"><i class="fab fa-telegram-plane"></i></a></li>--}}
{{--                        <li><a href="home-rtl.html#"><i class="fab fa-instagram"></i></a></li>--}}
{{--                        <li><a href="home-rtl.html#"><i class="fab fa-linkedin-in"></i></a></li>--}}
{{--                        <li><a href="home-rtl.html#"><i class="fab fa-whatsapp"></i></a></li>--}}
                    </ul>
                </div><!-- end footer-widget -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-half">
                <div class="footer-widget">
                    <h3 class="widget-title">منو</h3>
                    <span class="section-divider"></span>
                    <ul class="list-items">
                        <li><a href="home-rtl.html#">درباره ما</a></li>
                        <li><a href="home-rtl.html#">تماس با ما</a></li>
                        <li><a href="home-rtl.html#">دبیران</a></li>
                        <li><a href="home-rtl.html#">مشاوره</a></li>
                        <li><a href="home-rtl.html#">فروشگاه</a></li>
                    </ul>
                </div><!-- end footer-widget -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-half">
                <div class="footer-widget">
                    <h3 class="widget-title">دوره ها</h3>
                    <span class="section-divider"></span>
                    <ul class="list-items">
                        <li><a href="home-rtl.html#">ریاضی</a></li>
                        <li><a href="home-rtl.html#">شیمی</a></li>
                        <li><a href="home-rtl.html#">فیزیک</a></li>
                        <li><a href="home-rtl.html#">عربی</a></li>
                        <li><a href="home-rtl.html#">حسابان</a></li>
                        <li><a href="home-rtl.html#">زبان</a></li>
                    </ul>
                </div><!-- end footer-widget -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 column-td-half">
                <div class="footer-widget">
                    <h3 class="widget-title">نقشه ما</h3>
                    <span class="section-divider"></span>
                </div><!-- end footer-widget -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
        <div class="copyright-content">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <p class="copy__desc text-center"> <a href="https://themeforest.net/user/techydevs/portfolio">تمامی حقوق متعلق به گروه میربلند می باشد</a></p>
                </div><!-- end col-lg-9 -->

            </div><!-- end row -->
        </div><!-- end copyright-content -->
    </div><!-- end container -->
</section><!-- end footer-area -->
<!-- ================================
          END FOOTER AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="far fa-hand-point-up"></i>
</div>

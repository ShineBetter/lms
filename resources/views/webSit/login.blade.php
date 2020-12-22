@extends('webSit.layout.head')
@section('title','ورود')
@section('cnt')
    @php
        $header = "";
        $loader = "dont";
        $footer = "";
    @endphp
    <style>

        /** {*/
        /*    box-sizing: border-box;*/
        /*}*/


    </style>
    <div class="container login-elearning" id="container">
        <div class="form-container sign-in-container">
            {{ Form::open(['route'=>'login.submit', 'method' => 'post','files' => true,'class' => 'welcome-form'])}}
            <h1 class="welcome-h1">ورود به پنل کاربری</h1>
            <span class="text-dark bottom-welcome">لطفا فرم زیر را پر کنید.</span>
            <input class="input-welcome" type="email" name="email" placeholder="ایمیل"/>
            <input class="input-welcome" type="password" name="password" placeholder="پسورد"/>
            <button class="button-login">ورود</button>
            <a href="{{asset('/register')}}" class="button-login" id="btn-register-again">
                ثبت نام کنید
            </a>
            {{ Form::close() }}
        </div>
        <div class="form-container sign-up-container">
            <form action="#" class="welcome-form">
                <h1 class="welcome-h1">ثبت نام نکردید؟</h1>
                <p class="register-login">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،
                    چاپگرها
                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط
                    فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                    می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده
                </p>
                <button class="button-login">ثبت نام کنید</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay-login">
                <div class="overlay-panel overlay-left">
                    <h1 class="welcome-h1">با دقت مطالعه کنید</h1>
                    <button class="button-login-ghost button-login-stpr" id="signIn"> ثبت نام</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1 class="welcome-h1">خوش آمدید به آموزشگاه ...</h1>
                    <button class="button-login-ghost button-login-stpr" id="signUp">تا به حال ثبت نام نکرده اید؟
                    </button>
                </div>
            </div>
        </div>
    </div>
<br>
    <br>
    <br>
    <br>
    <br>
    <Br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <Br><br>
            <br>
            <br>
            <br>
            <br>
            <Br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <Br><br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <Br>
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>
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
    <script src="/js/gmap-script.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYzby4yYDVaXPmtu4jZAGR258K6IYwjIY&libraries"></script>
    <script src="/js/form-validator.js"></script>
    <script src="/js/form-validate-script.js"></script>
    <script src="/js/date-time-picker.js"></script>
    <script src="/js/jquery.filer.min.js"></script>
    <script src="/js/emojionearea.min.js"></script>
    <script src="/js/tooltipster.bundle.min.js"></script>
    <script src="/js/smooth-scrolling.js"></script>
    <script src="/js/main.js"></script>
@endsection

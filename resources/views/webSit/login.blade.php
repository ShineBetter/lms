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

        .login-elearning {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
            0 10px 10px rgba(0, 0, 0, 0.22);
            position: absolute;
            overflow: hidden;
            width: 100%;
            max-width: 100%;
            height: 46%;
            top: 11em;
            margin-bottom: 0em;
            direction: rtl;
            margin-left: auto;
            margin-right: auto;
        }

        .welcome-h1 {
            font-weight: bold;
            margin: 0;
            direction: rtl;
        }

        /*h2 {*/
        /*    text-align: center;*/
        /*}*/

        .register-login {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        .bottom-welcome span {
            font-size: 12px;
        }

        .button-login-stpr {
            border-radius: 20px;
            border: 1px solid #95f5c6;
            background: linear-gradient(to right, #ffffff, #a6ffd9);
            color: #00a470;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 0.5s ease-in;
            margin-top: 1em;
        }

        .button-login-stpr:hover {
            background: linear-gradient(to right, #a6ffd9, #ffffff);
            transition: all 0.5s ease-in-out;
        }

        .button-login {
            border-radius: 2px;
            border: 1px solid #00d4a3;
            background-color: #00ab8b;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 0.2s ease-in;
            margin-top: 1em;
        }

        .button-login:hover {
            background-color: #00ff76;
            transition: all 0.2s ease-in;
        }

        .button-login:active {
            transform: scale(0.95);
        }

        .button-login:focus {
            outline: none;
        }

        .button-login-ghost {
            background-color: transparent;
            border-color: #FFFFFF;
        }

        .welcome-form {
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        .input-welcome {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }


        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes show {
            0%, 49.99% {
                opacity: 0;
                z-index: 1;
            }

            50%, 100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
            direction: ltr;
        }

        .container.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }

        .overlay-login {
            background: #00ff95;
            background: -webkit-linear-gradient(to right, #00a92c, #00ff95);
            background: linear-gradient(to left, #04bf9d, #01bb3a);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #FFFFFF;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay-login {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }


    </style>
    <div class="container login-elearning" id="container">
        <div class="form-container sign-in-container">
            {{ Form::open(['route'=>'login.submit', 'method' => 'post','files' => true,'class' => 'welcome-form'])}}
            <h1 class="welcome-h1">ورود به پنل کاربری</h1>
            <span class="text-dark bottom-welcome">لطفا فرم زیر را پر کنید.</span>
            <input class="input-welcome" type="email" name="email" placeholder="ایمیل"/>
            <input class="input-welcome" type="password" name="password" placeholder="پسورد"/>
            <button class="button-login">ورود</button>
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

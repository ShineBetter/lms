@extends('webSit.layout.head')
@section('title','ورود')
@section('cnt')
    @php
        $header = "";
            $loader = "dont";
    $footer = "";
    @endphp
    <style>
        * {
            box-sizing: border-box;
        }

        .register-elearning {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
            position: absolute;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            height: 51%;
            top: 11em;
            margin-bottom: 0em;
            direction: rtl;
            margin-left: auto;
            margin-right: auto;
            right: 0;
            left: 0;
        }

        .register-h1 {
            font-weight: bold;
            margin: 0;
            direction: rtl;
        }

        h2 {
            text-align: center;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        .bottom-register span {
            font-size: 12px;
        }
        .button-register-stpr {
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
        .button-register-stpr:hover {
            background: linear-gradient(to right, #a6ffd9, #ffffff);
            transition: all 0.5s ease-in-out;
        }
        .button-register {
            border-radius: 2px;
            border: 1px solid #00d765;
            background-color: #00fc92;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 0.2s ease-in;
            margin-top: 1em;
        }
        .button-register:hover {
            background-color: #00c861;
            transition: all 0.2s ease-in;
        }
        .button-register:active {
            transform: scale(0.95);
        }

        .button-register:focus {
            outline: none;
        }

        .button-register-ghost {
            background-color: transparent;
            border-color: #FFFFFF;
        }

        .register-form {
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        .input-register {
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
            left: 0;
        }

        .sign-in-container-register {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.right-panel-active .sign-in-container-register {
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

        .overlay-container-register {
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

        .container.right-panel-active .overlay-container-register{
            transform: translateX(-100%);
        }

        .overlay {
            background: #00ff95;
            background: -webkit-linear-gradient(to right, #00a92c, #00ff95);
            background: linear-gradient(to right, #00a92c, #00ff95);
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

        .container.right-panel-active .overlay {
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
        @media only screen and (min-width: 320px) and (max-width: 479px) {
            .input-register {
                background-color: #eee;
                border: none;
                padding: 8px 3px;
                margin: 8px 0;
                width: 180%;
            }
            .button-register-stpr {
                font-size: 11px;
                padding: 12px 8px;
            }
            .register-elearning {
                height: 30%;
                top: 17em;
            }
            .register-h1 {
                font-size: 21px;
                padding: 0;
            }
        }
    </style>
    <br>
    <br>
    <br>
    <br>
    <br>
    <Br>
    <div class="container register-elearning" id="container">
        <div class="form-container sign-in-container-register">
            {{ Form::open(['route'=>'register.submit', 'method' => 'post','class' => 'register-form','files' => true])}}
                <h1 class="register-h1">ثبت نام دانش آموز</h1>
                <span class="text-dark bottom-register">لطفا فرم زیر را پر کنید.</span>
                <input class="input-register" type="text" name="name" placeholder="نام"/>
                <input class="input-register" type="text" name="lastName" placeholder="نام خانوادگی"/>
                <input class="input-register" type="email" name="email" placeholder="ایمیل"/>
                <input class="input-register" type="number" name="nationalNumber" placeholder="کد ملی"/>
                <input class="input-register" type="text" name="level" placeholder="پایه تحصیلی"/>
                <input class="input-register" type="date" name="birthday" value="1990/01/01" placeholder="تاریخ تولد"/>
                <input class="input-register" type="text" name="parentName" placeholder="نام اولیاء"/>
                <input class="input-register" type="number" name="Phone" placeholder="شماره تلفن"/>
                <input class="input-register" type="text" name="address" placeholder="آدرس"/>
                <input type="submit" class="button-register" value="ثبت نام"/>
            {{ Form::close() }}

        </div>
        <div class="form-container sign-up-container">
            {{ Form::open(['route'=>'register.submit', 'method' => 'post','class' => 'register-form','files' => true])}}
            <h1 class="register-h1">ثبت نام والدین</h1>
                <span class="text-dark bottom-register">لطفا فرم زیر را پر کنید.</span>
                <input class="input-register" name="pname" type="text" placeholder="نام"/>
                <input class="input-register" type="text" name="plastName" placeholder="نام خانوادگی"/>
                <input class="input-register" type="email" name="pemail" placeholder="ایمیل"/>
                <input class="input-register" type="number" name="pnationalNumber" placeholder="کدملی"/>
                <input class="input-register" type="number" name="pmobile" placeholder="شماره تماس"/>
                <input class="input-register" type="text" name="paddress" placeholder="آدرس"/>
                <input type="submit" class="button-register" value="ثبت نام"/>
            {{ Form::close() }}
        </div>
        <div class="overlay-container-register">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 class="register-h1">خوش آمدید به آموزشگاه ...</h1>
                    <button class="button-register-ghost button-register-stpr" id="signIn">ورود دانش آموز</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1 class="register-h1">خوش آمدید به آموزشگاه...</h1>
                    <button class="button-register-ghost button-register-stpr" id="signUp">ورود اولیاء</button>
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
                        <br>
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
@endsection

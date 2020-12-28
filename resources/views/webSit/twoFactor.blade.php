@extends('webSit.layout.head')
@section('title','ورود')
@section('cnt')
    @php
        $header = "";
        $loader = "dont";
        $footer = "";
    @endphp
    <style>

        .form {
            display: block;
        }
        .form__group {
            margin: 10px 0 0;
        }
        .form__group--error.form__pincode > input {
            background-color: #eb3b3b;
        }
        .form__group--error.form__pincode > input[disabled] {
            background-color: #eb3b3b;
            color: #fff;
            opacity: 1;
        }
        .form__group--success.form__pincode > input {
            background-color: #32c832;
        }
        .form__group--success.form__pincode > input[disabled] {
            background-color: #32c832;
            color: #fff;
            opacity: 1;
        }
        .form__pincode {
            display: block;
            width: 100%;
            margin: 10px auto 20px;
            padding: 0;
        }
        .form__pincode:before,
        .form__pincode:after {
            display: table;
            content: '';
        }
        .form__pincode:after {
            clear: both;
        }
        .form__pincode > label {
            display: block;
            text-align: center;
            margin: 10px 0;
        }
        .form__pincode > input[type="number"] {
            -moz-appearance: none;
            -webkit-appearance: none;
            appearance: none;
        }
        .form__pincode > input {
            display: inline-block;
            float: left;
            width: 15%;
            height: 50px;
            line-height: 48px;
            text-align: center;
            font-size: 2em;
            color: #181819;
            border: 0;
            border-bottom: 2px solid rgba(0,0,0,0.3);
            border-radius: 2px 2px 0 0;
            transition: background-color 0.3s, color 0.3s, opacity 0.3s;
            cursor: default;
            user-select: none;
            margin: 0;
            margin-top: 10px;
            margin-right: 2%;
            padding: 0;
        }
        .form__pincode > input:focus {
            outline: 0;
            box-shadow: none;
            border-color: #1486f0;
            animation: border-pulsate 1.5s infinite;
            -webkit-tap-highlight-color: transparent;
        }
        .form__pincode > input:last-child {
            margin-right: 0;
        }
        .form__pincode > input[disabled] {
            background: #eee;
            opacity: 1;
        }
        .form__buttons {
            text-align: center;
            margin: 0 auto;
            padding: 10px 0 0;
        }
        /* Button
           ============================================== */
        .button {
            position: relative;
            display: inline-block;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            outline: 0;
            cursor: pointer;
            height: 50px;
            line-height: 50px;
            margin: 0;
            padding: 0 20px;
            /* primary */
        }
        .button--primary {
            background-color: #4776e6;
            color: #fff;
            line-height: 48px;
            border: 1px solid transparent;
            border-radius: 50px;
            text-transform: uppercase;
            white-space: nowrap;
            transition: all 0.2s ease-in-out;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
            user-select: none;
            -webkit-tap-highlight-color: rgba(0,0,0,0.1);
            -webkit-touch-callout: none;
        rgba(0,0,0,0.3)
            /* disabled */
        }
        .button--primary:focus,
        .button--primary:hover {
            background-color: #2d62e2;
            color: #fff;
        }
        .button--primary:active {
            background-color: #1d53d4;
            color: #fff;
            box-shadow: inset 0 0 4px 2px rgba(0,0,0,0.1);
        }
        .button--primary[disabled] {
            background-color: #4776e6;
            user-select: none;
            pointer-events: none;
            cursor: not-allowed;
            -moz-opacity: 0.3;
            -khtml-opacity: 0.3;
            opacity: 0.3;
        }
        /* Placeholder
           ============================================== */
        /* Chrome/Opera/Safari */
        ::-webkit-input-placeholder {
            color: inherit;
            opacity: 0.7;
        }
        /* Firefox 19+ */
        ::-moz-placeholder {
            color: inherit;
            opacity: 0.7;
        }
        /* IE 10+ */
        :-ms-input-placeholder {
            color: inherit;
            opacity: 0.7;
        }
        /* Firefox 18- */
        :-moz-placeholder {
            color: inherit;
            opacity: 0.7;
        }
        /* Animations
           ============================================== */
        @-moz-keyframes border-pulsate {
            0% {
                border-color: #1486f0;
            }
            50% {
                border-color: rgba(0,0,0,0.3);
            }
            100% {
                border-color: #1486f0;
            }
        }
        @-webkit-keyframes border-pulsate {
            0% {
                border-color: #1486f0;
            }
            50% {
                border-color: rgba(0,0,0,0.3);
            }
            100% {
                border-color: #1486f0;
            }
        }
        @-o-keyframes border-pulsate {
            0% {
                border-color: #1486f0;
            }
            50% {
                border-color: rgba(0,0,0,0.3);
            }
            100% {
                border-color: #1486f0;
            }
        }
        @keyframes border-pulsate {
            0% {
                border-color: #1486f0;
            }
            50% {
                border-color: rgba(0,0,0,0.3);
            }
            100% {
                border-color: #1486f0;
            }
        }

    </style>
    <div class="container">
        <form id="form">
            <h1>TWO-FACTOR AUTHENTICATION</h1>
            <div class="form__group form__pincode">
                <label>Enter 6-digit code from your authenticator application</label>
                <input type="tel" name="pincode-1" maxlength="1" pattern="[\d]*" tabindex="1" placeholder="·" autocomplete="off">
                <input type="tel" name="pincode-2" maxlength="1" pattern="[\d]*" tabindex="2" placeholder="·" autocomplete="off">
                <input type="tel" name="pincode-3" maxlength="1" pattern="[\d]*" tabindex="3" placeholder="·" autocomplete="off">
                <input type="tel" name="pincode-4" maxlength="1" pattern="[\d]*" tabindex="4" placeholder="·" autocomplete="off">
                <input type="tel" name="pincode-5" maxlength="1" pattern="[\d]*" tabindex="5" placeholder="·" autocomplete="off">
                <input type="tel" name="pincode-6" maxlength="1" pattern="[\d]*" tabindex="6" placeholder="·" autocomplete="off">
            </div>
            <div class="form__buttons">
                <a href="#" class="button button--primary" disabled>Continue</a>
            </div>
        </form>
    </div>


{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>--}}

{{--    <script src="https://cdn.jsdelivr.net/npm/jquery-mockjax@2.2.2/src/jquery.mockjax.min.js"></script>--}}

@endsection

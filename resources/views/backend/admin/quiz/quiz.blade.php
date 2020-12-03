@extends('backend.admin.partial._master')
@section('css')
    <style>
    #ques {
    width: 24rem;
    direction:rtl;
    text-aling:right;
    }

    input[type="radio"]:checked ~ span {
    color: #5850ec;
    /* @apply text-indigo-600 */
    }
    .timeout {
    color: red;
    -webkit-animation-name: blinker;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: cubic-bezier(1.0,0,0,1.0);
    -webkit-animation-duration: 1s;
    }
    @-webkit-keyframes blinker {
    from { opacity: 1.0; }
    to { opacity: 0.0; }
    }

    .dir{
    direction:rtl;
    text-align:right;
    }
    .que-counter{
    padding: 9px 0px;
    }
    .size{
    height:23px;
    width:23px;
    }
    .dashboard-content-wrap{
        direction: rtl;
        text-align: right;
    }
    .question{
        height: 22.5rem;
        border: 1px solid #0002;
        overflow: auto;
        background-color: #ddfde9!important;
        border-radius: 0px 0px 8px 8px;
    }
    .circle{
        color: #0c0c0c;
        border-radius: 50%;
        height: 28px;
        width: 28px;
        display: inherit;
        padding: 0px;
        margin-top: 8px;
        box-shadow: 0px 1px 6px 4px #1111;
        background-color: #f9f3f3;
        padding-top: 1px;
        margin-bottom: 6px;
    }
    .time-space{
        border-radius: 8px 8px 1px 1px;
        background: #8fd5a8!important;
        padding: 1rem;
    }
    
    .que{
        direction: rtl;text-align: right;
    }
    .que-header{
        border-radius: 4px 4px 0 0;
        background: #8fd5a8!important;
    }
    @media only screen and (max-width: 600px) {

        .question{
            height: 12rem;
        }

    }
    </style>
@endsection
@section('cntd')
    @php
        $header="";
        $loader="dont";
        $sidebar="";
        $quiztime=3;
    @endphp
    <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>

    <div class="container mt-lg-3">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-2 mb-3">
                <div class="row">
                    <div class="col-12 p-0 mb-2 ">
                        <h3 class="d-block bg-danger text-center rounded">
                            <a href="#" class="btn text-white" onclick="confirm('آیا برای خروج مطمعن هستید؟')">خروج از
                                آزمون</a>
                        </h3>
                    </div>
                    <div class="time-space col-lg-12 text-center">

                        <h5 class="text-center mb-1">زمان کلی آزمون <span id="alltime"></span> دقیقه میباشد</h5>
                        <div class="text-white"> زمان باقی مانده <span class="mr-1 ml-1 text-danger" id="time"></span>
                            دقیقه
                        </div>
                        <script>
                            var timequiz =<?php echo $quiztime ?>;
                            document.getElementById("time").innerHTML = timequiz;
                            document.getElementById("alltime").innerHTML = timequiz;
                        </script>
                    </div>
                    <div class="col-lg-12 question">
                        <div class="row p-2">
                            <div class=" col-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 d-block">
                                <div class="circle text-center" id="q-circle-n-1">
                                    <span>
                                        1
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 d-block">
                                <div class="circle  text-center" id="q-circle-n-2">
                                    <span>
                                        2
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 d-block">
                                <div class="circle  text-center" id="q-circle-n-3">
                                    <span>
                                        3
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 d-block">
                                <div class="circle text-center" id="q-circle-n-4">
                                    <span>
                                        4
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 d-block">
                                <div class="circle  text-center" id="q-circle-n-5">
                                    <span>
                                        5
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 d-block">
                                <div class="circle  text-center " id="q-circle-n-6">
                                    <span>
                                        6
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center" id="q-circle-n-7">
                                    <span>
                                        7
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center" id="q-circle-n-8">
                                    <span>
                                        8
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center" id="q-circle-n-9">
                                    <span>
                                        9
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center" id="q-circle-n-10">
                                    <span>
                                        10
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center" id="q-circle-n-11">
                                    <span>
                                        11
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center" id="q-circle-n-12">
                                    <span>
                                        12
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center" id="q-circle-n-13">
                                    <span>
                                        13
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center" id="q-circle-n-14">
                                    <span>
                                        14
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center" id="q-circle-n-15">
                                    <span>
                                        15
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center" id="q-circle-n-16">
                                    <span>
                                        16
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center" id="q-circle-n-17">
                                    <span>
                                        17
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center" id="q-circle-n-18">
                                    <span>
                                        18
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center" id="q-circle-n-19">
                                    <span>
                                        19
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center" id="q-circle-n-20">
                                    <span>
                                        20
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center" id="q-circle-n-21">
                                    <span>
                                        21
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center" id="q-circle-n-22">
                                    <span>
                                        22
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center" id="q-circle-n-23">
                                    <span>
                                        23
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center" id="q-circle-n-24">
                                    <span>
                                        24
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center" id="q-circle-n-25">
                                    <span>
                                        25
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center" id="q-circle-n-26">
                                    <span>
                                        26
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center" id="q-circle-n-27">
                                    <span>
                                        27
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center" id="q-circle-n-28">
                                    <span>
                                        28
                                    </span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-10 col-xs-10">
                <div class="card">
                    <div class="que-header w-100">
                        <div class="row dir que-counter">
                            <div class="col-lg-6 col-md-d col-12">
                                <p class="d-inline text-white mr-2 ml-1">
                                    شماره سوال:
                                </p>
                                <span class="text-white">
                                    2
                                </span>
                                <span class="text-white">
                                    از
                                </span>
                                <span class="text-white">
                                    5
                                </span>
                            </div>
                            <div class="col-lg-6 col-md-d col-12 text-left">
                                <a href="#" class="ml-1"><img class="size" src="/images/next.png" alt=""></a>
                                <a href="#" class="ml-2"><img class="size" src="/images/previous.png" alt=""></a>

                            </div>
                        </div>
                    </div>

                    <div class="card-body text-right">
                        <h4 class="text-muted text-justify que">
                            سوال اول این سوال آزمایشی هست برای تست تست تست سوال اول این سوال آزمایشی هست برای تست تست
                            تست سوال اول این سوال آزمایشی هست برای تست تست تستوال اول این سوال آزمایشی هست برای تست تست
                            تست سوال اول این سوال آزمایشی هست برای تست تست تست
                        </h4>

                        {{--                        ////////////////////////////////////////////--}}
                        <main class="py-5 px-6 space-y-3 bg-white rounded-lg shadow-xl  w-100 text-right" id="ques">
                            <label class="col-lg-12 items-center">
                                <input type="radio" name="radio-package" class="form-radio h-5 w-5 text-indigo-600"
                                >
                                <span class="ml-2 text-gray-700 font-medium text-lg ">گزینه اول</span>
                                <div class="ml-2 px-2 bg-green-100 text-green-600 font-medium text-lg rounded h6">این
                                    متتن جواب برای تست است
                                </div>

                            </label>
                            <label class="col-lg-12 items-center">
                                <input type="radio" name="radio-package" class="form-radio h-5 w-5 text-indigo-600"
                                >
                                <span class="ml-2 text-gray-700 font-medium text-lg ">گزینه دوم</span>
                                <div class="ml-2 px-2 bg-green-100 text-green-600 font-medium text-lg rounded h6">
                                    22/12
                                </div>

                            </label>
                            <label class="col-lg-12 items-center">
                                <input type="radio" name="radio-package" class="form-radio h-5 w-5 text-indigo-600"
                                >
                                <span class="ml-2 text-gray-700 font-medium text-lg ">گزینه سوم</span>
                                <div class="ml-2 px-2 bg-green-100 text-green-600 font-medium text-lg rounded h6">تست
                                    تست تست
                                </div>

                            </label>
                            <label class="col-lg-12 items-center">
                                <input type="radio" name="radio-package" class="form-radio h-5 w-5 text-indigo-600"
                                >
                                <span class="ml-2 text-gray-700 font-medium text-lg ">گزینه چهارم</span>
                                <div class="ml-2 px-2 bg-green-100 text-green-600 font-medium text-lg rounded h6">858
                                </div>

                            </label>
                        </main>
                    </div>
                    <script>
                        var id = "q-circle-n-2";
                        var test = $("#q-circle-n-2").attr('id');
                        // $(".que").attr("id",test);
                        $(".form-radio").attr("name", test);
                        var inputName = $(".form-radio").attr("name");
                        // $("input[name=test]").change( function () {
                        //     alert("yes")
                        // });
                        $(".form-radio").click(function () {
                            $(".question").find('#' + inputName).css("background", "#53f112a1");
                        })
                    </script>
                </div>
            </div>
        </div>
    </div>
    <script>

        function startTimer(duration, display) {
            var timer = duration, minutes, seconds;
            setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }

        window.onload = function () {
            var fiveMinutes = 60 * timequiz,
                display = document.querySelector('#time');
            startTimer(fiveMinutes, display);
        };
    </script>
    <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
@endsection

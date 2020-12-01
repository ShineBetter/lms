@extends('backend.admin.partial._master')
@section('css')
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
@endsection
@section('cntd')
    @php
        $header="";
        $loader="dont";
        $sidebar="";
        $quiztime=3;
    @endphp

    <div class="container mt-lg-3">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-2 mb-3">
                <div class="row">
                    <div class="col-12 p-0 mb-2 ">
                        <h3 class="d-block bg-danger text-center rounded">
                            <a href="#" class="btn text-white" onclick="confirm('آیا برای خروج مطمعن هستید؟')">خروج از آزمون</a>
                        </h3>
                    </div>
                    <div class="time-space col-lg-12 text-center">

                        <h5 class="text-center mb-1">زمان کلی آزمون <span id="alltime"></span> دقیقه میباشد</h5>
                        <div class="text-white"> زمان باقی مانده <span class="mr-1 ml-1 text-danger" id="time"></span> دقیقه</div>
                        <script>
                            var timequiz =<?php echo $quiztime ?>;
                            document.getElementById("time").innerHTML = timequiz;
                            document.getElementById("alltime").innerHTML = timequiz;
                        </script>
                    </div>
                    <div class="col-lg-12 question">
                        <div class="row p-2">
                            <div class=" col-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 d-block">
                                <div class="circle text-center">
                                    <span>
                                        1
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        2
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        3
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 d-block">
                                <div class="circle text-center">
                                    <span>
                                        4
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        5
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        6
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        7
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        8
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        9
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        10
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        11
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        12
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        13
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        14
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        15
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        16
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        17
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        18
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        19
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        20
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        21
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        22
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        23
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        24
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        25
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        26
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center">
                                    <span>
                                        27
                                    </span>
                                </div>
                            </div>
                            <div class=" col-2 col-lg-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 col-2 d-block">
                                <div class="circle  text-center">
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
                                <p class="d-inline text-white ml-1">
                                    تعداد کل سوالات:
                                </p>
                                <span class="text-white ml-2">
                                    280
                                </span>
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
                                       checked>
                                <span class="ml-2 text-gray-700 font-medium text-lg ">گزینه اول</span>
                                <div class="ml-2 px-2 bg-green-100 text-green-600 font-medium text-lg rounded h6">این
                                    متتن جواب برای تست است
                                </div>

                            </label>
                            <label class="col-lg-12 items-center">
                                <input type="radio" name="radio-package" class="form-radio h-5 w-5 text-indigo-600"
                                       checked>
                                <span class="ml-2 text-gray-700 font-medium text-lg ">گزینه دوم</span>
                                <div class="ml-2 px-2 bg-green-100 text-green-600 font-medium text-lg rounded h6">
                                    22/12
                                </div>

                            </label>
                            <label class="col-lg-12 items-center">
                                <input type="radio" name="radio-package" class="form-radio h-5 w-5 text-indigo-600"
                                       checked>
                                <span class="ml-2 text-gray-700 font-medium text-lg ">گزینه سوم</span>
                                <div class="ml-2 px-2 bg-green-100 text-green-600 font-medium text-lg rounded h6">تست
                                    تست تست
                                </div>

                            </label>
                            <label class="col-lg-12 items-center">
                                <input type="radio" name="radio-package" class="form-radio h-5 w-5 text-indigo-600"
                                       checked>
                                <span class="ml-2 text-gray-700 font-medium text-lg ">گزینه چهارم</span>
                                <div class="ml-2 px-2 bg-green-100 text-green-600 font-medium text-lg rounded h6">858
                                </div>

                            </label>
                        </main>
                    </div>
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
@endsection

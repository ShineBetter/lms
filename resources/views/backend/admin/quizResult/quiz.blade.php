@extends('backend.admin.partial._master')
@section('css')
    <style>
        #ques {
            width: 24rem;
            direction: rtl;
            text-aling: right;
        }

        input[type="radio"]:checked ~ span {
            color: #5850ec;
            /* @apply text-indigo-600 */
        }

        .timeout {
            color: red;
            -webkit-animation-name: blinker;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-timing-function: cubic-bezier(1.0, 0, 0, 1.0);
            -webkit-animation-duration: 1s;
        }

        @-webkit-keyframes blinker {
            from {
                opacity: 1.0;
            }
            to {
                opacity: 0.0;
            }
        }

        .dir {
            direction: rtl;
            text-align: right;
        }

        .que-counter {
            padding: 9px 0px;
        }

        .size {
            height: 23px;
            width: 23px;
        }

        .dashboard-content-wrap {
            direction: rtl;
            text-align: right;
        }

        .question {
            height: 22.5rem;
            border: 1px solid #0002;
            overflow: auto;
            background-color: #ddfde9 !important;
            border-radius: 0px 0px 8px 8px;
        }

        .circle {
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

        .time-space {
            border-radius: 8px 8px 1px 1px;
            background: #8fd5a8 !important;
            padding: 1rem;
        }

        .que {
            direction: rtl;
            text-align: right;
        }

        .que-header {
            border-radius: 4px 4px 0 0;
            background: #8fd5a8 !important;
        }

        @media only screen and (max-width: 600px) {
            .question {
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
        $quiztime= $quiz_time;
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
                        <button class="btn btn-outline-danger w-100 exit_exam">خروج از آزمون</button>
                    </div>
                    <div class="time-space col-lg-12 text-center">

                        <h5 class="text-center mb-1">زمان کلی آزمون <span id="alltime"></span> دقیقه میباشد</h5>
                        <div class="text-white"> زمان باقی مانده <span class="mr-1 ml-1 text-danger" id="time"></span>
                            دقیقه
                        </div>
                        <script>
                            var timequiz = <?php echo $quiztime ?>;
                            document.getElementById("time").innerHTML = timequiz;
                            document.getElementById("alltime").innerHTML = timequiz;
                        </script>
                    </div>
                    <div class="col-lg-12 question">
                        <div class="row p-2">
                            @if($questions_count > 0)
                                @foreach($all_questions as $item)
                                    <div class=" col-2 col-lg-2 col-md-2 col-sm-2 col-xs-3 d-block sidebar_question_div" question_id="{{$item->id}}">
                                        <div class="circle text-center sidebar_question" id="q-circle-n-{{$item->id}}">
                                            <span>{{$loop->iteration}}</span>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class=" col-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center d-block">
                                    <p>سوالی وجود ندارد</p>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
            @if($questions_count > 0)
                <div class="col-lg-9 col-md-9 col-sm-10 col-xs-10">
                    <div class="card">
                        <div class="que-header w-100">
                            <div class="row dir que-counter">
                                <div class="col-lg-4 col-md-d col-12">
                                    <p class="d-inline text-white mr-2 ml-1">
                                        شماره سوال:
                                    </p>
                                    <span class="text-white exam_question_number">{{$question_row}}</span>
                                    <span class="text-white">
                                    از
                                </span>
                                    <span class="text-white exam_question_max_number">{{$questions->count()}}</span>
                                </div>
                                <div class="col-lg-4 col-md-d col-12 text-white text-center">
                                    <p>{{$quiz->quiz_name}}</p>
                                </div>

                            </div>
                        </div>

                        <div class="card-body text-right">
                            <h4 class="text-muted text-justify que exam_question_title">
                                {{$questions->question_title}}
                            </h4>

                            {{--                        ////////////////////////////////////////////--}}

                            <style>
                                .exam_input_group {
                                    background-color: #fff;
                                    display: block;
                                    margin: 10px 0;
                                    position: relative;
                                }

                                .exam_input_group label {
                                    padding: 12px 69px 12px 30px;
                                    width: 100%;
                                    display: block;
                                    text-align: right;
                                    color: #3C454C;
                                    cursor: pointer;
                                    position: relative;
                                    z-index: 2;
                                    transition: color 200ms ease-in;
                                    overflow: hidden;
                                    border-radius: 5px;
                                }

                                .exam_input_group label:before {
                                    width: 100%;
                                    height: 10px;
                                    border-radius: 50%;
                                    content: '';
                                    background-color: #5562eb;
                                    position: absolute;
                                    left: 50%;
                                    top: 50%;
                                    transform: translate(-50%, -50%) scale3d(1, 1, 1);
                                    transition: all 300ms cubic-bezier(0.4, 0, 0.2, 1);
                                    opacity: 0;
                                    z-index: -1;
                                }

                                .exam_input_group label:after {
                                    width: 32px;
                                    height: 32px;
                                    content: '';
                                    border: 2px solid #D1D7DC;
                                    background-color: #fff;
                                    background-image: url("data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.414 11L4 12.414l5.414 5.414L20.828 6.414 19.414 5l-10 10z' fill='%23fff' fill-rule='nonzero'/%3E%3C/svg%3E ");
                                    background-repeat: no-repeat;
                                    background-position: 2px 3px;
                                    border-radius: 50%;
                                    z-index: 2;
                                    position: absolute;
                                    right: 30px;
                                    top: 50%;
                                    transform: translateY(-50%);
                                    cursor: pointer;
                                    transition: all 200ms ease-in;
                                }

                                .exam_input_group input:checked ~ label {
                                    color: #fff;
                                }

                                .exam_input_group input:checked ~ label:before {
                                    transform: translate(-50%, -50%) scale3d(56, 56, 1);
                                    opacity: 1;
                                }

                                .exam_input_group input:checked ~ label:after {
                                    background-color: #54E0C7;
                                    border-color: #54E0C7;
                                }

                                .exam_input_group input {
                                    width: 32px;
                                    height: 32px;
                                    order: 1;
                                    z-index: 2;
                                    position: absolute;
                                    right: 30px;
                                    top: 50%;
                                    transform: translateY(-50%);
                                    cursor: pointer;
                                    visibility: hidden;
                                }

                                .form {
                                    padding: 0 16px;
                                    max-width: 550px;
                                    margin: 50px auto;
                                    font-size: 18px;
                                    font-weight: 600;
                                    line-height: 36px;
                                }

                            </style>



                            <form class="exam_form">
                                <div class="exam_input_group answer_radio_one">
                                    <input id="radio1"  name="test" type="radio" value="1"/>
                                    <label for="radio1">{{$questions->answer_one}}</label>
                                </div>
                                <div class="exam_input_group answer_radio_two">
                                    <input id="radio2"  name="test" type="radio" value="2"/>
                                    <label for="radio2">{{$questions->answer_two}}</label>
                                </div>
                                <div class="exam_input_group answer_radio_three">
                                    <input id="radio3"  name="test" type="radio" value="3"/>
                                    <label for="radio3">{{$questions->answer_three}}</label>
                                </div>
                                <div class="exam_input_group answer_radio_four">
                                    <input id="radio4"  name="test" type="radio" value="4"/>
                                    <label for="radio4">{{$questions->answer_four}}</label>
                                </div>
                            </form>



{{--                            <main class="py-5 px-6 space-y-3 bg-white rounded-lg shadow-xl  w-100 text-right" id="ques">--}}
{{--                                <label class="col-lg-12 items-center answer_radio_one">--}}
{{--                                    <input type="radio" name="" class="form-radio h-5 w-5 text-indigo-600" value="1">--}}
{{--                                    <span class="ml-2 text-gray-700 font-medium text-lg ">{{$questions->answer_one}}</span>--}}

{{--                                </label>--}}
{{--                                <label class="col-lg-12 items-center answer_radio_two">--}}
{{--                                    <input type="radio" name="" class="form-radio h-5 w-5 text-indigo-600" value="2">--}}
{{--                                    <span--}}
{{--                                        class="ml-2 text-gray-700 font-medium text-lg ">{{$questions->answer_two}}</span>--}}
{{--                                </label>--}}
{{--                                <label class="col-lg-12 items-center answer_radio_three">--}}
{{--                                    <input type="radio" name="" class="form-radio h-5 w-5 text-indigo-600" value="3">--}}
{{--                                    <span--}}
{{--                                        class="ml-2 text-gray-700 font-medium text-lg ">{{$questions->answer_three}}</span>--}}
{{--                                </label>--}}
{{--                                <label class="col-lg-12 items-center answer_radio_four">--}}
{{--                                    <input type="radio" name="" class="form-radio h-5 w-5 text-indigo-600" value="4">--}}
{{--                                    <span--}}
{{--                                        class="ml-2 text-gray-700 font-medium text-lg ">{{$questions->answer_four}}</span>--}}
{{--                                </label>--}}
{{--                            </main>--}}
                        </div>

                        <script>
                            var test = $("#q-circle-n-"+{{$questions->id}}).attr('id');
                            $(".exam_input_group input").attr("name", test);
                        </script>
                    </div>


                    <div class="next_pre_div m-2">
                        @if($next_question != null)
                            <button class="next_question" question_id="{{$next_question->id}}">
                                        <span class="circle" aria-hidden="true">
                                          <span class="icon arrow"></span>
                                        </span>
                                <span class="button-text">سوال بعدی</span>
                            </button>
                        @else
                            <button class="next_question" question_id="0">
                                        <span class="circle" aria-hidden="true">
                                          <span class="icon arrow"></span>
                                        </span>
                                <span class="button-text">سوال بعدی</span>
                            </button>
                        @endif
                            <button class="end_quiz d-none">
                                <span class="circle" aria-hidden="true">
                                          <span class="icon arrow"></span>
                                        </span>
                                <span class="button-text">پایان آزمون</span>
                            </button>
                        @if($previous_question != null)
                            <button class="prev_question" question_id="{{$previous_question->id}}">
                                        <span class="circle" aria-hidden="true">
                                          <span class="icon arrow"></span>
                                        </span>
                                <span class="button-text">سوال قبلی</span>
                            </button>
                        @else
                                <button class="prev_question" question_id="0">
                                        <span class="circle" aria-hidden="true">
                                          <span class="icon arrow"></span>
                                        </span>
                                    <span class="button-text">سوال قبلی</span>
                                </button>
                        @endif
                    </div>
                </div>
            @endif
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

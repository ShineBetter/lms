@extends('webSit.layout.head')
@section('cnt')
    @php
        $loader= "dont";
        $header= "";
        $sidebar= "";
    @endphp

<section class="quiz-wrap">
    <div class="breadcrumb-nav bg-white border-top py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="quiz-nav d-flex align-items-center">
                        <li>
                            <div class="d-flex align-items-center">
                                {{--                                <a href="course-details.blade.php">--}}
                                {{--                                    <img src="/images/angular.png" alt="">--}}
                                {{--                                </a>--}}
                                <p>
                                    <a href="#">{{$quiz->quiz_name}}</a><span class="d-block font-size-13">استاد {{$teacher->profile->name}} {{$teacher->profile->lastName}}</span>
                                </p>
                            </div>
                        </li>
                        <li><a href="/"><i class="la la-arrow-left mr-2"></i>برگشت به خانه</a></li>

                    </ul>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-nav -->
    <div class="quiz-content-wrap bg-black padding-top-60px padding-bottom-60px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="quiz-content text-center">
                        <p class="lead font-weight-regular font-size-18 text-color-rgba mb-0 pb-2">تاریخ صدور کارنامه : {{\Carbon\Carbon::createFromTimestamp($quiz_result->created_at)->format('Y/m/d')}}</p>
                        <h2 class="section__title text-white padding-bottom-30px">نمره شما: {{$user_quiz->score}}</h2>
                        <div class="btn-box">
                            <a href="{{route('quizResult.index')}}" class="theme-btn theme-btn-light">کارنامه ها</a>
                        </div>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end quiz-content-wrap -->
    <div class="quiz-action-nav bg-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="quiz-action-content d-flex align-items-center justify-content-between">
                        <ul class="quiz-nav d-flex align-items-center">
                            <li><i class="la la-check-circle font-size-20 mr-2"></i>نمره شما 100/{{$user_quiz->score}}</li>
{{--                            <li><i class="la la-clock-o font-size-20 mr-2"></i>16دقیقه</li>--}}
{{--                            <li><i class="la la-bar-chart font-size-20 mr-2"></i>صحیح</li>--}}
                        </ul>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end quiz-action-nav -->
    <div class="quiz-ans-wrap padding-top-80px padding-bottom-80px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="quiz-ans-content text-right">
                        <div class="d-flex align-items-center">
                            <span class="quiz-count icon-element icon--element bg-color-1 text-white mr-2">{{$user_quiz->correct_answers}}</span>
                            <h3 class="widget-title font-weight-semi-bold">جواب صحیح {{$user_quiz->correct_answers}} از {{$user_question->count()}} </h3>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="quiz-count icon-element icon--element icon-error text-white mr-2">{{$user_question->count() - $user_quiz->correct_answers}}</span>
                            <h3 class="widget-title font-weight-semi-bold">جواب غلط {{$user_quiz->correct_answers}} از {{$user_question->count()}} </h3>
                        </div>
                        <p class="pt-3">دانش آموز عزیز، اگر به نمره آزمون خود اعتراض دارید میتوانید با پشتیبانی در ارتباط باشید</p>
                        <p class="pt-3">{{$user_quiz->score >= 50 ? 'تبریک میگم، شما در این آزمون نمره قابل قبولی گرفتید':'متاسفانه شما نمره غیر قابل قبولی را اخذ کردید'}}</p>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end quiz-ans-wrap -->
</section><!-- end quiz-wrap -->
@endsection

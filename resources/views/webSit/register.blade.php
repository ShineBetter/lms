@extends('webSit.partial._master')
@section('main.content')
    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="section__title">Sign Up</h2>
                        </div>
                        <ul class="breadcrumb__list">
                            <li class="active__list-item"><a href="index.html">home</a></li>
                            <li class="active__list-item">pages</li>
                            <li>Sign Up</li>
                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end breadcrumb-area -->
    <!-- ================================
        END BREADCRUMB AREA
    ================================= -->
    <section class="sign-up section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="card-box-shared">
{{--                        <section>--}}

{{--                            @if (session()->has('errors'))--}}

{{--                                <div class="alert alert-danger">--}}
{{--                                    <ul>--}}

{{--                                        <li>{{ session('errors') }}</li>--}}

{{--                                    </ul>--}}
{{--                                </div>--}}

{{--                            @endif--}}
{{--                        </section>--}}
                        <div class="card-box-shared-title text-center">
                            <h3 class="widget-title font-size-25">ایجاد حساب کاربری <br> شروع یادگیری!</h3>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="contact-form-action">
                                {{ Form::open(['route'=>'register.submit', 'method' => 'post','files' => true])}}

                                <div class="row">
                                        <div class="col-lg-4 column-td-half">
                                            <div class="form-group">
                                                <button class="theme-btn w-100" type="submit">
                                                    <i class="fa fa-google mr-2"></i>گوگل
                                                </button>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-td-half">
                                            <div class="form-group">
                                                <button class="theme-btn w-100" type="submit">
                                                    <i class="fa fa-facebook mr-2"></i>فیسبوک
                                                </button>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-td-half">
                                            <div class="form-group">
                                                <button class="theme-btn w-100" type="submit">
                                                    <i class="fa fa-twitter mr-2"></i>توییتر
                                                </button>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-12">
                                            <div class="account-assist mt-3 margin-bottom-35px text-center">
                                                <p class="account__desc">or</p>
                                            </div>
                                        </div><!-- end col-md-12 -->
                                        <div class="col-lg-12 ">
                                            <div class="input-box">
                                                <label class="label-text">نام<span class="primary-color-2 ml-1">*</span></label>
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="name" placeholder="نام">
                                                    <span class="la la-user input-icon"></span>
                                                    @error('name')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!-- end col-md-12 -->
                                        <div class="col-lg-12 ">
                                            <div class="input-box">
                                                <label class="label-text">نام خانوادگی<span class="primary-color-2 ml-1">*</span></label>
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="lastName" placeholder="نام خانوادگی">
                                                    <span class="la la-user input-icon"></span>
                                                    @error('lastName')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!-- end col-md-12 -->
{{--                                        <div class="col-lg-12 ">--}}
{{--                                            <div class="input-box">--}}
{{--                                                <label class="label-text">نام کاربری<span class="primary-color-2 ml-1">*</span></label>--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <input class="form-control" type="text" name="text" placeholder="نام کاربری">--}}
{{--                                                    <span class="la la-user input-icon"></span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div><!-- end col-md-12 -->--}}
                                        <div class="col-lg-12">
                                            <div class="input-box">
                                                <label class="label-text">آدرس ایمیل<span class="primary-color-2 ml-1">*</span></label>
                                                <div class="form-group">
{{--                                                    {{Form::email('email',"آدرس ایمیل",null,['class'=>'form-control'])}}--}}
                                                    <input class="form-control" type="text" name="email" placeholder="آدرس ایمیل">
                                                    <span class="la la-envelope input-icon"></span>
                                                    @error('email')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!-- end col-md-12 -->
                                        <div class="col-lg-12">
                                            <div class="input-box">
                                                <label class="label-text">رمز عبور<span class="primary-color-2 ml-1">*</span></label>
                                                <div class="form-group">
                                                    <input class="form-control" type="password" name="password" placeholder="رمز عبور">
                                                    <span class="la la-lock input-icon"></span>
                                                    @error('password')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!-- end col-md-12 -->
                                        <div class="col-lg-12">
                                            <div class="input-box">
                                                <label class="label-text">تکرار رمز عبور<span class="primary-color-2 ml-1">*</span></label>
                                                <div class="form-group">
                                                    <input class="form-control" type="password" name="password_confirmation" placeholder="تکرار رمز عبور">
                                                    <span class="la la-lock input-icon"></span>
                                                    @error('password_confirmation')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div><!-- end col-md-12 -->
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="chb1">
                                                    <label for="chb1"><span class="line-height-24 d-block">Yes! I want to get the most out of Aduca by receiving emails with exclusive deals, personal recommendations and learning tips!</span></label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="chb2">
                                                    <label for="chb2">By signing up, you agree to our <a href="sign-up.html#">Terms of Use</a> and
                                                        <a href="sign-up.html#">Privacy Policy</a>.
                                                    </label>
                                                </div>

                                            </div>
                                        </div><!-- end col-md-12 -->




                                        <div class="col-lg-12 ">
                                            <div class="btn-box">
                                                <button class="theme-btn" type="submit">ثبت نام</button>
                                            </div>
                                        </div><!-- end col-md-12 -->
                                        <div class="col-lg-12">
                                            <p class="mt-4">Already have an account? <a href="{{route('login.form')}}" class="primary-color-2">ورود</a></p>
                                        </div><!-- end col-md-12 -->
                                    </div><!-- end row -->
                                {{ Form::close() }}
                            </div><!-- end contact-form -->
                        </div>
                    </div>
                </div><!-- end col-md-7 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>


@endsection

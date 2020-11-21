{{--@extends('backend.admin.partial._master')--}}
{{--@section('main.content')--}}
{{--    <section dir="rtl">--}}

{{--        <section class="container" style="padding: 50px" dir="rtl">--}}
{{--            <section>--}}
{{--                @if (count($errors) > 0)--}}
{{--                    <div class="alert alert-danger">--}}
{{--                        <ul>--}}
{{--                            @foreach ($errors->all() as $error)--}}
{{--                                <li>{{ $error }}</li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                @endif--}}

{{--            </section>--}}
{{--            <section>--}}
{{--                @if (session()->has('level'))--}}
{{--                    <section class="alert alert-success">--}}
{{--                        <h3>{{ session('level') }}</h3>--}}
{{--                    </section>--}}
{{--                @endif--}}

{{--            </section>--}}
{{--            {{ Form::open(['route'=>'level.store', 'method' => 'post','files' => true])}}--}}
{{--            <section class="form-group">--}}
{{--                {{Form::label('level_title', 'عنوان پایه : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}--}}
{{--                {!! Form::text('level_title', null, ['class' => 'form-control']) !!}--}}
{{--            </section>--}}

{{--            <hr>--}}
{{--            <section class="form-group">--}}
{{--                {!! Form::submit('ثبت', ['class' => 'form-control btn btn-info','style'=>'font-size: 15px;font-family: Tahoma']) !!}--}}
{{--            </section>--}}

{{--            {{ Form::close() }}--}}

{{--            <section class="form-group">--}}
{{--                <a href="{{route('level.index')}}"><input type="button" class="form-control btn btn-success"--}}
{{--                                                           style="font-size: 15px;font-family: Tahoma"--}}
{{--                                                           value="  بازگشت  "></a>--}}
{{--            </section>--}}
{{--        </section>--}}
{{--    </section>--}}
{{--@endsection--}}








@extends('layout.dashboard.dashlayout.head')
@section('title','ارسال دوره')
@section('cntd')
    @parent
    @php
        $header="";
        $loader="dont";
        $sidebar="";
    @endphp
    <!-- end dashboard-sidebar -->
    <div class="dashboard-content-wrap">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <h3 class="widget-title">افزودن پایه به آقا / خانم امیرحسین فلک دین</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <h3 class="widget-title">اطلاعات پایه</h3>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="user-form">
                                <div class="contact-form-action">
                                    {{ Form::open(['route'=>'level.store', 'method' => 'post','files' => true])}}
                                    <div class="row">
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="input-box">
                                                    {{Form::label('level_title', 'عنوان پایه', ['class' => 'label-text'])}} <span class="primary-color-2 ml-1">*</span>
                                                    <div class="form-group">
                                                        {!! Form::text('level_title', null, ['class' => 'form-control','placeholder' => 'نام پایه']) !!}
                                                        <input class="form-control" type="text" name="text" placeholder="Course title">
                                                        <span class="la la-file-text-o input-icon"></span>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                        </div><!-- end row -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button class="theme-btn" type="submit">submit now</button>
                                        </div>
                                    </div><!-- end row -->
                                    {{ Form::close() }}

                                </div>
                            </div>
                        </div><!-- end card-box-shared-body -->
                    </div><!-- end card-box-shared -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-content-wrap -->
    </section><!-- end dashboard-area -->
    <!-- ================================
        END DASHBOARD AREA
    ================================= -->

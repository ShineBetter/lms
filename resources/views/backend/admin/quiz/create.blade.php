@extends('backend.admin.partial._master')
@section('title','آزمون')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
@endsection
@section('cntd')
    @parent
    @php
        $header="";
        $loader="dont";
        $sidebar="";
    @endphp
    <!-- end dashboard-sidebar -->
    @isset($errors)
        @foreach($errors->all() as $message)
            <x-alert type="warning" text="{{$message}}"/>
        @endforeach
    @endisset
    <div class="dashboard-content-wrap">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <h3 class="widget-title">آزمون</h3>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="user-form">
                                <div class="contact-form-action">
                                    {{ Form::open(['route'=>'quiz.store', 'method' => 'post','files' => false])}}
                                    <div class="row">

                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('quiz_name', 'نام آزمون', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::text('quiz_name', null, ['class' => 'form-control','placeholder' => 'نام آزمون']) !!}
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('quiz_start', 'زمان شروع', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::time('quiz_start',  \Carbon\Carbon::now()->format('H:i'), ['class' => 'form-control']) !!}
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('quiz_exp', 'زمان پایان', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::time('quiz_exp',  \Carbon\Carbon::now()->addMinutes(10)->format('H:i'), ['class' => 'form-control']) !!}
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('quiz_start_date', 'تاریخ شروع', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::date('quiz_start_date', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('quiz_exp_date', 'تاریخ پایان', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::date('quiz_exp_date', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('teacher_id', 'استاد', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    <select class="form-control" name="teacher_id" id="teacher_id">
                                                        @foreach($teachers as $teacher)
                                                            <option
                                                                value="{{$teacher->id}}">{{$teacher->profile->name}} {{$teacher->profile->lastName}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->

                                        <div class="col-lg-12 col-sm-12">
                                            <div class="input-box">
                                                <div class="student_radio_inputs_group">
                                                    <input type="radio" class="student_radio_input" checked
                                                           name="students" value="1" id="all_students"/>
                                                    <label for="all_students" class="student_radio_input_lable">همه دانش
                                                        آموزان</label>
                                                    <input type="radio" class="student_radio_input" name="students"
                                                           value="2" id="some_students"/>
                                                    <label for="some_students" class="student_radio_input_lable">فقط
                                                        دانش آموزان خاص</label>
                                                </div>
                                            </div>
                                            <style>
                                                .dropdown-content li {
                                                    width: 50%;
                                                    display: inline-block;
                                                    text-align: right;
                                                    direction: rtl;
                                                }
                                                .select-wrapper{
                                                    display: none;
                                                }

                                                .select-wrapper input.select-dropdown {
                                                    font-family: Vazir !important;
                                                }

                                                .select-wrapper .caret {
                                                    right: unset !important;
                                                    left: 0 !important;
                                                }

                                                #sm_select_all, .select-dropdown li.disabled, .select-dropdown li.disabled > span, .select-dropdown li.optgroup {
                                                    width: 100% !important;
                                                }
                                            </style>
                                            <select multiple name="some_student[]" class="select_all">
                                                <option value="" disabled selected>انتخاب کنید</option>
                                                @foreach($data as $item)
                                                    <option
                                                        value="{{$item->id}}">{{$item->profile->name}} {{$item->profile->lastName}}</option>
                                                @endforeach
                                            </select>
                                        </div><!-- end col-lg-6 -->

                                    </div><!-- end row -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            {!! Form::submit('ثبت', ['class' => 'theme-btn float-left']) !!}

                                            {{--                                            <x-btn type="submit" title="ثبت" class="theme-btn float-left"/>--}}
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
@endsection
@push('custosm-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            // $('select').val([1]);
            $('.select_all').formSelect();
            $('select.select_all').siblings('ul').prepend('<li id=sm_select_all><span>انتخاب همه</span></li>');
            $('li#sm_select_all').on('click', function () {
                var jq_elem = $(this),
                    jq_elem_span = jq_elem.find('span'),
                    select_all = jq_elem_span.text() == 'انتخاب همه',
                    set_text = select_all ? 'برداشتن انتخاب ها' : 'انتخاب همه';
                jq_elem_span.text(set_text);
                jq_elem.siblings('li').filter(function () {
                    return $(this).find('input').prop('checked') != select_all;
                }).click();
            });
        })
    </script>
@endpush

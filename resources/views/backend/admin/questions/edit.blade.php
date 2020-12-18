@extends('backend.admin.partial._master')
@section('title','سوالات')
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
                            <h3 class="widget-title">سوالات</h3>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="user-form">
                                <div class="contact-form-action">
                                    {{ Form::model($data,['route'=>['questions.update', $data->id], 'method' => 'put','files' => false
])}}
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('question_title', 'سوال', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::text('question_title', null, ['class' => 'form-control','placeholder' => 'سوال']) !!}
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('quiz_id', 'آزمون', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::select('quiz_id', $quiz,null, ['class' => 'form-control']) !!}
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-3 col-sm-3">
                                            <div class="input-box">
                                                {{Form::label('answer_one', 'پاسخ اول', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::text('answer_one', null, ['class' => 'form-control']) !!}
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-3 col-sm-3">
                                            <div class="input-box">
                                                {{Form::label('answer_two', 'پاسخ دوم', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::text('answer_two', null, ['class' => 'form-control']) !!}
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-3 col-sm-3">
                                            <div class="input-box">
                                                {{Form::label('answer_three', 'پاسخ سوم', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::text('answer_three', null, ['class' => 'form-control']) !!}
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-3 col-sm-3">
                                            <div class="input-box">
                                                {{Form::label('answer_four', 'پاسخ چهارم', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::text('answer_four', null, ['class' => 'form-control']) !!}
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="w-100">
                                            {{Form::label('correct_answer', 'پاسخ صحیح', ['class' => 'label-text'])}}
                                        </div>
                                        <div class="col-lg-3 col-sm-3">

                                            <div class="input-box">
                                                <div class="student_radio_inputs_group">
                                                    <input type="radio" class="student_radio_input" {{$data->correct_answer == '1' ? 'checked':''}}
                                                           name="correct_answer" value="1" id="correct_answer_one"/>
                                                    <label for="correct_answer_one"
                                                           class="student_radio_input_lable">پاسخ اول</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-3">
                                            <div class="input-box">
                                                <div class="student_radio_inputs_group">
                                                    <input type="radio" class="student_radio_input" {{$data->correct_answer == '2'? 'checked':''}}
                                                           name="correct_answer" value="2" id="correct_answer_two"/>
                                                    <label for="correct_answer_two" class="student_radio_input_lable">پاسخ
                                                        دوم</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-3">
                                            <div class="input-box">
                                                <div class="student_radio_inputs_group">
                                                    <input type="radio" class="student_radio_input" {{$data->correct_answer == '3'? 'checked':''}}
                                                           name="correct_answer" value="3" id="correct_answer_three"/>
                                                    <label for="correct_answer_three" class="student_radio_input_lable">پاسخ
                                                        سوم</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-3">
                                            <div class="input-box">
                                                <div class="student_radio_inputs_group">
                                                    <input type="radio" class="student_radio_input" {{$data->correct_answer == '4'? 'checked':''}}
                                                           name="correct_answer" value="4" id="correct_answer_four"/>
                                                    <label for="correct_answer_four" class="student_radio_input_lable">پاسخ
                                                        چهارم</label>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                    </div><!-- end row -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            {!! Form::submit('ثبت', ['class' => 'theme-btn float-left']) !!}
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

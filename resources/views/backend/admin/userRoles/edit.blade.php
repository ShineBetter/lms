@extends('backend.admin.partial._master')
@section('title','نقش ها')
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
                            <h3 class="widget-title">نقش {{$data->profile->name}} {{$data->profile->lastName}}</h3>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="user-form">
                                <div class="contact-form-action">
                                    {{ Form::model($data,['route'=>['userRoles.update',$data->id], 'method' => 'put','files' => true])}}
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('user_role', 'نقش', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    <select class="form-control" name="user_role" id="user_role">
                                                        <option {{$data->user_role == 'admin' ? 'selected' : ''}} value="admin">مدیر</option>
                                                        <option {{$data->user_role == 'teacher' ? 'selected' : ''}} value="teacher">استاد</option>
                                                        <option {{$data->user_role == 'parent' ? 'selected' : ''}} value="parent">اولیا</option>
                                                        <option {{$data->user_role == 'student' ? 'selected' : ''}} value="student">دانش آموز</option>
                                                    </select>
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
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

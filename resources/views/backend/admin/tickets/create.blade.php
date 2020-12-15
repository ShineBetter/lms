@extends('backend.admin.partial._master')
@section('title','ارسال تیکت')
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
                            <h3 class="widget-title">ارسال تیکت</h3>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="user-form">
                                <div class="contact-form-action">
                                    {{ Form::open(['route'=>'ticket.store', 'method' => 'post','files' => false])}}
                                    <div class="row">

                                        <div class="col-lg-12 col-sm-12">
                                            <div class="input-box">
                                                {{Form::label('title', 'عنوان', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::text('title', null, ['class' => 'form-control','placeholder' => 'عنوان']) !!}
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="input-box">
                                                {{Form::label('content', 'متن', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::textarea('content', null, ['class' => 'form-control','placeholder'=>'متن تیکت را وارد کنید']) !!}
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('receiver_id', 'گیرنده', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    <select name="receiver_id" id="receiver_id" class="form-control">
                                                        @foreach($data as $item)
                                                            @php($profile = \App\Models\profile::where('user_id',$item)->first())
                                                            <option value="{{$item}}">{{$profile->name. ' '.$profile->lastName}}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->


                                    </div><!-- end row -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            {!! Form::submit('ارسال', ['class' => 'theme-btn float-left']) !!}

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

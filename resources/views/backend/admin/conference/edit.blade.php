@extends('backend.admin.partial._master')
@section('title','همایشات')
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
                            <h3 class="widget-title">همایش ها</h3>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="user-form">
                                <div class="contact-form-action">
                                    {{ Form::model($data,['route'=>['conference.update', $data->id], 'method' => 'put','files' => true])}}
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('name', 'نام همایش', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'نام همایش']) !!}
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('price', 'قیمت', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::number('price', $data->price, ['class' => 'form-control','placeholder' => 'قیمت']) !!}
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('date', 'تاریخ', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::time('date', $data->date, ['class' => 'form-control','placeholder' => 'تاریخ']) !!}
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('offer', 'تخفیف', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::number('offer', $data->offer, ['class' => 'form-control','placeholder' => 'تخفیف']) !!}
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('count', 'ظرفیت', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::number('count', $data->count, ['class' => 'form-control','placeholder' => 'ظرفیت']) !!}
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('picture', 'نام آزمون', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::file('picture', ['class' => 'form-control']) !!}
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('description', 'توضیحات', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::textarea('description', $data->description, ['class' => 'form-control','placeholder' => 'توضیحات']) !!}
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <!-- end col-lg-6 -->


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

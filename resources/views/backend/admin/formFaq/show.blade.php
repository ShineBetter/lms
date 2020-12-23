@extends('backend.admin.partial._master')
@section('title','مشاوره')
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
                            <h3 class="widget-title">پیام</h3>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="user-form">
                                <div class="contact-form-action">
                                    {{ Form::model($data,['route'=>['formFaq.update', $data->id], 'method' => 'put','files' => false
])}}

                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('text', 'پیام', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::textarea('text', null, ['class' => 'form-control','placeholder' => 'پیام','disabled']) !!}
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->


                                    </div><!-- end row -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            {!! Form::submit('بازگشت', ['class' => 'theme-btn float-left']) !!}
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

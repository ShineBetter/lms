@extends('backend.admin.partial._master')
@section('title','تماس با ما')
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
                            <h3 class="widget-title">تماس با ما</h3>
                        </div>

                        <div class="card-box-shared-body">
                            <div class="user-form">
                                <div class="contact-form-action">
                                   <div class="col-lg-12">
                                       <textarae class="form-control w-100">{{$data->text}}</textarae>
                                   </div>
                                    <a href="/contact-form" class="btn btn-success mt-2">بازگشت</a>
                                </div>
                            </div>
                        </div><!-- end card-box-shared-body -->
                    </div><!-- end card-box-shared -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-content-wrap -->
@endsection

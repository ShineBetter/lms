@extends('backend.admin.partial._master')
@section('title','محصولات')
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
                            <h3 class="widget-title">اطلاهات محصول</h3>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="user-form">
                                <div class="contact-form-action">
                                    {{ Form::open(['route'=>'product.store', 'method' => 'post','files' => true])}}
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('product_name', 'نام محصول', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::text('product_name', null, ['class' => 'form-control','placeholder' => 'نام محصول']) !!}
                                                    <i class="fas fa-angle-bottom input-icon"></i>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('product_price', 'قیمت محصول (تومان)', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::number('product_price', null, ['class' => 'form-control','placeholder' => '50.000']) !!}
                                                    <i class="fas fa-angle-bottom input-icon"></i>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('product_discount', 'درصد تخفیف', ['class' => 'label-text'])}}
                                                <div class="form-group">
                                                    {!! Form::number('product_discount', null, ['class' => 'form-control','placeholder' => '50','min' => '0','max' => '100']) !!}
                                                    <i class="fas fa-angle-bottom input-icon"></i>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('product_img', 'تصویر محصول', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::file('product_img', ['class' => 'form-control']) !!}
{{--                                                    <i class="fas fa-angle-right input-icon"></i>--}}
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="input-box">
                                                {{Form::label('product_short_desc', 'توضیح مختصر', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::text('product_short_desc', null, ['class' => 'form-control','placeholder' => 'توضیح مختصر درباره محصول']) !!}
                                                    <i class="fas fa-angle-bottom input-icon"></i>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="input-box">
                                                {{Form::label('product_desc', 'توضیح کامل', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::textarea('product_desc', null, ['class' => 'form-control','placeholder' => 'توضیح کامل درباره محصول']) !!}
{{--                                                    <i class="fas fa-angle-bottom input-icon"></i>--}}
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        @if($data->toArray() != null)
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="input-box">
                                                    {{Form::label('category_id', 'دسته بندی محصول', ['class' => 'label-text'])}}
                                                    <span class="primary-color-2 ml-1">*</span>
                                                    <div class="form-group">
                                                        <select class="form-control" name="category_id"
                                                                id="category_id">
                                                            @foreach($data as $item)
                                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                        @endif
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('product_file', 'فایل محصول', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::file('product_file', ['class' => 'form-control']) !!}
{{--                                                    <i class="fas fa-angle-bottom input-icon"></i>--}}
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="input-box">
                                                <div class="student_radio_inputs_group">
                                                    <input type="radio" class="student_radio_input" checked
                                                           name="product_count_status" value="1"
                                                           id="unlimit_product_count"/>
                                                    <label for="unlimit_product_count"
                                                           class="student_radio_input_lable">تعداد نامحدود</label>
                                                    <input type="radio" class="student_radio_input"
                                                           name="product_count_status"
                                                           value="2" id="limit_product_count"/>
                                                    <label for="limit_product_count" class="student_radio_input_lable">تعداد
                                                        محدود</label>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6 col-sm-6 product_count_div" style="display: none">
                                            <div class="input-box">
                                                {!! Form::number('product_count',null,['class' => 'form-control product_count','style'=>'width:50%;','min' => 0,'placeholder' => '20']) !!}
                                            </div>
                                        </div><!-- end col-lg-6 -->

                                        <style>
                                            .lbl {
                                                position: relative;
                                                display: block;
                                                height: 20px;
                                                width: 44px;
                                                background: #898989;
                                                border-radius: 100px;
                                                cursor: pointer;
                                                transition: all 0.3s ease;
                                            }
                                            .lbl:after {
                                                position: absolute;
                                                left: -2px;
                                                top: -3px;
                                                display: block;
                                                width: 26px;
                                                height: 26px;
                                                border-radius: 100px;
                                                background: #fff;
                                                box-shadow: 0px 3px 3px rgba(0,0,0,0.05);
                                                content: '';
                                                transition: all 0.3s ease;
                                            }
                                            .lbl:active:after {
                                                transform: scale(1.15, 0.85);
                                            }
                                            .cbx:checked ~ label {
                                                background: #6fbeb5;
                                            }
                                            .cbx:checked ~ label:after {
                                                left: 20px;
                                                background: #179588;
                                            }
                                            .cbx:disabled ~ label {
                                                background: #d5d5d5;
                                                pointer-events: none;
                                            }
                                            .cbx:disabled ~ label:after {
                                                background: #bcbdbc;
                                            }
                                            .cntr {
                                                position: absolute;
                                                top: 50%;
                                                left: 50%;
                                                transform: translate(-50%, -50%);
                                            }
                                            .press {
                                                margin-bottom: 40px;
                                            }
                                            .hidden {
                                                display: none;
                                            }
                                        </style>


                                        <div class="col-lg-6 col-sm-6 d-flex align-items-center">
                                            <div class="input-box">
                                                {{Form::label('checked', 'انتشار محصول', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <input type="checkbox" name="product_status" value="0" id="checked" class="cbx hidden" checked/>
                                                <label for="checked" class="lbl"></label>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                    </div><!-- end row -->
                                    <div class="row mt-3">
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

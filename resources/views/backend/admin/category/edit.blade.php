@extends('backend.admin.partial._master')
@section('title','دسته بندی')
@section('cntd')
    @parent
    @php
        $header="";
        $loader="dont";
        $sidebar="";
    @endphp
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
                            <h3 class="widget-title">اطلاعات دسته بندی</h3>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="user-form">
                                <div class="contact-form-action">
                                    {{ Form::model($data,['route'=>['category.update',$data->id], 'method' => 'put','files' => true])}}
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('category_name', 'نام دسته بندی', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    {!! Form::text('category_name', $data->name, ['class' => 'form-control','placeholder' => 'نام دسته بندی']) !!}
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                        @if($category->toArray() != null)
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="input-box">
                                                    {{Form::label('category_name', 'زیردسته', ['class' => 'label-text'])}}
                                                    <span class="primary-color-2 ml-1">*</span>
                                                    <div class="form-group">
                                                        <select class="form-control" name="parent_category" id="parent_category">
                                                            <option value="" class="disabled" selected>انتخاب کنید</option>
                                                            @foreach($category as $item)
                                                                <option {{$item->id == $data->parent_id ? 'selected' : ''}} value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                        @endif
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

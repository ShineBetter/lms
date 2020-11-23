@extends('backend.admin.partial._master')
@section('title','پایه ها')
@section('cntd')
    @php
        $header="";
        $loader="dont";
        $sidebar="";
        $forms = $form['form'];
        $inputs = $form['input'];
        $class = $form['org'];
        $hasFile = $forms['files'] ? true : false;
    @endphp
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
                                    @if($form['type'] == 'edit')
                                        {{ Form::model($class,['route' => [$forms['action'],$class->id], 'method' => $forms['method'],'files'=>$hasFile])}}
                                    @elseif($form['type'] == 'add')
                                        {{ Form::open(['route'=>'level.store', 'method' => 'post','files' => true])}}
                                    @endif
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                {{Form::label('level_title', 'عنوان پایه', ['class' => 'label-text'])}}
                                                <span class="primary-color-2 ml-1">*</span>
                                                <div class="form-group">
                                                    @foreach($form['input'] as $key => $item)
                                                        @php
                                                            $val = serialize($item['value']);

var_dump($class->$val);
    $valueFlag = $item['values'] ? true : false;
                                                        @endphp
                                                        {{--                                                        <input type="{{$key}}" name="{{$item['name']}}" class="{{$item['class']}}" placeholder="{{$item['placeholder']}}" {{$valueFlag ? "value='$val'" : ''}}>--}}
                                                    @endforeach
                                                    {{--                                                    {!! Form::text('level_title', $level->level_title, ['class' => 'form-control','placeholder' => 'نام پایه']) !!}--}}
                                                    <span class="la la-file-text-o input-icon"></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-6 -->
                                    </div><!-- end row -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <x-btn type="submit" title="ثبت" class="theme-btn float-left"/>
                                            <x-btn route="level.index" title="بازگشت" class="theme-btn float-left"/>
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
    </div>

@endsection

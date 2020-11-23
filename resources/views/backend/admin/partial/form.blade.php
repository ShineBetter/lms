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
                                    @else
                                        {{ Form::open(['route'=>'level.store', 'method' => 'post','files' => true])}}
                                    @endif
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="input-box">
                                                <div class="form-group">
                                                    @foreach($form['input'] as $key => $item)
                                                        @if(\Illuminate\Support\Str::contains($key,'label_'))
                                                            <label for="{{$item['for']}}"
                                                                   class="{{$item['class']}}">{{$item['text']}}</label>
                                                        @else
                                                            @if($form['type'] == 'edit')
                                                                @php
                                                                    $val = \Illuminate\Support\Arr::has($item,'value');
                                                                    $valueFlag = \Illuminate\Support\Arr::has($item,'values');
                                                                    $name = \Illuminate\Support\Arr::has($item,'name');
                                                                    $type = \Illuminate\Support\Arr::has($item,'type');
                                                                    $inputClass = \Illuminate\Support\Arr::has($item,'class');
                                                                    $placeholder = \Illuminate\Support\Arr::has($item,'placeholder');
                                                                    $valueFlag = \Illuminate\Support\Arr::has($item,'values');
                                                                    $required = \Illuminate\Support\Arr::has($item,'required');
                                                                    if ($val){
                                                                    $val = $item['value'];
                                                                    $val = $class->$val;
                                                                    }
                                                                    if ($valueFlag){
                                                                    $valueFlag = $item['values'] ? true : false;
                                                                    }
                                                                    if ($type){
                                                                    $type = $item['type'];
                                                                    }
                                                                    if ($name){
                                                                    $name = $item['name'];
                                                                    }
                                                                    if ($inputClass){
                                                                    $inputClass = $item['class'];
                                                                    }
                                                                    if ($placeholder){
                                                                    $placeholder = $item['placeholder'];
                                                                    }
                                                                    if ($required){
                                                                    $required = $item['required'];
                                                                    }
                                                                @endphp
                                                                @if($required)
                                                                    <span class="primary-color-2 ml-1">*</span>
                                                                @endif

                                                                <input type="{{$type}}" name="{{$name}}"
                                                                       class="{{$inputClass}}"
                                                                       id="{{$key}}"
                                                                       placeholder="{{$placeholder}}" {{$valueFlag ? "value=$val" : ''}}>
                                                                <span class="la la-file-text-o input-icon"></span>
                                                            @else
                                                                <input type="{{$item['type']}}" name="{{$item['name']}}"
                                                                       class="{{$item['class']}}"
                                                                       placeholder="{{$item['placeholder']}}">
                                                                <span class="la la-file-text-o input-icon"></span>
                                                            @endif
                                                        @endif
                                                    @endforeach
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

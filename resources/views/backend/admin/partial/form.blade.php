@extends('backend.admin.partial._master')
@section('title','پایه ها')
@section('cntd')
    @php
        $header="";
        $loader="dont";
        $sidebar="";
        $backAction = \Illuminate\Support\Arr::has($form,'action');
        $routeParam = \Illuminate\Support\Arr::has($form,'actionParam');
        if ($backAction){
        $backAction = $form['action'];
        }
        if ($routeParam){
        $routeParam = $form['actionParam'];
        }

        $forms = $form['form'];
        $inputs = $form['input'];
        $class = $form['data'];
        $hasFile = $forms['files'] ? true : false;
    @endphp
    <div class="dashboard-content-wrap">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <h3 class="widget-title">افزودن پایه به آقا /
                        خانم {{\App\User::findorfail(Auth::id())->profile()->first()->name}}</h3>
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
                                        {{ Form::open(['route'=>$forms['action'],  'method' => $forms['method'],'files'=>$hasFile])}}
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
                                                            @php
                                                                $required = \Illuminate\Support\Arr::has($item,'required');
                                                                $name = \Illuminate\Support\Arr::has($item,'name');
                                                                $type = \Illuminate\Support\Arr::has($item,'type');
                                                                $inputClass = \Illuminate\Support\Arr::has($item,'class');
                                                                $placeholder = \Illuminate\Support\Arr::has($item,'placeholder');
                                                                $valueFlag = \Illuminate\Support\Arr::has($item,'values');
                                                                $select_model = \Illuminate\Support\Arr::has($item,'select_model');
                                                                $select_items = \Illuminate\Support\Arr::has($item,'select_items');
                                                                $selected_value = \Illuminate\Support\Arr::has($item,'selected_value');
                                                                $models = \Illuminate\Support\Arr::has($item,'model');
                                                                $org_key = \Illuminate\Support\Arr::has($item,'org_key');
                                                                $forg_key = \Illuminate\Support\Arr::has($item,'forg_key');
                                                            if ($required){
                                                                $required = $item['required'];
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
                                                                if ($select_model){
                                                                $select_model = $item['select_model'];
                                                                }
                                                                if ($select_items){
                                                                $select_items = $item['select_items'];
                                                                }
                                                                if ($selected_value){
                                                                $selected_value = $item['selected_value'];
                                                                }
                                                                if ($models){
                                                                $models = $item['model'];
                                                                }
                                                                if ($org_key){
                                                                $org_key = $item['org_key'];
                                                                }
                                                                if ($forg_key){
                                                                $forg_key = $item['forg_key'];
                                                                }
                                                            @endphp
                                                            @if($required)
                                                                <span class="primary-color-2 ml-1">*</span>
                                                            @endif
                                                            @if($form['type'] == 'edit')
                                                                @php
                                                                    $val = \Illuminate\Support\Arr::has($item,'value');
                                                                    if ($val){
                                                                            $val = $item['value'];
                                                                            $val = $class->$val;
                                                                    }

                                                                @endphp
                                                                @if($type != 'select')
                                                                    @if ($models == false)
                                                                        <input type="{{$type}}" name="{{$name}}"
                                                                               class="{{$inputClass}}"
                                                                               id="{{$key}}"
                                                                               placeholder="{{$placeholder}}"
                                                                               value='{{$valueFlag ? $val : ''}}' {{ $required ? 'required' : '' }}>
                                                                    @else
                                                                        <input type="{{$type}}" name="{{$name}}"
                                                                               class="{{$inputClass}}"
                                                                               id="{{$key}}"
                                                                               placeholder="{{$placeholder}}"
                                                                               value='{{$valueFlag ? $models::where("$org_key", $class->id)->pluck('email') : ''}}' {{ $required ? 'required' : '' }}>
                                                                    @endif
                                                                    <span class="la la-file-text-o input-icon"></span>
                                                                @endif
                                                                @if($type == 'select')
                                                                    {{ Form::select($key, $select_model, $select_items[$selected_value], ['class' => "$inputClass"]) }}
                                                                @endif
                                                            @else
                                                                @if($type != 'select')
                                                                    <input type="{{$type}}" name="{{$name}}"
                                                                           class="{{$inputClass}}"
                                                                           placeholder="{{$placeholder}}" {{ $required ? 'required' : '' }}>
                                                                    <span
                                                                        class="la la-file-text-o input-icon"></span>
                                                                @endif
                                                                @if($type == 'select')
                                                                    {{ Form::select($key, $select_model, null, ['class' => "$inputClass"]) }}
                                                                @endif
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
                                            @if($routeParam != '')
                                                <x-btn route="{{$backAction}}" routeParam="{{$routeParam}}"
                                                       title="بازگشت" class="theme-btn float-left"/>
                                            @else
                                                <x-btn route="{{$backAction}}"
                                                       title="بازگشت" class="theme-btn float-left"/>

                                            @endif
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

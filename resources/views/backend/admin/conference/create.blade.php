@extends('backend.admin.partial._master')
@section('main.content')
    <section dir="rtl">

        <section class="container" style="padding: 50px" dir="rtl">

            <section>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </section>

            <section>
                @if (session()->has('conference'))
                    <section class="alert alert-success">
                        <h3>{{ session('conference') }}</h3>
                    </section>
                @endif
            </section>

            {{ Form::open(['route'=>'conference.store', 'method' => 'post','files' => true])}}
            <section class="form-group">
                {{Form::label('title', 'عنوان : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </section>

            <section class="form-group">
                {{Form::label('description', 'توضیحات : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::textarea('description', null, ['class' => 'form-control','rows'=>'3','wrap'=>'soft']) !!}
            </section>

            <section class="form-group">
                {{Form::label('date', 'تاریخ همایش : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::date('date',\Carbon\Carbon::now(), ['class' => 'form-control']) !!}

            </section>

            <section class="form-group">
                {{Form::label('time', 'ساعت همایش : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::time('time',\Carbon\Carbon::now(), ['class' => 'form-control']) !!}

            </section>

            <section class="form-group">
                {{Form::label('periodOfTime', 'مدت زمان همایش :(دقیقه) ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                <input type="number" class="form-control" min="1" max="999" maxlength="3"
                       oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                       name="periodOfTime">
            </section>

            <section class="form-group">
                {{Form::label('speacher', 'سخنران : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::text('speacher', null, ['class' => 'form-control']) !!}
            </section>

            {!! Form::label('image', 'تصویر : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma']) !!}
            <section class="form-group">
                {!! Form::file('image',['class'=>'form-control']) !!}
            </section>

            <section class="form-group">
                {{Form::label('status', 'وضعیت : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::select('status',['active'=>'فعال','inactive'=>'غیر فعال'],'فعال',['class' => 'form-control']) !!}
            </section>

            <hr>
            <section class="form-group">
                {!! Form::submit('ثبت', ['class' => 'form-control btn btn-info','style'=>'font-size: 15px;font-family: Tahoma']) !!}
            </section>

            {{ Form::close() }}

            <section class="form-group">
                <a href="{{route('conference.index')}}"><input type="button" class="form-control btn btn-success"
                                                               style="font-size: 15px;font-family: Tahoma"
                                                               value="  بازگشت  "></a>
            </section>
        </section>
    </section>
@endsection
{{--@push('scripts')--}}
{{--    <script type="text/javascript">--}}
{{--        $('#input1').change(function () {--}}
{{--            var $this = $(this),--}}
{{--                value = $this.val();--}}
{{--            alert(value);--}}
{{--        });--}}
{{--        $('#textbox1').change(function () {--}}
{{--            var $this = $(this),--}}
{{--                value = $this.val();--}}
{{--            alert(value);--}}
{{--        });--}}
{{--        $('[data-name="disable-button"]').click(function () {--}}
{{--            $('[data-mddatetimepicker="true"][data-targetselector="#input1"]').MdPersianDateTimePicker('disable', true);--}}
{{--        });--}}
{{--        $('[data-name="enable-button"]').click(function () {--}}
{{--            $('[data-mddatetimepicker="true"][data-targetselector="#input1"]').MdPersianDateTimePicker('disable', false);--}}
{{--        });--}}
{{--    </script>--}}
{{--    <script src="{{asset('calender/js/jalaali.js')}}" type="text/javascript"></script>--}}
{{--    <script src="{{asset('calender/js/jquery.Bootstrap-PersianDateTimePicker.js" type="text/javascript')}}"></script>--}}
{{--@endpush--}}


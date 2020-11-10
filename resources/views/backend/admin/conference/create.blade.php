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
                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
            </section>
            <section class="form-group">
                {{Form::label('speacher', 'ُ سخنران : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::text('speacher', null, ['class' => 'form-control']) !!}
            </section>
            <section class="form-group">
                {{Form::label('date', 'تاریخ همایش : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::date('date', null, ['class' => 'form-control']) !!}
            </section>
            <section class="form-group">
                {{Form::label('time', 'ساعت شروع : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::time('time', null, ['class' => 'form-control']) !!}
            </section>
            <section class="form-group">
                {{Form::label('periodOfTime', 'مدت زمان همایش  :(دقیقه) ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {{--                {!! Form::number('periodOfTime', null, ['class' => 'form-control']) !!}--}}
                <input type="number" id="periodOfTime" name="periodOfTime" min="1" max="999" class="form-control"
                       onKeyUp="if(this.value>999){this.value='999';}else if(this.value<0){this.value='0';}">
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
@push('custosm-scripts')
    <script>
        $(function () {
            $("input[type='number']").prop('min', 1);
            $("input[type='number']").prop('max', 999);
        });
    </script>

@endpush



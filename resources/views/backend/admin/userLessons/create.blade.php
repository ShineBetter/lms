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
                @if (session()->has('userLessons'))
                    <section class="alert alert-success">
                        <h3>{{ session('userLessons') }}</h3>
                    </section>
                @endif

            </section>
            {{ Form::open(['route'=>'userLessons.store', 'method' => 'post','files' => true])}}
            <section class="form-group">
                {{Form::label('name', 'نام : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}

                {{Form::label('lastName', 'نام خانوادگی : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::text('lastName', null, ['class' => 'form-control']) !!}

                {{Form::label('email', 'ایمیل : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}

                {{Form::label('phone', 'شماره ثابت : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::number('phone', null, ['class' => 'form-control']) !!}

                {{Form::label('nationalNumber', 'کد ملی : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::number('nationalNumber', null, ['class' => 'form-control']) !!}

                {{Form::label('mobile', 'موبایل : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::number('mobile') !!}

                {{Form::label('date_of_birth', 'تاریخ تولد : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::text('date_of_birth', null, ['class' => 'form-control']) !!}

                {{Form::label('address', 'آدرس : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::text('address', null, ['class' => 'form-control']) !!}

                {{Form::label('photo', 'عکس : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::file('photo', null, ['class' => 'form-control']) !!}
            </section>
            <script>
                $('#date_of_birth').datetimepicker({
                    format: 'yyyy-mm-dd'
                });
            </script>
            <hr>
            <section class="form-group">
                {!! Form::submit('ثبت', ['class' => 'form-control btn btn-info','style'=>'font-size: 15px;font-family: Tahoma']) !!}
            </section>

            {{ Form::close() }}

            <section class="form-group">
                <a href="{{route('userLessons.index')}}"><input type="button" class="form-control btn btn-success"
                                                           style="font-size: 15px;font-family: Tahoma"
                                                           value="  بازگشت  "></a>
            </section>
        </section>
    </section>
@endsection



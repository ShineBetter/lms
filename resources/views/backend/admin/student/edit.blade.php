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
                @if (session()->has('student'))
                    <section class="alert alert-success">
                        <h3>{{ session('student') }}</h3>
                    </section>
                @endif

            </section>
            {{ Form::model($student,['route' => ['student.update',$student->id], 'method' => 'put','files'=>true])}}
            <section class="form-group">
                @csrf
                {{Form::label('name', 'نام : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::text('name', $profile->name, ['class' => 'form-control']) !!}

                {{Form::label('lastName', 'نام خانوادگی : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::text('lastName', $profile->lastName, ['class' => 'form-control']) !!}

                {{Form::label('email', 'ایمیل : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::text('email', $student->email, ['class' => 'form-control']) !!}

                {{Form::label('phone', 'شماره ثابت : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::number('phone', $profile->phone, ['class' => 'form-control']) !!}

                {{Form::label('nationalNumber', 'کد ملی : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::number('nationalNumber', $profile->nationalNumber, ['class' => 'form-control']) !!}

                {{Form::label('mobile', 'موبایل : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::number('mobile',$profile->mobile) !!}

                {{Form::label('date_of_birth', 'تاریخ تولد : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::text('date_of_birth', $profile->date_of_birth, ['class' => 'form-control']) !!}

                {{Form::label('address', 'آدرس : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::text('address', $profile->address, ['class' => 'form-control']) !!}

                {{Form::label('photo', 'عکس : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::text('photo', $profile->photo, ['class' => 'form-control']) !!}
            </section>

            <hr>
            <section class="form-group">
                {!! Form::submit('ثبت', ['class' => 'form-control btn btn-info','style'=>'font-size: 15px;font-family: Tahoma']) !!}
            </section>

            {{ Form::close() }}

            <section class="form-group">
                <a href="{{route('student.index')}}"><input type="button" class="form-control btn btn-success"
                                                          style="font-size: 15px;font-family: Tahoma"
                                                          value="  بازگشت  "></a>
            </section>
        </section>
    </section>
@endsection



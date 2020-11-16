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
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </section>
            <section>
                @if (session()->has('role'))
                    <section class="alert alert-success">
                        <h3>{{ session('role') }}</h3>
                    </section>
                @endif

            </section>
            {{ Form::model($role,['route' => ['role.update',$role->id], 'method' => 'put','files'=>true])}}
            <section class="form-group">
                {{Form::label('title', 'نقش : ', ['class' => 'control-label','style'=>'font-size: 15px;font-family: Tahoma'])}}
                {!! Form::text('user_name', $role->name,['class' => 'form-control mb-3','disabled']) !!}
                {{Form::select('user_role',$roles,'',['class'=>'form-control'])}}

            </section>

            <hr>
            <section class="form-group">
                {!! Form::submit('ثبت', ['class' => 'form-control btn btn-info','style'=>'font-size: 15px;font-family: Tahoma']) !!}
            </section>

            {{ Form::close() }}

            <section class="form-group">
                <a href="{{route('role.index')}}"><input type="button" class="form-control btn btn-success"
                                                          style="font-size: 15px;font-family: Tahoma"
                                                          value="  بازگشت  "></a>
            </section>
        </section>
    </section>
@endsection



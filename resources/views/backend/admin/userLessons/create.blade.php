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
            <h3>{{$title}}</h3>
            {{ Form::open(['route' => ['userLessons.store',$user_id], 'method' => 'post','files' => true])}}
            <section class="form-group">
                {{Form::label('lessons','درس :',['class' => 'control-label','style'=>'font-size: 15px;'])}}
                {{Form::select('lessons',$lessons,null,['class'=>'form-control'])}}
            </section>

            <hr>
            <section class="form-group">
                {!! Form::submit('ثبت', ['class' => 'form-control btn btn-info','style'=>'font-size: 15px;font-family: Tahoma']) !!}
            </section>

            {{ Form::close() }}

            <section class="form-group">
                <a href="{{route('userLessons.index',$user_id)}}"><input type="button" class="form-control btn btn-success"
                                                           style="font-size: 15px;font-family: Tahoma"
                                                           value="  بازگشت  "></a>
            </section>
        </section>
    </section>
@endsection



@extends('backend.admin.partial._master')
@section('main.content')
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
            @if (session()->has('role'))
                <section class="alert alert-danger">
                    <h3>{{ session('role') }}</h3>
                </section>
            @endif

        </section>
        <table class="table table-hover table-bordered">
            <thead class="bg-success" style="font-size: 15px ; font-family: Tahoma; background-color: #67b168;text-align: center">
            <td>
                <label style="color: white"> ردیف </label>
            </td>
            <td>
                <label style="color: white"> نام </label>
            </td>
            <td>
                <label style="color: white"> نام خانوادگی </label>
            </td>
            <td>
                <label style="color: white"> آدرس ایمیل </label>
            </td>

            <td colspan="3" style="text-align: center">
                <label style="color: white">ویرایش</label>
            </td>

            </thead>
            <tbody>
            {{--            {{$i=0}}--}}
            @foreach($user as $item)

                <tr style="text-align: justify">
                    <td>
                        <label style="color: black">{{ ++$row }}</label>
                    </td>
                    <td>
                        <label style="color: black">{{$item->name}}</label>
                    </td>
                    <td>
                        <label style="color: black">{{$item->lastName}}</label>
                    </td>

                    <td>
                        <label style="color: black">{{$item->email}}</label>
                    </td>
                    <td style="text-align: center">
                        <a href="{{route('role.edit',$item->id)}}">
                            <label style="color: black">استاد</label><input type="checkbox" id="" name="role" value="teacher">
                        </a>
                        <a href="{{route('role.edit',$item->id)}}">
                            <label style="color: black">دانشجو</label><input type="checkbox" id="" name="role" value="student">
                        </a><a href="{{route('role.edit',$item->id)}}">
                            <label style="color: black">اولیا</label><input type="checkbox" id="" name="role" value="parent">
                        </a>
                    </td>
{{--                    <td style="text-align: center"><a href="{{route('role.edit',$item->id)}}"><input type="button" class="btn btn-info" style="font-size: 15px;font-family: Tahoma" value="ویرایش"></a></td>--}}
{{--                    <td style="text-align: center">--}}
{{--                        {!! Form::open(['route' => ['role.destroy', $item->id ],'method' => 'delete']) !!}--}}
{{--                        {!! Form::submit('حذف', ['class' => 'btn btn-danger']) !!}--}}
{{--                        {!! Form::close() !!}--}}
{{--                    </td>--}}

                </tr>
            @endforeach
            </tbody>


        </table>
        <span style="float:right">{{$user->links()}}</span>
{{--        <section class="form-group">--}}
{{--            <td style="text-align: center"><a href="{{route('role.create')}}"><input type="button" class="form-control btn btn-info"  style="font-size: 15px;font-family: Tahoma"value="تعیین نقش "></a></td>--}}
{{--        </section>--}}

    </section>
@endsection


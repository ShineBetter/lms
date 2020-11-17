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
            @if (session()->has('userLessons'))
                <section class="alert alert-danger">
                    <h3>{{ session('userLessons') }}</h3>
                </section>
            @endif

        </section>
        <table class="table table-hover table-bordered">
            <thead class="bg-success" style="font-size: 15px ; font-family: Tahoma; background-color: #67b168;text-align: center">
            <td>
                <label style="color: white"> ردیف </label>
            </td>
            <td>
                <label style="color: white"> عنوان پایه </label>
            </td>


            <td colspan="3" style="text-align: center">
                <label style="color: white">ویرایش</label>
            </td>

            </thead>
            <tbody>

            @foreach($userLessons as $item)




                <tr style="text-align: justify">
                    <td>
                        <label style="color: black">{{ ++$row }}</label>
                    </td>
                    <td>
                        <label style="color: black">{{ $item->title }} </label>
                    </td>

                    <td style="text-align: center">

                        <a href="{{route('userLessons.edit',['lesson_id' => $item->id, 'teacher_id' => $teacher_id])}}"><input type="button" class="btn btn-info" style="font-size: 15px;font-family: Tahoma" value="ویرایش"></a>
                    </td>

                    <td style="text-align: center">
                        {!! Form::open(['route' => ['userLessons.destroy', ['lesson_id' => $item->id, 'teacher_id' => $teacher_id] ],'method' => 'delete']) !!}
                        {!! Form::submit('حذف', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>

                </tr>
            @endforeach
            </tbody>


        </table>
{{--        <span style="float:right">{{$userLessons->links()}}</span>--}}
        <section class="form-group">
            <td style="text-align: center"><a href="{{route('userLessons.create',$teacher_id)}}"><input type="button" class="form-control btn btn-info"  style="font-size: 15px;font-family: Tahoma"value="صفحه درج "></a></td>
        </section>

    </section>
@endsection


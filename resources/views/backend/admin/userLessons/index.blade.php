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
        <h4>{{ $title }}</h4>
        <h5>{{ $userTitle }}</h5>
        <table class="table table-hover table-bordered">
            <thead class="bg-success"
                   style="font-size: 15px ; font-family: Tahoma; background-color: #67b168;text-align: center">
            <td>
                <label style="color: white"> ردیف </label>
            </td>
            <td>
                <label style="color: white">دروس</label>
            </td>

            @if(\Illuminate\Support\Facades\Gate::check('Admin') || \Illuminate\Support\Facades\Gate::check('Teacher'))
                <td colspan="3" style="text-align: center">
                    <label style="color: white">ویرایش</label>
                </td>
            @endif
            </thead>
            <tbody>

            @foreach($userLessons as $item)
                <tr style="text-align: justify">
                    <td>
                        <label style="color: black">{{ ++$row }}</label>
                    </td>
                    <td>
                        <label style="color: black">{{ $item->lesson_title }} </label>
                    </td>
                    @if(\Illuminate\Support\Facades\Gate::check('Admin') || \Illuminate\Support\Facades\Gate::check('Teacher'))
                        <td style="text-align: center">

                            <a href="{{route('userLessons.edit',['lesson_id' => $item->id, 'user_id' => $user_id])}}"><input
                                    type="button" class="btn btn-info" style="font-size: 15px;font-family: Tahoma"
                                    value="ویرایش"></a>
                        </td>
                        <td style="text-align: center">
                            {!! Form::open(['route' => ['userLessons.destroy', ['lesson_id' => $item->id, 'user_id' => $user_id] ],'method' => 'delete']) !!}
                            {!! Form::submit('حذف', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    @endif

                </tr>
            @endforeach
            </tbody>


        </table>
                <span style="float:right">{{$userLessons->links()}}</span>
        @if(\Illuminate\Support\Facades\Gate::check('Admin') || \Illuminate\Support\Facades\Gate::check('Teacher'))
            <section class="form-group">
                <td style="text-align: center"><a href="{{route('userLessons.create',$user_id)}}"><input
                            type="button" class="form-control btn btn-info" style="font-size: 15px;font-family: Tahoma"
                            value="صفحه درج "></a></td>
            </section>
        @endif
    </section>
@endsection


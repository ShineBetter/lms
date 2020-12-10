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
            @if (session()->has('conference'))
                <section class="alert alert-danger">
                    <h3>{{ session('conference') }}</h3>
                </section>
            @endif

        </section>
        <table class="table table-hover table-bordered">
            <thead class="bg-success" style="font-size: 15px ; font-family: Tahoma; background-color: #67b168;text-align: center">
            <td>
                <label style="color: white"> ردیف </label>
            </td>
            <td>
                <label style="color: white"> عنوان </label>
            </td>
            <td>
                <label style="color: white"> سخنران </label>
            </td>
            <td>
                <label style="color: white"> توضیحات </label>
            </td>
            <td>
                <label style="color: white"> تاریخ </label>
            </td>
            <td>
                <label style="color: white"> زمان</label>
            </td>
            <td>
                <label style="color: white"> مدت زمان همایش</label>
            </td>
            <td>
                <label style="color: white"> وضعیت </label>
            </td>
            <td>
                <label style="color: white"> تصویر</label>
            </td>

            <td colspan="3" style="text-align: center">
                <label style="color: white">ویرایش</label>
            </td>

            </thead>
            <tbody>

            @foreach($conference as $item)
                <tr style="text-align: justify">
                    <td>
                        <label style="color: black">{{++$row}}</label>
                    </td>

                    <td>
                        <label style="color: black">{{$item->title}}</label>
                    </td>
                    <td>
                        <label style="color: black">{{$item->speacher}}</label>
                    </td>
                    <td>
                        <label style="color: black">{{$item->description}}</label>
                    </td>
                    <td>
                        <label style="color: black">{{$item->date}}</label>
                    </td>
                    <td>
                        <label style="color: black">{{$item->time}}</label>
                    </td>
                    <td>
                        <label style="color: black">{{$item->periodOfTime}}</label>
                    </td>
                    <td>
                        @if($item->status=='active')
                            <span class="badge badge-success">{{$item->status}}</span>
                        @else
                            <span class="badge badge-warning">{{$item->status}}</span>
                        @endif
                    </td>
                    <td style="text-align: center"><img src="{{asset('image/conference/'.$item->image)}}" style="width: 50px;height: 50px; border-radius: 5px"></td>

                    <td style="text-align: center"><a href="{{route('conference.edit',$item->id)}}"><input type="button" class="btn btn-info" style="font-size: 15px;font-family: Tahoma" value="ویرایش"></a></td>
                    <td style="text-align: center">
                        {!! Form::open(['route' => ['conference.destroy', $item->id ],'method' => 'delete']) !!}
                        {!! Form::submit('حذف', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>

                </tr>
            @endforeach
            </tbody>


        </table>
        <span style="float:right">{{$conference->links()}}</span>
        <section class="form-group">
            <td style="text-align: center"><a href="{{route('conference.create')}}"><input type="button" class="form-control btn btn-info"  style="font-size: 15px;font-family: Tahoma"value="صفحه درج "></a></td>
        </section>

    </section>
@endsection


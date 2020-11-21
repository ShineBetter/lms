@extends('backend.admin.partial._master')
@section('main.content')
    @can('Admin')
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
                <thead class="bg-success"
                       style="font-size: 15px ; font-family: Tahoma; background-color: #67b168;text-align: center">
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
                <td>
                    <label style="color: white"> نقش </label>
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

                        <td>
                            <label style="color: black">{{$item->user_role}}</label>
                        </td>

                        <td style="text-align: center"><a href="{{route('role.edit',$item->id)}}"><input
                                    type="button" class="btn btn-info"
                                    style="font-size: 15px;font-family: Tahoma" value="ویرایش"></a></td>


                    </tr>
                @endforeach
                </tbody>


            </table>
            {{--        <span style="float:right">{{$user->links()}}</span>--}}
            {{--        <section class="form-group">--}}
            {{--            <td style="text-align: center"><a href="{{route('role.create')}}"><input type="button" class="form-control btn btn-info"  style="font-size: 15px;font-family: Tahoma"value="تعیین نقش "></a></td>--}}
            {{--        </section>--}}

        </section>
        {{ $role->links() }}

    @else
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center text-white bg-danger">
                    <p>شما به این صفحه دسترسی ندارید</p>
                </div>
            </div>
        </div>
    @endcan
@endsection


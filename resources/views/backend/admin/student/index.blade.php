@extends('backend.admin.partial._master')
@section('title','دانش آموزان')
@section('cntd')
    @parent
    @php
        $header="";
        $loader="dont";
        $sidebar="";
        $sidebar="";
    @endphp
    @if(\Illuminate\Support\Facades\Session::has('status'))
        <x-alert type="success" text="{{\Illuminate\Support\Facades\Session::get('edit_status')}}"/>
    @endif
    <div class="dashboard-content-wrap">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <h3 class="widget-title">دانش آموزان</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <x-btn route="student.create"/>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="statement-table purchase-table table-responsive mb-5">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">ردیف</th>
                                        <th scope="col">نام</th>
                                        <th scope="col">نام خانوادگی</th>
                                        <th scope="col">نام والدین</th>
                                        <th scope="col">کد ملی</th>
                                        <th scope="col">شماره تماس</th>
                                        <th scope="col">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $key => $item)
                                        @php
                                            $profile = $item->profile;
                                            $parent = \App\Models\profile::where('user_id',$item->pid)->first();
                                        @endphp
                                        <tr>
                                            <td scope="row">
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li class="mb-1">
                                                            <p>{{ $key + $data->firstItem() }}</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>{{$profile->name}}</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>{{$profile->lastName}}</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        @if($item->pid != 0 || $item->pid != '')
                                                            <li>{{$parent->name . ' ' . $parent->lastName}}</li>
                                                        @else
                                                            <li>تعریف نشده است</li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>{{$profile->nationalNumber}}</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>{{$profile->mobile}}</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>
                                                            <a href="{{route('student.edit',$item->id)}}" class="btn-edit" data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش">
                                                                <span class="text-edit"></span>
                                                                <span class="flip-front"><i class="fas fa-user-edit"></i></span>
                                                                <span class="flip-back"><i class="fas fa-pen-square"></i></span>
                                                            </a>
{{--                                                            <a href=><input--}}
{{--                                                                    type="button" class="btn btn-info"--}}
{{--                                                                    style="font-size: 15px;font-family: Tahoma"--}}
{{--                                                                    value="ویرایش"></a>--}}

{{--                                                            <button type="button"--}}
{{--                                                                    user-name="{{$profile->name}} {{$profile->lastName}}"--}}
{{--                                                                    user-id="{{$item->id}}"--}}
{{--                                                                    class="btn btn-warning teacher-warn-btn">اخطار--}}
{{--                                                            </button>--}}
{{--                                                            --}}

                                                            <a href="#" class="btn-edit" data-bs-toggle="tooltip" data-bs-placement="top" title="اخطار" user-name="{{$profile->name}} {{$profile->lastName}}"
                                                               user-id="{{$item->id}}">
                                                                <span class="text-edit"></span>
                                                                <span class="flip-notif"><i class="fas fa-exclamation-triangle"></i></span>
                                                                <span class="flip-backnotif"><i class="fas fa-exclamation"></i></span>
                                                            </a>

                                                            @if($item->kick == 0)
{{--                                                                <button type="button"--}}
{{--                                                                        user-name="{{$profile->name}} {{$profile->lastName}}"--}}
{{--                                                                        user-id="{{$item->id}}"--}}
{{--                                                                        kicked="0"--}}
{{--                                                                        class="btn btn-danger teacher-kick-btn">اخراج--}}
{{--                                                                </button>--}}
                                                                <button href="#" class="btn-edit" data-bs-toggle="tooltip" data-bs-placement="top" title="اخراج" user-name="{{$profile->name}} {{$profile->lastName}}"
                                                                        user-id="{{$item->id}}"
                                                                        kicked="0">
                                                                    <span class="text-edit"></span>
                                                                    <span class="flip-alarm"><i class="fas fa-times-circle"></i></span>
                                                                    <span class="flip-exit"><i class="fas fa-times"></i></span>
                                                                </button>
                                                            @elseif($item->kick == 1)
                                                                <button type="button"
                                                                        user-name="{{$profile->name}} {{$profile->lastName}}"
                                                                        user-id="{{$item->id}}"
                                                                        kicked="1"
                                                                        class="btn btn-danger teacher-kick-btn">بازگشت کاربر
                                                                </button>

                                                            @endif
                                                            <a href="{{route('userLessons.index',$item->id)}}" class="btn-edit" data-bs-toggle="tooltip" data-bs-placement="top" title="دروس">
                                                                <span class="text-edit"></span>
                                                                <span class="flip-lesson"><i class="fas fa-book-reader"></i></span>
                                                                <span class="flip-backlesson"><i class="fas fa-book"></i></span>
                                                            </a>
{{--                                                            <x-btn type="" route="userLessons.index" routeParam="{{$item->id}}" class="btn-info" title="دروس"/>--}}
{{--                                                            <x-delbtn route="student.destroy" id="{{$item->id}}"/>--}}
                                                            <a href="{{route('student.destroy',$item->id)}}" class="btn-edit" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف">
                                                                <span class="text-edit"></span>
                                                                <span class="flip-login"><i class="fas fa-user-times"></i></span>
                                                                <span class="flip-plus"><i class="far fa-trash-alt"></i></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $data->links() }}
                            </div>
                        </div>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-content-wrap -->
@endsection

@extends('backend.admin.partial._master')
@section('title','مدیران')
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
    <style>
        .flip-login, .flip-plus {
            position: absolute;
            left: 41px;
        }
    </style>
    <div class="dashboard-content-wrap">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <h3 class="widget-title">مدیران</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <x-btn add='add' route="admin.create"/>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="statement-table purchase-table table-responsive mb-5">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">ردیف</th>
                                        <th scope="col">نام</th>
                                        <th scope="col">نام خانوادگی</th>
                                        <th scope="col">ایمیل</th>
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
                                                        <li>{{$item->email}}</li>
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
{{--                                                            <a href="{{route('admin.edit',$item->id)}}"><input--}}
{{--                                                                    type="button" class="btn btn-info"--}}
{{--                                                                    style="font-size: 15px;font-family: Tahoma"--}}
{{--                                                                    value="ویرایش"></a>--}}
                                                            <a href="{{route('admin.edit',$item->id)}}" class="btn-edit" data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش">
                                                                <span class="text-edit"></span>
                                                                <span class="flip-front"><i class="fas fa-user-edit"></i></span>
                                                                <span class="flip-back"><i class="fas fa-pen-square"></i></span>
                                                            </a>
{{--                                                            <x-delbtn route="admin.destroy" id="{{$item->id}}"/>--}}
                                                            <a href="{{route('admin.destroy',$item->id)}}" class="btn-edit" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف">
                                                                <span class="text-edit"></span>
                                                                <span class="flip-login"><i class="fas fa-trash-alt"></i></span>
                                                                <span class="flip-plus"><i class="fas fa-trash"></i></span>
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

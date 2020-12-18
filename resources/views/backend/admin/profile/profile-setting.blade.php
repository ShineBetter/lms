@extends('backend.admin.partial._master')
@section('title','تنظیمات')
@section('cntd')
    @parent
    @php
        $header="";
        $loader="dont";
        $sidebar="";
    @endphp
    <div class="dashboard-content-wrap">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <h3 class="widget-title">تنظیمات</h3>
                </div>
                @if(\Illuminate\Support\Facades\Session::has('status'))
                    @php
                        $status = \Illuminate\Support\Facades\Session::get('status');
                    @endphp
                    <x-alert type="{{$status['type']}}" text="{{$status['text']}}"/>
                @endif
                    @isset($errors)
                        @foreach($errors->all() as $message)
                            <x-alert type="warning" text="{{$message}}"/>
                        @endforeach
                    @endisset
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <h3 class="widget-title">تنظیمات پروفایل</h3>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="section-tab section-tab-2">
                                <ul class="nav nav-tabs" role="tablist" id="review">
                                    <li role="presentation" id="profile-information">
                                        <a href="#profile" role="tab" data-toggle="tab" class="active"
                                           aria-selected="true">
                                            پروفایل
                                        </a>
                                    </li>
                                    <li role="presentation" id="profile-security">
                                        <a href="#password" role="tab" data-toggle="tab" aria-selected="false">
                                            امنیت حساب
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dashboard-tab-content mt-5">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active show" id="profile">
                                        <div class="user-form">

                                            <div class="contact-form-action">
                                                {{Form::open(['url' => route('profile.save.info'),'method' => 'POST','files' => true])}}
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12 col-sm-12">
                                                        <div class="input-box">
                                                            <div class="user-profile-action-wrap mb-5">
                                                                <h3 class="widget-title font-size-18 padding-bottom-40px">
                                                                    اطلاعات
                                                                    شخصی</h3>
                                                                <div
                                                                    class="user-profile-action d-flex align-items-center">
                                                                    <div class="user-pro-img">
                                                                        <label class="label-text">عکس پروفایل</label>
                                                                        <img
                                                                            src="/{{$data->photo == null ? 'images/user.svg' : $data->photo}}"
                                                                            alt="user-image"
                                                                            class="img-fluid radius-round border">
                                                                    </div>
                                                                    <input type="file" name="photo" class="filer_input">

                                                                </div><!-- end user-profile-action-wrap -->
                                                                <x-btn route="profile.delete.image" class="btn-danger"
                                                                       title="حذف عکس"/>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-6">
                                                        <div class="input-box">
                                                            <label class="label-text">نام<span
                                                                    class="primary-color-2 ml-1">*</span></label>
                                                            <div class="form-group">
                                                                <input class="form-control" type="text" name="name"
                                                                       value="{{$data->name}}">
                                                                <span class="la la-user input-icon"></span>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                    <div class="col-lg-6 col-sm-6">
                                                        <div class="input-box">
                                                            <label class="label-text">نام خانوادگی<span
                                                                    class="primary-color-2 ml-1">*</span></label>
                                                            <div class="form-group">
                                                                <input class="form-control" type="text"
                                                                       name="lastName"
                                                                       value="{{$data->lastName}}">
                                                                <span class="la la-user input-icon"></span>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                    <div class="col-lg-6 col-sm-6">
                                                        <div class="input-box">
                                                            <label class="label-text">ایمیل</label>
                                                            <div class="form-group">
                                                                <input class="form-control" type="text" name="email"
                                                                       value="{{$user->email}}">
                                                                <span class="la la-envelope input-icon"></span>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                    <div class="col-lg-6 col-sm-6">
                                                        <div class="input-box">
                                                            <label class="label-text">شماره تلفن</label>
                                                            <div class="form-group">
                                                                <input class="form-control" type="number"
                                                                       name="phone"
                                                                       value="{{$data->phone}}">
                                                                <span class="la la-phone input-icon"></span>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                    <div class="col-lg-6 col-sm-6">
                                                        <div class="input-box">
                                                            <label class="label-text">شماره موبایل</label>
                                                            <div class="form-group">
                                                                <input class="form-control" type="number"
                                                                       name="mobile"
                                                                       value="{{$data->mobile}}">
                                                                <span class="la la-phone input-icon"></span>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                    <div class="col-lg-6 col-sm-6">
                                                        <div class="input-box">
                                                            <label class="label-text">کد ملی</label>
                                                            <div class="form-group">
                                                                <input class="form-control" type="number"
                                                                       name="nationalNumber"
                                                                       value="{{$data->nationalNumber}}">
                                                                <span class="la la-phone input-icon"></span>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                    @can('Teacher')
                                                    <div class="col-lg-6 col-sm-6">
                                                        <div class="input-box">
                                                            <label class="label-text">نام فرزند</label>
                                                            <div class="form-group">
                                                                <input class="form-control" type="text"
                                                                       name="childName"
                                                                       value="{{$child->name}}">
                                                                <span class="la la-phone input-icon"></span>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                    <div class="col-lg-6 col-sm-6">
                                                        <div class="input-box">
                                                            <label class="label-text">نام خانوادگی فرزند</label>
                                                            <div class="form-group">
                                                                <input class="form-control" type="text"
                                                                       name="childLastName"
                                                                       value="{{$child->lastName}}">
                                                                <span class="la la-phone input-icon"></span>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                    @endcan
                                                    @can('Admin')
                                                    <div class="col-lg-6 col-sm-6">
                                                        <div class="input-box">
                                                            <label class="label-text">نام فرزند</label>
                                                            <div class="form-group">
                                                                <input class="form-control" type="text"
                                                                       name="childName"
                                                                       value="{{$child->name}}">
                                                                <span class="la la-phone input-icon"></span>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                    <div class="col-lg-6 col-sm-6">
                                                        <div class="input-box">
                                                            <label class="label-text">نام خانوادگی فرزند</label>
                                                            <div class="form-group">
                                                                <input class="form-control" type="text"
                                                                       name="childLastName"
                                                                       value="{{$child->lastName}}">
                                                                <span class="la la-phone input-icon"></span>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                    @endcan

                                                    <div class="col-lg-12">
                                                        <div class="input-box">
                                                            <label class="label-text">آدرس</label>
                                                            <div class="form-group">
                                                                <textarea class="message-control form-control"
                                                                          name="address">{{$data->address}}</textarea>
                                                                <span class="la la-pencil input-icon"></span>
                                                            </div>
                                                        </div>
                                                    </div><!-- end col-lg-12 -->
                                                    <x-btn type="submit" title="ذخیره"/>
                                                </div><!-- end row -->
                                                {{Form::close()}}
                                            </div>
                                        </div>
                                    </div><!-- end tab-pane-->
                                    <div role="tabpanel" class="tab-pane fade" id="password">
                                        <div class="user-form padding-bottom-60px">
                                            <div class="user-profile-action-wrap">
                                                <h3 class="widget-title font-size-18 padding-bottom-40px">تغییر
                                                    پسورد</h3>
                                            </div><!-- end user-profile-action-wrap -->
                                            <div class="contact-form-action">
                                                <form method="post" action="{{route('profile.change.password')}}">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-lg-4 col-sm-4">
                                                            <div class="input-box">
                                                                <label class="label-text">پسورد قبلی<span
                                                                        class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text"
                                                                           name="oldPassword">
                                                                    <span class="la la-lock input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-4 -->
                                                        <div class="col-lg-4 col-sm-4">
                                                            <div class="input-box">
                                                                <label class="label-text">پسورد جدید<span
                                                                        class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text"
                                                                           name="newPassword">
                                                                    <span class="la la-lock input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-4 -->
                                                        <div class="col-lg-4 col-sm-4">
                                                            <div class="input-box">
                                                                <label class="label-text">تایید پسورد<span
                                                                        class="primary-color-2 ml-1">*</span></label>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text"
                                                                           name="confirmNewPassword">
                                                                    <span class="la la-lock input-icon"></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- end col-lg-4 -->
                                                        <div class="col-lg-12">
                                                            <div class="btn-box">
                                                                <x-btn type="submit" title="ذخیره"/>
                                                            </div>
                                                        </div><!-- end col-lg-12 -->
                                                    </div><!-- end row -->
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- end tab-pane-->
                                </div><!-- end tab-content -->
                            </div><!-- end dashboard-tab-content -->
                        </div>
                    </div><!-- end card-box-shared -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-content-wrap -->
@endsection

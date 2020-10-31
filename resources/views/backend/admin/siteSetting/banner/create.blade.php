@extends('backend.admin.partial._master')
@section('main.content')
{{--    @if ($errors -> any())--}}
{{--        <section class="col-6  offset-3 mt-5 mb-5 bg-warning p-3" dir="rtl">--}}
{{--            @foreach($errors->all() as $item)--}}
{{--                <h4 class="text-center text-black-50" style="font-size: small">{{$item}}</h4>--}}
{{--            @endforeach--}}
{{--        </section>--}}
{{--    @endif--}}
{{--    @if(session()->has('banner'))--}}
{{--        <section class="col-6 offset-3 alert alert-danger">--}}
{{--            <h5 class="text-danger text-center" dir="rtl">--}}
{{--                {{session('banner')}}--}}
{{--            </h5>--}}
{{--        </section>--}}
{{--    @endif--}}
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="section-block"></div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-12">
            <h3 class="widget-title">{{$title}}</h3>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="row">
            <div class="col-md-12">
                {{--                @include('backend.layouts.notification')--}}
            </div>
        </div>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary float-left">افزودن بنر</h6>
            <a href="{{route('banner.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip"
               data-placement="bottom" title="افزودن بنر"><i class="fas fa-plus"></i>افزودن بنر</a>
        </div>

        <div class="card">
            <h5 class="card-header">Add Banner</h5>
            <div class="card-body">
                <form method="post" action="{{route('banner.store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}


                    <div class="form-group">
                        <label for="inputTitle" class="col-form-label">عنوان <span class="text-danger">*</span></label>
                        <input id="inputTitle" type="text" name="title" placeholder="Enter title"
                               value="{{old('title')}}"
                               class="form-control">
                        @error('title')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="inputDesc" class="col-form-label">توضیحات</label>
                        <textarea class="form-control" id="caption" name="caption">{{old('caption')}}</textarea>
                        @error('caption')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="inputDesc" class="col-form-label">توضیحات</label>
                        <textarea class="form-control" id="alt" name="alt">{{old('alt')}}</textarea>
                        @error('alt')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="inputPhoto" class="col-form-label">تصویر<span class="text-danger">*</span></label>
                        <div class="input-group">
            <span class="input-group-btn">
                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> انتخاب تصویر
                </a>
            </span>
                            <input type="file" name="image" class="form-control btn-primary">
                            {{--                        <input id="thumbnail" class="form-control" type="text" name="image" value="{{old('image')}}">--}}
                        </div>
                        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                        @error('هimage')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
                        <select name="status" class="form-control">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                        @error('status')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <button type="reset" class="btn btn-warning">پاک کردن فرم</button>
                        <button class="btn btn-success" type="submit">ارسال</button>
                    </div>
                </form>
            </div>
        </div>

        @endsection

{{--        @push('styles')--}}
{{--            <link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">--}}
{{--        @endpush--}}
{{--        @push('scripts')--}}
{{--            <script src="{{asset('backend/summernote/summernote.min.js')}}"></script>--}}
{{--            <script>--}}
{{--                $('#lfm').filemanager('image');--}}

{{--                $(document).ready(function () {--}}
{{--                    $('#description').summernote({--}}
{{--                        placeholder: "Write short description.....",--}}
{{--                        tabsize: 2,--}}
{{--                        height: 150--}}
{{--                    });--}}
{{--                });--}}
{{--            </script>--}}
{{--    @endpush--}}




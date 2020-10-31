@extends('backend.admin.partial._master')
@section('main.content')
    <div class="row mt-5">
        <div class="col-lg-12">
            <h3 class="widget-title">{{$title}}</h3>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="row">
            <div class="col-md-12">
                                @include('backend.admin.layouts.notification')
            </div>
        </div>
        <div class="card-header py-3 ">
            <h6 class="m-0 font-weight-bold text-primary float-left">لیست بنرها</h6>
            <a href="{{route('banner.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip"
               data-placement="bottom" title="افزودن بنر"><i class="fas fa-plus"></i>افزودن بنر</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                                @if(count($banner)>0)
                <table class="table table-bordered" id="banner-dataTable" width="100%" cellspacing="0" dir="rtl">
                    <thead>

                    <th>id</th>
                    <th>عنوان</th>
                    <th>توضیحات</th>
                    <th>alt</th>
                    <th>تصویر</th>
                    <th>نماایش</th>
                    <th>عملیات</th>


                    </thead>
                    <tfoot>
                    <tr>
                        <th>id</th>
                        <th>عنوان</th>
                        <th>توضیحات</th>
                        <th>alt</th>
                        <th>تصویر</th>
                        <th>نماایش</th>
                        <th>عملیات</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($banner as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{Str::limit($item->caption,10)}}</td>
                            <td>{{Str::limit($item->alt,10)}}</td>
                            <td>

{{--                                <img src="{{asset('images/banner/'.$item->image)}}" alt="{{$item->image}}">--}}
<img src="{{asset('image/banner/'.$item->image)}}" class="img-fluid zoom"
                                     style="max-width:20%" alt="{{$item->image}}">

                                {{--                            @if($item->photo)--}}
                                {{--                                <img src="{{$item->photo}}" class="img-fluid zoom" style="max-width:80px" alt="{{$item->photo}}">--}}
                                {{--                            @else--}}
                                {{--                                <img src="{{asset('images/banner/'.$item->image)}}" class="img-fluid zoom" style="max-width:100%" alt="avatar.png">--}}
                                {{--                            @endif--}}

                            </td>
                            <td>
                                @if($item->status=='active')
                                    <span class="badge badge-success">{{$item->status}}</span>
                                @else
                                    <span class="badge badge-warning">{{$item->status}}</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('banner.edit',$item->id)}}"
                                   class="btn btn-primary btn-sm float-left mr-1"
                                   style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit"
                                   data-placement="bottom"><i class="fas fa-edit"></i></a>
                                <form method="POST" action="{{route('banner.destroy',[$item->id])}}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm dltBtn"
                                            data-id={{$item->id}} style="height:30px;"><i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
{{--                            Delete Modal--}}
                            {{--                                 <div class="modal fade" id="delModal{{$user ?? ''->id}}" tabindex="-1" role="dialog" aria-labelledby="#delModal{{$user ?? ''->id}}Label" aria-hidden="true">--}}
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        {{--                                          <h5 class="modal-title" id="#delModal{{$user ?? ''->id}}Label">Delete user</h5>--}}
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        {{--                                          <form method="post" action="{{ route('banners.destroy',$user ?? ''->id) }}">--}}
{{--                                        @csrf--}}
{{--                                        @method('delete')--}}
{{--                                        <button type="submit" class="btn btn-danger"--}}
{{--                                                style="margin:auto; text-align:center">Parmanent delete user--}}
{{--                                        </button>--}}
                                        {{--                                          </form>--}}
                                    </div>
                                </div>
                            </div>
                            {{--                                </div>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <span style="float:right">{{$banner->links()}}</span>
                                @else
                                    <h6 class="text-center">هیچ بنری موجود نیست !!!</h6>
                                @endif
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <style>
        div.dataTables_wrapper div.dataTables_paginate{
            display: none;
        }
        .zoom {
            transition: transform .2s; /* Animation */
        }

        .zoom:hover {
            transform: scale(3.2);
        }
    </style>
@endpush

@push('scripts')

    <!-- Page level plugins -->
    <script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>
    <script>

        $('#banner-dataTable').DataTable( {
            "columnDefs":[
                {
                    "orderable":false,
                    "targets":[3,4,5]
                }
            ]
        } );

        // Sweet alert

        function deleteData(id){

        }
    </script>
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.dltBtn').click(function(e){
                var form=$(this).closest('form');
                var dataID=$(this).data('id');
                // alert(dataID);
                e.preventDefault();
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        } else {
                            swal("Your data is safe!");
                        }
                    });
            })
        })
    </script>
@endpush

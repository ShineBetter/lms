@extends('backend.admin.partial._master')
@section('title','آزمون')
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
                    <h3 class="widget-title">آزمون ها</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        @can('Admin')
                            <div class="card-box-shared-title">
                                <x-btn route="quiz.create"/>
                            </div>
                        @endcan
                        <div class="card-box-shared-body">
                            <div class="statement-table purchase-table table-responsive mb-5">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">ردیف</th>
                                        <th scope="col">آزمون</th>
                                        <th scope="col">تایم شروع</th>
                                        <th scope="col">تایم انقضا</th>
                                        <th scope="col">تاریخ شروع</th>
                                        <th scope="col">تاریخ انقضا</th>
                                        <th scope="col">سازنده آزمون</th>
                                        <th scope="col">آخرین ویرایشگر</th>
                                        <th scope="col">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $key => $item)
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
                                                        <li>{{$item->quiz_name}}</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>{{$item->quiz_start}}</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>{{$item->quiz_exp}}</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>{{$item->quiz_start_date}}</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>{{$item->quiz_exp_date}}</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        @if($item->user_id != null)
                                                            <li>{{$item->quizCreator->profile->name}} {{$item->quizCreator->profile->lastName}}</li>
                                                        @else
                                                            <li>مشخص نشده است</li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        @if($item->last_editor_user_id != null)
                                                            <li>{{$item->quizEditor->profile->name}} {{$item->quizEditor->profile->lastName}}</li>
                                                        @else
                                                            <li>ویرایش نشده است</li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>
                                                            <a href="{{route('quiz.edit',$item->id)}}" class="btn-edit" data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش">
                                                                <span class="text-edit"></span>
                                                                <span class="flip-front"><i class="fas fa-user-edit"></i></span>
                                                                <span class="flip-back"><i class="fas fa-pen-square"></i></span>
                                                            </a>
                                                            @if(\App\Models\questions::where('quiz_id',$item->id)->count() > 0)
                                                                {{Form::open(['route' => 'quiz','method' => 'post'])}}
                                                                <input type="hidden" name="quiz_id"
                                                                       value="{{$item->id}}">
                                                                {!! Form::submit('ورود', ['class' => 'btn btn-warning']) !!}
                                                                {{ Form::close() }}
                                                            @endif
                                                            <a href="{{route('quiz.destroy',$item->id)}}" class="btn-edit" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف">
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

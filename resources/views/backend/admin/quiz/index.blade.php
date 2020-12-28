@extends('backend.admin.partial._master')
@section('title','آزمون')
@section('cntd')
    @parent
    @php
        use Carbon\Carbon;
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
                            {{--                            <div class="card-box-shared-title">--}}
                            <x-btn class="card-box-shared" route="quiz.create"/>
                            {{--                            </div>--}}
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
                                        @php
                                            $start_time = Carbon::createFromTimestamp($item->quiz_start);
                                            $end_time = Carbon::createFromTimestamp($item->quiz_exp);
                                            $start_date = Carbon::createFromTimestamp($item->quiz_start_date);
                                            $end_date = Carbon::createFromTimestamp($item->quiz_start_date);
                                            $now = \Carbon\Carbon::now();
                                        @endphp
                                        @if($item->quiz_permission == 'all' || \Illuminate\Support\Facades\Gate::check('Admin'))
                                            <tr>
                                                <td scope="row">
                                                    <div class="statement-info">
                                                        <ul class="list-items">
                                                            <li class="mb-1">
                                                                <p>{{$row++}}</p>
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
                                                            <li>{{$start_time->format('H:i')}}</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="statement-info">
                                                        <ul class="list-items">
                                                            <li>{{$end_time->format('H:i')}}</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="statement-info">
                                                        <ul class="list-items">
                                                            <li>{{$start_date->format('Y/m/d')}}</li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="statement-info">
                                                        <ul class="list-items">
                                                            <li>{{$end_date->format('Y/m/d')}}</li>
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
                                                                @can('Admin')
                                                                    <a href="{{route('quiz.edit',$item->id)}}"><input
                                                                            type="button" class="btn btn-info"
                                                                            style="font-size: 15px;font-family: Tahoma"
                                                                            value="ویرایش"></a>
                                                                @endcan
                                                                @if($start_date->year <= $now->year && $start_date->month <= $now->month && $start_date->day <= $now->day && $end_date->year >= $now->year && $end_date->month >= $now->month && $end_date->day >= $now->day && $item->quiz_start <= $now->timestamp && $item->quiz_exp >= $now->timestamp)
                                                                    @if($item->pay_status == 1)
                                                                            @if(\App\Models\questions::where('quiz_id',$item->id)->count() > 0)
                                                                                {{Form::open(['route' => 'quiz','method' => 'post'])}}
                                                                                <input type="hidden" name="quiz_id"
                                                                                       value="{{$item->id}}">
                                                                                {!! Form::submit('ورود', ['class' => 'btn btn-warning']) !!}
                                                                                {{ Form::close() }}
                                                                            @endif
                                                                    @else
                                                                        {{Form::open(['route' => 'examPay','method' => 'post'])}}
                                                                        <input type="hidden" name="quiz_id"
                                                                               value="{{$item->id}}">
                                                                        {!! Form::submit('پرداخت', ['class' => 'btn btn-success']) !!}
                                                                        {{ Form::close() }}
                                                                    @endif
                                                                @endif
                                                                @can('Admin')
                                                                    <x-delbtn route="quiz.destroy"
                                                                              id="{{$item->id}}"/>
                                                                @endcan
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @else
                                            @php($user_quiz = DB::table('user_quiz')->where('quiz_id',$item->id)->first())
                                            @if($user_quiz != null)
                                                @if($user_quiz->user_id == Auth::id())
                                                    <tr>
                                                        <td scope="row">
                                                            <div class="statement-info">
                                                                <ul class="list-items">
                                                                    <li class="mb-1">
                                                                        <p>{{$row++}}</p>
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
                                                                    <li>{{$start_time->format('H:i')}}</li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="statement-info">
                                                                <ul class="list-items">
                                                                    <li>{{$end_time->format('H:i')}}</li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="statement-info">
                                                                <ul class="list-items">
                                                                    <li>{{$start_date->format('Y/m/d')}}</li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="statement-info">
                                                                <ul class="list-items">
                                                                    <li>{{$end_date->format('Y/m/d')}}</li>
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
                                                                        @can('Admin')
                                                                            <a href="{{route('quiz.edit',$item->id)}}"><input
                                                                                    type="button" class="btn btn-info"
                                                                                    style="font-size: 15px;font-family: Tahoma"
                                                                                    value="ویرایش"></a>
                                                                        @endcan
                                                                        @if($start_date->year <= $now->year && $start_date->month <= $now->month && $start_date->day <= $now->day && $end_date->year >= $now->year && $end_date->month >= $now->month && $end_date->day >= $now->day && $item->quiz_start <= $now->timestamp && $item->quiz_exp >= $now->timestamp)
                                                                            @if($item->pay_status == 1)
                                                                                @if(\App\Models\questions::where('quiz_id',$item->id)->count() > 0)
                                                                                    {{Form::open(['route' => 'quiz','method' => 'post'])}}
                                                                                    <input type="hidden"
                                                                                           name="quiz_id"
                                                                                           value="{{$item->id}}">
                                                                                    {!! Form::submit('ورود', ['class' => 'btn btn-warning']) !!}
                                                                                    {{ Form::close() }}
                                                                                @endif
                                                                            @else
                                                                                {{Form::open(['route' => 'examPay','method' => 'post'])}}
                                                                                <input type="hidden" name="quiz_id"
                                                                                       value="{{$item->id}}">
                                                                                {!! Form::submit('پرداخت', ['class' => 'btn btn-success']) !!}
                                                                                {{ Form::close() }}
                                                                            @endif
                                                                        @endif

                                                                        @can('Admin')
                                                                            <x-delbtn
                                                                                route="quiz.destroy"
                                                                                id="{{$item->id}}"/>
                                                                        @endcan
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endif
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                                {{--                                {{ $data->links() }}--}}
                            </div>
                        </div>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-content-wrap -->
@endsection

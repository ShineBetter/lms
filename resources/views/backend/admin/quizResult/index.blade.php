@extends('backend.admin.partial._master')
@section('title','کارنامه ها')
@section('cntd')
    @parent
    @php
        $header="";
        $loader="dont";
        $sidebar="";
    @endphp
    @if(\Illuminate\Support\Facades\Session::has('status'))
        <x-alert type="success" text="{{\Illuminate\Support\Facades\Session::get('edit_status')}}"/>
    @endif
    <div class="dashboard-content-wrap">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <h3 class="widget-title">کارنامه ها</h3>
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
                                        <th scope="col">دانش آموز</th>
                                        <th scope="col">تعداد سوال</th>
                                        <th scope="col">سوالات صحیح</th>
                                        <th scope="col">سوالات غلط</th>
                                        <th scope="col">نمره</th>
                                        <th scope="col">وضعیت</th>
                                        <th scope="col">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $key => $item)
                                        @php
                                        $correct_answers = $item->correct_answers($item->user_id,$item->quiz_id);
                                        $score = $item->score($item->user_id,$item->quiz_id);
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
                                                        <li>{{$item->quiz->quiz_name}}</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>{{$item->users->profile->name}} {{$item->users->profile->lastName}}</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>{{$item->questions->count()}}</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>{{$correct_answers}}</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>{{$item->questions->count() - $correct_answers}}</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>{{$score}}</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li class="{{$score >= 10?'text-success':'text-danger'}}">{{$score >= 10? 'قبول':'مردود'}}</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>
                                                            <a href="{{route('quiz.edit',$item->id)}}"><input
                                                                    type="button" class="btn btn-info"
                                                                    value="نمایش کارنامه"></a>
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

@extends('backend.admin.partial._master')
@section('title','دروس دانش آموز')
@section('cntd')
    @parent
    @php
        use Illuminate\Support\Facades\Gate;
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
                    <h3 class="widget-title">{{$userTitle}}</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        @if(Gate::check('Admin') || Gate::check('Teacher'))
                            <div class="card-box-shared-title">
                                <x-btn type="add" route="userLessons.create" class="btn-success" routeParam="{{$user_id}}"/>
                            </div>
                        @endif
                        <div class="card-box-shared-body">
                            <div class="statement-table purchase-table table-responsive mb-5">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">ردیف</th>
                                        <th scope="col">نام درس</th>
                                        @if(Gate::check('Admin') || Gate::check('Teacher'))
                                            <th scope="col">عملیات</th>
                                        @endif
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
                                                        <li>{{$item->lesson_title}}</li>
                                                    </ul>
                                                </div>

                                            @if(Gate::check('Admin') || Gate::check('Teacher'))
                                                <td>
                                                    <div class="statement-info">
                                                        <ul class="list-items">
                                                            <li>
                                                                <a href="{{route('userLessons.edit',['lesson_id' => $item->id, 'user_id' => $user_id])}}"><input
                                                                        type="button" class="btn btn-info"
                                                                        style="font-size: 15px;font-family: Tahoma"
                                                                        value="ویرایش">
                                                                    <x-delbtn route="userLessons.destroy" multiParameter="true" :id="json_encode(['lesson_id' => $item->id, 'user_id' => $user_id])"></x-delbtn>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            @endif
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

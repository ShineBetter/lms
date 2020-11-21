@extends('backend.admin.partial._master')
@section('title','پایه ها')
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
                    <h3 class="widget-title">پایه ها</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <h3 class="widget-title">پایه های آقا / خانم امیرحسین فلک دین</h3>
                            <button class="btn btn-5 btn-5a"><span>افزودن</span></button>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="statement-table purchase-table table-responsive mb-5">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">ردیف</th>
                                        <th scope="col">پایه</th>
                                        <th scope="col">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($level as $key => $item)
                                        <tr>
                                            <td scope="row">
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li class="mb-1">
                                                            <p>{{ $key + $level->firstItem() }}</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>{{$item->level_title}}</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>
                                                            <a href="{{route('level.edit',$item->id)}}"><input type="button" class="btn btn-info" style="font-size: 15px;font-family: Tahoma" value="ویرایش"></a>
                                                            <a href="{{route('level.destroy',$item->id)}}"><input type="button" class="btn btn-danger" style="font-size: 15px;font-family: Tahoma" value="حذف"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $level->links() }}
                            </div>
                        </div>
                        {{--                            <div class="page-navigation-wrap mt-4 mb-4">--}}
                        {{--                                <div class="page-navigation-inner d-inline-block">--}}
                        {{--                                    <div class="page-navigation">--}}
                        {{--                                        <a href="dashboard-reviews.html#" class="page-go page-prev">--}}
                        {{--                                            <i class="la la-arrow-left"></i>--}}
                        {{--                                        </a>--}}
                        {{--                                        <ul class="page-navigation-nav">--}}
                        {{--                                            <li><a href="dashboard-reviews.html#" class="page-go-link">1</a></li>--}}
                        {{--                                            <li class="active"><a href="dashboard-reviews.html#" class="page-go-link">2</a></li>--}}
                        {{--                                            <li><a href="dashboard-reviews.html#" class="page-go-link">3</a></li>--}}
                        {{--                                            <li><a href="dashboard-reviews.html#" class="page-go-link">4</a></li>--}}
                        {{--                                        </ul>--}}
                        {{--                                        <a href="dashboard-reviews.html#" class="page-go page-next">--}}
                        {{--                                            <i class="la la-arrow-right"></i>--}}
                        {{--                                        </a>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div><!-- end page-navigation-wrap -->--}}

                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-content-wrap -->
    </section><!-- end dashboard-area -->
    <!-- ================================
        END DASHBOARD AREA
    ================================= -->
@endsection

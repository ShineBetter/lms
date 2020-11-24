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

                            <x-btn route="level.create"/>

                        </div>
                        <div class="card-box-shared-body ">
                            <div class="statement-table purchase-table table-responsive mb-5 data-table">
                                <table class="table">
                                    <thead>
                                    <tr>

                                        @foreach($table['th'] as $item)
                                            <th scope="col">{{$item}}</th>
                                        @endforeach
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($table['data'] as $keys => $items)
                                        <tr class="table-tr">
                                            @foreach($table['tbody']['td'] as $key => $item)
                                                @if($key == 'row')
                                                    <td scope="row">
                                                        <div class="statement-info">
                                                            <ul class="list-items">
                                                                <li class="mb-1 row-count">
                                                                    {{--                                                                    {{ $key == 'row' ? ++$item : '' }}--}}
                                                                    {{  $keys + $table['data']->firstItem() }}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                @else
                                                    <td scope="row">
                                                        <div class="statement-info">
                                                            <ul class="list-items">
                                                                <li class="mb-1">
                                                                    {{ $items->$item }}
                                                                    {{--                                                            <p>{{ $key + $level['tbody']->firstItem() }}</p>--}}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="statement-info">
                                                            <ul class="list-items">
                                                                <li>
                                                                    <a href="{{route('level.edit',$items->id)}}"><input
                                                                            type="button" class="btn btn-info"
                                                                            style="font-size: 15px;font-family: Tahoma"
                                                                            value="ویرایش"></a>
                                                                    <x-delbtn route="level" id="{{$items->id}}"/>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                @endif

                                            @endforeach
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                                                {{ $table['data']->links() }}
                            </div>
                        </div>

                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-content-wrap -->

@endsection

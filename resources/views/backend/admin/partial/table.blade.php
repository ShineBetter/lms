@extends('backend.admin.partial._master')
@section('title','پایه ها')
@section('cntd')
    @parent
    @php
        $header="";
        $loader="dont";
        $sidebar="";
        $do = $table['do']['status'];
        $add = $table['do']['add'];
        $edit = $table['do']['edit'];
        $delete = $table['do']['delete'];
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
                            @if($do && $add)
                                <x-btn route="{{$table['action']}}.create"/>
                            @endif
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
                                                @php
                                                    if (\Illuminate\Support\Arr::has($table['tbody']['td'][$key],'model')){
                                                                 $models = $table['tbody']['td'][$key]['model'];
                                                                 $org_key = $table['tbody']['td'][$key]['org_key'];
                                                                 $for_key = $table['tbody']['td'][$key]['for_key'];
                                                                 $forg_item = $table['tbody']['td'][$key]['forg_item'];
                                                        }


                                                @endphp
                                                @if($key == 'row')
                                                    <td scope="row">
                                                        <div class="statement-info">
                                                            <ul class="list-items">
                                                                <li class="mb-1 row-count">
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
                                                                    @if(\Illuminate\Support\Arr::has($table['tbody']['td'][$key],'model'))
                                                                        {{ $models::where("$org_key",$items->$for_key)->first()->$forg_item}}
                                                                    @else
                                                                        {{ $items[$item[$key]] }}
                                                                    @endif
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                @endif
                                            @endforeach
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>
                                                            @if($do && $edit)
                                                                <a href="{{route(class_basename($items).".edit",$items->id)}}"><input
                                                                        type="button" class="btn btn-info"
                                                                        style="font-size: 15px;font-family: Tahoma"
                                                                        value="ویرایش"></a>
                                                            @endif
                                                            @if($do && $delete)
                                                                <x-delbtn route="{{class_basename($items)}}" id="{{$items->id}}"/>
                                                            @endif
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
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

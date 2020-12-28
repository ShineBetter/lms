@extends('backend.admin.partial._master')
@section('title','محصولات')
@section('css')
    <style>
        .lbl {
            position: relative;
            display: block;
            height: 20px;
            width: 44px;
            background: #898989;
            border-radius: 100px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .lbl:after {
            position: absolute;
            left: -2px;
            top: -3px;
            display: block;
            width: 26px;
            height: 26px;
            border-radius: 100px;
            background: #fff;
            box-shadow: 0px 3px 3px rgba(0,0,0,0.05);
            content: '';
            transition: all 0.3s ease;
        }
        .lbl:active:after {
            transform: scale(1.15, 0.85);
        }
        .cbx:checked ~ label {
            background: #6fbeb5;
        }
        .cbx:checked ~ label:after {
            left: 20px;
            background: #179588;
        }
        .cbx:disabled ~ label {
            background: #d5d5d5;
            pointer-events: none;
        }
        .cbx:disabled ~ label:after {
            background: #bcbdbc;
        }
        .cntr {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .press {
            margin-bottom: 40px;
        }
        .hidden {
            display: none;
        }
    </style>
@endsection
@section('cntd')
    @parent
    @php
        use AliBayat\LaravelCategorizable\Category;
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
                    <h3 class="widget-title">محصولات</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card-box-shared">
                        <div class="card-box-shared-title">
                            <x-btn route="product.create"/>
                        </div>
                        <div class="card-box-shared-body">
                            <div class="statement-table purchase-table table-responsive mb-5">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">ردیف</th>
                                        <th scope="col">نام</th>
                                        <th scope="col">قیمت</th>
                                        <th scope="col">تخفیف</th>
                                        <th scope="col">تاریخ ثبت</th>
                                        <th scope="col">دسته بندی</th>
                                        <th scope="col">موجودی انبار</th>
                                        <th scope="col">وضعیت انتشار</th>
                                        <th scope="col">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $key => $item)
                                        @php
                                            $discount_price = $item->product_price * $item->product_discount / 100;
                                            $discount_price = $item->product_price - $discount_price;
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
                                                        <li>{{$item->product_name}}</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>{{$item->product_price}}</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>{{$item->product_discount}}% - ({{$discount_price}})</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>{{$item->created_at}}</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>{{Category::where('id',$item->category_id)->first()->name}}</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>{{$item->product_count == -1 ? 'نامحدود' : $item->product_count}}</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li><input type="checkbox" name="product_status" value="0" pid="{{$item->id}}" id="checked-{{$item->id}}" class="product_status_radio cbx hidden" {{$item->product_status == 1 ? 'checked' : ''}}/>
                                                            <label for="checked-{{$item->id}}" class="lbl"></label></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>
                                                            <a href="{{route('product.edit',$item->id)}}"
                                                               class="btn-edit" data-bs-toggle="tooltip"
                                                               data-bs-placement="top" title="ویرایش">
                                                                <span class="text-edit"></span>
                                                                <span class="flip-front"><i
                                                                        class="fas fa-user-edit"></i></span>
                                                                <span class="flip-back"><i
                                                                        class="fas fa-pen-square"></i></span>
                                                            </a>

                                                            <button href="{{route('product.destroy',$item->id)}}"
                                                                    class="btn-edit trash" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" title="حذف">
                                                                <span class="text-edit"></span>
                                                                <span class="flip-login"><i
                                                                        class="fas fa-user-times"></i></span>
                                                                <span class="flip-plus"><i class="far fa-trash-alt"></i></span>
                                                            </button>
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

@extends('backend.admin.partial._master')
@section('title','محصولات')
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
                                                        <li>{{$item->price}}</li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="statement-info">
                                                    <ul class="list-items">
                                                        <li>
                                                            <a href="{{route('product.edit',$item->id)}}" class="btn-edit" data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش">
                                                                <span class="text-edit"></span>
                                                                <span class="flip-front"><i class="fas fa-user-edit"></i></span>
                                                                <span class="flip-back"><i class="fas fa-pen-square"></i></span>
                                                            </a>

                                                            <button href="{{route('product.destroy',$item->id)}}" class="btn-edit trash" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف">
                                                                <span class="text-edit"></span>
                                                                <span class="flip-login"><i class="fas fa-user-times"></i></span>
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

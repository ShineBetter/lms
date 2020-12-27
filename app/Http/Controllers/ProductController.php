<?php

namespace App\Http\Controllers;

use App\Http\Requests\createCategoryRequest;
use App\Http\Requests\createProductRequest;
use App\Http\Requests\editQuestionRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use AliBayat\LaravelCategorizable\Category;
use Intervention\Image\Facades\Image;
use phpDocumentor\Reflection\DocBlock\Tags\Version;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::paginate(10);
        return view('backend.admin.product.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::get();
        return view('backend.admin.product.create',['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createProductRequest $request)
    {
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_discount = $request->product_discount;
        $file = $request->file('product_img');
        if (!empty($file)){
            $file_name = "images/product-image/product-photo-" . time() . '-' .$file->getClientOriginalName();
            Image::make($file->getRealPath())->resize(200,200)->save($file_name);
            $product->product_img = $file_name;
        }
        $product->product_short_desc = $request->product_short_desc;
        $product->product_desc = $request->product_desc;
        $product->category_id = $request->category_id;
        $product->product_file = $request->product_file;
        if ($request->product_count_status == 1){
            $product->product_count = -1;
        }else{
            $product->product_count = $request->product_count;
        }
        if ($request->product_status == null){
            $product->product_status = 0;
        }else{
            $product->product_status = 1;
        }
        $product->created_at = now()->timestamp;
        $product->save();
        $comment = 'اطلاعات ، بدرستی ذخیره شد';
        session()->flash('status', $comment);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::find($id);
        $category = Category::get();
        return view('backend.admin.product.edit',['data' => $data,'category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(editQuestionRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_discount = $request->product_discount;
        $file = $request->file('product_img');
        if (!empty($file)){
            $file_name = "images/product-image/product-photo-" . time() . '-' .$file->getClientOriginalName();
            Image::make($file->getRealPath())->resize(200,200)->save($file_name);
            $product->product_img = $file_name;
        }
        $product->product_short_desc = $request->product_short_desc;
        $product->product_desc = $request->product_desc;
        $product->category_id = $request->category_id;
        $product->product_file = $request->product_file;
        if ($request->product_count_status == 1){
            $product->product_count = -1;
        }else{
            $product->product_count = $request->product_count;
        }
        if ($request->product_status == null){
            $product->product_status = 0;
        }else{
            $product->product_status = 1;
        }
        $product->created_at = now()->timestamp;
        $product->save();
        $comment = 'ویرایش اطلاعات موفقیت آمیز بود';
        session()->flash('status',$comment);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Product::findOrFail($id)->delete();
        $comment = 'عملیات حذف بدرستی انجام شد';
        session()->flash('status',$comment);
        return back();
    }

    public function changeProductStatus(Request $request)
    {
        $id = $request->id;
        $product = Product::findOrFail($id);
        if ($product->product_status == 0){
            $product->product_status = 1;
        }else{
            $product->product_status = 0;
        }
        $product->save();
    }
}

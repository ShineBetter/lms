<?php

namespace App\Http\Controllers;

use App\Http\Requests\createCategoryRequest;
//use App\Models\Category;
use App\Http\Requests\editQuestionRequest;
use Illuminate\Http\Request;
use AliBayat\LaravelCategorizable\Category;
use phpDocumentor\Reflection\DocBlock\Tags\Version;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::paginate(10);
        return view('backend.admin.category.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createCategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->category_name;
        $category->save();
        $comment = 'اطلاعات ، بدرستی ذخیره شد';
        session()->flash('status', $comment);
        return redirect()->route('category.index');
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
        $data = Category::find($id);
        return view('backend.admin.category.edit',['data' => $data]);
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
        $category = Category::findOrFail($id);
        $category->name = $request->category_name;
        $category->save();
        $comment = 'ویرایش اطلاعات موفقیت آمیز بود';
        session()->flash('status',$comment);
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id)->delete();
        $comment = 'عملیات حذف بدرستی انجام شد';
        session()->flash('status',$comment);
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\catMainpage;
use App\Models\qa;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CatMainpageController extends Controller
{
    public function index()
    {
        $data=qa::paginate(10);
        return view("backend.admin.qa.index",['data' => $data]);
    }

    public function update(Request $request,$id)
    {
        $data=qa::where('id', $id)->first();
        $data->a=$request->a;
        $data->q=$request->q;

        $data->save();
        $comment = 'ویرایش اطلاعات موفقیت آمیز بود';
        session()->flash('status', $comment);
        return redirect()->route('qa.index');

    }

    public function edit($id)
    {
        $data=qa::findorfail($id);
        return view("backend.admin.qa.edit",['data' => $data]);

    }

}

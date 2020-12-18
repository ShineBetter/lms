<?php

namespace App\Http\Controllers;

use App\Models\mainpage3col;
use Illuminate\Http\Request;

class Mainpage3colController extends Controller
{
    public function index()
    {
        $data=mainpage3col::paginate(10);
        return view("backend.admin.mainpage.index",['data' => $data]);

    }

    public function update(Request $request,$id)
    {
        $data=mainpage3col::where('id', $id)->first();
        $data->header=$request->header;
        $data->text=$request->text;
        $data->icon=$request->icon;
        $data->save();
        $comment = 'ویرایش اطلاعات موفقیت آمیز بود';
        session()->flash('status', $comment);
        return redirect()->route('mainpage.index');

    }

    public function edit($id)
    {
        $data=mainpage3col::findorfail($id);
        return view("backend.admin.mainpage.edit",['data' => $data]);

    }
}

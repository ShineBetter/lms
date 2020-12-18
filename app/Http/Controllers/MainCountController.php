<?php

namespace App\Http\Controllers;

use App\Models\mainCount;
use Illuminate\Http\Request;

class MainCountController extends Controller
{
    public function index()
    {
        $data=mainCount::paginate(10);
        return view("backend.admin.mainCount.index",['data' => $data]);

    }

    public function update(Request $request,$id)
    {
        $data=mainCount::where('id', $id)->first();
        $data->count=$request->count;
        $data->text=$request->text;
        $data->save();
        $comment = 'ویرایش اطلاعات موفقیت آمیز بود';
        session()->flash('status', $comment);
        return redirect()->route('mainCount.index');

    }

    public function edit($id)
    {
        $data=mainCount::findorfail($id);
        return view("backend.admin.mainCount.edit",['data' => $data]);

    }
}

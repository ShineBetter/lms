<?php

namespace App\Http\Controllers;

use App\Models\aboutText;
use Illuminate\Http\Request;

class AboutTextController extends Controller
{
    public function index()
    {
        $data=aboutText::paginate(10);
        return view("backend.admin.aboutText.index",['data' => $data]);
    }

    public function update(Request $request,$id)
    {
        $data=aboutText::where('id', $id)->first();
        $data->heading=$request->heading;
        $data->header=$request->header;
        $data->text=$request->text;
        $data->save();
        $comment = 'ویرایش اطلاعات موفقیت آمیز بود';
        session()->flash('status', $comment);
        return redirect()->route('aboutText.index');

    }

    public function edit($id)
    {
        $data=aboutText::findorfail($id);
        return view("backend.admin.aboutText.edit",['data' => $data]);

    }

}

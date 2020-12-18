<?php

namespace App\Http\Controllers;

use App\Models\aboutpic;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AboutpicController extends Controller
{
    public function index()
    {
        $data=aboutpic::paginate(10);
        return view("backend.admin.aboutpic.index",['data' => $data]);

    }

    public function update(Request $request,$id)
    {
        $data=aboutpic::where('id', $id)->first();
        $file = $request->file('picture');
        if (!empty($file)) {
            $file_name = 'images/about-image' . time() . '.' . $file->getClientOriginalName();
            Image::make($file->getRealPath())->resize(100, 100)->save($file_name);
            $data->picture = $file_name;
        }

        $data->save();
        $comment = 'ویرایش اطلاعات موفقیت آمیز بود';
        session()->flash('status', $comment);
        return redirect()->route('aboutpic.index');

    }

    public function edit($id)
    {
        $data=aboutpic::findorfail($id);
        return view("backend.admin.aboutpic.edit",['data' => $data]);

    }
}

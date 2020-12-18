<?php

namespace App\Http\Controllers;

use App\Models\midel_4;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class Midel4Controller extends Controller
{
    public function index()
    {
        $data=midel_4::paginate(10);
        return view("backend.admin.midel-4.index",['data' => $data]);

    }

    public function update(Request $request,$id)
    {
        $data=midel_4::where('id', $id)->first();
        $file = $request->file('picture');
        if (!empty($file)) {
            $file_name = 'images/about-image' . time() . '.' . $file->getClientOriginalName();
            Image::make($file->getRealPath())->resize(100, 100)->save($file_name);
            $data->picture = $file_name;
        }
        $data->header=$request->header;
        $data->text=$request->text;
        $data->save();
        $comment = 'ویرایش اطلاعات موفقیت آمیز بود';
        session()->flash('status', $comment);
        return redirect()->route('midel-4.index');

    }

    public function edit($id)
    {
        $data=midel_4::findorfail($id);
        return view("backend.admin.midel-4.edit",['data' => $data]);

    }
}

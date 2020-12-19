<?php

namespace App\Http\Controllers;

use App\Models\aboutTeacher;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AboutTeacherController extends Controller
{
    public function index()
    {
        $data=aboutTeacher::paginate(10);
        return view("backend.admin.aboutTeacher.index",['data' => $data]);

    }

    public function update(Request $request,$id)
    {
        $data=aboutTeacher::where('id', $id)->first();
        $file = $request->file('picture');
        if (!empty($file)) {
            $file_name = 'images/about-image' . time() . '.' . $file->getClientOriginalName();
            Image::make($file->getRealPath())->resize(100, 100)->save($file_name);
            $data->picture = $file_name;
        }
        $data->header=$request->header;
        $data->text=$request->text;
        $data->filed=$request->filed;
        $data->exp=$request->exp;
        $data->save();
        $comment = 'ویرایش اطلاعات موفقیت آمیز بود';
        session()->flash('status', $comment);
        return redirect()->route('aboutTeacher.index');

    }

    public function edit($id)
    {
        $data=aboutTeacher::findorfail($id);
        return view("backend.admin.aboutTeacher.edit",['data' => $data]);

    }
}

<?php

namespace App\Http\Controllers;
use App\Models\mainSlider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class MainSliderController extends Controller
{
    public function index()
    {
        $data=mainSlider::paginate(10);
        return view("backend.admin.mainSlider.index",['data' => $data]);

    }

    public function update(Request $request,$id)
    {
        $data=mainSlider::where('id', $id)->first();
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
        return redirect()->route('mainSlider.index');
    }

    public function edit($id)
    {
        $data=mainSlider::findorfail($id);
        return view("backend.admin.mainSlider.edit",['data' => $data]);

    }
}

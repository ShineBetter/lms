<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{

    public function index()
    {
        $banner = Banner::paginate(4);
        return view('backend.admin.siteSetting.banner.index', ['banner' => $banner, 'title' => 'بنر']);
    }

    public function create()
    {
        return view('backend.admin.siteSetting.banner.create',['title'=>'بنر']);
    }

    public function store(Request $request)
    {
//        dd($request);
//        $this->validate($request, [
//            'title' => 'string|required|max:50',
//            'caption' => 'string|nullable',
//            'alt' => 'string|nullable|max:50',
//            'image' => 'string|required',
//            'status' => 'required|in:active,inactive',
//        ]);
        $b=new Banner();
        $b->title=$request->title;
        $b->caption=$request->caption;
        $b->alt=$request->alt;
        $fileImage=$request->file('image');
        if(!empty($fileImage)){
            $image=time().$fileImage->getClientOriginalName();
            $fileImage->move('image/banner/',$image);
            $b->image=$image;
        }
        $b->save();
        $comment='اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('banner',$comment);
       return redirect()->route('banner.index');
    }

    public function show(Banner $banner)
    {
        $banner = Banner::findorfail($banner);
        return $banner;
    }

    public function edit(Banner $banner)
    {
        //
    }


    public function update(Request $request, Banner $banner)
    {
        //
    }

    public function destroy(Banner $banner)
    {
        //
    }
}

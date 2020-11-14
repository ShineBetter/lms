<?php

namespace App\Http\Controllers;

use App\Http\Requests\creatBannerRequest;
use App\Models\Banner;

//use Illuminate\Http\Request;

class BannerController extends Controller
{

    public function index()
    {
        $banner = Banner::paginate(4);
        return view('backend.admin.siteSetting.banner.index', ['banner' => $banner]);
    }

    public function create()
    {
        return view('backend.admin.siteSetting.banner.create');
    }

    public function store(creatBannerRequest $request)
    {
        $banner = new Banner();
        $banner->title = $request->title;
        $banner->caption = $request->caption;
        $banner->alt = $request->alt;
        $banner->status = $request->status;
        $fileImage = $request->file('image');
        if (!empty($fileImage)) {
            $image = time() . $fileImage->getClientOriginalName();
            $fileImage->move('image/banner/', $image);
            $banner->image = $image;
        }
        $banner->save();
        $comment = 'اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('banner', $comment);
        return redirect()->route('banner.index');

    }

    public function show(Banner $banner)
    {
        $banner = Banner::findorfail($banner);
        return $banner;
    }

    public function edit($id)
    {
        $banner = Banner::findorfail($id);
        return view('backend.admin.siteSetting.banner.edit', compact('banner'));
    }


    public function update(creatBannerRequest $request, $id)
    {

        $banner = Banner::where('id', $id)->first();
        $banner->title = $request->title;
        $banner->caption = $request->caption;
        $banner->alt = $request->alt;
        $banner->status = $request->status;
        $fileImage = $request->file('image');
        if (!empty($fileImage)) {
            $deleteImage = $banner->image;
            unlink('image/banner/' . $deleteImage);
            $image = time() . $fileImage->getClientOriginalName();
            $fileImage->move('image/banner/', $image);
            $banner->image = $image;
        }
        $banner->save();
        $comment = 'ویرایش اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('banner', $comment);
        return redirect()->route('banner.index');
    }

    public function destroy($id)
    {
        $banner = Banner::where('id', $id)->first();
        $deleteImage = $banner->image;
        unlink('image/banner/' . $deleteImage);
        $banner->delete();
        $comment = 'عملیات حذف بدرستی انجام شد.';
        session()->flash('banner', $comment);
        return back();

    }

}

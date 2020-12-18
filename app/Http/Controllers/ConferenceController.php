<?php

namespace App\Http\Controllers;

use App\Http\Requests\createConferenceRequest;
use App\Http\Requests\editConferenceRequest;
use App\Models\conference;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ConferenceController extends Controller
{

    public function index()
    {
        $data=conference::paginate(10);
        return view('backend.admin.conference.index',['data' => $data]);
    }


    public function create()
    {
        return view('backend.admin.conference.create');

    }
    public function store(createConferenceRequest $request)
    {
        $conference = new conference();
        $file = $request->file('picture');
        if (!empty($file)) {
            $file_name = 'images/conference-image/conference-photo-' . time() . '.' . $file->getClientOriginalName();
            Image::make($file->getRealPath())->resize(100, 100)->save($file_name);
            $conference->picture = $file_name;
        }
        $conference->name = $request->name;
        $conference->price = $request->price;
        $conference->count = $request->count;
        $conference->description = $request->description;
        $conference->date = $request->date;
        $conference->offer=$request->offer;
        $conference->save();
        $comment = 'اطلاعات ، بدرستی ذخیره شد';
        session()->flash('status', $comment);
        return redirect()->route('conference.index');
    }

    public function show(conference $conference)
    {
        $conference = conference::findorfail($conference);
        return $conference;
    }

    public function edit($id)
    {
        $data = conference::findorfail($id);
        return view('backend.admin.conference.edit',['data'=>$data]);
    }

    public function update(editConferenceRequest $request, $id)
    {

        $conference = conference::where('id', $id)->first();
        $conference->name = $request->name;
        $conference->price = $request->price;
        $conference->count = $request->count;
        $conference->description = $request->description;
        $conference->date = $request->date;
        $conference->offer = $request->offer;
        $file = $request->file('picture');
        if (!empty($file)) {
            $file_name = 'images/conference-image/conference-photo-' . time() . '.' . $file->getClientOriginalName();
            Image::make($file->getRealPath())->resize(100, 100)->save($file_name);
            $conference->picture = $file_name;
        }
        $conference->save();
        $comment = 'ویرایش اطلاعات موفقیت آمیز بود';
        session()->flash('status', $comment);
        return redirect()->route('conference.index');
    }

    public function destroy($id)
    {
        $quiz = conference::where('id', $id)->first();
        $quiz->delete();
        $comment = 'عملیات حذف بدرستی انجام شد';
        session()->flash('status', $comment);
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\createConferenceRequest;
use App\Models\conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{

    public function index()
    {
        $conference = conference::paginate(4);
        return view('backend.admin.conference.index', ['conference' => $conference,'row'=>0]);
    }


    public function create()
    {
        return view('backend.admin.conference.create');

    }
    public function store(createConferenceRequest $request)
    {

        $conference = new conference();
        $conference->title = $request->title;
        $conference->description = $request->description;
        $conference->date = $request->date;
        $conference->time = $request->time;
        $conference->speacher = $request->speacher;
        $conference->periodOfTime = $request->periodOfTime;
        $conference->status = $request->status;
        $fileImage = $request->file('image');
        if (!empty($fileImage)) {
            $image = time() . $fileImage->getClientOriginalName();
            $fileImage->move('image/conference/', $image);
            $conference->image = $image;
        }
        $conference->save();
        $comment = 'اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('conference', $comment);
        return redirect()->route('conference.index');
    }

    public function show(conference $conference)
    {
        $conference = conference::findorfail($conference);
        return $conference;
    }

    public function edit($id)
    {
        $conference = conference::findorfail($id);
        return view('backend.admin.conference.edit',compact('conference'));
    }

    public function update(createConferenceRequest $request, $id)
    {
        $conference = conference::where('id', $id)->first();
        $conference->title = $request->title;
        $conference->description = $request->description;
        $conference->date = $request->date;
        $conference->time = $request->time;
        $conference->speacher = $request->speacher;
        $conference->periodOfTime = $request->periodOfTime;
        $conference->status = $request->status;
        $fileImage = $request->file('image');
        if (!empty($fileImage)) {
            $deleteImage = $conference->image;
            unlink('image/conference/'.$deleteImage);
            $image = time() . $fileImage->getClientOriginalName();
            $fileImage->move('image/conference/', $image);
            $conference->image = $image;
        }
        $conference->save();
        $comment = 'اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('conference', $comment);
        return redirect()->route('conference.index');
    }

    public function destroy($id)
    {
        $conference=conference::where('id',$id)->first();
        $deleteImage=$conference->image;
        unlink('image/conference/'.$deleteImage);
        $conference->delete();
        $comment='عملیات حذف بدرستی انجام شد.';
        session()->flash('conference',$comment);
        return back();
    }
}

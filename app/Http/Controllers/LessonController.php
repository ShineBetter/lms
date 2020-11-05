<?php

namespace App\Http\Controllers;

use App\Http\Requests\createLevelRequest;
use App\Models\Banner;
use App\Models\lesson;
use App\Models\level;
use App\Models\User;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lesson = lesson::paginate(4);
        return view('backend.admin.lesson.index', ['lesson' => $lesson, 'row' => 0]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = ['levels' => level::get()->pluck('title','id')];
        return view('backend.admin.lesson.create', compact('levels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lesson = new lesson();
        $lesson->title = $request->title;
        $lesson->level_id = $request->levels;
        $lesson->save();
        $comment = 'اطلاعات ، به درستی ذخیره شد. ';
        session()->flash('lesson',$comment);
        return redirect()->route('lesson.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\lesson $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(lesson $lesson)
    {
        $lesson = lesson::findorfail($lesson);
        return $lesson;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\lesson $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $levels = ['levels' => level::get()->pluck('title','id')];
        $lesson = lesson::findorfail($id);
        $levelFind = level::findorfail($lesson->level_id);
        return view('backend.admin.lesson.edit',['levels'=>$levels,'lesson'=>$lesson,'levelFind'=>$levelFind]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\lesson $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(createLevelRequest $request, $id)
    {
        $lesson = lesson::where('id',$id)->first();
        $lesson->title = $request->title;
        $lesson->save();
        $comment = 'ویرایش اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('lesson', $comment);
        return redirect()->route('lesson.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\lesson $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lesson = lesson::where('id',$id)->first();
        $lesson->delete();
        $comment = 'عملیات حذف بدرستی انجام شد.';
        session()->flash('lesson', $comment);
        return back();
    }
}

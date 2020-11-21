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

    public function index()
    {
        $lesson = lesson::paginate(4);
        return view('backend.admin.lesson.index', ['lesson' => $lesson, 'row' => 0]);
    }


    public function create()
    {
        $levels = ['' => level::get()->pluck('level_title','id')];
        return view('backend.admin.lesson.create', compact('levels'));
    }

    public function store(Request $request)
    {
        $lesson = new lesson();
        $lesson->lesson_title = $request->lesson_title;
        $lesson->level_id = $request->levels;
        $lesson->save();
        $comment = 'اطلاعات ، به درستی ذخیره شد. ';
        session()->flash('lesson',$comment);
        return redirect()->route('lesson.index');
    }

    public function show(lesson $lesson)
    {
        $lesson = lesson::findorfail($lesson);
        return $lesson;
    }

    public function edit($id)
    {
        $levels = ['' => level::get()->pluck('level_title','id')];
        $lesson = lesson::findorfail($id);
        $levelFind = level::findorfail($lesson->level_id);
        return view('backend.admin.lesson.edit',['levels'=>$levels,'lesson'=>$lesson,'levelFind'=>$levelFind]);
    }

    public function update(createLevelRequest $request, $id)
    {
        $lesson = lesson::where('id',$id)->first();
        $lesson->lesson_title = $request->lesson_title;
        $lesson->level_id = $request->levels;
        $lesson->save();
        $comment = 'ویرایش اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('lesson', $comment);
        return redirect()->route('lesson.index');
    }

    public function destroy($id)
    {
        $lesson = lesson::where('id',$id)->first();
        $lesson->delete();
        $comment = 'عملیات حذف بدرستی انجام شد.';
        session()->flash('lesson', $comment);
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\createLessonRequest;
use App\Http\Requests\createLevelRequest;
use App\Models\Banner;
use App\Models\lesson;
use App\Models\level;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    public function fetch(Request $request)
    {
        if ($request->ajax()) {
            $data = level::paginate(10);
            return view('backend.admin.level.index', ['data' => $data])->render();
        }
    }

    public function index()
    {
        $data = lesson::paginate(10);
        return view('backend.admin.lesson.index', ['data' => $data, 'row' => 0]);
    }


    public function create()
    {
        $data = level::get()->pluck('level_title','id');
        return view('backend.admin.lesson.create', ['data' => $data]);

    }

    public function store(createLessonRequest $request)
    {
        $lesson = new lesson();
        $lesson->lesson_title = $request->lesson_title;
        $lesson->level_id = $request->level_id;
        $lesson->save();
        $comment = 'اطلاعات ، به درستی ذخیره شد';
        session()->flash('status', $comment);
        return redirect()->route('lesson.index');
    }

    public function show($lesson)
    {
        $lesson = lesson::findorfail($lesson);
        return $lesson;
    }

    public function edit($id)
    {
        $data = lesson::findorfail($id);
        $levels = level::get()->pluck('level_title', 'id');
        $levelFind = level::findorfail($data->level_id);
        return view('backend.admin.lesson.edit', ['data' => $data, 'levels' => $levels, 'levelFind' => $levelFind]);
    }

    public function update(createLessonRequest $request, $id)
    {
        $lesson = lesson::where('id', $id)->first();
        $lesson->lesson_title = $request->lesson_title;
        $lesson->level_id = $request->level_id;
        $lesson->save();
        $comment = 'ویرایش اطلاعات ، بدرستی ذخیره شد';
        session()->flash('status', $comment);
        return redirect()->route('lesson.index');
    }

    public function destroy($id)
    {
        $lesson = lesson::where('id', $id)->first();
        $lesson->delete();
        $comment = 'عملیات حذف موفقیت آمیز بود';
        session()->flash('status', $comment);
        return back();
    }
}

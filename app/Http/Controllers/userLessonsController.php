<?php

namespace App\Http\Controllers;

use App\Models\lesson;
use App\Models\profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class userLessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $userLessons = User::findorfail($id);
        $lessons = $userLessons->lesson()->get();
        $lessonable = DB::table('lessonable')->select('id')->get();
        return view('backend.admin.userLessons.index', ['userLessons' => $lessons, 'lessonable' => $lessonable, 'row' => 0, 'teacher_id' => $id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($teacher_id)
    {
        //        get all lessons for select input
        $lessons = ['' => lesson::get()->pluck('title', 'id')];

//        return create view
        return view('backend.admin.userLessons.create' , ['lessons' => $lessons, 'teacher_id' => $teacher_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $teacher_id)
    {
        $user = User::findorfail($teacher_id);
        DB::table('lessonable')->insert([
            'lesson_id' => $request->lessons,
            'lessonable_id' => $teacher_id,
            'lessonable_type' => 'App\User',
            'created_at' => now()
        ]);
        $comment = 'اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('userLessons', $comment);
        return redirect()->route('userLessons.index',$teacher_id);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userLessons = User::findorfail($id);
        return $userLessons;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($lesson_id, $teacher_id)
    {
//        get all lessons for select input
        $lessons = ['' => lesson::get()->pluck('title', 'id')];

//        get data from lessonable morph table
        $lessonable = DB::table('lessonable')->where(['lesson_id' => $lesson_id, 'lessonable_id' => $teacher_id, 'lessonable_type' => 'App\User'])->get();

//        get lesson that id = lessonable table lesson_id
        $userLessons = lesson::where('id', $lessonable->pluck('lesson_id'))->first();

        //        return teacher lessons view page
        return view('backend.admin.userLessons.edit', ['lessonable' => $lessonable, 'userLessons' => $userLessons, 'lessons' => $lessons, 'teacher_id' => $teacher_id, 'lesson_id' => $lesson_id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$lesson_id, $teacher_id)
    {
//        update lesson_id in lessonable table
        DB::table('lessonable')->where(['lesson_id' => $lesson_id, 'lessonable_id' => $teacher_id, 'lessonable_type' => 'App\User'])->update(['lesson_id' => $request->lessons]);

//        set comment
        $comment = 'ویرایش اطلاعات ، بدرستی ذخیره شد. ';

//        set session for comment
        session()->flash('userLessons', $comment);

//        return index view
        return redirect()->route('userLessons.index',$teacher_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($lesson_id, $teacher_id)
    {
//        delete lesson from lessonable table
        DB::table('lessonable')->where(['lesson_id' => $lesson_id, 'lessonable_id' => $teacher_id])->delete();

//        set comment
        $comment = 'عملیات حذف بدرستی انجام شد.';

//        set session
        session()->flash('userLessons', $comment);

//        return back
        return back();
    }
}

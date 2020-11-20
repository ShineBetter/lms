<?php

namespace App\Http\Controllers;

use App\Models\lesson;
use App\Models\level;
use App\Models\profile;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use function Composer\Autoload\includeFile;

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
        if (Gate::allows('Teacher') || Gate::allows('Admin')) {
            $lessons = $userLessons->lesson()->paginate(4);
            $lessonable = DB::table('lessonable')->select('id')->get();
            $title = "لیست دروس استاد";
            $userTitle = "دروس آقا / خانم " . $userLessons->profile()->first()->name . ' ' . $userLessons->profile()->first()->lastName;
            return view('backend.admin.userLessons.index', ['userLessons' => $lessons, 'lessonable' => $lessonable, 'row' => 0, 'user_id' => $id, 'title' => $title, 'userTitle' => $userTitle]);
        } elseif (Gate::allows('Student') || Gate::allows('Parent') || Gate::allows('Admin')) {
            $lessons = $userLessons->lesson()->paginate(4);
            $lessonable = DB::table('lessonable')->select('id')->get();
            $title = "لیست دروس دانش آموز";
            $userTitle = "دروس آقا / خانم " . $userLessons->profile()->first()->name . ' ' . $userLessons->profile()->first()->lastName;
            return view('backend.admin.userLessons.index', ['userLessons' => $lessons, 'lessonable' => $lessonable, 'row' => 0, 'user_id' => $id, 'title' => $title, 'userTitle' => $userTitle]);
        } else {
            return view('webSit.404', ['admin' => true, 'teacher' => true, 'student' => true, 'parent' => true]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id)
    {
        if (Gate::allows('Teacher') || Gate::allows('Admin')) {

//            get user by id
            $user = User::find($user_id);

            //        get all lessons for select input
            $lessons = ['' => lesson::get()->pluck('lesson_title', 'id')];

            $title = "ویرایش درس";
            $userTitle = "افزودن درس به آقا / خانم " . $user->profile()->first()->name . ' ' . $user->profile()->first()->lastName;

//        return create view
            return view('backend.admin.userLessons.create', ['lessons' => $lessons, 'user_id' => $user_id, 'title' => $title, 'userTitle' => $userTitle]);
        } else {
            return view('webSit.404', ['admin' => true, 'teacher' => true, 'student' => false, 'parent' => false]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $user_id)
    {
        if (Gate::allows('Teacher') || Gate::allows('Admin')) {
            $user = User::findorfail($user_id);
            DB::table('lessonable')->insert([
                'lesson_id' => $request->lessons,
                'lessonable_id' => $user_id,
                'lessonable_type' => 'App\User',
                'created_at' => now()
            ]);
            $comment = 'اطلاعات ، بدرستی ذخیره شد. ';
            session()->flash('userLessons', $comment);
            return redirect()->route('userLessons.index', $user_id);
        } else {
            return view('webSit.404', ['admin' => true, 'teacher' => true, 'student' => false, 'parent' => false]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Gate::allows('Admin')) {
            $userLessons = User::findorfail($id);
            return $userLessons;
        } else {
            return view('webSit.404', ['admin' => true, 'teacher' => true, 'student' => true, 'parent' => true]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($lesson_id, $user_id)
    {
        if (Gate::allows('Teacher') || Gate::allows('Admin')) {
            //            get user by id
            $user = User::find($user_id);

//        get all lessons for select input
            $lessons = ['' => lesson::get()->pluck('lesson_title', 'id')];

//        get data from lessonable morph table
            $lessonable = DB::table('lessonable')->where(['lesson_id' => $lesson_id, 'lessonable_id' => $user_id, 'lessonable_type' => 'App\User'])->get();

//        get lesson that id = lessonable table lesson_id
            $userLessons = lesson::where('id', $lessonable->pluck('lesson_id'))->first();

            $title = "افزودن درس";
            $userTitle = "افزودن درس به آقا / خانم " . $user->profile()->first()->name . ' ' . $user->profile()->first()->lastName;

            //        return teacher lessons view page
            return view('backend.admin.userLessons.edit', ['lessonable' => $lessonable, 'userLessons' => $userLessons, 'lessons' => $lessons, 'user_id' => $user_id, 'lesson_id' => $lesson_id,'user_id' => $user_id, 'title' => $title, 'userTitle' => $userTitle]);
        } else{
            return view('webSit.404', ['admin' => true, 'teacher' => true, 'student' => false, 'parent' => false]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $lesson_id, $user_id)
    {
        if (Gate::allows('Teacher') || Gate::allows('Admin')) {
//        update lesson_id in lessonable table
            DB::table('lessonable')->where(['lesson_id' => $lesson_id, 'lessonable_id' => $user_id, 'lessonable_type' => 'App\User'])->update(['lesson_id' => $request->lessons]);

//        set comment
            $comment = 'ویرایش اطلاعات ، بدرستی ذخیره شد. ';

//        set session for comment
            session()->flash('userLessons', $comment);

//        return index view
            return redirect()->route('userLessons.index', $user_id);
        } else{
            return view('webSit.404', ['admin' => true, 'teacher' => true, 'student' => false, 'parent' => false]);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($lesson_id, $user_id)
    {if (Gate::allows('Teacher') || Gate::allows('Admin')) {
//        delete lesson from lessonable table
        DB::table('lessonable')->where(['lesson_id' => $lesson_id, 'lessonable_id' => $user_id])->delete();

//        set comment
        $comment = 'عملیات حذف بدرستی انجام شد.';

//        set session
        session()->flash('userLessons', $comment);

//        return back
        return back();
    } else{
        return view('webSit.404', ['admin' => true, 'teacher' => true, 'student' => false, 'parent' => false]);
    }
    }
}

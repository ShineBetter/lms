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

class userLevelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if (Gate::allows('Teacher') || Gate::allows('Admin')) {
            $userLevels = User::findorfail($id);
            $levels = $userLevels->level()->paginate(4);
            $levelable = DB::table('levelable')->select('id')->get();
            $title = "لیست پایه های استاد";
            $userTitle = "پایه های آقا / خانم " . $userLevels->profile()->first()->name . ' ' . $userLevels->profile()->first()->lastName;
            return view('backend.admin.userLevels.index', ['userLevels' => $levels, 'levelable' => $levelable, 'row' => 0, 'user_id' => $id, 'title' => $title, 'userTitle' => $userTitle]);
        } elseif (Gate::allows('Student') || Gate::allows('Parent') || Gate::allows('Admin')) {
            $userLevels = User::findorfail($id);
            $levels = $userLevels->level()->paginate(4);
            $levels = level::where('id',$levels->pluck('level_id'))->get();
            $levelable = DB::table('levelable')->select('id')->get();
            $title = "لیست پایه های دانش آموز";
            $userTitle = "پایه های آقا / خانم " . $userLevels->profile()->first()->name . ' ' . $userLevels->profile()->first()->lastName;
            return view('backend.admin.userLevels.index', ['userLevels' => $levels,'levels' => $levels, 'levelable' => $levelable, 'row' => 0, 'user_id' => $id, 'title' => $title, 'userTitle' => $userTitle]);
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

            //        get all levels for select input
            $levels = ['' => level::get()->pluck('title', 'id')];

            $title = "ویرایش پایه";
            $userTitle = "افزودن پایه به آقا / خانم " . $user->profile()->first()->name . ' ' . $user->profile()->first()->lastName;

//        return create view
            return view('backend.admin.userLevels.create', ['levels' => $levels, 'user_id' => $user_id, 'title' => $title, 'userTitle' => $userTitle]);
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
            DB::table('levelable')->insert([
                'level_id' => $request->levels,
                'levelable_id' => $user_id,
                'levelable_type' => 'App\User',
                'created_at' => now()
            ]);
            $comment = 'اطلاعات ، به درستی ذخیره شد. ';
            session()->flash('userLevels', $comment);
            return redirect()->route('userLevels.index', $user_id);
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
            $userLevels = User::findorfail($id);
            return $userLevels;
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
    public function edit($level_id, $user_id)
    {
        if (Gate::allows('Teacher') || Gate::allows('Admin')) {
            //            get user by id
            $user = User::find($user_id);

//        get all levels for select input
            $levels = ['' => level::get()->pluck('level_title', 'id')];

//        get data from levelable morph table
            $levelable = DB::table('levelable')->where(['level_id' => $level_id, 'levelable_id' => $user_id, 'levelable_type' => 'App\User'])->get();

//        get level that id = levelable table level_id
            $userLevels = level::where('id', $levelable->pluck('level_id'))->first();

            $title = "افزودن پایه";
            $userTitle = "افزودن پایه به آقا / خانم " . $user->profile()->first()->name . ' ' . $user->profile()->first()->lastName;

            //        return teacher levels view page
            return view('backend.admin.userLevels.edit', ['levelable' => $levelable, 'userLevels' => $userLevels, 'levels' => $levels, 'user_id' => $user_id, 'level_id' => $level_id,'user_id' => $user_id, 'title' => $title, 'userTitle' => $userTitle]);
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
    public function update(Request $request, $level_id, $user_id)
    {
        if (Gate::allows('Teacher') || Gate::allows('Admin')) {
//        update level_id in levelable table
            DB::table('levelable')->where(['level_id' => $level_id, 'levelable_id' => $user_id, 'levelable_type' => 'App\User'])->update(['level_id' => $request->levels]);

//        set comment
            $comment = 'ویرایش اطلاعات ، به درستی ذخیره شد. ';

//        set session for comment
            session()->flash('userLevels', $comment);

//        return index view
            return redirect()->route('userLevels.index', $user_id);
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
    public function destroy($level_id, $user_id)
    {if (Gate::allows('Teacher') || Gate::allows('Admin')) {
//        delete level from levelable table
        DB::table('levelable')->where(['level_id' => $level_id, 'levelable_id' => $user_id])->delete();

//        set comment
        $comment = 'عملیات حذف به درستی انجام شد.';

//        set session
        session()->flash('userLevels', $comment);

//        return back
        return back();
    } else{
        return view('webSit.404', ['admin' => true, 'teacher' => true, 'student' => false, 'parent' => false]);
    }
    }
}

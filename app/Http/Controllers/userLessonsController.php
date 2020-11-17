<?php

namespace App\Http\Controllers;

use App\Models\lesson;
use App\Models\profile;
use App\User;
use Illuminate\Http\Request;

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
        return view('backend.admin.userLessons.index', ['userLessons' => $lessons, 'row' => 0]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.userLessons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $user = User::findorfail($id);
        $userLessons = new lesson();
        $userLessons->title = $request->title;
        $userLessons->lessonable_id = $user->id;
        $userLessons->lessonable_type = get_class($user);
        $userLessons->save();
        $comment = 'اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('userLessons', $comment);
        return redirect()->route('userLessons.index');
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
    public function edit($id)
    {
        $lessons = ['' => lesson::get()->pluck('title','id')];
        $userLessons = lesson::find($id);
        return view('backend.admin.userLessons.edit', ['userLessons' => $userLessons, 'lessons' => $lessons]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findorfail($id);
        $userLessons = $user->lesson()->get();
        $userLessons->user_role = 'userLessons';
        $userLessons->profile()->save($profile);
        $comment = 'ویرایش اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('userLessons', $comment);
        return redirect()->route('userLessons.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userLessons = User::where('id', $id)->first();
        $userLessons->delete();
        $comment = 'عملیات حذف بدرستی انجام شد.';
        session()->flash('userLessons', $comment);
        return back();
    }
}

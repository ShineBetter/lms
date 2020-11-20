<?php

namespace App\Http\Controllers;

use App\Models\lesson;
use App\Models\teacher;
use App\Models\profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class teacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher = User::where('user_role','teacher')->paginate(4);
        return view('backend.admin.teacher.index', ['teacher' => $teacher, 'row' => 0]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher = new User();
        $profile = new profile();
        $teacher->user_role = 'teacher';
        $teacher->email = $request->email;
        $teacher->save();
        $profile->name = $request->name;
        $profile->lastName = $request->lastName;
        $profile->nationalNumber = $request->nationalNumber;
        $profile->phone = $request->phone;
        $profile->mobile = $request->mobile;
        $profile->date_of_birth = $request->date_of_birth;
        $profile->address = $request->address;
        $profile->photo = $request->photo;
        $teacher->profile()->attach($profile);
        $comment = 'اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('teacher', $comment);
        return redirect()->route('teacher.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = User::findorfail($id);
        return $teacher;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = User::findorfail($id);
        $profile = profile::where('user_id','=',$id)->firstorfail();
        return view('backend.admin.teacher.edit', ['teacher'=>$teacher,'profile'=>$profile]);
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
        $teacher = User::where('id',$id)->first();
        $profile = profile::where('user_id',$id)->first();
        $teacher->user_role = 'teacher';
        $teacher->email = $request->email;
        $teacher->save();
        $profile->name = $request->name;
        $profile->lastName = $request->lastName;
        $profile->nationalNumber = $request->nationalNumber;
        $profile->phone = $request->phone;
        $profile->mobile = $request->mobile;
        $profile->date_of_birth = $request->date_of_birth;
        $profile->address = $request->address;
        $profile->photo = $request->photo;
        $teacher->profile()->save($profile);
        $comment = 'ویرایش اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('teacher', $comment);
        return redirect()->route('teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = User::where('id',$id)->first();
        $teacher->delete();
        $comment = 'عملیات حذف بدرستی انجام شد.';
        session()->flash('teacher', $comment);
        return back();
    }

    public function lessons($id)
    {
        $lesson = User::find($id);

    }
    public function cr($id)
    {
        $user = User::find($id);
        $mk = DB::table('levelable')->insert([
            'level_id' => 2,
            'levelable_id' => $user->id,
            'levelable_type' => get_class($user),
        ]);

//        $mks = lesson::create([
//            'title' => 'درس یک',
//            'level_id' => 1,
//        ]);

        dd($user->lesson());
    }
}

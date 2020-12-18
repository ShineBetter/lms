<?php

namespace App\Http\Controllers;

use App\Http\Requests\createUserRequest;
use App\Http\Requests\editUserRequest;
use App\Models\lesson;
use App\Models\teacher;
use App\Models\profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class teacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::where('user_role', 'teacher')->paginate(10);
        return view('backend.admin.teacher.index', ['data' => $data]);
    }

    public function setWarn(Request $request, $id, $text)
    {
        if ($request->ajax()) {
        $user = User::where('id', $id)->first();
        $user->warn = 1;
        $user->warn_text = $text;
        $user->save();
        }
    }

    public function kick(Request $request,$id,$status)
    {
        if ($request->ajax()) {
            $user = User::where('id', $id)->first();

            if ($status == 'kick') {
                $user->kick = 1;
            }
            elseif ($status == 'back'){
                $user->kick = 0;
            }
            $user->save();
        }
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
    public function store(createUserRequest $request)
    {
        $teacher = new User();
        $profile = new profile();
        $teacher->user_role = 'teacher';
        $teacher->email = $request->email;
        $teacher->pid = 0;
        if ($teacher->save()) {
            $profile->name = $request->name;
            $profile->lastName = $request->lastName;
            $profile->nationalNumber = $request->nationalNumber;
            $profile->phone = $request->phone;
            $profile->mobile = $request->mobile;
            $profile->date_of_birth = $request->date_of_birth;
            $profile->address = $request->address;
            $profile->photo = $request->photo;
            $teacher->profile()->save($profile);
            $comment = 'اطلاعات ، بدرستی ذخیره شد. ';
            session()->flash('status', $comment);
            return redirect()->route('teacher.index');
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
        $data = User::findorfail($id);
        $profile = profile::where('user_id', '=', $id)->firstorfail();
        return view('backend.admin.teacher.edit', ['data' => $data, 'profile' => $profile]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(editUserRequest $request, $id)
    {
        $rules = [
            'email' => [
                'nullable',
                'string',
                'email',
                Rule::unique('users', 'email')->ignore($id),
            ],
        ];
        $message = [
            'email.unique' => 'آدرس ایمیل شما تکراری است',
        ];
        $this->validate($request, $rules, $message);
        $teacher = User::where('id', $id)->first();
        $profile = profile::where('user_id', $id)->first();
        $teacher->user_role = 'teacher';
        $teacher->email = $request->email;
        $teacher->pid = 0;
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
        session()->flash('status', $comment);
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
        $teacher = User::where('id', $id)->first();
        $teacher->delete();
        $comment = 'عملیات حذف بدرستی انجام شد.';
        session()->flash('status', $comment);
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\profile;
use App\User;
use Illuminate\Http\Request;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $student = User::where('user_role', 'student')->paginate(4);
        $row = 0;
            return view('backend.admin.student.index', compact(['student', 'row']))->render();

    }

    public function fetch(Request $request)
    {
        if ($request->ajax()) {
            $student = User::where('user_role', 'student')->paginate(4);
            $row = 0;
            return view('backend.admin.student.students', compact(['student', 'row']))->render();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new User();
        $profile = new profile();
        $student->user_role = 'student';
        $student->email = $request->email;
        $student->save();
        $student->profile()->insert([
            'user_id' => $student->id,
            'name' => $request->name,
            'lastName' => $request->lastName,
            'nationalNumber' => $request->nationalNumber,
            'phone' => $request->phone,
            'mobile' => $request->mobile,
            'date_of_birth' => $request->date_of_birth,
            'address' => $request->address,
            'photo' => $request->photo
        ]);
        $comment = 'اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('student', $comment);
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = User::findorfail($id);
        return $student;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = User::findorfail($id);
        $profile = profile::where('user_id', '=', $id)->firstorfail();
        return view('backend.admin.student.edit', ['student' => $student, 'profile' => $profile]);
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
        $student = User::where('id', $id)->first();
        $profile = profile::where('user_id', $id)->first();
        $student->user_role = 'student';
        $student->email = $request->email;
        $student->save();
        $profile->name = $request->name;
        $profile->lastName = $request->lastName;
        $profile->nationalNumber = $request->nationalNumber;
        $profile->phone = $request->phone;
        $profile->mobile = $request->mobile;
        $profile->date_of_birth = $request->date_of_birth;
        $profile->address = $request->address;
        $profile->photo = $request->photo;
        $student->profile()->save($profile);
        $comment = 'ویرایش اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('student', $comment);
//        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = User::where('id', $id)->first();
        $student->delete();
        $comment = 'عملیات حذف بدرستی انجام شد.';
        session()->flash('student', $comment);
        return back();
    }
}

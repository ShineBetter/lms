<?php

namespace App\Http\Controllers;

use App\Http\Requests\createUserRequest;
use App\Http\Requests\editUserRequest;
use App\Models\student;
use App\Models\profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function fetch(Request $request)
//    {
//        if ($request->ajax()) {
//            $data = User::where('user_role', 'student')->paginate(10);
//            return view('backend.admin.level.index', ['data' => $data])->render();
//        }
//    }

    public function index()
    {
        $data = User::where('user_role', 'student')->paginate(10);
        return view('backend.admin.student.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::where('user_role', 'parent')->pluck('id');
        return view('backend.admin.student.create',['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(createUserRequest $request)
    {
        $student = new User();
        $profile = new profile();
        $student->user_role = 'student';
        $student->email = $request->email;
        $student->password = Hash::make($request->password);
        $student->pid = $request->pid;
        $student->save();
        $profile->name = $request->name;
        $profile->lastName = $request->lastName;
        $profile->mobile = $request->mobile;
        $profile->phone = $request->phone;
        $profile->nationalNumber = $request->nationalNumber;
        $profile->date_of_birth = $request->date_of_birth;
        $file = $request->file('photo');
        if(!empty($file)){
            $file_name = 'images/profile-image/profile-photo-'. time() . '.' . $file->getClientOriginalName();

            Image::make($file->getRealPath())->resize(100,100)->save($file_name);
            $profile->photo = $file_name;
        }
        $profile->address = $request->address;
        $student->profile()->save($profile);
        $comment = 'اطلاعات، بدرستی ذخیره شد';
        session()->flash('status', $comment);
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
        $data = User::findorfail($id);
        return view('backend.admin.parents.edit', ['data' => $data]);
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
        $parents = User::where('id', $id)->first();
        $profile = profile::where('user_id', $id)->first();
        $parents->user_role = 'parent';
        $parents->email = $request->email;
        $parents->save();
        $profile->name = $request->name;
        $profile->lastName = $request->lastName;
        $profile->nationalNumber = $request->nationalNumber;
        $profile->phone = $request->phone;
        $profile->mobile = $request->mobile;
        $profile->date_of_birth = $request->date_of_birth;
        $profile->address = $request->address;
        $profile->photo = $request->photo;
        $parents->profile()->save($profile);
        $comment = 'ویرایش اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('parents', $comment);
        return redirect()->route('parent.index');
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

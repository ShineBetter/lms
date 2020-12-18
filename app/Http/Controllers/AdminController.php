<?php

namespace App\Http\Controllers;

use App\Http\Requests\createUserRequest;
use App\Http\Requests\editUserRequest;
use App\Models\admin;
use App\Models\profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::where('user_role', 'admin')->where('id', '!=', auth()->id())->paginate(10);
        return view('backend.admin.admin.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(createUserRequest $request)
    {
        $admin = new User();
        $profile = new profile();
        $admin->user_role = 'admin';
        $admin->email = $request->email;
        $admin->pid = 0;
        if ($admin->save()) {
            $profile->name = $request->name;
            $profile->lastName = $request->lastName;
            $profile->nationalNumber = $request->nationalNumber;
            $profile->phone = $request->phone;
            $profile->mobile = $request->mobile;
            $profile->date_of_birth = $request->date_of_birth;
            $profile->address = $request->address;
            $profile->photo = $request->photo;
            $admin->profile()->save($profile);
            $comment = 'اطلاعات ، بدرستی ذخیره شد. ';
            session()->flash('status', $comment);
            return redirect()->route('admin.index');
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
        $admin = User::findorfail($id);
        return $admin;
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
        return view('backend.admin.admin.edit', ['data' => $data, 'profile' => $profile]);
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
                Rule::unique('users','email')->ignore($id),
            ],
        ];
        $message = [
            'email.unique' => 'آدرس ایمیل شما تکراری است',
        ];
        $this->validate($request, $rules, $message);
        $admin = User::where('id', $id)->first();
        $profile = profile::where('user_id', $id)->first();
        $admin->user_role = 'admin';
        $admin->email = $request->email;
        $admin->save();
        $profile->name = $request->name;
        $profile->lastName = $request->lastName;
        $profile->nationalNumber = $request->nationalNumber;
        $profile->phone = $request->phone;
        $profile->mobile = $request->mobile;
        $profile->date_of_birth = $request->date_of_birth;
        $profile->address = $request->address;
        $profile->photo = $request->photo;
        $admin->profile()->save($profile);
        $comment = 'ویرایش اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('status', $comment);
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = User::where('id', $id)->first();
        $admin->delete();
        $comment = 'عملیات حذف بدرستی انجام شد.';
        session()->flash('status', $comment);
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\createUserRequest;
use App\Http\Requests\editUserRequest;
use App\Models\parents;
use App\Models\profile;
use App\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class ParentsController extends Controller
{

    public function index()
    {
        $data = User::where('user_role', 'parent')->paginate(10);
        return view('backend.admin.parents.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.parents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(createUserRequest $request)
    {
        $parents = new User();
        $profile = new profile();
        $parents->user_role = 'parent';
        $parents->email = $request->email;
        $parents->password = Hash::make($request->password);
        $parents->pid = 0;
        $parents->save();
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
        $parents->profile()->save($profile);
        $comment = 'اطلاعات، بدرستی ذخیره شد';
        session()->flash('status', $comment);
        return redirect()->route('parent.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parents = User::findorfail($id);
        return $parents;
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
        $this->validate($request,$rules,$message);
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
        $parents = User::where('id', $id)->first();
        DB::table('users')->where('pid','=',$parents->id)->update(['pid' => 0]);
        $parents->delete();
        $comment = 'عملیات حذف بدرستی انجام شد.';
        session()->flash('parents', $comment);
        return back();
    }
}

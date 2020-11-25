<?php

namespace App\Http\Controllers;

use App\Models\parents;
use App\Models\profile;
use App\User;
use Illuminate\Http\Request;

class ParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parents = User::where('user_role','parent')->paginate(4);
        $table = [
            //table th
            'th' => [
                'ردیف',
                'نام',
                'نام خانوادگی',
                'کد ملی',
                '',
                'نام',
                'عملیات',
            ],

            //table tbody
            'tbody' => [
                'td' => [

                    //table td items
                    'row' => [
                        'row' => 0,
                    ],
                    'level_title' => [
                        'level_title' => 'level_title',
                    ],
                ],
            ],
            'data' => $data,

            //what table can do?
            'do' => [
                //enable or disable do
                'status' => true,
                //enable or disable add button
                'add' => true,
                //enable or disable edit button
                'edit' => true,
                //enable or disable delete button
                'delete' => true,
            ],
            //add button action
            'action' => 'level'
        ];
        return view('backend.admin.parents.index', ['parents' => $parents, 'row' => 0]);
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
    public function store(Request $request)
    {
        $parents = new User();
        $profile = new profile();
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
        $comment = 'اطلاعات ، بدرستی ذخیره شد. ';
        session()->flash('parents', $comment);
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
        $parents = User::findorfail($id);
        $profile = profile::where('user_id','=',$id)->firstorfail();
        return view('backend.admin.parents.edit', ['parents'=>$parents,'profile'=>$profile]);
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
        $parents = User::where('id',$id)->first();
        $profile = profile::where('user_id',$id)->first();
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
        $parents = User::where('id',$id)->first();
        $parents->delete();
        $comment = 'عملیات حذف بدرستی انجام شد.';
        session()->flash('parents', $comment);
        return back();
    }
}
